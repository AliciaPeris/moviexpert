@extends('layouts.admin')
	@section('content')
		@include('alerts.errorformulario')
	{!!Form::model($user,['route'=>['adminusuarios.update',$user->id],'method'=>'PUT'])!!}
 {{ csrf_field() }}
  <div class="col-xs-12 col-xs-offset-0 col-sm-10 col-sm-offset-1 cuadrado">
		  <h1 class="textoMarron text-center">Editar un usuario </h1>
      <div class="input-group input-group-lg margin10">
        <span class="input-group-addon glyphicon glyphicon-envelope"></span>
        {!!Form::text('email',null,['class'=>'form-control ','placeholder'=>'Ingrese el email','readonly'])!!}
      </div>
      <div class="input-group input-group-lg margin10">
        <span class="input-group-addon"><i class="fa fa-key" aria-hidden="true"></i></span>
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
        <span class="fa fa-male"> Hombre&nbsp</span>{!!Form::radio('genero', 'Hombre', true)!!}
        <span class="fa fa-female"> Mujer&nbsp </span>{!!Form::radio('genero', 'Mujer')!!}
      </div>
			<div class="form-group margin10"><p>Tipo de Usuario</p>
				<span> Administrador&nbsp</span>{!!Form::radio('tipousuario', 'admin')!!}
				<span> Normal&nbsp </span>{!!Form::radio('tipousuario', 'normal', true)!!}
			</div>
      {!!Form::submit('Registrar',['class'=>'btn boton'])!!}
      {!!Form::close()!!}
  </div>
@endsection
