@extends('layouts.admin')
	@section('content')
  <?php $message=Session::get('message')?>
	@if($message=='store')
	<div class="alert alert-success alert-dismissible" role="alert">
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	  <strong>Concurso Registrado</strong>
	</div>
	@endif
  <div class="container-fluid cuadrado">
  <h1 class="text-center">Incripcion a Concursos</h1><br>
	<form class "navbar-form navbar-left col-xs-12" role="search" method="POST" action="/buscarparticipan">
			{{ csrf_field() }}
			<div class="form-group col-xs-6 col-md-2">
				<input type="text" name="titulo" class="form-control" placeholder="Buscar">
			</div>
			<button type="submit" class="btn btn-danger col-xs-3 col-md-1">Buscar</button>
	</form>
	<div class="table-responsive col-xs-12">
  	<table class="table table-hover text-center table-bordered">
  		<thead class="fondoMenu">
          <th class="text-center textoBlanco">ID</th>
          <th class="text-center textoBlanco">ID Concurso</th>
          <th class="text-center textoBlanco">ID Usuario</th>
          <th class="text-center textoBlanco">Titulo</th>
          <th class="text-center textoBlanco">Descripcion</th>
          <th class="text-center textoBlanco">Corto</th>
					<th class="text-center textoBlanco">Acciones</th>
        </thead>
        @foreach($participanconcurso as $concursos)
        <tbody>
        <td>{{$concursos->id}}</td>
        <td>{{$concursos->idconcurso}}</td>
        <td>{{$concursos->idusuario}}</td>
        <td>{{$concursos->titulo}}</td>
        <td>{{$concursos->descripcion}}</td>
				<td>{{$concursos->corto}}</td>
				<td class="fila">
        {!!link_to_route('adminparticipanconcurso.edit', $title = "Editar", $parameters = $concursos->id, $attributes = ['class'=>'btn boton2 margin5'])!!}
				{!!link_to_route('adminvotosconcurso.show', $title = "Ver Votos", $parameters = $concursos->id, $attributes = ['class'=>'btn boton2 margin5'])!!}
        {!!Form::open(['route'=>['adminparticipanconcurso.destroy',$concursos->id],'method'=>'DELETE'])!!}
        {!!Form::submit('Eliminar',['class'=>'btn btn-danger margin5'])!!}
        {!!Form::close()!!}
      </td>
    </tbody>
    @endforeach
	</div>
    <tfoot>
      <tr>
        <td colspan="7">
          {!!link_to_route('adminparticipanconcurso.create', $title = "Añadir",$parameters= "" , $attributes = ['class'=>'btn boton col-xs-12'])!!}</td>
      </tr>
    </tfoot>
    </table>
		@if (!$noRender)
			{!! $participanconcurso->render() !!}
		@endif
    </div>

    @endsection
