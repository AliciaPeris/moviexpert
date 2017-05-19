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

Route::get('/', function () {
    return view('welcome');
});
Route::get('admin', 'HomeadminController@index');
Route::resource('adminpelicula','AdminpeliculaController');
Route::resource('admingenero','AdmingeneroController');
Route::resource('adminconcurso','AdminconcursoController');
Route::resource('adminchat','AdminchatController');
Route::resource('adminusuarios','UserController');
