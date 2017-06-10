<?php use moviexpert\Http\Controllers\FrontendController;
	?>
	@extends('layouts.frontend')
	@section('content')

	<div class="col-xs-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2 cuadrado">
		<ul class="nav nav-tabs">
			<li class="active"><a class="textoFicha" href="/">Vista general</a></li>
			<li class=""><a class="textoFicha" href="/peliculas">Valoración</a></li>
		</ul>
		<div class="col-xs-12">
			
				@foreach($peliculas as $pelicula)

					<a class="col-xs-12 col-md-6 fichaRes2 " href="{{ url('/ficha/') }}/{{$pelicula->id}}">
					<img class="fotoPelicula" src="/imagenes/cartelera/{{$pelicula->cartelera}}">

		        <div class="marginBottonFicha colorNegro negrita"> <span class="titulosPeliculas negrita">Título: </span> {{$pelicula->titulo}}</div>
		        <div class="marginBottonFicha  colorNegro negrita"> <span class="titulosPeliculas negrita">Año: </span>{{$pelicula->anio}}</div>
						<div class="colorNegro marginBottonFicha negrita"><span class="titulosPeliculas negrita">Director: </span> {{$pelicula->director}}</div>
						<div class=" fichaCuadroVotos text-center">{{number_format($pelicula->media,1)}}</div>

					</a>


				@endforeach
			</div>
		</div>



@endsection
