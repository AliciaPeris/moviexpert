<?php use moviexpert\Http\Controllers\FrontendController;
$estreno=FrontendController::estrenos();
?>
@extends('layouts.frontend')
@section('content')

<div class="col-xs-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2 cuadrado">
	<div class="col-xs-12 col-md-9">
		<div class="encabezados">Este año en cartelera</div>
		<div class="contenedor">
			@foreach($peliculas as $pelicula)
				<a class="fichaRes" href="{{ url('/ficha/') }}/{{$pelicula->id}}">
				<img src="/imagenes/cartelera/{{$pelicula->cartelera}}" alt="{{$pelicula->titulo}}">
	        <div class="tituloP text-center">{{$pelicula->titulo}}</div>
	        <div class="anioP text-center">{{$pelicula->anio}}</div>
				</a>
			@endforeach
		</div>
	</div>
	<div class="col-md-3 col-xs-12">
		<div class="encabezados" id="fondoGris">Próximamente</div>

		@foreach($estreno as $estreno)
		<img class="trailer" src="/imagenes/cartelera/{{$estreno->cartelera}}" alt="{{$estreno->titulo}}">

		@endforeach

	</div>
</div>

@endsection
