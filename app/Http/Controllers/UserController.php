<?php

namespace moviexpert\Http\Controllers;

use Illuminate\Http\Request;
use moviexpert\Http\Requests;
use moviexpert\Http\Requests\UserCreateRequest;
use moviexpert\Http\Requests\UserUpdateRequest;
use moviexpert\Http\Controllers\Controller;
use Session;
use Redirect;
use Illuminate\Routing\Route;
use moviexpert\User;
use DB;
class UserController extends Controller
{
    //
    public function index(){
      /*Creamos una variable para almacenar todos los datos de la base de datos*/
         $users=DB::table('users')->paginate(2);

         /*Retornamos a la vista user carpeta index vista y le pasamos la variable con los datos*/
          return view('user.index',compact('users'));
    }
    public function create(){
      /*Retirnanmos a la vista create*/
          return view('user.create');
    }
    public function store(UserCreateRequest $request){
      /*Esta funcion se ejecuta al pulsar el boton registrar del create y lo que haces dar de alta a un nuevo usuario
      en la base de datos*/
        \moviexpert\User::create([
          /*Nombre campo base datos => nombre del campo del formulario*/
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
        /* Redireccionamos a la ruta del index y indicamos que muestre un mensaje*/
        return redirect('/adminusuarios')->with('message','store');
    }
    public function show($id){

    }
    public function edit($id){
        $users = User::find($id);
        return view('user.edit',['user'=>$users]);

    }
    public function update(UserUpdateRequest $request,$id){
        $user = User::find($id);
        $user->fill($request->all());
        $user->save();
        Session::flash('message','Usuario Actualizado Correctamente');
        return Redirect::to('/adminusuarios');

    }
    public function destroy($id){
        \moviexpert\User::destroy($id);
        Session::flash('message','Usuario Eliminado Correctamente');
        return redirect::to('/adminusuarios');
    }

}
