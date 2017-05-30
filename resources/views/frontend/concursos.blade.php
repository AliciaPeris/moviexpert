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
					Session::set('codConcurso', $id);
	?>
		<div class="col-xs-12 fondoItem container-fluid margintop25">
			<h1 class="col-xs-12 text-center">{{$concurso->nombre}}</h1>
			@if($ini<$now && $fin>$now)
			<p class="textoMarron"><strong class="col-xs-12 text-center">Plazo Inscripción: {{$concurso->fechainicioinscripcion}} al {{$concurso->fechafininscripcion}}</strong>
			@endif
			@if($fin<$now && $now<$finconcurso)
			<strong class="col-xs-12 text-center"> El concurso finaliza: {{$concurso->fechafinconcurso}}</strong></p>
			@endif
			<div class="col-xs-10 col-xs-offset-1 margintop25">
				<p class="col-xs-12">{{$concurso->descripcion}}</p>
			</div>

			@if($ini<$now && $fin>$now)
				{!!link_to_route('inscripcionconcurso.create', $title = "Incripción Concurso",$parameters=$concurso->id , $attributes = ['class'=>'btn boton col-xs-3 margin10'])!!}
				{!!link_to_route('inscripcionconcurso.show', $title = "Ver Participantes",$parameters= $concurso->id , $attributes = ['class'=>'btn boton col-xs-3 margin10'])!!}

			@endif
			@if($fin<$now && $now<$finconcurso)
				{!!link_to_route('inscripcionconcurso.show', $title = "Ver Participantes",$parameters= $concurso->id , $attributes = ['class'=>'btn boton col-xs-3 margin10'])!!}
			@endif
			@if($now>$finconcurso)
			<h3>El concurso ha finalizado.</h3>
			@endif
				</div>
		@endforeach
	</div>

@endsection
