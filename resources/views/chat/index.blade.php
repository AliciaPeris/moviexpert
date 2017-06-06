<?php use moviexpert\Http\Controllers\MiembrochatController;?>
@extends('layouts.frontend')
	@section('content')
	@include('chat.menuchat')
</div>
<h3 class="textoMarron text-center margintopbottom25">Grupos de chat que has creado</h3>
  @foreach($chats as $chat)
<div class="col-xs-12 col-sm-6 col-md-4 col-md-offset-1 cuadrado margintop25">
	<h1 class="col-xs-12 text-center">{{$chat->nombre}}</h1>
	<p class="col-xs-12 text-center">Administrador del Grupo: {{$chat->creadorchat}}</p>
	<p class="col-xs-12">{{$chat->descripcion}}</p>
	<h3 class="col-xs-6 col-md-6 text-center">0 / {{$chat->numactores}} <i class="glyphicon glyphicon-user"></i></h3></h3><h3 class="col-xs-6 col-md-6 text-center">0/ {{$chat->numguionistas}} <i class="glyphicon glyphicon-list-alt"></i></h3>
	<h3 class="col-xs-6 col-md-6 text-center">0 / {{$chat->numdirectores}} <i class="glyphicon glyphicon-film"></i></h3></h3><h3 class="col-xs-6 col-md-6 text-center">0/ {{$chat->numcamaras}} <i class="glyphicon glyphicon-facetime-video"></i></h3>
  {!!Form::open(['route'=>['grupochat.destroy',$chat->id],'method'=>'DELETE'])!!}
  {!!Form::submit('Borrar Chat',['class'=>'btn btn-danger col-xs-12 col-sm-6 col-sm-offset-3 margintop25'])!!}
</div>
	@endforeach

@endsection
