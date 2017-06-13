@extends('layouts.admin')
	@section('content')
  {!!Form::open(['route'=>'adminvotosconcurso.store','method'=>'POST'])!!}
	 {{ csrf_field() }}
@include('alerts.errorformulario')
  <div class="col-xs-12 col-xs-offset-0 col-sm-10 col-sm-offset-1 blanco">
		  <h1 class="textoMarron text-center">Introducir Voto</h1>
			<div class="input-group input-group-lg margin10">
        <span class="input-group-addon glyphicon glyphicon-envelope"></span>
        {!!Form::select('idcortoconcurso',$cortos,null,["class"=>'form-control'])!!}
      </div>
			<div class="input-group input-group-lg margin10">
        <span class="input-group-addon glyphicon glyphicon-user"></span>
          {!!Form::select('idusuario',$usuarios,null,["class"=>'form-control'])!!}
      </div>
      <div class="input-group input-group-lg margin10">
        <span class="input-group-addon glyphicon glyphicon-envelope"></span>
        {!!Form::number('voto',null,['class'=>'form-control','placeholder'=>'Ingrese la fecha de inicio'])!!}
      </div>
      <div class="input-group input-group-lg margin10">
        <span class="input-group-addon glyphicon glyphicon-envelope"></span>
        {!!Form::date('fechavoto',null,['class'=>'form-control','placeholder'=>'Ingrese la fecha fin de concurso'])!!}
      </div>
      {!!Form::submit('Registrar',['class'=>'btn boton'])!!}
      {!!Form::close()!!}
  </div>
@endsection
