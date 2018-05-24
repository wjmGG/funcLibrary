<?php

namespace App\Http\Controllers;

use App\TestUser;
use Illuminate\Http\Request;

class TestController extends Controller{

    public  function index(Request $request){
        $res = $request->get('id',null);
        $res = $request->input('id',null);
        $a = "1";
        $b = (int) $a;
        var_dump($a);
    }
}
