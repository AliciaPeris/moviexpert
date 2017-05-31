<?php use moviexpert\Http\Controllers\InscripcionconcursoController;?>
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
				@if($ini<$now && $fin>$now && ($estaparticipando==0))
					<a class='btn boton col-xs-3 margin10' href={{url('concursos/participanconcurso/'.$id)}}>Incripción Concurso</a>
				@else
					<strong class="col-xs-12 col-sm-12 col-md-5 col-lg-5 margin10">Estas fuera de plazo de inscripcion o ya estas inscrito</strong>
				@endif

			@if($fin<$now && $now<$finconcurso)
				{!!link_to_route('inscripcionconcurso.show', $title = "Ver Participantes",$parameters= $concurso->id , $attributes = ['class'=>'btn boton col-xs-3 margin10'])!!}
			@else
				<strong class="col-xs-12 col-sm-12 col-md-6 col-lg-6 margin10">Podrás votar cuando acabe la fase de inscripción</strong>
			@endif
			@if($now>$finconcurso)
			<h3>El concurso ha finalizado.</h3>
			@endif
				</div>
		@endforeach
	</div>

@endsection
