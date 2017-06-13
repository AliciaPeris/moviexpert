@extends('layouts.admin')
	@section('content')
  {!!Form::model($genero,['route'=>['admingenero.update',$genero->id],'method'=>'PUT'])!!}
	 {{ csrf_field() }}
	@include('alerts.errorformulario')

  <div class="col-xs-12 col-xs-offset-0 col-sm-10 col-sm-offset-1 cuadrado">
		<h1 class="textoMarron text-center">Editar género</h1>
      <div class="input-group input-group-lg margin10">
        <span class="input-group-addon  glyphicon glyphicon-tags"></span>
        {!!Form::text('genero',null,['class'=>'form-control','placeholder'=>'Ingrese el titulo'])!!}
      </div>
      {!!Form::submit('Registrar',['class'=>'btn boton'])!!}
      {!!Form::close()!!}
  </div>

@endsection
