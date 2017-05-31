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
    $peliculas=\moviexpert\AdminPelicula::All();
    return view("frontend.index",compact('peliculas'));
  }
  public function participanconcurso($id){
    $concursos = \moviexpert\AdminConcurso::find($id);
    return view('frontend.participanconcurso',['concurso'=>$concursos]);
  }
  public function ficha($id){
    $pelicula=\moviexpert\AdminPelicula::find($id);
    return view("frontend.ficha",compact('pelicula'));
  }
  public function concursos(){
    $concursos=\moviexpert\AdminConcurso::All();
    return view("frontend.concursos",compact('concursos'));
  }
  public function chat(){
    return view("frontend.chat");
  }
}
