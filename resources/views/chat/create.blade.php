@extends('layouts.frontend')
	@section('content')
  {!!Form::open(['route'=>'grupochat.store','method'=>'POST'])!!}
	<p class="col-xs-12 textoMarron text-center margintopbottom25"> Actor: <i class="glyphicon glyphicon-user"></i> | Guionista: <i class="glyphicon glyphicon-list-alt"></i> | Director: <i class="glyphicon glyphicon-film"></i> | Camara: <i class="glyphicon glyphicon-facetime-video"></i></p>
  <h1 class="textoMarron text-center">Introducir chat</h1>
  <div class="col-xs-12 col-xs-offset-0 col-sm-6 col-sm-offset-3">
      <div class="input-group input-group-lg margintop10">
        <span class="input-group-addon glyphicon glyphicon-comment"></span>
        {!!Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Nombre del Chat'])!!}
      </div>
      <div class="input-group input-group-lg margintop10">
        <span class="input-group-addon glyphicon glyphicon-book"></span>
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
