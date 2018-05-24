<?php

namespace App\Http\Controllers\Files;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\JsonResponse|\Illuminate\View\View
     * 文件上传
     */
    public function index(Request $request){
        if ($request->isMethod('post')){
            $file = $request->file('source');
            //判断文件是否上传成功
            if ($file->isValid()){
                //原文件名
                $fileOriginaName = $file->getClientOriginalName();
                //文件扩展名
                $fileExt = $file->getClientOriginalExtension();
                //文件mimeType
                $fileMimeType = $file->getClientMimeType();
                //文件绝对路径
                $fileRealPath = $file->getRealPath();
                //设置上传后文件名名字
                $fileName = date('YmdHis') . '_' . uniqid() . '.' . $fileExt;

                $res = Storage::disk('uploads')->put($fileName,file_get_contents($fileRealPath));
                if ($res){
                    return response()->json(['status' => 1,'data' => 'success']);
                }else{
                    return response()->json(['status' => 0,'data' => 'error']);
                }
            }
        }

        return view('Files.upload');
    }
}
