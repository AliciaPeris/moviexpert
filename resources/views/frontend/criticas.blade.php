@extends('layouts.frontend')
	@section('content')
<div class="col-xs-12 cuadrado container-fluid margintop25">
  <h1 class="col-xs-12 text-center">Críticas</h1>

  <div class="col-xs-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2 cuadrado">
  		<ul class="nav nav-tabs">
        <li class=""><a class="textoFicha" href="{{ url('/ficha/') }}/{{$peliculas->id}}">Ficha</a></li>
        <li class=""><a class="textoFicha" href="/peliculas">Trailer</a></li>
        <li class=""><a class="textoFicha" href="{{ url('/criticas/') }}/{{$peliculas->id}}">Críticas</a></li>
      </ul>
      <a class='btn boton col-xs-3 margin10' href="{{url('criticas/')}}">Añadir Crítica</a>
</div>

  @endsection
