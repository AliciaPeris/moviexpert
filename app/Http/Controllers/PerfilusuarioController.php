<?php

namespace moviexpert\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use moviexpert\Http\Requests;
use moviexpert\Http\Controllers\Controller;

class PerfilusuarioController extends Controller
{
    public function edit($id){
    //  $id=Auth::user()->id;
      $datosUsuario = \moviexpert\User::find($id);
      return view('perfilusuario.edit',compact('datosUsuario'));
    }
    public function update(Request $request, $id){
            $usuario=\moviexpert\User::find($id);
            $usuario->fill($request->all());
            $usuario->save();
            return redirect('/');
    }
}
