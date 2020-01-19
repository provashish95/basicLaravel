<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class companies extends Controller
{
    public  function  list(){
        $data = DB::table('company')->paginate(4);
        return view('companies', ['data'=>$data]);
    }
}
