@extends('layouts.admin')
	@section('content')
  {!!Form::open(['route'=>'adminparticipanconcurso.store','method'=>'POST'])!!}
	@include('alerts.errorformulario')
 {{ csrf_field() }}
	<div class="col-xs-12 col-xs-offset-0 col-sm-10 col-sm-offset-1 cuadrado">
		<h1 class="textoMarron text-center">Incripcion a un Cocurso</h1>
      <div class="input-group input-group-lg margin10">
        <span class="input-group-addon glyphicon glyphicon-certificate"></span>
        {!!Form::select('idconcurso',$concurso,null,['class'=>'form-control','placeholder'=>'Concurso'])!!}
      </div>
      <div class="input-group input-group-lg margin10">
        <span class="input-group-addon glyphicon glyphicon-user"></span>
        {!!Form::select('idusuario',$users,null,['class'=>'form-control','placeholder'=>' Usuario'])!!}
      </div>
      <div class="input-group input-group-lg margin10">
        <span class="input-group-addon"><i class="fa fa-users" aria-hidden="true"></i></span>
        {!!Form::text('otrosparticipantes',null,['class'=>'form-control','placeholder'=>'Otros Participantes'])!!}
      </div>
      <div class="input-group input-group-lg margin10">
        <span class="input-group-addon glyphicon glyphicon-film"></span>
        {!!Form::text('titulo',null,['class'=>'form-control','placeholder'=>'Titulo'])!!}
      </div>
			<div class="input-group input-group-lg margin10">
        <span class="input-group-addon glyphicon glyphicon-list-alt"></span>
        {!!Form::text('descripcion',null,['class'=>'form-control','placeholder'=>'Descripcion'])!!}
      </div>
      <div class="input-group input-group-lg margin10">
        <span class="input-group-addon glyphicon glyphicon-link"></span>
        {!!Form::text('corto',null,['class'=>'form-control','placeholder'=>'Ruta Corto'])!!}
      </div>
      {!!Form::submit('Realizar Inscripcion',['class'=>'btn boton margintop25'])!!}
      {!!Form::close()!!}
  </div>
@endsection
