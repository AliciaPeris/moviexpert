<?php use moviexpert\Http\Controllers\MiembrochatController;?>
@extends('layouts.frontend')
	@section('content')
	@include('chat.menuchat')
</div>
  @foreach($chats as $chat)
<div class="col-xs-12 col-sm-6 col-md-4 col-md-offset-1 cuadrado">
	<h1 class="col-xs-12 text-center">{{$chat->nombre}}</h1>
	<p class="col-xs-12 text-center">Administrador del Grupo: {{$chat->creadorchat}}</p>
	<p class="col-xs-12">{{$chat->descripcion}}</p>
	<?php
		$idchat=$chat->id;
		$id=$chat->id;
		$idusuario=Auth::user()->id;
		$existeusuario=MiembrochatController::usuarioinscrito($idusuario,$idchat);
		$numcam=MiembrochatController::contarcamaras($idchat);
		$numact=MiembrochatController::contaractores($idchat);
		$numdir=MiembrochatController::contardirectores($idchat);
		$numgui=MiembrochatController::contarguionistas($idchat);
		$maxpart=(integer)($chat->numactores)+(integer)($chat->numdirectores)+(integer)($chat->numguionistas)+(integer)($chat->numcamaras);
		$totalpart=(integer)$numgui+(integer)$numcam+(integer)$numdir+(integer)$numact;
	?>
	<h3 class="col-xs-6 col-md-6 text-center"><?php echo $numact; ?> / {{$chat->numactores}} <i class="glyphicon glyphicon-user"></i></h3><h3 class="col-xs-6 col-md-6 text-center"> <?php echo $numgui; ?> / {{$chat->numguionistas}} <i class="glyphicon glyphicon-list-alt"></i></h3>
	<h3 class="col-xs-6 col-md-6 text-center"><?php echo $numdir; ?> / {{$chat->numdirectores}} <i class="glyphicon glyphicon-film"></i></h3><h3 class="col-xs-6 col-md-6 text-center"> <?php echo $numcam; ?> / {{$chat->numcamaras}} <i class="glyphicon glyphicon-facetime-video"></i></h3>
	@if($totalpart<$maxpart)
		@if($existeusuario==0)
		<a class='btn boton col-xs-4 margin10' href={{url('miembrochat/participanchat/'.$id)}}>Unirse al Chat</a>
		@else
		<p>Ya estas inscrito</p>
		@endif
	@else
		<h3 class="textoMarron text-center margintop25">Chat completo</h3>
	@endif
</div>
@endforeach

@endsection
