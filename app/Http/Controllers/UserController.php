<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
   public function userController(Request $req){
       print_r($req->input('name'));
   }
}
