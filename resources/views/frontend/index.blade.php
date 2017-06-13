<?php use moviexpert\Http\Controllers\FrontendController;
$estreno=FrontendController::estrenos();
?>
@extends('layouts.frontend')
@section('content')

<div class="col-xs-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2 cuadrado contentT paddingTop40">
	<div class="rowT">
		<div class="col-xs-12 col-md-9 noFloat">
			<div class="encabezados">Ahora en cartelera</div>
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
		<div class="col-md-3 col-xs-12 fondoRojoTransparente noFloat">
			<div class="encabezados letraBlanca" id="fondoGris">Próximamente</div>

			@foreach($estreno as $estreno)
			<a href="{{ url('/ficha/') }}/{{$estreno->id}}">
				<img class="trailer estreno" src="/imagenes/cartelera/{{$estreno->cartelera}}" alt="{{$estreno->titulo}}">
			</a>
			@endforeach
		</div>
	</div>
</div>

@endsection
