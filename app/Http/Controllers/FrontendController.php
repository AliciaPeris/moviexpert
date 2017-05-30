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

  public function chat(){
    return view("frontend.chat");
  }
}
