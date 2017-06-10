@extends('layouts.frontend')
	@section('content')
  {!!Form::open(['route'=>'inscripcionconcurso.store','method'=>'POST'])!!}
	<div class="col-xs-10 col-xs-offset-1 cuadrado container-fluid margintopbottom25">
		<h1 class="col-xs-12 text-center">{{$concurso->nombre}}</h1>
		<p class="textoMarron"><strong class="col-xs-12 col-sm-6">Plazo Inscripción: {{$concurso->fechainicioinscripcion}} al {{$concurso->fechafininscripcion}}</strong>
		<strong class="col-sm-6 col-xs-12 text-right"> El concurso finaliza: {{$concurso->fechafinconcurso}}</strong></p>
		<div class="col-xs-10 col-xs-offset-1 margintop25">
			<p class="col-xs-12">{{$concurso->descripcion}}</p>
		</div>
		<div class="col-xs-10 col-xs-offset-1 borde fondoItem margintopbottom25">
			<h1 class="text-center">Partipar en el Concurso</h1>
			<div class="input-group input-group-lg margin10">
			<span class="input-group-addon">Codigo del Concurso</span>
			<?php $concursos=$concurso->id; ?>
			{!!Form::text('idconcurso',$concursos,['class'=>'form-control ','placeholder'=>'','readonly'])!!}
			</div>
			<div class="input-group input-group-lg margin10">
			<span class="input-group-addon">Participante Principal</span>
			<?php $user=Auth::user()->id; ?>
			{!!Form::text('idusuario',$user,['class'=>'form-control ','placeholder'=>'','readonly'])!!}
			</div>
			<div class="input-group input-group-lg margin10">
        <span class="input-group-addon"><i class="fa fa-users" aria-hidden="true"></i></span>
        {!!Form::textarea('otrosparticipantes',null,['class'=>'form-control','placeholder'=>'Ingrese otros participantes'])!!}
      </div>
			<div class="input-group input-group-lg margin10">
        <span class="input-group-addon"><i class="fa fa-text-width" aria-hidden="true"></i></span>
        {!!Form::text('titulo',null,['class'=>'form-control','placeholder'=>'Titulo del Corto'])!!}
      </div>
      <div class="input-group input-group-lg margin10">
        <span class="input-group-addon"><i class="fa fa-newspaper-o" aria-hidden="true"></i></span>
        {!!Form::textarea('descripcion',null,['class'=>'form-control','placeholder'=>'Ingrese la descripcion'])!!}
      </div>
			<div class="input-group input-group-lg margin10">
				<span class="input-group-addon"><i class="fa fa-link" aria-hidden="true"></i></span>
				{!!Form::text('corto',null,['class'=>'form-control','placeholder'=>'Ruta del Corto'])!!}
			</div>
			{!!Form::submit('Participar Concurso',['class'=>'btn boton margin10'])!!}
	</div>
{!!Form::close()!!}
@endsection
