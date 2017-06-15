@extends('layouts.frontend')
	@section('content')
  {!!Form::open(['route'=>'grupochat.store','method'=>'POST'])!!}
	 {{ csrf_field() }}
	@include('chat.menuchat')
	@include('alerts.errorformulario')
  <div class="col-xs-12 col-xs-offset-0 col-sm-6 col-sm-offset-3 blanco">
		<h1 class="textoMarron text-center">Introducir chat</h1>

      <div class="input-group input-group-lg margintop10">
        <span class="input-group-addon glyphicon glyphicon-comment"></span>
        {!!Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Nombre del Chat'])!!}
      </div>
      <div class="input-group input-group-lg margintop10">
        <span class="input-group-addon"><i class="fa fa-newspaper-o" aria-hidden="true"></i></span>
        {!!Form::textarea('descripcion',null,['class'=>'form-control','placeholder'=>'Descripción del Chat'])!!}
      </div>
      <div class="input-group input-group-lg margintop10 col-xs-12 col-sm-4 col-sm-offset-4">
        <span class="input-group-addon glyphicon glyphicon-list-alt"></span>
        {!!Form::number('numguionistas',null,['class'=>'form-control','placeholder'=>'Nº Guionistas'])!!}
      </div>
      <div class="input-group input-group-lg margintop10 col-xs-12 col-sm-4 col-sm-offset-4">
        <span class="input-group-addon glyphicon glyphicon glyphicon-user"></span>
        {!!Form::number('numactores',null,['class'=>'form-control','placeholder'=>'Nº Actores'])!!}
      </div>
      <div class="input-group input-group-lg margintop10 col-xs-12 col-sm-4 col-sm-offset-4">
        <span class="input-group-addon glyphicon glyphicon-film"></span>
        {!!Form::number('numdirectores',null,['class'=>'form-control','placeholder'=>'Nº Directores'])!!}
      </div>
      <div class="input-group input-group-lg margintop10 col-xs-12 col-sm-4 col-sm-offset-4">
        <span class="input-group-addon glyphicon glyphicon-facetime-video"></span>
        {!!Form::number('numcamaras',null,['class'=>'form-control','placeholder'=>'Nº Cámaras'])!!}
      </div>
				<?php $user=Auth::user()->id;?>
        {!!Form::text('creadorchat',$user,['hidden'])!!}
      {!!Form::submit('Crear Grupo Chat',['class'=>'btn boton margintopbottom25 col-xs-12 col-sm-4 col-sm-offset-4'])!!}
      {!!Form::close()!!}
  </div>
@endsection
