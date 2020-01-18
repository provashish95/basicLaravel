<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
   public function userController(Request $req){
//       $req->validate([
//          'password'=>'required|password',
//           'name'=>'required|max:10'
//       ]);
//       print_r($req->input());

       //SESSION METHOD HERE..........
       $req->session()->put('info', $req->input());
       $info = $req->session()->get('info');
//       print_r($info['name']);

       if ($info['name']=='roy'){
           return redirect('/');
       }else{
           return redirect('/user');
       }
   }
}
