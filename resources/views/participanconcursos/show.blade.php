@extends('layouts.admin')
	@section('content')
  <?php $message=Session::get('message')?>
	@if($message=='store')
	<div class="alert alert-success alert-dismissible" role="alert">
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	  <strong>Concurso Registrado</strong>
	</div>
	@endif
  <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 ">
    <div class="col-xs-12 fondoCabecera container-fluid margintopbottom25">
      <h1 class="col-xs-12 text-center textoSalmon">{{$concursos->nombre}}</h1>
      <p class="textoBlanco"><strong class="col-xs-12 text-center textoBlanco">Plazo Inscripción: {{$concursos->fechainicioinscripcion}} al {{$concursos->fechafininscripcion}}</strong>
      <strong class="col-xs-12 text-center textoBlanco"> El concurso finaliza: {{$concursos->fechafinconcurso}}</strong></p>
      <div class="col-xs-10 col-xs-offset-1 margintop25">
        <p class="col-xs-12 textoBlanco">{{$concursos->descripcion}}</p>
      </div>
    </div>
  </div>
  <div class="container-fluid cuadrado">
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
        @foreach($participanconcurso as $con)
        <tbody>
        <td>{{$con->id}}</td>
        <td>{{$con->idconcurso}} - {{$concursos->nombre}}</td>
        <td>{{$con->idusuario}}</td>
        <td>{{$con->titulo}}</td>
        <td>{{$con->descripcion}}</td>
				<td>{{$con->corto}}</td>
				<td class="fila">
        {!!link_to_route('adminparticipanconcurso.edit', $title = "Editar", $parameters = $concursos->id, $attributes = ['class'=>'btn boton2 margin5'])!!}
				{!!link_to_route('adminvotosconcurso.show', $title = "Ver Votos", $parameters = $concursos->id, $attributes = ['class'=>'btn boton2 margin5'])!!}
			  {!!Form::open(['route'=>['adminparticipanconcurso.destroy',$concursos->id],'method'=>'DELETE'])!!}
        {!!Form::submit('Eliminar',['class'=>'btn btn-danger margin5'])!!}
        {!!Form::close()!!}
      </td>
    </tbody>
    @endforeach
    </table>
    </div>

    @endsection
