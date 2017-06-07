<?php use moviexpert\Http\Controllers\MiembrochatController;?>
@extends('layouts.frontend')
	@section('content')
	@include('chat.menuchat')
<h3>
  @foreach($nombre as $chatnom)
      <?php  echo $chatnom->nombre;?>
  @endforeach
</h3>
<div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 cuadrado">
@foreach($chat as $chat)
  <?php
        $id=$chat->idmiembro;
        $nombreusuario=MiembrochatController::nombreuser($id);
  ?>
  <p class="col-xs-12">
        @foreach($nombreusuario as $user)
        <?php  echo $user->nombre." : ".$chat->mensaje;?>
        @endforeach
  </p>
@endforeach
</div>
<div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 margintop25">
  {!!Form::open(['route'=>'mensajechat.store','method'=>'POST'])!!}
  {!!Form::textarea('mensaje',null,['class'=>'form-control','placeholder'=>'Escriba aqui su mensaje'])!!}
  {!!Form::text('idmiembro',$miembro,['class'=>'form-control novisible','placeholder'=>''])!!}
  {!!Form::submit('Enviar Mensaje',['class'=>'btn boton'])!!}
  {!!Form::close()!!}
</div>
@endsection
