<style>

</style>

@extends('layouts.frontend')
	@section('content')
<div class="col-xs-12  container-fluid margintop25">



  <div class="col-xs-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2 cuadrado">
  		<ul class="nav nav-tabs">
        <li class=""><a class="textoFicha" href="{{ url('/ficha/') }}/{{$pelicula->id}}">Ficha</a></li>
        <li class="active"><a class="textoFicha" href="{{ url('/trailer/') }}/{{$pelicula->id}}">Trailer</a></li>
        <li class=""><a class="textoFicha" href="{{ url('/criticas/') }}/{{$pelicula->id}}">Críticas</a></li>
      </ul>
      <div id="fichaPeli col-xs-12 col-md-6">
        <div class="col-xs-12 col-md-6">
        <img class="fotoTrailer" src="/imagenes/cartelera/{{$pelicula->cartelera}}" alt="{{$pelicula->titulo}}">
      </div>
      <div class="col-xs-12 col-md-6">
  	        <div class="marginBotton  tituloPeli negrita "><span class="titulosPeliculas negrita"> </span>  {{$pelicula->titulo}}</div>
  	 			<iframe id="trailer"  src="https://www.youtube.com/embed/{{$pelicula->trailer}}" frameborder="0" allowfullscreen></iframe>

      </div>
  		</div>
    </div>
  </div>

  @endsection
