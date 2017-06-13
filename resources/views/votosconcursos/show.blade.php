<?php use moviexpert\Http\Controllers\UserController;?>
@extends('layouts.admin')
	@section('content')
  <?php $message=Session::get('message')?>
	@if($message=='store')
	<div class="alert alert-success alert-dismissible" role="alert">
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	  <strong>Concurso Registrado</strong>
	</div>
	@endif
  <div class="container-fluid blanco">
  <h1 class="text-center">Votos del Corto</h1><br>
  	<table class="table table-hover text-center table-bordered">
  		<thead class="fondoMenu">
          <th class="text-center textoBlanco">ID</th>
          <th class="text-center textoBlanco">ID Corto Participante</th>
          <th class="text-center textoBlanco">ID Usuario</th>
          <th class="text-center textoBlanco">Voto</th>
          <th class="text-center textoBlanco">Fecha Voto</th>
					<th class="text-center textoBlanco">Acciones</th>
        </thead>
        @foreach($votos as $voto)
				<?php
					$iduser=(integer)($concursos->idusuario);
					$nombre=UserController::nombreUser($iduser);
				?>
        <tbody>
        <td>{{$voto->id}}</td>
        <td>{{$voto->idcortoconcurso}} - {{$concursos->titulo}}</td>
        <td>{{$voto->idusuario}} @foreach($nombre as $nom) <?php echo " - ".$nom->nombre;?> @endforeach</td>
        <td>{{$voto->voto}}</td>
        <td>{{$voto->fechavoto}}</td>
				<td class="fila">
        {!!link_to_route('adminvotosconcurso.edit', $title = "Editar", $parameters = $concursos->id, $attributes = ['class'=>'btn boton2 margin5'])!!}
        {!!Form::open(['route'=>['adminvotosconcurso.destroy',$concursos->id],'method'=>'DELETE'])!!}
				 {{ csrf_field() }}
        {!!Form::submit('Eliminar',['class'=>'btn btn-danger margin5'])!!}
        {!!Form::close()!!}
      </td>
    </tbody>
    @endforeach
    </table>
    </div>
    @endsection
