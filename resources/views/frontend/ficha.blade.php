@extends('layouts.frontend')
@section('content')
<div class="col-xs-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2 cuadrado">
	<ul class="nav nav-tabs">
		<li class="active"><a class="textoFicha" href="">Ficha</a></li>
		<li class=""><a class="textoFicha" href="{{ url('/trailer/') }}/{{$pelicula->id}}">Trailer</a></li>
		<li class=""><a class="textoFicha" href="{{ url('/criticas/') }}/{{$pelicula->id}}">Críticas</a></li>
	</ul>

	<div id="fichaPeli col-xs-12">
		<div class="col-xs-12 col-md-4">
			<img id="fotoFicha" class="col-xs-10 col-xs-offset-1 margintop10" src="/imagenes/cartelera/{{$pelicula->cartelera}}" alt="{{$pelicula->titulo}}">
			<div class="cuadroVotos col-xs-10 col-xs-offset-1 noPadding margintop10">
				<div id="votacion col-xs-3" class="col-xs-12   fondoGris">
					<div id="media" class="col-xs-12 text-center cuadradoRojo letraBlanca">{{$mediaVotos}}</div>
					<div id="cantidad" class="col-xs-12 text-center cuadradoBlanco colorRojo negrita">{{$cuentaVotos}} votos </div>
				</div>
				<form action="/enviarVotos" method="post" class="formVotos">
					<?php /*$message=Session::get('message')?>
					@if($message=='store')
					<div class="alert alert-danger alert-dismissible" role="alert">
				    <strong>Tienes que iniciar sesión o registrarte para poder votar</strong>
				  </div>
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					@endif*/?>
					{{ csrf_field() }}
					{!! Form::hidden('idpelicula',$pelicula->id) !!}
					{!! Form::hidden('idusuario',Auth::user()->id) !!}
					<p class="clasificacion">
						<input id="radio1" type="radio" name="voto" value="10"><label for="radio1">&#9733;</label>
						<input id="radio2" type="radio" name="voto" value="8"><label for="radio2">&#9733;</label>
						<input id="radio3" type="radio" name="voto" value="6"><label for="radio3">&#9733;</label>
						<input id="radio4" type="radio" name="voto" value="4"><label for="radio4">&#9733;</label>
						<input id="radio5" type="radio" name="voto" value="2"><label for="radio5">&#9733;</label>
					</p>
					<p><input  class="btn btn-danger margin5" type="submit" value="Enviar" name="submit" /></p>
				</form>
			</div>
		</div>
		<div class="padding10">
			<div class="marginBottonFicha negrita tituloPeli">{{$pelicula->titulo}}</div>
			<div class="marginBottonFicha negrita"><span class="titulosPeliculas negrita"> Año: </span>{{$pelicula->anio}}</div>
			<div class="marginBottonFicha negrita"> <span class="titulosPeliculas negrita">País: </span> {{$pelicula->pais}}</div>
			<div class="marginBottonFicha negrita"><span class="titulosPeliculas negrita">Director:</span> {{$pelicula->director}}</div>
			<div class="marginBottonFicha negrita"><span class="titulosPeliculas negrita">Guión:</span> {{$pelicula->guion}}</div>
			<div class="marginBottonFicha negrita"><span class="titulosPeliculas negrita">Reparto: </span>{{$pelicula->reparto}}</div>
			<div class="marginBottonFicha negrita"><span class="titulosPeliculas negrita">Género: </span>{{$generos[$pelicula->genero]}}</div>
			<div class="marginBottonFicha negrita"><span class="titulosPeliculas negrita">Sinopsis: </span>{{$pelicula->sinopsis}}</div>
		</div>
	</div>
</div>

@endsection
