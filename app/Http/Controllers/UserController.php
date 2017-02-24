<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    //
    public function getAdduser(){
      return view('show.add');
    }

    public function postAdduser(Request $request){
      return \Response::json(['age'=>$request->input('age'),'name'=>$request->input('name')]);
    }
}
