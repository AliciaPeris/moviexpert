<?php

namespace moviexpert\Http\Controllers;

use Illuminate\Http\Request;

use moviexpert\Http\Requests;
use moviexpert\Http\Controllers\Controller;

class FrontendController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
  public function index(){
    return view("frontend.index");
  }
  public function peliculas(){
    return view("frontend.peliculas");
  }
  public function concursos(){
    $concursos=\moviexpert\AdminConcurso::All();
    return view("frontend.concursos",compact('concursos'));
  }
  public function participanconcurso($id){
    $concursos = \moviexpert\AdminConcurso::find($id);
    return view('frontend.participanconcurso',['concurso'=>$concursos]);
  }
  public function altaparticipante(Request $request){
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
    return redirect('/adminconcurso')->with('message','store');
  }
  public function chat(){
    return view("frontend.chat");
  }
}
