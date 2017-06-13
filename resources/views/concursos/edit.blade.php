@extends('layouts.admin')
	@section('content')
  {!!Form::model($concurso,['route'=>['adminconcurso.update',$concurso->id],'method'=>'PUT'])!!}
	 {{ csrf_field() }}
	@include('alerts.errorformulario')

  <div class="col-xs-12 col-xs-offset-0 col-sm-10 col-sm-offset-1 cuadrado">
		<h1 class="textoMarron text-center">Editar concurso</h1>
      <div class="input-group input-group-lg margin10">
        <span class="input-group-addon glyphicon glyphicon-envelope"></span>
        {!!Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Ingrese el nombre'])!!}
      </div>
      <div class="input-group input-group-lg margin10">
        <span class="input-group-addon glyphicon glyphicon-envelope"></span>
        {!!Form::text('descripcion',null,['class'=>'form-control','placeholder'=>'Ingrese la descripcion'])!!}
      </div>
      <div class="input-group input-group-lg margin10">
        <span class="input-group-addon glyphicon glyphicon-envelope"></span>
        {!!Form::date('fechainicioinscripcion',null,['class'=>'form-control','placeholder'=>'Ingrese la fecha de inicio'])!!}
      </div>
      <div class="input-group input-group-lg margin10">
        <span class="input-group-addon glyphicon glyphicon-envelope"></span>
        {!!Form::date('fechafininscripcion',null,['class'=>'form-control','placeholder'=>'Ingrese la fecha fin de plazo'])!!}
      </div>
      <div class="input-group input-group-lg margin10">
        <span class="input-group-addon glyphicon glyphicon-envelope"></span>
        {!!Form::date('fechafinconcurso',null,['class'=>'form-control','placeholder'=>'Ingrese la fecha fin de concurso'])!!}
      </div>
      {!!Form::submit('Registrar',['class'=>'btn boton'])!!}
      {!!Form::close()!!}
  </div>
@endsection
