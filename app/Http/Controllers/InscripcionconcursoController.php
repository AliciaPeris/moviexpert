<?php

namespace moviexpert\Http\Controllers;

use Illuminate\Http\Request;

use moviexpert\Http\Requests;
use moviexpert\Http\Controllers\Controller;
use DB;
use Session;


class InscripcionconcursoController extends Controller
{
    //
    public function index(){

    }
    public function create(){
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
      $concursos=$concursos = \moviexpert\AdminConcurso::find($id);
      $inscripcion = DB::table('participanconcursos')
            ->join('adminconcursos', 'adminconcursos.id', '=', 'participanconcursos.idconcurso')
            ->select('participanconcursos.*' )
            ->where('participanconcursos.idconcurso',$id)
            ->get();
            return view('inscripcionconcurso.show',compact('concursos','inscripcion'));
    }
    public static function existeusuario($idusuario,$idconcurso){
      $numvotos= DB::table('participanconcursos')
      ->where([
              ['idusuario', '=', $idusuario],
              ['idconcurso', '=', $idconcurso],
          ])
      ->count();
      return $numvotos;
    }
    public function edit($id){

    }
    public function update(Request $request,$id){

    }
    public function destroy($id){
    }
}
