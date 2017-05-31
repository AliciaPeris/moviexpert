<?php

namespace moviexpert\Http\Controllers;

use Illuminate\Http\Request;

use moviexpert\Http\Requests;
use moviexpert\Http\Controllers\Controller;

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
}
