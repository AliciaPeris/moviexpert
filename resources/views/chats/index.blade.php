@extends('layouts.admin')
	@section('content')

  <?php $message=Session::get('message')?>
	@if($message=='store')
	<div class="alert alert-success alert-dismissible" role="alert">
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	  <strong>Chat Registrado</strong>
	</div>
	@endif
  <div class="container-fluid blanco">
  <h1 class="text-center">Chats</h1><br>
  	<table class="table table-hover text-center table-bordered">
  		<thead class="fondoMenu">
          <th class="text-center textoBlanco">ID</th>
          <th class="text-center textoBlanco">Nombre</th>
          <th class="text-center textoBlanco">Descripción</th>
          <th class="text-center textoBlanco">Número de guionistas</th>
          <th class="text-center textoBlanco">Número de actores</th>
          <th class="text-center textoBlanco">Número de directores</th>
          <th class="text-center textoBlanco">Número de cámaras</th>
          <th class="text-center textoBlanco">Creador del chat</th>
					<th class="text-center textoBlanco">Acciones</th>
        </thead>
        @foreach($chats as $chats)
        <tbody>
        <td>{{$chats->id}}</td>
        <td>{{$chats->nombre}}</td>
        <td>{{$chats->descripcion}}</td>
        <td>{{$chats->numguionistas}}</td>
        <td>{{$chats->numactores}}</td>
        <td>{{$chats->numdirectores}}</td>
        <td>{{$chats->numcamaras}}</td>
        <td>{{$chats->creadorchat}}</td>
        <td class="fila">
        {!!link_to_route('adminchat.edit', $title = "Editar", $parameters = $chats->id, $attributes = ['class'=>'btn boton2 margin5'])!!}
        {!!Form::open(['route'=>['adminchat.destroy',$chats->id],'method'=>'DELETE'])!!}
        {!!Form::submit('Eliminar',['class'=>'btn btn-danger margin5'])!!}
        {!!Form::close()!!}
      </td>
    </tbody>
    @endforeach
    <tfoot>
      <tr>
        <td colspan="8">
          {!!link_to_route('adminchat.create', $title = "Añadir",$parameters= "" , $attributes = ['class'=>'btn boton col-xs-12'])!!}</td>
      </tr>
    </tfoot>
    </table>
    </div>
    @endsection
