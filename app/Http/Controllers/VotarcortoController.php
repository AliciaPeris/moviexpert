<?php

namespace moviexpert\Http\Controllers;

use Illuminate\Http\Request;

use moviexpert\Http\Requests;
use moviexpert\Http\Controllers\Controller;
use DB;
use Session;

class VotarcortoController extends Controller
{
    //
    public function store(Request $request){
      \moviexpert\votosconcurso::create([
       /*Nombre campo base datos => nombre del campo del formulario*/
       'idcortoconcurso'=> $request['idconcurso'],
       'idusuario'=>$request['idusuario'],
       'voto'=> $request['voto'],
       'fechavoto'=> $request['fechavoto'],
       'descripcion'=> $request['descripcion'],
       'corto'=> $request['corto'],
     ]);
      /* Redireccionamos a la ruta del index y indicamos que muestre un mensaje*/
      return redirect('/concursos');
    }
    public static function usuariovoto($idcortoconcurso,$idusuario){
      $numvotos= DB::table('votosconcursos')
            ->where([
                    ['idusuario', '=', $idusuario],
                    ['idcortoconcurso', '=', $idcortoconcurso],
                ])
            ->count();
      return $numvotos;
    }
}
