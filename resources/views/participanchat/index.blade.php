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
  	<table class="table table-hover text-center table-bordered">
  		<thead class="fondoMenu">
          <th class="text-center textoBlanco">ID</th>
          <th class="text-center textoBlanco">ID Chat</th>
          <th class="text-center textoBlanco">ID Usuario</th>
          <th class="text-center textoBlanco">Tipo Miembro</th>
					<th class="text-center textoBlanco">Acciones</th>
        </thead>
        @foreach($participanchat as $chat)
        <tbody>
        <td>{{$chat->id}}</td>
        <td>{{$chat->idchat}}</td>
        <td>{{$chat->idusuario}}</td>
        <td>{{$chat->tipomiembro}}</td>
				<td class="fila">
        {!!link_to_route('adminparticipanchat.edit', $title = "Editar", $parameters = $chat->id, $attributes = ['class'=>'btn boton2 margin5'])!!}
        {!!Form::open(['route'=>['adminparticipanchat.destroy',$chat->id],'method'=>'DELETE'])!!}
        {!!Form::submit('Eliminar',['class'=>'btn btn-danger margin5'])!!}
        {!!Form::close()!!}
      </td>
    </tbody>
    @endforeach
    <tfoot>
      <tr>
        <td colspan="5">
          {!!link_to_route('adminparticipanchat.create', $title = "Añadir",$parameters= "" , $attributes = ['class'=>'btn boton col-xs-12'])!!}</td>
      </tr>
    </tfoot>
    </table>
		{!! $participanchat->render() !!}
    </div>

    @endsection
