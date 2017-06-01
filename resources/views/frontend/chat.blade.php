@extends('layouts.frontend')
	@section('content')
	<div class="col-xs-12 text-center">
		<p class="col-xs-12 textoMarron"> Actor: <i class="glyphicon glyphicon-user"></i> | Guionista: <i class="glyphicon glyphicon-list-alt"></i> | Director: <i class="glyphicon glyphicon-film"></i> | Camara: <i class="glyphicon glyphicon-facetime-video"></i></p>
		<div class="margintopbottom25"><a class="btn boton margin5">Lista Chat</a><a class="btn boton margin5">Mis Chat</a><a class="btn boton margin5">Crear Nuevo Chat</a></div>
</div>
  @foreach($chats as $chat)
<div class="col-xs-12 col-sm-6 col-md-4 col-md-offset-1 cuadrado">
	<h1 class="col-xs-12 text-center">{{$chat->nombre}}</h1>
	<p class="col-xs-12 text-center">Administrador del Grupo: {{$chat->creadorchat}}</p>
	<p class="col-xs-12">{{$chat->descripcion}}</p>
	<h3 class="col-xs-6 col-md-6 text-center">0 / {{$chat->numactores}} <i class="glyphicon glyphicon-user"></i></h3></h3><h3 class="col-xs-6 col-md-6 text-center">0/ {{$chat->numguionistas}} <i class="glyphicon glyphicon-list-alt"></i></h3>
	<h3 class="col-xs-6 col-md-6 text-center">0 / {{$chat->directores}} <i class="glyphicon glyphicon-film"></i></h3></h3><h3 class="col-xs-6 col-md-6 text-center">0/ {{$chat->numcamaras}} <i class="glyphicon glyphicon-facetime-video"></i></h3>
</div>
	@endforeach

@endsection
