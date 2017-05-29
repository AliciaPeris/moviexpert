@extends('layouts.frontend')
	@section('content')

	<div class="col-xs-12 fondoItem container-fluid margintopbottom25">
		<h1 class="col-xs-12 text-center">{{$concurso->nombre}}</h1>
		<p class="textoMarron"><strong class="col-xs-12 col-sm-6">Plazo Inscripción: {{$concurso->fechainicioinscripcion}} al {{$concurso->fechafininscripcion}}</strong>
		<strong class="col-sm-6 col-xs-12 text-right"> El concurso finaliza: {{$concurso->fechafinconcurso}}</strong></p>
		<div class="col-xs-10 col-xs-offset-1 margintop25">
			<p class="col-xs-12">{{$concurso->descripcion}}</p>
		</div>
		<div class="col-xs-10 col-xs-offset-1 borde">
			<h1 class="text-center">Partipar en el Concurso</h1>
			<div class="input-group input-group-lg margin10">
			<span class="input-group-addon glyphicon glyphicon-envelope">Codigo del Concurso</span>
			<?php $concursos=$concurso->id; ?>
			{!!Form::text('idconcurso',$concursos,['class'=>'form-control ','placeholder'=>'','readonly'])!!}
			</div>
			<div class="input-group input-group-lg margin10">
			<span class="input-group-addon glyphicon glyphicon-envelope">Participante Principal</span>
			<?php $user=Auth::user()->email; ?>
			{!!Form::text('idusuario',$user,['class'=>'form-control ','placeholder'=>'','readonly'])!!}
			</div>
			<div class="input-group input-group-lg margin10">
        <span class="input-group-addon glyphicon glyphicon-envelope"></span>
        {!!Form::text('otrosparticipantes',null,['class'=>'form-control','placeholder'=>'Ingrese otros participantes'])!!}
      </div>
			<div class="input-group input-group-lg margin10">
        <span class="input-group-addon glyphicon glyphicon-envelope"></span>
        {!!Form::text('titulo',null,['class'=>'form-control','placeholder'=>'Titulo del Corto'])!!}
      </div>
      <div class="input-group input-group-lg margin10">
        <span class="input-group-addon glyphicon glyphicon-envelope"></span>
        {!!Form::text('descripcion',null,['class'=>'form-control','placeholder'=>'Ingrese la descripcion'])!!}
      </div>
			<div class="input-group input-group-lg margin10">
				<span class="input-group-addon glyphicon glyphicon-envelope"></span>
				{!!Form::text('corto',null,['class'=>'form-control','placeholder'=>'Ruta del Corto'])!!}
			</div>
			{!!Form::submit('Participar',['class'=>'btn boton margin10'])!!}
	</div>

@endsection
