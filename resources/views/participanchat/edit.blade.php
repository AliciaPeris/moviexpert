@extends('layouts.admin')
	@section('content')
  {!!Form::model($participanchat,['route'=>['adminparticipanchat.update',$participanchat->id],'method'=>'PUT'])!!}
  <div class="col-xs-12 col-xs-offset-0 col-sm-10 col-sm-offset-1 cuadrado">
		<h1 class="textoMarron text-center">Editar Incripcion</h1>
		<div class="input-group input-group-lg margin10">
			<span class="input-group-addon glyphicon glyphicon-envelope"></span>
			{!!Form::number('idchat',null,['class'=>'form-control','placeholder'=>'ID Chat','readonly'])!!}
		</div>
		<div class="input-group input-group-lg margin10">
			<span class="input-group-addon glyphicon glyphicon-envelope"></span>
			{!!Form::number('idusuario',null,['class'=>'form-control','placeholder'=>'ID Usuario','readonly'])!!}
		</div>
		<div class="input-group input-group-lg margin10">
			<span class="input-group-addon glyphicon glyphicon-envelope"></span>
			{!!Form::text('tipomiembro',null,['class'=>'form-control','placeholder'=>'Tipo Miembro'])!!}
		</div>
      {!!Form::submit('Registrar',['class'=>'btn boton'])!!}
      {!!Form::close()!!}
  </div>
@endsection
