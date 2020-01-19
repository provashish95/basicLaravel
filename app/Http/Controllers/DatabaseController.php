<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class DatabaseController extends Controller
{
    public  function  index(){
//        return User::all();
        return User::all();
    }
}
