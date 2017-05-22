<?php

namespace moviexpert\Http\Controllers;

use Illuminate\Http\Request;
use moviexpert\Http\Requests;
use moviexpert\Http\Controllers\Controller;
use Session;
use Redirect;
use Illuminate\Routing\Route;
use moviexpert\Adminconcurso;

class AdminconcursoController extends Controller
{
    //
    public function index(){
      /*Creamos una variable para almacenar todos los datos de la base de datos*/
         $concursos=\moviexpert\Adminconcurso::All();
         /*Retornamos a la vista user carpeta index vista y le pasamos la variable con los datos*/
          return view('concursos.index',compact('concursos'));
    }
    public function create(){
      /*Retornanmos a la vista create*/
          return view('concursos.create');
    }

    public function store(Request $request){
       \moviexpert\Adminconcurso::create([
        /*Nombre campo base datos => nombre del campo del formulario*/
        'nombre'=> $request['nombre'],
        'descripcion'=>$request['descripcion'],
        'fechainicioinscripcion'=> $request['fechainicioinscripcion'],
        'fechafininscripcion'=> $request['fechafininscripcion'],
        'fechafinconcurso'=> $request['fechafinconcurso'],
      ]);
      /* Redireccionamos a la ruta del index y indicamos que muestre un mensaje*/
      return redirect('/adminconcurso')->with('message','store');
    }
    public function show($id){

    }
    public function edit($id){
      $concursos = Adminconcurso::find($id);
      return view('concursos.edit',['concurso'=>$concursos]);
    }
    public function update(Request $request,$id){
      $concursos = Adminconcurso::find($id);
      $concursos->fill($request->all());
      $concursos->save();
      Session::flash('message','concursos Actualizado Correctamente');
      return Redirect::to('/adminconcurso');
    }
    public function destroy($id){
      \moviexpert\Adminconcurso::destroy($id);
      Session::flash('message','Concurso Eliminado Correctamente');
      return redirect::to('/adminconcurso');

    }
}
