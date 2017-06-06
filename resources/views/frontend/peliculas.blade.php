<?php use moviexpert\Http\Controllers\FrontendController;
	?>
	@extends('layouts.frontend')
	@section('content')

	<div class="col-xs-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2 cuadrado">
		<ul class="nav nav-tabs">
			<li class=""><a class="textoFicha" href="/">Vista general</a></li>
			<li class=""><a class="textoFicha" href="/peliculas">Valoración</a></li>
		</ul>
		<div class="col-xs-12 col-md-12">
			<div class="contenedor col-xs-12 col-md-6">
				@foreach($peliculas as $pelicula)
					<a class="fichaRes2" href="{{ url('/ficha/') }}/{{$pelicula->id}}">
					<img class="marginBotton" src="/imagenes/cartelera/{{$pelicula->cartelera}}">

		        <div class="colorNegro marginBotton"> <span class="titulosPeliculas">Título: </span> {{$pelicula->titulo}}</div>
		        <div class="colorNegro marginBotton"> <span class="titulosPeliculas">Año: </span>{{$pelicula->anio}}</div>
						<div class="colorNegro marginBotton"><span class="titulosPeliculas">Director: </span> {{$pelicula->director}}</div>
					</a>
				</div>
				@endforeach
			</div>
		</div>



@endsection
