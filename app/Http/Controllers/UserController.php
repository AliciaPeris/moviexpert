<?php

namespace moviexpert\Http\Controllers;

use Illuminate\Http\Request;

use moviexpert\Http\Requests;
use moviexpert\Http\Controllers\Controller;

class UserController extends Controller
{
    //
    public function index(){
         $users=\moviexpert\User::All();
          return view('user.index',compact('users'));
    }
    public function create(){
          return view('user.create');
    }
    public function store(Request $request){
        \moviexpert\User::create([
          'email'=> $request['email'],
          'password'=> bcrypt($request['password']),
          'nombre'=> $request['nombre'],
          'apellidos'=> $request['apellidos'],
          'direccion'=> $request['direccion'],
          'localidad'=> $request['localidad'],
          'genero'=> $request['genero'],
          'fechanacimiento'=> $request['fechanacimiento'],
          'foto'=> $request['imagen'],
          'tipousuario'=> $request['tipousuario'],
        ]);
        return "usuario registrado";
    }
    public function show($id){

    }
    public function edit($id){

    }
    public function update($id){

    }
    public function destroy($id){

    }
}
