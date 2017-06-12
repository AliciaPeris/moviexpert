<?php

namespace moviexpert\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Redirect;
use DB;
use moviexpert\Http\Requests;
use moviexpert\Http\Controllers\Controller;

class AdminmensajeschatController extends Controller
{
  public function index(){
  /*Creamos una variable para almacenar todos los datos de la base de datos*/
     $mensajechat=DB::table('mensajechats')->paginate(6);
     /*Retornamos a la vista user carpeta index vista y le pasamos la variable con los datos*/
     return view('adminmensajechat.index',compact('mensajechat'));
}
public function create(){
  /*Retornanmos a la vista create*/
      return view('adminmensajechat.create');
}

public function store(Request $request){
  \moviexpert\mensajechat::create([
   /*Nombre campo base datos => nombre del campo del formulario*/
   'idmiembro'=> $request['idmiembro'],
   'mensaje'=>$request['mensaje'],
 ]);
  /* Redireccionamos a la ruta del index y indicamos que muestre un mensaje*/
  return redirect('adminmensajechat');
}
public function show($id){

}
public function edit($id){
  $mensajechat = \moviexpert\mensajechat::find($id);
  return view('adminmensajechat.edit',['mensajechat'=>$mensajechat]);
}
public function update(Request $request,$id){
  $mensajechat = \moviexpert\mensajechat::find($id);
  $mensajechat->fill($request->all());
  $mensajechat->save();
  Session::flash('message','Mensaje Actualizado Correctamente');
  return Redirect::to('/adminmensajechat');
}
public function destroy($id){
  \moviexpert\mensajechat::destroy($id);
  Session::flash('message','Mensaje Borrado');
  return redirect::to('/adminmensajechat');

}
}
