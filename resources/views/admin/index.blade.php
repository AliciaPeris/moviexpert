<?php use moviexpert\Http\Controllers\HomeadminController;?>
@extends('layouts.admin')
	@section('content')
	  @if (!Auth::guest()&& Auth::user()->tipousuario=='admin')
				<div class="col-lg-2 col-lg-offset-1 col-md-2 col-md-offset-2 col-sm-3 col-sm-offset-2 col-xs-6 col-xs-offset-3 margintop25"><img class="width100" src="imagenes/usuarios.png"></img><a href="/adminusuarios/" class="btn boton col-xs-12">Usuarios</a></div>
				<div class="col-lg-2 col-lg-offset-2 col-md-2 col-md-offset-3 col-sm-3 col-sm-offset-2 col-xs-6 col-xs-offset-3 margintop25"><img class="width100" src="imagenes/estrenos.png"></img><a href="/adminpelicula/" class="btn boton col-xs-12">Peliculas</a></div>
				<div class="col-lg-2 col-lg-offset-2 col-md-2 col-md-offset-2 col-sm-3 col-sm-offset-2 col-xs-6 col-xs-offset-3 margintop25"><img class="width100" src="imagenes/concursos.png"></img><a href="/adminconcurso/" class="btn boton col-xs-12">Concursos</a></div>
				<div class="col-lg-2 col-lg-offset-5 col-md-2 col-md-offset-3 col-sm-3 col-sm-offset-2 col-xs-6 col-xs-offset-3 margintop25"><img class="width100" src="imagenes/chat.png"></img><a href="/adminchat/" class="btn boton col-xs-12">Chat</a></div>
				@endif
		    @if(!Auth::guest()&& Auth::user()->tipousuario=='normal')
		      <div class="jumbotron"><center>
		      <a href="{!!URL::to('/')!!}" class="btn btn-danger"><h3>No tienes privilegios para acceder al backend</h3></a>
		      </center></div>
		    @endif
				@if(Auth::guest())
				 <?php HomeadminController::raiz(); ?>
			 @endif
	@endsection
