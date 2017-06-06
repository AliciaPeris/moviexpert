<?php

namespace moviexpert\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use Session;
use moviexpert\Http\Requests;
use moviexpert\Http\Controllers\Controller;

class MiembrochatController extends Controller
{
    //
    public function index(){
      $id=Auth::user()->id;
      $chats = DB::table('adminchats')
            ->join('miembrochats', 'miembrochats.idchat', '=', 'adminchats.id')
            ->select('miembrochats.id as participacion','adminchats.*' )
            ->where('miembrochats.idusuario',$id)
            ->get();
            return view('miembrochat.index',compact('chats'));
    }
    public function show($id){

    }

    public function create(){

    }
    public function destroy($id){
      \moviexpert\miembrochat::destroy($id);
      Session::flash('message','Te has salido del grupo de chat');
       return redirect('/miembrochat')->with('message','store');
    }
    public function participanchat($id){
      $chat = \moviexpert\AdminChat::find($id);
      return view('miembrochat.create',['chat'=>$chat]);
    }
    public function store(Request $request){
      \moviexpert\miembrochat::create([
       /*Nombre campo base datos => nombre del campo del formulario*/
       'idchat'=> $request['idchat'],
       'idusuario'=>$request['idusuario'],
       'tipomiembro'=> $request['tipomiembro'],
      ]);
      /* Redireccionamos a la ruta del index y indicamos que muestre un mensaje*/
      return redirect('/miembrochat')->with('message','store');
    }
    public static function usuarioinscrito($idusuario,$idchat){
      $num= DB::table('miembrochats')
      ->where([
              ['idchat', '=', $idchat],
              ['idusuario', '=', $idusuario],
          ])
      ->count();
      return $num;
    }
    public static function contarcamaras($idchat){
      $num= DB::table('miembrochats')
      ->where([
              ['idchat', '=', $idchat],
              ['tipomiembro', '=', 'camara'],
          ])
      ->count();
      return $num;
    }
    public static function contaractores($idchat){
      $num= DB::table('miembrochats')
      ->where([
              ['idchat', '=', $idchat],
              ['tipomiembro', '=', 'actor'],
          ])
      ->count();
      return $num;
    }
    public static function contardirectores($idchat){
      $num= DB::table('miembrochats')
      ->where([
              ['idchat', '=', $idchat],
              ['tipomiembro', '=', 'director'],
          ])
      ->count();
      return $num;
    }
    public static function contarguionistas($idchat){
      $num= DB::table('miembrochats')
      ->where([
              ['idchat', '=', $idchat],
              ['tipomiembro', '=', 'guionista'],
          ])
      ->count();
      return $num;
    }

}
