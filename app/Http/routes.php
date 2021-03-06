<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Rutas Backend*/
Route::get('admin', 'HomeadminController@index');
Route::resource('adminpelicula','AdminpeliculaController');
Route::resource('admingenero','AdmingeneroController');
Route::resource('adminconcurso','AdminconcursoController');
Route::resource('adminchat','AdminchatController');
Route::resource('adminusuarios','UserController');
Route::resource('adminparticipanconcurso','AdminparticipanconcursoController');
Route::resource('adminvotosconcurso','AdminvotosconcursoController');
Route::resource('adminparticipanchat','AdminparticipanteschatController');
Route::resource('adminmensajechat','AdminmensajeschatController');
Route::post('buscarusuarios','UserController@buscarUsuarios');
Route::post('buscarpeliculas','AdminpeliculaController@buscarPeliculas');
Route::post('buscargeneros','AdmingeneroController@buscarGeneros');
Route::post('buscarconcursos','AdminconcursoController@buscarConcursos');
Route::post('buscarparticipan','AdminparticipanconcursoController@buscarparticipan');
Route::post('buscarchat','AdminchatController@buscarChat');
Route::post('buscartipomiembro','MiembrochatController@buscarMiembro');



/*Rutas Frontend*/
Route::resource('/','FrontendController');
Route::get('peliculas','FrontendController@peliculas');
Route::resource('top10','FrontendController@top10');
Route::get('trailer/{id}','FrontendController@trailer');
Route::get('ficha/{id}','FrontendController@ficha');
Route::post('enviarVotos','FrontendController@enviarVotos');
Route::get('criticas/{id}','FrontendController@criticas');
Route::resource('misCriticas','FrontendController@misCriticas');
Route::post('pcritica','FrontendController@procesarCriticas');
Route::get('eliminarCritica/{idc}/{idp}/{idu}','FrontendController@eliminarCritica');
Route::post('buscar','FrontendController@buscar');



Route::get('concursos','FrontendController@concursos');
Route::get('chat','FrontendController@chat');
Route::resource('inscripcionconcurso', "InscripcionconcursoController");
Route::get('inscripcionconcurso/create/{id}', "InscripcionconcursoController@create");
Route::resource('votarcorto',"VotarCortoController");
Route::resource('grupochat',"GrupochatController");
Route::resource('miembrochat',"MiembrochatController");
Route::resource('mensajechat',"MensajechatController");
Route::resource('perfilusuario',"PerfilusuarioController");
Route::get('perfilusuario/edit','PerfilusuarioController@edit');
Route::get('perfilusuario/update','PerfilusuarioController@update');
Route::get('perfilusuario/destroy','PerfilusuarioController@destroy');
Route::get('miembrochat/participanchat/{id}', "MiembrochatController@participanchat");
Route::get('concursos/participanconcurso/{id}','FrontendController@participanconcurso');
Route::post('concursos/participanconcurso/{id}/altaparticipacion','FrontendController@altaparticipacion');



Route::auth();


Route::get('/home', 'HomeController@index');
