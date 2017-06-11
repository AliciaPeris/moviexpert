<?php

namespace moviexpert\Http\Controllers;

use Illuminate\Http\Request;
use moviexpert\Http\Requests;
use moviexpert\Http\Controllers\Controller;
use Session;
use Redirect;
use Illuminate\Routing\Route;
use moviexpert\Admingenero;
use Illuminate\Pagination\Paginator;
use DB;



class AdmingeneroController extends Controller
{
    //
    public function index(){
      /*Creamos una variable para almacenar todos los datos de la base de datos*/

         $genero=DB::table('admingeneros')->paginate(6);
         /*Retornamos a la vista user carpeta index vista y le pasamos la variab                                                                                                                                  le con los datos*/
          return view('generos.index',compact('genero'));

    }
    public function create(){
      /*Retornanmos a la vista create*/
          return view('generos.create');
    }
    public function store(Request $request){
      \moviexpert\Admingenero::create([
        /*Nombre campo base datos => nombre del campo del formulario*/
        'genero'=> $request['genero'],

      ]);
      /* Redireccionamos a la ruta del index y indicamos que muestre un mensaje*/
      return redirect('/admingenero')->with('message','store');
    }
    public function show($id){

    }
    public function edit($id){
      $generos = Admingenero::find($id);
      return view('generos.edit',['genero'=>$generos]);
    }
    public function update(Request $request,$id){
      $generos = Admingenero::find($id);
      $generos->fill($request->all());
      $generos->save();
      Session::flash('message','Género Actualizado Correctamente');
      return Redirect::to('/admingenero');
    }
    public function destroy($id){
      \moviexpert\Admingenero::destroy($id);
      Session::flash('message','Género Eliminado Correctamente');
      return redirect::to('/admingenero');
  }
}
