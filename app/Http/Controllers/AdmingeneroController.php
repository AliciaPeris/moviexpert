<?php

namespace moviexpert\Http\Controllers;

use Illuminate\Http\Request;
use moviexpert\Http\Requests;
use moviexpert\Http\Controllers\Controller;
use Session;
use Redirect;
use Illuminate\Routing\Route;
use moviexpert\Admingenero;

class AdmingeneroController extends Controller
{
    //
    public function index(){
      /*Creamos una variable para almacenar todos los datos de la base de datos*/
         $generos=\moviexpert\Admingenero::All();
         /*Retornamos a la vista user carpeta index vista y le pasamos la variable con los datos*/
          return view('generos.index',compact('generos'));

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
