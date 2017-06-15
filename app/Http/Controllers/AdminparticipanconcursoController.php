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
       $users=\moviexpert\User::lists('nombre','id');
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
  public static function nombreCorto($id){
    $nombre=DB::select('select * from participanconcursos where id=:id',['id'=>$id]);
    return $nombre;
  }
  public function create(){
      $users=\moviexpert\User::lists('nombre','id');
      $concurso=\moviexpert\participanconcurso::lists('titulo','id');
    /*Retornanmos a la vista create*/
        return view('participanconcursos.create',compact('users','concurso'));
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
     'corto'=> (strpos($request["corto"],"v=")) ? substr($request["corto"],strpos($request["corto"],"v=")+2) : $request["corto"],

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
    $concurso = \moviexpert\participanconcurso::find($id);
    $nombreconcurso=\moviexpert\participanconcurso::lists('titulo','id');
    $users=\moviexpert\User::lists('nombre','id');
    return view('participanconcursos.edit',['concurso'=>$concurso])->with('users',$users)->with('nombreconcurso',$nombreconcurso);
  }
  public function update(ParticipanConcursoRequest $request,$id){
    $concurso = \moviexpert\participanconcurso::find($id);
    $concurso->fill($request->all());
    $concurso->save();
    Session::flash('message','Incripcion Actualizada Correctamente');
    return Redirect::to('/adminparticipanconcurso');
  }
  public function destroy($id){
    \moviexpert\participanconcurso::destroy($id);
    Session::flash('message','Incripcion al Concurso Eliminada Correctamente');
    return redirect::to('/adminparticipanconcurso');

  }
}
