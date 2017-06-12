@extends('layouts.admin')
	@section('content')
  {!!Form::model($mensajechat,['route'=>['adminmensajechat.update',$mensajechat->id],'method'=>'PUT'])!!}
	@include('alerts.errorformulario')

	<div class="col-xs-12 col-xs-offset-0 col-sm-10 col-sm-offset-1 cuadrado">
		<h1 class="textoMarron text-center">Editar Mensaje</h1>
		<div class="input-group input-group-lg margin10">
			<span class="input-group-addon glyphicon glyphicon-envelope"></span>
			{!!Form::number('idmiembro',null,['class'=>'form-control','placeholder'=>'ID Miembro','readonly'])!!}
		</div>
		<div class="input-group input-group-lg margin10">
			<span class="input-group-addon glyphicon glyphicon-envelope"></span>
			{!!Form::text('mensaje',null,['class'=>'form-control','placeholder'=>'Mensaje'])!!}
		</div>
      {!!Form::submit('Actualizar Mensaje',['class'=>'btn boton'])!!}
      {!!Form::close()!!}
  </div>
@endsection
