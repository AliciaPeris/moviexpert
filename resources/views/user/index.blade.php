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
<form class "navbar-form navbar-left col-xs-12" role="search" method="POST" action="/buscarusuarios">
	{{ csrf_field() }}
	<div class="form-group col-xs-6 col-md-2">
		<input type="text" name="nombre" class="form-control" placeholder="Buscar por nombre">
	</div>
	<button type="submit" class="btn btn-danger col-xs-3 col-md-1">Buscar</button>
</form>
<div class="table-responsive col-xs-12">
	<table class="table table-hover text-center table-bordered" id="myTable">
		<thead class="fondoMenu">
        <th class="text-center textoBlanco">ID</th>
        <th class="text-center textoBlanco">Email</th>
        <th class="text-center textoBlanco">Nombre</th>
        <th class="text-center textoBlanco hidden-xs">Apellidos</th>
        <th class="text-center textoBlanco hidden-xs hidden-sm">Direccion</th>
        <th class="text-center textoBlanco hidden-xs hidden-sm">Localidad</th>
        <th class="text-center textoBlanco hidden-xs">Genero</th>
        <th class="text-center textoBlanco hidden-xs">Fecha Nacimiento</th>
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
        <td>{{$user->tipousuario}}</td>

        <td class="fila">
          {!!link_to_route('adminusuarios.edit', $title = "Editar", $parameters = $user->id, $attributes = ['class'=>'btn boton2 margin5'])!!}
          {!!Form::open(['route'=>['adminusuarios.destroy',$user->id],'method'=>'DELETE'])!!}
					 {{ csrf_field() }}
          {!!Form::submit('Eliminar',['class'=>'btn btn-danger margin5'])!!}
          {!!Form::close()!!}
        </td>
      </tbody>
      @endforeach
		</div>
			<tfoot>
				<tr>
					<td colspan="10">
						{!!link_to_route('adminusuarios.create', $title = "Añadir",$parameters= "" , $attributes = ['class'=>'btn boton col-xs-12'])!!}</td>
				</tr>
			</tfoot>
    </table>
		@if (!$noRender)
			{!! $users->render() !!}
		@endif
	</div>

  @endsection
