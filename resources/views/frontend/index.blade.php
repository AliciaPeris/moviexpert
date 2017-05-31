@extends('layouts.frontend')
@section('content')
<div id="cuadrado" class="col-xs-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
	<div class="col-xs-12 col-md-9">
		<div class="encabezados">LISTADO DE PELÍCULAS</div>
		<div class="contenedor">
			@foreach($peliculas as $pelicula)
				<a class="fichaRes" href="{{ url('/peliculas/') }}">
				<img src="/imagenes/{{$pelicula->cartelera}}" alt="{{$pelicula->titulo}}">
	        <div class="tituloP text-center">{{$pelicula->titulo}}</div>
	        <div class="anioP text-center">{{$pelicula->anio}}</div>
				</a>
			@endforeach
		</div>
	</div>
	<div class="col-md-3 col-xs-12" style="background:#eee">
		<div class="encabezados" id="fondoGris">ESTRENOS</div>
		@foreach($peliculas as $pelicula)
		<img class="trailer" src="/imagenes/{{$pelicula->cartelera}}" alt="{{$pelicula->titulo}}">
			@endforeach

	</div>
</div>

@endsection
