<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CityController extends Controller
{
    //
    public function index(Request $request,$id){
        $age = $request->get($id);
        dd($age);
    }
}
