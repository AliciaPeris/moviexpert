<?php

namespace moviexpert\Http\Controllers;

use Illuminate\Http\Request;

use moviexpert\Http\Requests;

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

    }
    public function store(){

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
