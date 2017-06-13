@extends('layouts.admin')
	@section('content')
  {!!Form::model($participanconcurso,['route'=>['adminparticipanconcurso.update',$participanconcurso->id],'method'=>'PUT'])!!}
	@include('alerts.errorformulario')
 {{ csrf_field() }}
  <div class="col-xs-12 col-xs-offset-0 col-sm-10 col-sm-offset-1 cuadrado">
		<h1 class="textoMarron text-center">Editar Incripcion al Concurso</h1>
		<div class="input-group input-group-lg margin10">
			<span class="input-group-addon glyphicon glyphicon-envelope"></span>
			{!!Form::number('idconcurso',null,['class'=>'form-control','placeholder'=>'ID Concurso','readonly'])!!}
		</div>
		<div class="input-group input-group-lg margin10">
			<span class="input-group-addon glyphicon glyphicon-envelope"></span>
			{!!Form::number('idusuario',null,['class'=>'form-control','placeholder'=>'ID Usuario','readonly'])!!}
		</div>
		<div class="input-group input-group-lg margin10">
			<span class="input-group-addon glyphicon glyphicon-envelope"></span>
			{!!Form::text('otrosparticipantes',null,['class'=>'form-control','placeholder'=>'Otros Participantes'])!!}
		</div>
		<div class="input-group input-group-lg margin10">
			<span class="input-group-addon glyphicon glyphicon-envelope"></span>
			{!!Form::text('titulo',null,['class'=>'form-control','placeholder'=>'Titulo'])!!}
		</div>
		<div class="input-group input-group-lg margin10">
			<span class="input-group-addon glyphicon glyphicon-envelope"></span>
			{!!Form::text('descripcion',null,['class'=>'form-control','placeholder'=>'Descripcion'])!!}
		</div>
		<div class="input-group input-group-lg margin10">
			<span class="input-group-addon glyphicon glyphicon-envelope"></span>
			{!!Form::text('corto',null,['class'=>'form-control','placeholder'=>'Ruta Corto'])!!}
		</div>
      {!!Form::submit('Registrar',['class'=>'btn boton'])!!}
      {!!Form::close()!!}
  </div>
@endsection
