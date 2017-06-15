<?php

namespace moviexpert\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use Session;
use moviexpert\Http\Requests;
use moviexpert\Http\Controllers\Controller;
use moviexpert\Http\Requests\ChatCreateRequest;

class GrupochatController extends Controller
{

    public function index(){
      $id=Auth::user()->id;
      $chats = DB::table('adminchats')
            ->select('adminchats.*' )
            ->where('adminchats.creadorchat',$id)
            ->get();
            return view('chat.index',compact('chats'));
    }


    public function create(){
      /*Retornanmos a la vista create*/
          return view('chat.create');
    }


    public function store(ChatCreateRequest $request){
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


    public function destroy($id){
      \moviexpert\Adminchat::destroy($id);
      Session::flash('message','Chat Eliminado Correctamente');
       return redirect('/chat')->with('message','store');
    }
}
