<?php

namespace moviexpert\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Redirect;
use Illuminate\Routing\Route;
use moviexpert\Http\Requests;
use moviexpert\Http\Controllers\Controller;
use DB;

class AdminparticipanconcursoController extends Controller
{
  public function index(){
    /*Creamos una variable para almacenar todos los datos de la base de datos*/
       $participanconcurso=DB::table('participanconcursos')->paginate(2);
       /*Retornamos a la vista user carpeta index vista y le pasamos la variable con los datos*/
        return view('participanconcursos.index',compact('participanconcurso'));
  }
  public function create(){
    /*Retornanmos a la vista create*/
        return view('participanconcursos.create');
  }

  public function store(Request $request){
    \moviexpert\participanconcurso::create([
     /*Nombre campo base datos => nombre del campo del formulario*/
     'idconcurso'=> $request['idconcurso'],
     'idusuario'=>$request['idusuario'],
     'otrosparticipantes'=> $request['otrosparticipantes'],
     'titulo'=> $request['titulo'],
     'descripcion'=> $request['descripcion'],
     'corto'=> $request['corto'],
   ]);
    /* Redireccionamos a la ruta del index y indicamos que muestre un mensaje*/
    return redirect('adminparticipanconcurso');
  }
  public function show($id){

  }
  public function edit($id){
    $participanconcurso = \moviexpert\participanconcurso::find($id);
    return view('participanconcursos.edit',['participanconcurso'=>$participanconcurso]);
  }
  public function update(Request $request,$id){
    $concursos = \moviexpert\participanconcurso::find($id);
    $concursos->fill($request->all());
    $concursos->save();
    Session::flash('message','Incripcion Actualizada Correctamente');
    return Redirect::to('/adminparticipanconcurso');
  }
  public function destroy($id){
    \moviexpert\participanconcurso::destroy($id);
    Session::flash('message','Incripcion al Concurso Eliminada Correctamente');
    return redirect::to('/adminparticipanconcurso');

  }
}
