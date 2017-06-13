@extends('layouts.frontend')
	@section('content')

  {!!Form::model($user,['route'=>['perfilusuario.update',$user->id],'method'=>'PUT'])!!}
 {{ csrf_field() }}
	@include('alerts.errorformulario')
  <div class="col-xs-12 col-xs-offset-0 col-sm-10 col-sm-offset-1 cuadrado">
		  <h1 class="textoMarron text-center">Mis datos</h1>
      <div class="input-group input-group-lg margin10">
        <span class="input-group-addon glyphicon glyphicon-envelope"></span>
        {!!Form::text('email',$user->email,['class'=>'form-control','placeholder'=>'','readonly'])!!}
      </div>
      <div class="input-group input-group-lg margin10">
        <span class="input-group-addon"><i class="fa fa-key" aria-hidden="true"></i></span>
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
        <span class="fa fa-male"> Hombre&nbsp</span>{!!Form::radio('genero', 'Hombre', true)!!}
        <span class="fa fa-female"> Mujer&nbsp </span>{!!Form::radio('genero', 'Mujer')!!}
      </div>
			<div class="form-group margin10">
				{!!Form::text('tipousuario', 'normal', ['class'=>'novisible','placeholder'=>'','readonly'])!!}
			</div>
      {!!Form::submit('Actualizar Datos',['class'=>'btn boton'])!!}
  </div>
    {!!Form::close()!!}
  <div class="col-xs-12 col-xs-offset-0 col-sm-10 col-sm-offset-1" style="text-align:right;padding/-top:30px;">
    {!!Form::open(['route'=>['perfilusuario.destroy','destroy'],'method'=>'DELETE'])!!}
		 {{ csrf_field() }}
    {!!Form::submit('Borrar cuenta',['class'=>'btn boton margin5'])!!}
    {!!Form::close()!!}
  </div>
    <script>
      document.forms[2][2].addEventListener("click", function(event){
        if(!confirm("¿Realmente desea borrar su usuario, si lo hace no hay vuelta atrás?")) event.preventDefault();
    });
    </script>
@endsection
