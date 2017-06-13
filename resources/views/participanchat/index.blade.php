<?php use moviexpert\Http\Controllers\UserController;?>
@extends('layouts.admin')
	@section('content')
  <?php $message=Session::get('message')?>
	@if($message=='store')
	<div class="alert alert-success alert-dismissible" role="alert">
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	  <strong>La inscripcion al grupo de chat se ha realizado correctamente</strong>
	</div>
	@endif
  <div class="container-fluid cuadrado">
  <h1 class="text-center">Miembros Chat</h1><br>
	<form class "navbar-form navbar-left col-xs-12" role="search" method="POST" action="/buscartipomiembro">
			{{ csrf_field() }}
			<div class="form-group col-xs-6 col-md-2">
				<input type="text" name="tipomiembro" class="form-control" placeholder="Buscar por miembro">
			</div>
			<button type="submit" class="btn btn-danger col-xs-3 col-md-1">Buscar</button>
	</form>
  	<table class="table table-hover text-center table-bordered">
  		<thead class="fondoMenu">
          <th class="text-center textoBlanco">ID</th>
          <th class="text-center textoBlanco">ID Chat</th>
          <th class="text-center textoBlanco">ID Usuario</th>
          <th class="text-center textoBlanco">Tipo Miembro</th>
					<th class="text-center textoBlanco">Acciones</th>
        </thead>
        @foreach($participanchat as $pc)
				<?php
					$iduser=(integer)($pc->idusuario);
					$nombre=UserController::nombreUser($iduser);
				?>
				@foreach($nombre as $nom)
        <tbody>
        <td>{{$pc->id}}</td>
        <td>{{$pc->idchat}}</td>
        <td>{{$pc->idusuario}} <?php echo " - ".$nom->nombre;?></td>
        <td>{{$pc->tipomiembro}}</td>
				<td class="fila">
        {!!link_to_route('adminparticipanchat.edit', $title = "Editar", $parameters = $pc->id, $attributes = ['class'=>'btn boton2 margin5'])!!}
{!!link_to_route('adminmensajechat.show', $title = "Ver Mensajes", $parameters = $pc->id, $attributes = ['class'=>'btn boton2 margin5'])!!}
				{!!Form::open(['route'=>['adminparticipanchat.destroy',$pc->id],'method'=>'DELETE'])!!}
				 {{ csrf_field() }}
        {!!Form::submit('Eliminar',['class'=>'btn btn-danger margin5'])!!}
        {!!Form::close()!!}
      </td>
    </tbody>
		@endforeach
    @endforeach
    <tfoot>
      <tr>
        <td colspan="5">
          {!!link_to_route('adminparticipanchat.create', $title = "Añadir",$parameters= "" , $attributes = ['class'=>'btn boton col-xs-12'])!!}</td>
      </tr>
    </tfoot>
    </table>

    </div>

    @endsection
