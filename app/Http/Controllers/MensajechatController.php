<?php

namespace moviexpert\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use moviexpert\Http\Requests;
use moviexpert\Http\Controllers\Controller;
use moviexpert\Http\Requests\MensajeChatRequest;
class MensajechatController extends Controller
{
    public function store(MensajeChatRequest $request){
        $id=$request['idmiembro'];
        \moviexpert\Mensajechat::create([
         /*Nombre campo base datos => nombre del campo del formulario*/
         'idmiembro'=> $request['idmiembro'],
         'mensaje'=>$request['mensaje'],
    ]);
    /* Redireccionamos a la ruta del index y indicamos que muestre un mensaje*/
      return redirect('/miembrochat/'.$id)->with('message','store');
    }
}
