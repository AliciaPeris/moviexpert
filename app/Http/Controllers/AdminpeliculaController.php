<?php

namespace moviexpert\Http\Controllers;

use Illuminate\Http\Request;
use moviexpert\Http\Requests;
use moviexpert\Http\Controllers\Controller;
use Session;
use Redirect;
use Illuminate\Routing\Route;
use moviexpert\Adminpelicula;
use moviexpert\Admingenero;
use DB;
use moviexpert\Http\Requests\PeliculaCreateRequest;
use moviexpert\Http\Requests\PeliculaUpdateRequest;


class AdminpeliculaController extends Controller
{
    public function index(){
      /*Creamos una variable para almacenar todos los datos de la base de datos*/
        $noRender=false;
        $pelicula=DB::table('adminpeliculas')->orderBy('titulo')->paginate(5);
         /*Retornamos a la vista user carpeta index vista y le pasamos la variable con los datos*/
         $generos=\moviexpert\Admingenero::lists('genero','id');
         return view('peliculas.index',compact('pelicula'))->with("generos",$generos)->with('noRender',$noRender);
       }

       public function buscarPeliculas(Request $request){
         $titulo=$request['titulo'];
         $pelicula=\moviexpert\Adminpelicula::titulo($titulo);
         $generos=\moviexpert\Admingenero::lists('genero','id');
         $noRender=true;
        /*Retornamos a la vista user carpeta index vista y le pasamos la variable con los datos*/
        return view('peliculas.index',compact('pelicula'))->with("generos",$generos)->with('noRender',$noRender);
       }
    public function create(){
      $generos=\moviexpert\Admingenero::lists('genero','id');
      return view('peliculas.create',compact("generos"));

    }
    public function store(PeliculaCreateRequest $request){
      $nombre="defecto.jpg";
      if($request->file('imagen')!=null){
      //obtenemos el campo file definido en el formulario
         $file = $request->file('imagen');
         //obtenemos el nombre del archivo
         $nombre = $file->getClientOriginalName();
         //indicamos que queremos guardar un nuevo archivo en el disco local
         \Storage::disk('local')->put($nombre,  \File::get($file));
    }
      \moviexpert\Adminpelicula::create([
        /*Nombre campo base datos => nombre del campo del formulario*/
        'titulo'=> $request['titulo'],
        'anio'=>($request['anio']),
        'pais'=> $request['pais'],
        'director'=> $request['director'],
        'guion'=> $request['guion'],
        'reparto'=> $request['reparto'],
        'sinopsis'=> $request['sinopsis'],
        'trailer'=>(strpos($request["trailer"],"v=")) ? substr($request["trailer"],strpos($request["trailer"],"v=")+2) : $request["trailer"],
        'cartelera'=>  $nombre,
        'genero'=> $request['genero'],
      ]);
      /* Redireccionamos a la ruta del index y indicamos que muestre un mensaje*/
      return redirect('/adminpelicula')->with('message','store');
    }

    public function show($id){

    }
    public function edit($id){
      /*Buscamos la pelicula que queremos modificar para pasarle los datos a la vista*/
      $peliculas = Adminpelicula::find($id);
      /*Recuperamos el nombre del genero para mostrar su nombre y no su identificador*/
      $generos=\moviexpert\Admingenero::lists('genero','id');
      /*Retornamos al vista que contiene el formulario para editar la pelicula y le pasamos los datos*/
      return view('peliculas.edit',compact("generos"))->with('pelicula', $peliculas);
    }

    public function update(PeliculaUpdateRequest $request, $id){
      $peliculas= Adminpelicula::find($id);
      $request["trailer"]=(strpos($request["trailer"],"v=")) ? substr($request["trailer"],strpos($request["trailer"],"v=")+2) : $request["trailer"] ;
      $peliculas->fill($request->all());
      $peliculas->save();
      Session::flash('message','Película Actualizada Correctamente');
      return Redirect::to('/adminpelicula');


    }
    public function destroy($id){

          \moviexpert\Adminpelicula::destroy($id);
          Session::flash('message','Película eliminada correctamente');
          return redirect::to('/adminpelicula');
    }
}
