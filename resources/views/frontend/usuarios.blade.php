<?php

				$user=Auth::user()->id;
				
?>
@extends('layouts.frontend')
	@section('content')
	<div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
  @foreach($concursos as $concurso)
	<?php
					$ini=$concurso->fechainicioinscripcion;
					$fin=$concurso->fechafininscripcion;
					$finconcurso=$concurso->fechafinconcurso;
					$now=new \Carbon\Carbon();
					$id=$concurso->id;
					$user=Auth::user()->id;
					$estaparticipando=InscripcionconcursoController::existeusuario($user,$id);
	?>

@extends('layouts.admin')
	@section('content')
  {!!Form::open(['route'=>'adminusuarios.store','method'=>'POST'])!!}
  <h1 class="textoMarron text-center">Mi perfil</h1>
	@include('alerts.errorformulario')
  <div class="col-xs-12 col-xs-offset-0 col-sm-10 col-sm-offset-1">
      <div class="input-group input-group-lg margin10">
        <span class="input-group-addon glyphicon glyphicon-envelope"></span>
        {!!Form::text('email',null,['class'=>'form-control','placeholder'=>'Ingrese el email'])!!}
      </div>
      <div class="input-group input-group-lg margin10">
        <span class="input-group-addon glyphicon glyphicon-certificate"></span>
        {!!Form::password('password',['class'=>'form-control','placeholder'=>'Ingrese la contraseña'])!!}
      </div>
      <div class="input-group input-group-lg margin10">
        <span class="input-group-addon glyphicon glyphicon-font"></span>
        {!!Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Ingrese el nombre'])!!}
      </div>
    <div class="input-group input-group-lg margin10">
        <span class="input-group-addon glyphicon glyphicon-bold"></span>
        {!!Form::text('apellidos',null,['class'=>'form-control','placeholder'=>'Ingrese los apellidos'])!!}
      </div>
    <div class="input-group input-group-lg margin10">
        <span class="input-group-addon glyphicon glyphicon-home margin10"></span>
        {!!Form::text('direccion',null,['class'=>'form-control','placeholder'=>'Ingrese la dirección'])!!}
      </div>
    <div class="input-group input-group-lg margin10">
        <span class="input-group-addon glyphicon glyphicon-globe"></span>
        {!!Form::text('localidad',null,['class'=>'form-control','placeholder'=>'Ingrese la localidad'])!!}
      </div>
      <div class="input-group input-group-lg margin10">
        <span class="input-group-addon glyphicon glyphicon-calendar"></span>
          {!!Form::date('fechanacimiento', \Carbon\Carbon::now(),['class'=>'form-control'])!!}
      </div>
      <div class="input-group input-group-lg margin10">
        <span class="input-group-addon glyphicon glyphicon-picture"></span>
          {!!Form::file('imagen',['class'=>'form-control'])!!}
      </div>
      <div class="form-group margin10">
        <span class="glyphicon glyphicon-new-window"> Hombre&nbsp</span>{!!Form::radio('genero', 'Hombre', true)!!}
        <span class="glyphicon glyphicon-rub"> Mujer&nbsp </span>{!!Form::radio('genero', 'Mujer')!!}
      </div>
			<div class="form-group margin10"><p>Tipo de Usuario</p>
				<span> Administrador&nbsp</span>{!!Form::radio('tipousuario', 'admin')!!}
				<span> Normal&nbsp </span>{!!Form::radio('tipousuario', 'normal', true)!!}
			</div>
      {!!Form::submit('Registrar',['class'=>'btn boton'])!!}
      {!!Form::close()!!}
  </div>
@endsection
