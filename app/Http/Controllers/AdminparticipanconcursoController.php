<?php

namespace moviexpert\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Redirect;
use Illuminate\Routing\Route;
use moviexpert\Http\Requests;
use moviexpert\Http\Controllers\Controller;
use DB;
use moviexpert\Http\Requests\ParticipanConcursoRequest;

class AdminparticipanconcursoController extends Controller
{
  public function index(){
    /*Creamos una variable para almacenar todos los datos de la base de datos*/
      $noRender=false;
       $participanconcurso=DB::table('participanconcursos')->paginate(5);
       /*Retornamos a la vista user carpeta index vista y le pasamos la variable con los datos*/
        return view('participanconcursos.index',compact('participanconcurso'))->with('noRender',$noRender);
  }
  public function buscarParticipan(Request $request){
    $nombre=$request['titulo'];
    $participanconcurso=\moviexpert\participanconcurso::nombre($nombre);
    $noRender=true;
   /*Retornamos a la vista user carpeta index vista y le pasamos la variable con los datos*/
   return view('participanconcursos.index',compact('participanconcurso'))->with('noRender',$noRender);
  }
  public function create(){
    /*Retornanmos a la vista create*/
        return view('participanconcursos.create');
  }
  public static function participantesconcurso($id){
    $participanconcurso=DB::select('select * from participanconcurso where idcortoconcurso=:id', ['id' => $id]);
    return view('participanconcursos.show',compact('participanconcurso'));
  }

  public function store(ParticipanConcursoRequest $request){
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
    $concursos=\moviexpert\AdminConcurso::find($id);
    $participanconcurso = DB::table('participanconcursos')
          ->join('adminconcursos', 'adminconcursos.id', '=', 'participanconcursos.idconcurso')
          ->select('participanconcursos.*' )
          ->where('participanconcursos.idconcurso',$id)
          ->get();
          return view('participanconcursos.show',compact('concursos','participanconcurso'));
        }
  public function edit($id){
    $participanconcurso = \moviexpert\participanconcurso::find($id);
    return view('participanconcursos.edit',['participanconcurso'=>$participanconcurso]);
  }
  public function update(ParticipanConcursoRequest $request,$id){
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
