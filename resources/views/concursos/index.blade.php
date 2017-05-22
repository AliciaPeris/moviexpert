@extends('layouts.admin')
	@section('content')

  <?php $message=Session::get('message')?>
	@if($message=='store')
	<div class="alert alert-success alert-dismissible" role="alert">
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	  <strong>Concurso Registrado</strong>
	</div>
	@endif
  <div class="container-fluid">
  <h1 class="text-center">Géneros</h1><br>
  	<table class="table table-hover text-center table-bordered">
  		<thead class="fondoMenu">
          <th class="text-center textoBlanco">ID</th>
          <th class="text-center textoBlanco">Nombre</th>
          <th class="text-center textoBlanco">Descripción</th>
          <th class="text-center textoBlanco">Fecha Inicio</th>
          <th class="text-center textoBlanco">Fecha Fin</th>
          <th class="text-center textoBlanco">Fecha fin Concurso</th>
        </thead>
        @foreach($concursos as $concursos)
        <tbody>
        <td>{{$concursos->id}}</td>
        <td>{{$concursos->nombre}}</td>
        <td>{{$concursos->descripcion}}</td>
        <td>{{$concursos->fechainicioinscripcion}}</td>
        <td>{{$concursos->fechafinconcurso}}</td>
        {!!link_to_route('adminconcurso.edit', $title = "Editar", $parameters = $generos->id, $attributes = ['class'=>'btn boton2 margin5'])!!}
        {!!Form::open(['route'=>['adminconcurso.destroy',$concursos->id],'method'=>'DELETE'])!!}
        {!!Form::submit('Eliminar',['class'=>'btn btn-danger margin5'])!!}
        {!!Form::close()!!}
      </td>
    </tbody>
    @endforeach
    <tfoot class="fondoMenu">
      <tr>
        <td colspan="6">
          {!!link_to_route('adminconcurso.create', $title = "Añadir",$parameters= "" , $attributes = ['class'=>'btn btn-default'])!!}</td>
      </tr>
    </tfoot>
    </table>
    </div>
    @endsection
