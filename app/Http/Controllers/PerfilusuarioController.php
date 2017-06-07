<?php

namespace moviexpert\Http\Controllers;

use Illuminate\Http\Request;

use moviexpert\Http\Requests;
use moviexpert\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PerfilusuarioController extends Controller
{
    public function index(){
      return redirect('perfilusuario/edit');
    }
    public function show(){
     $user=Auth::user();
     return view("perfilusuario.edit",compact('user'));


   }


    public function update(Request $request){
      $user=\moviexpert\User::find(Auth::user()['id']);
      if($request['password']!=""){
          $request['password']=bcrypt($request['password']);
      }else{
        $request['password']=Auth::user()['password'];
      }
      $user->fill($request->all());
      $user->save();
      return redirect('/');
    }
    public function confirmdelete(){

    }
}
