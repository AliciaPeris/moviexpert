@extends('layouts.admin')
	@section('content')
	<?php $message=Session::get('message')?>
	@if($message=='store')
	<div class="alert alert-success alert-dismissible" role="alert">
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	  <strong>Usuario Registrado</strong>
	</div>
	@endif
<div class="container-fluid cuadrado">
<h1 class="text-center">Listado Usuarios</h1><br>
	<table class="table table-hover text-center table-bordered">
		<thead class="fondoMenu">
        <th class="text-center textoBlanco">ID</th>
        <th class="text-center textoBlanco">Email</th>
        <th class="text-center textoBlanco">Nombre</th>
        <th class="text-center textoBlanco hidden-xs">Apellidos</th>
        <th class="text-center textoBlanco hidden-xs hidden-sm">Direccion</th>
        <th class="text-center textoBlanco hidden-xs hidden-sm">Localidad</th>
        <th class="text-center textoBlanco hidden-xs">Genero</th>
        <th class="text-center textoBlanco hidden-xs">Fecha Nacimiento</th>
        <th class="text-center textoBlanco hidden-xs hidden-sm">Imagen</th>
        <th class="text-center textoBlanco">Tipo Usuario</th>
        <th class="text-center textoBlanco">Acciones</th>
      </thead>
      @foreach($users as $user)
      <tbody>
        <td>{{$user->id}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->nombre}}</td>
        <td class="hidden-xs">{{$user->apellidos}}</td>
        <td class="hidden-xs hidden-sm">{{$user->direccion}}</td>
        <td class="hidden-xs hidden-sm">{{$user->localidad}}</td>
        <td class="hidden-xs">{{$user->genero}}</td>
        <td class="hidden-xs">{{$user->fechanacimiento}}</td>
        <td class="hidden-xs hidden-sm">{{$user->foto}}</td>
        <td>{{$user->tipousuario}}</td>
        <td class="fila">
          {!!link_to_route('adminusuarios.edit', $title = "Editar", $parameters = $user->id, $attributes = ['class'=>'btn boton2 margin5'])!!}
          {!!Form::open(['route'=>['adminusuarios.destroy',$user->id],'method'=>'DELETE'])!!}
          {!!Form::submit('Eliminar',['class'=>'btn btn-danger margin5'])!!}
          {!!Form::close()!!}
        </td>
      </tbody>
      @endforeach
			<tfoot>
				<tr>
					<td colspan="11">
						{!!link_to_route('adminusuarios.create', $title = "Añadir",$parameters= "" , $attributes = ['class'=>'btn boton col-xs-12'])!!}</td>
				</tr>
			</tfoot>
    </table>
	</div>
	{{!! $users->render() !!}}
  @endsection
