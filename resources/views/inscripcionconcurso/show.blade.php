<?php use moviexpert\Http\Controllers\VotarcortoController;?>
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
<?php
        $now=new \Carbon\Carbon();
        $id=$ins->id;
        $user=Auth::user()->id;
?>
  <div class="col-xs-12 fondoItem container-fluid margintop25">
    <h1 class="col-xs-12 text-center">{{$ins->titulo}}</h1>
    <div class="col-xs-8 fondoItem container-fluid margintop25">
    <div class="col-xs-9 col-xs-offset-1 margintop25">
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
  <div class="col-xs-3 fondoItem margintop25">
    <?php
          $idpart=$ins->id;
          //Llamamos a la funcion usuriovoto que esta definida en el controlador y lo unico que hace es pedit datos a la base de datos y retornalos
          $usuarioavotado=VotarcortoController::usuariovoto($idpart,$user);
          $votos=VotarcortoController::votoscorto($idpart);
    ?>
      <p>Total Votos: <?php echo $votos;?></p>
      @if($usuarioavotado==0)
        <p class="margintop25">Vota este corto</p>
        <div class="stars">
          <a href="#" data-value="1" title="Votar con 1 estrellas">&#9733;</a>
        	<a href="#" data-value="2" title="Votar con 2 estrellas">&#9733;</a>
        	<a href="#" data-value="3" title="Votar con 3 estrellas">&#9733;</a>
        	<a href="#" data-value="4" title="Votar con 4 estrellas">&#9733;</a>
        	<a href="#" data-value="5" title="Votar con 5 estrellas">&#9733;</a>
        </div>
      @endif
    </div>

  </div>
  @endforeach
</div>




@endsection
