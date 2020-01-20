<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index(Request $request){
        echo User::where('name', $request->name)
             ->update(['address'=>$request->address]);
//         print_r($request->input());
    }
}
