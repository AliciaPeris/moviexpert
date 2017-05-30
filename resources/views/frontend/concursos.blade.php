@extends('layouts.frontend')
	@section('content')
	<div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
  @foreach($concursos as $concurso)
		<div class="col-xs-12 fondoItem container-fluid margintop25">
			<h1 class="col-xs-12 text-center">{{$concurso->nombre}}</h1>
			<p class="textoMarron"><strong class="col-xs-12 col-sm-6">Plazo Inscripción: {{$concurso->fechainicioinscripcion}} al {{$concurso->fechafininscripcion}}</strong>
			<strong class="col-sm-6 col-xs-12 text-right"> El concurso finaliza: {{$concurso->fechafinconcurso}}</strong></p>
			<div class="col-xs-10 col-xs-offset-1 margintop25">
				<p class="col-xs-12">{{$concurso->descripcion}}</p>
			</div>
			{!!link_to_route('inscripcionconcurso.create', $title = "Incripción",$parameters= $concurso->id , $attributes = ['class'=>'btn boton col-xs-2'])!!}</td>
				</div>
		@endforeach
	</div>

@endsection
