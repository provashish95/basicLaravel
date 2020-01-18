<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
   public function userController(Request $req){
       $req->validate([
          'email'=>'required|email',
           'name'=>'required|max:5'
       ]);
       print_r($req->input());
   }
}
