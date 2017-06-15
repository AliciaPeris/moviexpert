<?php use moviexpert\Http\Controllers\MiembrochatController;?>
<?php use moviexpert\Http\Controllers\UserController;?>
@extends('layouts.frontend')
	@section('content')
	@include('chat.menuchat')
  @foreach($chats as $chat)
	<?php
		$iduser=(integer)($chat->creadorchat);
		$nombre=UserController::nombreUser($iduser);
	?>
	@foreach($nombre as $nom)
<div class="col-xs-12 col-sm-6 col-md-4 col-md-offset-1 cuadrado">
	<h1 class="col-xs-12 text-center">{{$chat->nombre}}</h1>
	<p class="col-xs-12 text-center">Administrador del Grupo: {{$chat->creadorchat}} <?php echo " - ".$nom->nombre;?></p>
	<p class="col-xs-12">{{$chat->descripcion}}</p>
	<?php
		$idchat=$chat->id;
		$id=$chat->id;
		$idusuario=Auth::user()->id;
		$numcam=MiembrochatController::contarcamaras($idchat);
		$numact=MiembrochatController::contaractores($idchat);
		$numdir=MiembrochatController::contardirectores($idchat);
		$numgui=MiembrochatController::contarguionistas($idchat);
    $idmiembro=$chat->participacion;
	?>
	<h3 class="col-xs-6 col-md-6 text-center"><?php echo $numact; ?> / {{$chat->numactores}} <i class="glyphicon glyphicon-user"></i></h3><h3 class="col-xs-6 col-md-6 text-center"> <?php echo $numgui; ?> / {{$chat->numguionistas}} <i class="glyphicon glyphicon-list-alt"></i></h3>
	<h3 class="col-xs-6 col-md-6 text-center"><?php echo $numdir; ?> / {{$chat->numdirectores}} <i class="glyphicon glyphicon-film"></i></h3><h3 class="col-xs-6 col-md-6 text-center"> <?php echo $numcam; ?> / {{$chat->numcamaras}} <i class="glyphicon glyphicon-facetime-video"></i></h3>
	{!!link_to_route('miembrochat.show', $title = "Chatear", $parameters = $idmiembro, $attributes = ['class'=>'btn boton2 margin5 col-sm-4'])!!}
  {!!Form::open(['route'=>['miembrochat.destroy',$idmiembro],'method'=>'DELETE'])!!}
	 {{ csrf_field() }}
  {!!Form::submit('Salir del Grupo',['class'=>'btn btn-danger margin5 col-sm-4'])!!}
  {!!Form::close()!!}
</div>
@endforeach
@endforeach
@endsection
