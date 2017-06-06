@extends('layouts.frontend')
	@section('content')
<div class="col-xs-12 cuadrado container-fluid margintop25">
  <h1 class="col-xs-12 text-center">Trailer</h1>

  <div class="col-xs-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2 cuadrado">
  		<ul class="nav nav-tabs">
        <li class=""><a class="textoFicha" href="{{ url('/ficha/') }}/{{$pelicula->id}}">Ficha</a></li>
        <li class=""><a class="textoFicha" href="{{ url('/trailer/') }}/{{$pelicula->id}}">Trailer</a></li>
        <li class=""><a class="textoFicha" href="{{ url('/criticas/') }}/{{$pelicula->id}}">Críticas</a></li>
      </ul>
      <div id="fichaPeli">
        <div class="col-xs-5">
        <img class="fotoTrailer" src="/imagenes/cartelera/{{$pelicula->cartelera}}" alt="{{$pelicula->titulo}}">
      </div>
      <div class="col-xs-6 col-offset-4">
  	        <div class="marginBotton  marginLeft"><span class="titulosPeliculas">Título: </span>  {{$pelicula->titulo}}</div>
  	        <div class="marginBotton marginLeft"><span class="titulosPeliculas"> Año: </span> {{$pelicula->anio}}</div>
  				<iframe id="trailer" src="https://www.youtube.com/embed/aDI21FZaecM" frameborder="0" allowfullscreen></iframe>

      </div>
  		</div>
    </div>
  </div>

  @endsection
