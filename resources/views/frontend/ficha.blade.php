@extends('layouts.frontend')
@section('content')
<div class="col-xs-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2 cuadrado">
		<ul class="nav nav-tabs">
			<li class=""><a class="textoFicha" href="">Ficha</a></li>
			<li class=""><a class="textoFicha" href="{{ url('/trailer/') }}/{{$pelicula->id}}">Trailer</a></li>
			<li class=""><a class="textoFicha" href="{{ url('/criticas/') }}/{{$pelicula->id}}">Críticas</a></li>

		</ul>
		<div id="fichaPeli">
	        <div class="tituloP text-center">Título: {{$pelicula->titulo}}</div>
	        <div class="anioP text-center"> Año: {{$pelicula->anio}}</div>
					<div class="anioP text-center"> País: {{$pelicula->pais}}</div>
					<div class="anioP text-center"> Director: {{$pelicula->director}}</div>
					<div class="anioP text-center"> Guión: {{$pelicula->guion}}</div>
					<div class="anioP text-center"> Reparto: {{$pelicula->reparto}}</div>
					<div class="anioP text-center"> Sinopsis: {{$pelicula->sinopsis}}</div>
					<div class="anioP text-center">{{$pelicula->genero}}</div>
				<img id="fotoFicha" src="/imagenes/cartelera/{{$pelicula->cartelera}}" alt="{{$pelicula->titulo}}">
		</div>
</div>

@endsection
