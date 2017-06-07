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
use Store;



class AdminpeliculaController extends Controller
{
    public function index(){
      /*Creamos una variable para almacenar todos los datos de la base de datos*/

        $peliculas=\moviexpert\Adminpelicula::All();
         /*Retornamos a la vista user carpeta index vista y le pasamos la variable con los datos*/
         $generos=\moviexpert\Admingenero::lists('genero','id');
         return view('peliculas.index',compact('peliculas'))->with("generos",$generos);


       }

    public function create(){
      /*Retornanmos a la vista create*/
      $generos=\moviexpert\Admingenero::lists('genero','id');
      return view('peliculas.create',compact("generos"));

    }
    public function store(Request $request){
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
        'cartelera'=> $request['imagen'],
        'genero'=> $request['genero'],
      ]);
      $request->file('imagen')->store('imagenes','public');
      dd($request->file('imagen'));
      /* Redireccionamos a la ruta del index y indicamos que muestre un mensaje*/
      //return redirect('/adminpelicula')->with('message','store');
    }

    public function show($id){

    }
    public function edit($id){

      $peliculas = Adminpelicula::find($id);
      $generos=\moviexpert\Admingenero::lists('genero','id');
      return view('peliculas.edit',compact("generos"))->with('pelicula', $peliculas);
    }

    public function update(Request $request, $id){
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
