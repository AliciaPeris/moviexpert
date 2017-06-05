<?php

namespace moviexpert\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use moviexpert\Http\Requests;
use moviexpert\Http\Controllers\Controller;

class FrontendController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
  public function index(){
    $peliculas=\moviexpert\Adminpelicula::All();
    return view("frontend.index",compact('peliculas'));
  }
  public static function estrenos(){
    $estreno=DB::select('select * from adminpeliculas where anio= :anio',['anio'=>2012]);
    return $estreno;
  }
  public function peliculas(){
    $peliculas=\moviexpert\Adminpelicula::All();
    return view("frontend.peliculas",compact('peliculas'));
  }
  public function ficha($id){
    $pelicula=\moviexpert\Adminpelicula::find($id);
    return view("frontend.ficha",compact('pelicula'));
  }
  public function criticas($id){
    $peliculas=\moviexpert\Adminpelicula::find($id);
    return view("frontend.criticas",compact('peliculas'));
  }
  public function concursos(){
    $concursos=\moviexpert\AdminConcurso::All();
    return view("frontend.concursos",compact('concursos'));
  }
  public function participanconcurso($id){
    $concursos = \moviexpert\AdminConcurso::find($id);
    return view('inscripcionconcurso.create',['concurso'=>$concursos]);
  }
  public function chat(){
    $chats=\moviexpert\Adminchat::All();
    return view("frontend.chat",compact('chats'));
  }
}
