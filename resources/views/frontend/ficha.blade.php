@extends('layouts.frontend')
@section('content')
<div class="col-xs-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2 cuadrado">
		<ul class="nav nav-tabs">
			<li class="active"><a class="textoFicha" href="">Ficha</a></li>
			<li class=""><a class="textoFicha" href="{{ url('/trailer/') }}/{{$pelicula->id}}">Trailer</a></li>
			<li class=""><a class="textoFicha" href="{{ url('/criticas/') }}/{{$pelicula->id}}">Críticas</a></li>

		</ul>
		<div id="fichaPeli col-xs-12">
				<img id="fotoFicha" class="col-xs-4 col-md-4" src="/imagenes/cartelera/{{$pelicula->cartelera}}" alt="{{$pelicula->titulo}}">

	        <div class="marginBottonFicha"><span class="titulosPeliculas">Título: </span>{{$pelicula->titulo}}</div>
	        <div class="marginBottonFicha"><span class="titulosPeliculas"> Año: </span>{{$pelicula->anio}}</div>
					<div class="marginBottonFicha"> <span class="titulosPeliculas">País: </span> {{$pelicula->pais}}</div>
					<div class="marginBottonFicha"><span class="titulosPeliculas">Director:</span> {{$pelicula->director}}</div>
					<div class="marginBottonFicha"><span class="titulosPeliculas">Guión:</span> {{$pelicula->guion}}</div>
					<div class="marginBottonFicha"><span class="titulosPeliculas">Reparto: </span>{{$pelicula->reparto}}</div>
					<div class="marginBottonFicha"><span class="titulosPeliculas">Género: </span>{{$generos[$pelicula->genero]}}</div>
					<div class="marginBottonFicha"><span class="titulosPeliculas">Sinopsis: </span>{{$pelicula->sinopsis}}</div>

		</div>
</div>

@endsection
