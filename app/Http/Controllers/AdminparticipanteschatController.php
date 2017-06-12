<?php

namespace moviexpert\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Redirect;
use Illuminate\Routing\Route;
use moviexpert\Http\Requests;
use moviexpert\Http\Controllers\Controller;
use DB;
use moviexpert\Http\Requests\ParticipanChatRequest;

class AdminparticipanteschatController extends Controller
{
  public function index(){
    /*Creamos una variable para almacenar todos los datos de la base de datos*/
       $participanchat=DB::table('miembrochats')->paginate(6);
       /*Retornamos a la vista user carpeta index vista y le pasamos la variable con los datos*/
        return view('participanchat.index',compact('participanchat'));
  }
  public function create(){
    /*Retornanmos a la vista create*/
        return view('participanchat.create');
  }

  public function store(ParticipanChatRequest $request){
    \moviexpert\miembrochat::create([
     /*Nombre campo base datos => nombre del campo del formulario*/
     'idchat'=> $request['idchat'],
     'idusuario'=>$request['idusuario'],
     'tipomiembro'=> $request['tipomiembro'],
   ]);
    /* Redireccionamos a la ruta del index y indicamos que muestre un mensaje*/
    return redirect('adminparticipanchat');
  }
  public function show($id){
    $chat=  \moviexpert\AdminChat::find($id);
    $participanchat = DB::table('miembrochats')
          ->join('adminchats', 'adminchats.id', '=', 'miembrochats.idchat')
          ->select('miembrochats.*' )
          ->where('miembrochats.idchat',$id)
          ->get();
          return view('participanchat.show',compact('chat','participanchat'));

  }
  public function edit($id){
    $participanchat = \moviexpert\miembrochat::find($id);
    return view('participanchat.edit',['participanchat'=>$participanchat]);
  }
  public function update(ParticipanChatRequest $request,$id){
    $participanchat = \moviexpert\miembrochat::find($id);
    $participanchat->fill($request->all());
    $participanchat->save();
    Session::flash('message','Miembro Chat Actualizado Correctamente');
    return Redirect::to('/adminparticipanchat');
  }
  public function destroy($id){
    \moviexpert\miembrochat::destroy($id);
    Session::flash('message','Te has salido del grupo de chat');
    return redirect::to('/adminparticipanchat');

  }
}
