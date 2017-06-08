<?php

namespace moviexpert\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use moviexpert\Http\Requests;
use moviexpert\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;



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
    $criticas=\moviexpert\Criticapeliculas::findByPeli($id);
    $usuarios=\moviexpert\User::lists('nombre','id');
    return view("frontend.criticas",compact('peliculas'))->with("criticas",$criticas)->with("usuarios",$usuarios);
  }
  public function procesarCriticas(Request $request){
    \moviexpert\CriticaPeliculas::create([
    'idpelicula'=> $request['idpelicula'],
    'idusuario'=> $request['idusuario'],
    'critica'=> $request['critica'],
    'fechavoto'=> date('Y-m-d H:i:s')]);
    return redirect("/criticas/".$request['idpelicula']);
  }
  public function eliminarCritica($idc,$idp,$idu){
    if(Auth::user()->tipousuario=="admin" || Auth::user()->id==$idu){
      \moviexpert\CriticaPeliculas::destroy($idc);
    }
    return redirect("/criticas/".$idp);
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
  public function chat(){
    $chats=\moviexpert\Adminchat::All();
    return view("frontend.chat",compact('chats'));
  }


}
