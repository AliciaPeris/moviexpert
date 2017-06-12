@extends('layouts.admin')
	@section('content')
  {!!Form::open(['route'=>'adminmensajechat.store','method'=>'POST'])!!}
	@include('alerts.errorformulario')

  <div class="col-xs-12 col-xs-offset-0 col-sm-10 col-sm-offset-1 cuadrado">
		<h1 class="textoMarron text-center">Nuevo Mensaje</h1>
      <div class="input-group input-group-lg margin10">
        <span class="input-group-addon glyphicon glyphicon-envelope"></span>
        {!!Form::number('idmiembro',null,['class'=>'form-control','placeholder'=>'ID Miembro'])!!}
      </div>
      <div class="input-group input-group-lg margin10">
        <span class="input-group-addon glyphicon glyphicon-user"></span>
        {!!Form::text('mensaje',null,['class'=>'form-control','placeholder'=>'Mensaje'])!!}
      </div>
      {!!Form::submit('Enviar Mensaje',['class'=>'btn boton margintop25'])!!}
      {!!Form::close()!!}
  </div>
@endsection
