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

	        <div class="marginBottonFicha negrita"><span class="titulosPeliculas negrita">Título: </span>{{$pelicula->titulo}}</div>
	        <div class="marginBottonFicha negrita"><span class="titulosPeliculas negrita"> Año: </span>{{$pelicula->anio}}</div>
					<div class="marginBottonFicha negrita"> <span class="titulosPeliculas negrita">País: </span> {{$pelicula->pais}}</div>
					<div class="marginBottonFicha negrita"><span class="titulosPeliculas negrita">Director:</span> {{$pelicula->director}}</div>
					<div class="marginBottonFicha negrita"><span class="titulosPeliculas negrita">Guión:</span> {{$pelicula->guion}}</div>
					<div class="marginBottonFicha negrita"><span class="titulosPeliculas negrita">Reparto: </span>{{$pelicula->reparto}}</div>
					<div class="marginBottonFicha negrita"><span class="titulosPeliculas negrita">Género: </span>{{$generos[$pelicula->genero]}}</div>
					<div class="marginBottonFicha negrita"><span class="titulosPeliculas negrita">Sinopsis: </span>{{$pelicula->sinopsis}}</div>

		</div>
</div>

@endsection
