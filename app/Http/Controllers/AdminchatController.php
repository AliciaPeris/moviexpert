<?php

namespace moviexpert\Http\Controllers;

use Illuminate\Http\Request;

use moviexpert\Http\Requests;
use DB;
class AdminchatController extends Controller
{
    //
    public function index(){
      /*Creamos una variable para almacenar todos los datos de la base de datos*/
         $chat=DB::table('adminchats')->paginate(4);
         /*Retornamos a la vista user carpeta index vista y le pasamos la variable con los datos*/
          return view('chats.index',compact('chat'));
    }
    public function create(){
      /*Retornanmos a la vista create*/
          return view('chats.create');
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
     return redirect('/adminchat')->with('message','store');
    }
    public function show($id){

    }
    public function edit($id){

    }
    public function update($id){

    }
    public function destroy($id){
      \moviexpert\Adminchat::destroy($id);
      Session::flash('message','Chat Eliminado Correctamente');
      return redirect::to('/adminchat');
    }
}
