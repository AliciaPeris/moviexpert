
@extends('layouts.admin')
	@section('content')
	<div class="container-fluid cuadrado">
  {!!Form::open(['route'=>'admingenero.store','method'=>'POST'])!!}
	 {{ csrf_field() }}
	@include('alerts.errorformulario')

  <h1 class="textoMarron text-center">Introducir género</h1>
  <div class="col-xs-12 col-xs-offset-0 col-sm-10 col-sm-offset-1">
      <div class="input-group input-group-lg margin10">
        <span class="input-group-addon glyphicon glyphicon-tags"></span>
        {!!Form::text('genero',null,['class'=>'form-control','placeholder'=>'Ingrese el titulo'])!!}
      </div>
      {!!Form::submit('Registrar',['class'=>'btn boton'])!!}
      {!!Form::close()!!}
  </div>
</div>
@endsection
