@extends('layouts.admin')
	@section('content')

  <?php $message=Session::get('message')?>
	@if($message=='store')
	<div class="alert alert-success alert-dismissible" role="alert">
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	  <strong>Género Registrado</strong>
	</div>
	@endif
  <div class="container-fluid blanco">
  <h1 class="text-center">Géneros</h1><br>
  	<table class="table table-hover text-center table-bordered">
  		<thead class="fondoMenu">
          <th class="text-center textoBlanco">ID</th>
          <th class="text-center textoBlanco">Género</th>
          <th class="text-center textoBlanco">Acciones</th>
        </thead>
        @foreach($generos as $generos)
        <tbody>
        <td>{{$generos->id}}</td>
        <td>{{$generos->genero}}</td>
        <td class="fila">
          {!!link_to_route('admingenero.edit', $title = "Editar", $parameters = $generos->id, $attributes = ['class'=>'btn boton2 margin5'])!!}
          {!!Form::open(['route'=>['admingenero.destroy',$generos->id],'method'=>'DELETE'])!!}
          {!!Form::submit('Eliminar',['class'=>'btn btn-danger margin5'])!!}
          {!!Form::close()!!}
        </td>
        </tbody>
				
        @endforeach
				<tfoot>
		      <tr>
		        <td colspan="3">
		          {!!link_to_route('admingenero.create', $title = "Añadir",$parameters= "" , $attributes = ['class'=>'btn boton col-xs-12'])!!}</td>
		      </tr>
		    </tfoot>
        </table>
        </div>

        @endsection
