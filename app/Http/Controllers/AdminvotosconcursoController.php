<?php

namespace moviexpert\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Redirect;
use moviexpert\Http\Requests;
use moviexpert\Http\Controllers\Controller;
use moviexpert\Http\Requests\VotosConcursoRequest;
use DB;

class AdminvotosconcursoController extends Controller
{
  public function index(){
    /*Creamos una variable para almacenar todos los datos de la base de datos*/
       $votosconcurso=\moviexpert\votosconcurso::All();
       /*Retornamos a la vista user carpeta index vista y le pasamos la variable con los datos*/
        return view('votosconcursos.index',compact('votosconcurso'));
  }
  public function create(){
    /*Retornanmos a la vista create*/
    $usuarios=\moviexpert\User::lists('nombre','id');
    $cortos=\moviexpert\participanconcurso::lists('titulo','id');
        return view('votosconcursos.create')->with("usuarios",$usuarios)->with("cortos",$cortos);
  }

  public function store(VotosConcursoRequest $request){
    \moviexpert\votosconcurso::create([
     /*Nombre campo base datos => nombre del campo del formulario*/
     'idcortoconcurso'=> $request['idcortoconcurso'],
     'idusuario'=>$request['idusuario'],
     'voto'=> $request['voto'],
     'fechavoto'=> $request['fechavoto'],
   ]);
    /* Redireccionamos a la ruta del index y indicamos que muestre un mensaje*/
    return redirect('adminvotosconcurso');
  }
  public function show($id){
    $concursos=$concursos = \moviexpert\participanconcurso::find($id);
    $votos = DB::table('votosconcursos')
          ->join('participanconcursos', 'participanconcursos.id', '=', 'votosconcursos.idcortoconcurso')
          ->select('votosconcursos.*' )
          ->where('votosconcursos.idcortoconcurso',$id)
          ->get();
          return view('votosconcursos.show',compact('concursos','votos'));

  }
  public function edit($id){
    $votosconcurso = \moviexpert\votosconcurso::find($id);
    $usuarios=\moviexpert\User::lists('nombre','id');
    $cortos=\moviexpert\participanconcurso::lists('titulo','id');
    return view('votosconcursos.edit',['votosconcurso'=>$votosconcurso])->with("usuarios",$usuarios)->with("cortos",$cortos);
  }
  public function update(VotosConcursoRequest $request,$id){
    $concursos = \moviexpert\votosconcurso::find($id);
    $concursos->fill($request->all());
    $concursos->save();
    Session::flash('message','Voto Actualizado Correctamente');
    return Redirect::to('/adminvotosconcurso');
  }
  public function destroy($id){
    \moviexpert\votosconcurso::destroy($id);
    Session::flash('message','Voto Eliminado Correctamente');
    return redirect::to('/adminvotosconcurso');

  }
}
