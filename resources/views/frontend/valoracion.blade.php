<?php use moviexpert\Http\Controllers\FrontendController;
	?>
	@extends('layouts.frontend')
	@section('content')

	<div class="col-xs-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2 cuadrado">
		<ul class="nav nav-tabs">
			<li class=""><a class="textoFicha" href="{{ url('/peliculas/') }}">Vista general</a></li>
			<li class="active"><a class="textoFicha" href="{{ url('/top10/') }}">Top 10</a></li>
		</ul>
		<div class="col-xs-12">

				@foreach($peliculas as $pelicula)

					<a class="col-xs-12 fichaRes3" href="{{ url('/ficha/') }}/{{$pelicula->id}}">
					<img class="fotoValoracion" src="/imagenes/cartelera/{{$pelicula->cartelera}}">
          <div class="fichaRes3Content">
		        <div class="colorNegro"> <span class="titulosPeliculas negrita">Título: </span> {{$pelicula->titulo}}</div>
		        <div class=" colorNegro"> <span class="titulosPeliculas negrita">Año: </span>{{$pelicula->anio}}</div>
						<div class="colorNegro sinopsis"><span class="titulosPeliculas negrita">Sinopsis: </span> {{$pelicula->sinopsis}}</div>
						<div class="fichaCuadroVotos text-center">{{number_format($pelicula->media,1)}}</div>
          </div>
					</a>


				@endforeach
			</div>
		</div>



@endsection
