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

    /*Retornamos a la vista user carpeta index vista y le pasamos la variable con los datos*/
     $generos=\moviexpert\Admingenero::lists('genero','id');
     return view('frontend.ficha',compact('pelicula'))->with("generos",$generos);
  }
  public function criticas($id){
    $peliculas=\moviexpert\Adminpelicula::find($id);
    return view("frontend.criticas",compact('peliculas'));
  }
  public function trailer($id){
    $pelicula=\moviexpert\Adminpelicula::find($id);
    return view('frontend.trailer',compact('pelicula'));

  }

  public function concursos(){
    $concursos=\moviexpert\AdminConcurso::All();
    return view("frontend.concursos",compact('concursos'));
  }
  public function participanconcurso($id){
    $concursos = \moviexpert\AdminConcurso::find($id);
    return view('inscripcionconcurso.create',['concurso'=>$concursos]);
  }
  public static function votos($id){
    $votos= DB::select('select sum(voto) as suma,idcortoconcurso from votosconcursos where idcortoconcurso IN (select id from participanconcursos where idconcurso=:id) GROUP BY idcortoconcurso ORDER BY suma DESC LIMIT 1', ['id' => $id]);
    return $votos;
  }
  public static function nombreganador($idcorto){
    $nombre= DB::select('select nombre,apellidos from users where id=(select idusuario from participanconcursos where id=:id)', ['id' => $idcorto]);
    return $nombre;
  }
  public function chat(){
    $chats=\moviexpert\Adminchat::All();
    return view("frontend.chat",compact('chats'));
  }


}
