@extends('layouts.frontend')
	@section('content')
	<div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
		<div class="col-xs-12 fondoCabecera container-fluid margintop25">
			<h1 class="col-xs-12 text-center textoSalmon">{{$concursos->nombre}}</h1>
			<p class="textoBlanco"><strong class="col-xs-12 text-center textoBlanco">Plazo Inscripción: {{$concursos->fechainicioinscripcion}} al {{$concursos->fechafininscripcion}}</strong>
			<strong class="col-xs-12 text-center textoBlanco"> El concurso finaliza: {{$concursos->fechafinconcurso}}</strong></p>
			<div class="col-xs-10 col-xs-offset-1 margintop25">
				<p class="col-xs-12 textoBlanco">{{$concursos->descripcion}}</p>
			</div>
    </div>
  </div>
  <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
@foreach($inscripcion as $ins)

  <div class="col-xs-12 fondoItem container-fluid margintop25">
    <h1 class="col-xs-12 text-center">{{$ins->titulo}}</h1>
    <div class="col-xs-10 col-xs-offset-1 margintop25">
      <p class="col-xs-12">Usuario: {{$ins->idusuario}}</p>
    </div>
    <div class="col-xs-10 col-xs-offset-1 margintop25">
      <p class="col-xs-12">Otros Participantes: {{$ins->otrosparticipantes}}</p>
    </div>
    <div class="col-xs-10 col-xs-offset-1 margintop25">
      <p class="col-xs-12">{{$ins->descripcion}}</p>
    </div>
    <div class="col-xs-10 col-xs-offset-1 margintop25">
      <p class="col-xs-12">Ruta Corto: {{$ins->corto}}</p>
    </div>
  </div>
  @endforeach
</div>




@endsection
