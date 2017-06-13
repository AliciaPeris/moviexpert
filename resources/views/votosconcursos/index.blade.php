<?php use moviexpert\Http\Controllers\UserController;?>
@extends('layouts.admin')
	@section('content')
  <?php $message=Session::get('message')?>
	@if($message=='store')
	<div class="alert alert-success alert-dismissible" role="alert">
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	  <strong>Voto Registrado</strong>
	</div>
	@endif
  <div class="container-fluid blanco">
  <h1 class="text-center">Todos los votos</h1><br>
	<div class="table-responsive col-xs-12">
  	<table class="table table-hover text-center table-bordered">
  		<thead class="fondoMenu">
          <th class="text-center textoBlanco">ID</th>
          <th class="text-center textoBlanco">ID Corto Participante</th>
          <th class="text-center textoBlanco">ID Usuario</th>
          <th class="text-center textoBlanco">Voto</th>
          <th class="text-center textoBlanco">Fecha Voto</th>
					<th class="text-center textoBlanco">Acciones</th>
        </thead>
        @foreach($votosconcurso as $concursos)
				<?php
					$iduser=(integer)($concursos->idusuario);
					$nombre=UserController::nombreUser($iduser);
				?>
				@foreach($nombre as $nom)
        <tbody>
        <td>{{$concursos->id}}</td>
        <td>{{$concursos->idcortoconcurso}}</td>
        <td>{{$concursos->idusuario}}<?php echo " - ".$nom->nombre;?></td>
        <td>{{$concursos->voto}}</td>
        <td>{{$concursos->fechavoto}}</td>
				<td class="fila">
        {!!link_to_route('adminvotosconcurso.edit', $title = "Editar", $parameters = $concursos->id, $attributes = ['class'=>'btn boton2 margin5'])!!}
        {!!Form::open(['route'=>['adminvotosconcurso.destroy',$concursos->id],'method'=>'DELETE'])!!}
				 {{ csrf_field() }}
        {!!Form::submit('Eliminar',['class'=>'btn btn-danger margin5'])!!}
        {!!Form::close()!!}
      </td>
    </tbody>
		@endforeach
    @endforeach
	</div>
    <tfoot>
      <tr>
        <td colspan="6">
          {!!link_to_route('adminvotosconcurso.create', $title = "Añadir",$parameters= "" , $attributes = ['class'=>'btn boton col-xs-12'])!!}</td>
      </tr>
    </tfoot>
    </table>
    </div>
    @endsection
