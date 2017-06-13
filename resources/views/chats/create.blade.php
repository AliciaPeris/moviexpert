@extends('layouts.admin')
	@section('content')
  {!!Form::open(['route'=>'adminchat.store','method'=>'POST'])!!}
	 {{ csrf_field() }}
	@include('alerts.errorformulario')

  <div class="col-xs-12 col-xs-offset-0 col-sm-10 col-sm-offset-1 cuadrado">
		<h1 class="textoMarron text-center">Nuevo grupo de chat</h1>
      <div class="input-group input-group-lg margin10">
        <span class="input-group-addon glyphicon glyphicon-envelope"></span>
        {!!Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Ingrese el nombre'])!!}
				
      </div>
      <div class="input-group input-group-lg margin10">
        <span class="input-group-addon glyphicon glyphicon-envelope"></span>
        {!!Form::text('descripcion',null,['class'=>'form-control','placeholder'=>'Ingrese la descripción'])!!}
      </div>
      <div class="input-group input-group-lg margin10">
        <span class="input-group-addon glyphicon glyphicon-envelope"></span>
        {!!Form::text('numguionistas',null,['class'=>'form-control','placeholder'=>'Ingrese el número de guionistas'])!!}
      </div>
      <div class="input-group input-group-lg margin10">
        <span class="input-group-addon glyphicon glyphicon-envelope"></span>
        {!!Form::text('numactores',null,['class'=>'form-control','placeholder'=>'Ingrese el número de actores'])!!}
      </div>
      <div class="input-group input-group-lg margin10">
        <span class="input-group-addon glyphicon glyphicon-envelope"></span>
        {!!Form::text('numdirectores',null,['class'=>'form-control','placeholder'=>'Ingrese el número de directores'])!!}
      </div>
      <div class="input-group input-group-lg margin10">
        <span class="input-group-addon glyphicon glyphicon-envelope"></span>
        {!!Form::text('numcamaras',null,['class'=>'form-control','placeholder'=>'Ingrese el número de cámaras'])!!}
      </div>
      <div class="input-group input-group-lg margin10">
        <span class="input-group-addon glyphicon glyphicon-envelope"></span>
        {!!Form::text('numcamaras',null,['class'=>'form-control','placeholder'=>'Ingrese el número de cámaras'])!!}
      </div>
      {!!Form::submit('Registrar',['class'=>'btn boton'])!!}
      {!!Form::close()!!}
  </div>
@endsection
