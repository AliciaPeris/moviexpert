<?php use moviexpert\Http\Controllers\MiembrochatController;?>
@extends('layouts.admin')
	@section('content')
  <?php $message=Session::get('message')?>
	@if($message=='store')
	<div class="alert alert-success alert-dismissible" role="alert">
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	  <strong>Mensaje enviado</strong>
	</div>
	@endif
  <div class="container-fluid cuadrado">
  <h1 class="text-center">Mensajes Chat</h1><br>
  	<table class="table table-hover text-center table-bordered">
  		<thead class="fondoMenu">
          <th class="text-center textoBlanco">ID</th>
          <th class="text-center textoBlanco">ID Miembro</th>
          <th class="text-center textoBlanco">Mensaje</th>
					<th class="text-center textoBlanco">Acciones</th>
        </thead>
        @foreach($mensajes as $chat)
				<?php
							$id=$chat->idmiembro;
							$nombreusuario=MiembrochatController::nombreuser($id);
				?>
        <tbody>
        <td>{{$chat->id}}</td>
        <td>{{$chat->idmiembro}} @foreach($nombreusuario as $user)
        <?php  echo " - ".$user->nombre;?>
        @endforeach</td>
        <td>{{$chat->mensaje}}</td>
				<td class="fila">
        {!!link_to_route('adminmensajechat.edit', $title = "Editar", $parameters = $chat->id, $attributes = ['class'=>'btn boton2 margin5'])!!}
        {!!Form::open(['route'=>['adminmensajechat.destroy',$chat->id],'method'=>'DELETE'])!!}
				 {{ csrf_field() }}
        {!!Form::submit('Eliminar',['class'=>'btn btn-danger margin5'])!!}
        {!!Form::close()!!}
      </td>
    </tbody>
    @endforeach
      </table>
    </div>

    @endsection
