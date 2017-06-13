@extends('layouts.admin')
@section('content')
  {!!Form::open(['route'=>'adminpelicula.store','method'=>'POST','files' => true])!!}
  @include('alerts.errorformulario')
  <div class="container-fluid cuadrado">
  <h1 class="textoMarron text-center">Formulario de registro de pelicula</h1>
  <div class="col-xs-12 col-xs-offset-0 col-sm-10 col-sm-offset-1">
      <div class="input-group input-group-lg margin10">
        <span class="input-group-addon glyphicon glyphicon-envelope"></span>
        {!!Form::text('titulo',null,['class'=>'form-control','placeholder'=>'Ingrese el titulo'])!!}
      </div>
      <div class="input-group input-group-lg margin10">
        <span class="input-group-addon glyphicon glyphicon-certificate"></span>
        {!!Form::date('anio',null,['class'=>'form-control','placeholder'=>'Ingrese el año'])!!}
      </div>
       <div class="input-group input-group-lg margin10">
        <span class="input-group-addon glyphicon glyphicon-font"></span>
        {!!Form::text('pais',null,['class'=>'form-control','placeholder'=>'Ingrese el pais'])!!}
      </div>
    <div class="input-group input-group-lg margin10">
        <span class="input-group-addon glyphicon glyphicon-bold"></span>
        {!!Form::text('director',null,['class'=>'form-control','placeholder'=>'Ingrese el director'])!!}
      </div>
    <div class="input-group input-group-lg margin10">
        <span class="input-group-addon glyphicon glyphicon-home margin10"></span>
        {!!Form::text('guion',null,['class'=>'form-control','placeholder'=>'Ingrese guionistas'])!!}
      </div>
    <div class="input-group input-group-lg margin10">
        <span class="input-group-addon glyphicon glyphicon-globe"></span>
        {!!Form::text('reparto',null,['class'=>'form-control','placeholder'=>'Ingrese el reparto'])!!}
      </div>
      <div class="input-group input-group-lg margin10">
        <span class="input-group-addon glyphicon glyphicon-calendar"></span>
          {!!Form::text('sinopsis', null,['class'=>'form-control','placeholder'=>'Ingrese la sinopsis'])!!}
      </div>
      <div class="input-group input-group margin10">
        <span class="input-group-addon glyphicon glyphicon-picture"></span>
          {!!Form::text('trailer',null,['class'=>'form-control','placeholder'=>'Ingrese el enlace a youtube'])!!}
      </div>
      <div class="form-group input-group margin10">
        <span class="input-group-addon glyphicon glyphicon-picture"></span>
                                        {{ csrf_field() }}
          {!!Form::file('imagen',['class'=>'form-control'])!!}
      </div>
      <div class="form-group input-group margin10">
        <span class="input-group-addon glyphicon glyphicon-home"></span>
          {!!Form::select('genero',$generos,null,["class"=>'form-control'])!!}
      </div>

      {!!Form::submit('Registrar',['class'=>'btn boton'])!!}
      {!!Form::close()!!}
  </div>
@endsection
