<?php

namespace moviexpert\Http\Controllers;

use Illuminate\Http\Request;

use moviexpert\Http\Requests;
use moviexpert\Http\Controllers\Controller;

class InscripcionconcursoController extends Controller
{
    //
    public function index(){
    }
    public function create(){
      $id=3;
      /*Retornanmos a la vista create*/
          $concursos = \moviexpert\AdminConcurso::find($id);
          return view('inscripcionconcurso.create',['concurso'=>$concursos]);
    }

    public function store(Request $request){
      \moviexpert\participanconcurso::create([
       /*Nombre campo base datos => nombre del campo del formulario*/
       'idconcurso'=> $request['idconcurso'],
       'idusuario'=>$request['idusuario'],
       'otrosparticipantes'=> $request['otrosparticipantes'],
       'titulo'=> $request['titulo'],
       'descripcion'=> $request['descripcion'],
       'corto'=> $request['corto'],
     ]);
      /* Redireccionamos a la ruta del index y indicamos que muestre un mensaje*/
      return redirect('/concursos');
    }
    public function show($id){

    }
    public function edit($id){
    }
    public function update(Request $request,$id){

    }
    public function destroy($id){
    }
}
