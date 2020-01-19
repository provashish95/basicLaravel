<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;

class UserController extends Controller
{
//   public function userController(Request $req){
//       $req->validate([
//          'password'=>'required|password',
//           'name'=>'required|max:10'
//       ]);
//       print_r($req->input());

                  //SESSION METHOD HERE..........
//       $req->session()->put('info', $req->input());
//       $info = $req->session()->get('info');
//       print_r($info['name']);

//       if ($info['name']=='roy'){
//           return redirect('/');
//       }else{
//           return redirect('/user');
//       }
                  //SESSION METHOD HERE..........
                  //SESSION flash METHOD HERE..........
//       $req->session()->flash('data', 'Data will be submitted');
//       return redirect('/welcome');
                   //SESSION flash METHOD HERE..........
//   }

//       public  function userController(){
//           $user = DB::select("select * from tbl_user where name = 'nisha roy'");
//          $user = DB::table('tbl_user')->sum('id');
//                  ->insert([
//                     'name'=>'provashish roy',
//                     'address'=>'dhaka',
//                      'age'=>'24'
//                  ]);

//           ->where('name','provashish roy')
//              ->update([
//                 'address'=>'Rajshahi'
//              ]);
           //Here is join query in database
//           return $user = DB::table('tbl_user')
//               ->select('company.name','tbl_user.address')
//               ->join('company','tbl_user.id','company.user_id')
//               ->where('company.name', 'waltone')
//               ->get();

//           print_r($user);

//       }
         public function index(){
             $data = ['name'=>'suvo', 'address'=>'dhaka', 'age'=>'23'];
         return view('user',['data'=>$data]);
}

}
