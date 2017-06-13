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
  <h1 class="text-center">Concursos</h1><br>
	<form class "navbar-form navbar-left col-xs-12" role="search" method="POST" action="/buscarconcursos">
		{{ csrf_field() }}
		<div class="form-group col-xs-6 col-md-2">
			<input type="text" name="nombre" class="form-control" placeholder="Buscar por nombre">
		</div>
		<button type="submit" class="btn btn-danger col-xs-3 col-md-1">Buscar</button>
	</form>
	<div class="table-responsive col-xs-12">
  	<table class="table table-hover text-center table-bordered">
  		<thead class="fondoMenu">
          <th class="text-center textoBlanco">ID</th>
          <th class="text-center textoBlanco">Nombre</th>
          <th class="text-center textoBlanco">Descripción</th>
          <th class="text-center textoBlanco">Fecha Inicio</th>
          <th class="text-center textoBlanco">Fecha Fin</th>
          <th class="text-center textoBlanco">Fecha fin Concurso</th>
					<th class="text-center textoBlanco">Acciones</th>
        </thead>
        @foreach($concurso as $concursos)
        <tbody>
        <td>{{$concursos->id}}</td>
        <td>{{$concursos->nombre}}</td>
        <td>{{$concursos->descripcion}}</td>
        <td>{{$concursos->fechainicioinscripcion}}</td>
				<td>{{$concursos->fechafininscripcion}}</td>
        <td>{{$concursos->fechafinconcurso}}</td>
				<td class="fila">
        {!!link_to_route('adminconcurso.edit', $title = "Editar", $parameters = $concursos->id, $attributes = ['class'=>'btn boton2 margin5'])!!}
				{!!link_to_route('adminparticipanconcurso.show', $title = "Ver Participantes", $parameters = $concursos->id, $attributes = ['class'=>'btn boton2 margin5'])!!}
        {!!Form::open(['route'=>['adminconcurso.destroy',$concursos->id],'method'=>'DELETE'])!!}
        {!!Form::submit('Eliminar',['class'=>'btn btn-danger margin5'])!!}
        {!!Form::close()!!}
      </td>
    </tbody>
    @endforeach
	</div>
    <tfoot>
      <tr>
        <td colspan="7">
          {!!link_to_route('adminconcurso.create', $title = "Añadir",$parameters= "" , $attributes = ['class'=>'btn boton col-xs-12'])!!}</td>
      </tr>
    </tfoot>
    </table>
		@if (!$noRender)
			{!! $concurso->render() !!}
		@endif
    </div>

    @endsection
