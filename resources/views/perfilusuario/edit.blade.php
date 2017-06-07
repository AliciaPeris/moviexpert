@extends('layouts.frontend')
	@section('content')
  {!!Form::model($user,['route'=>['perfilusuario.update',$user->id],'method'=>'PUT'])!!}
  <h1 class="textoMarron text-center">Formulario de registro de usuario</h1>
	@include('alerts.errorformulario')
  <div class="col-xs-12 col-xs-offset-0 col-sm-10 col-sm-offset-1">
      <div class="input-group input-group-lg margin10">
        <span class="input-group-addon glyphicon glyphicon-envelope"></span>
        {!!Form::text('email',$user->email,['class'=>'form-control','placeholder'=>'','readonly'])!!}
      </div>
      <div class="input-group input-group-lg margin10">
        <span class="input-group-addon glyphicon glyphicon-certificate"></span>
        {!!Form::password('password',['class'=>'form-control','placeholder'=>'Ingrese la contraseña'])!!}
      </div>
      <div class="input-group input-group-lg margin10">
        <span class="input-group-addon glyphicon glyphicon-font"></span>
        {!!Form::text('nombre',$user->nombre,['class'=>'form-control','placeholder'=>'Ingrese el nombre'])!!}
      </div>
    <div class="input-group input-group-lg margin10">
        <span class="input-group-addon glyphicon glyphicon-bold"></span>
        {!!Form::text('apellidos',$user->apellidos,['class'=>'form-control','placeholder'=>'Ingrese los apellidos'])!!}
      </div>
    <div class="input-group input-group-lg margin10">
        <span class="input-group-addon glyphicon glyphicon-home margin10"></span>
        {!!Form::text('direccion',$user->direccion,['class'=>'form-control','placeholder'=>'Ingrese la dirección'])!!}
      </div>
    <div class="input-group input-group-lg margin10">
        <span class="input-group-addon glyphicon glyphicon-globe"></span>
        {!!Form::text('localidad',$user->localidad,['class'=>'form-control','placeholder'=>'Ingrese la localidad'])!!}
      </div>
      <div class="input-group input-group-lg margin10">
        <span class="input-group-addon glyphicon glyphicon-calendar"></span>
          {!!Form::date('fechanacimiento', $user->fechanacimiento,['class'=>'form-control'])!!}
      </div>
      <div class="input-group input-group-lg margin10">
        <span class="input-group-addon glyphicon glyphicon-picture novisible"></span>
          {!!Form::text('foto',$user->foto,['class'=>'novisible','placeholder'=>'','readonly'])!!}
      </div>
      <div class="form-group margin10">
        <span class="glyphicon glyphicon-new-window"> Hombre&nbsp</span>{!!Form::radio('genero', 'Hombre', true)!!}
        <span class="glyphicon glyphicon-rub"> Mujer&nbsp </span>{!!Form::radio('genero', 'Mujer')!!}
      </div>
			<div class="form-group margin10">
				{!!Form::text('tipousuario', 'normal', ['class'=>'novisible','placeholder'=>'','readonly'])!!}
			</div>
      {!!Form::submit('Actualizar Datos',['class'=>'btn boton'])!!}
			<a class="btn boton" href="/perfilusuario/confirmdelete">Borrar cuenta</a>
  </div>
    {!!Form::close()!!}
@endsection
