<?php

namespace moviexpert\Http\Controllers;

use Illuminate\Http\Request;

use moviexpert\Http\Requests;
use moviexpert\Http\Controllers\Controller;

class GrupochatController extends Controller
{
    //
    public function create(){
      /*Retornanmos a la vista create*/
          return view('chat.create');
    }
    public function store(Request $request){
      \moviexpert\Adminchat::create([
       /*Nombre campo base datos => nombre del campo del formulario*/
       'nombre'=> $request['nombre'],
       'descripcion'=>$request['descripcion'],
       'numguionistas'=> $request['numguionistas'],
       'numactores'=> $request['numactores'],
       'numdirectores'=> $request['numdirectores'],
       'numcamaras'=> $request['numcamaras'],
       'creadorchat'=> $request['creadorchat'],
     ]);
     /* Redireccionamos a la ruta del index y indicamos que muestre un mensaje*/
     return redirect('/chat')->with('message','store');
}
}
