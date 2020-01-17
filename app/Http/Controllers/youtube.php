<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class youtube extends Controller
{
    public function index(Request $r){
        //print_r($request->input('search'));
//        echo $r->fullurl();
        //echo $r->method();
        print_r($r->query());
//        if (!$r->isMethod('GET')){
//            echo "this is get method";
//        }else{
//            echo 'this is not get method';
//        }

    }
}
