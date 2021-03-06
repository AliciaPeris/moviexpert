<?php use moviexpert\Http\Controllers\VotarcortoController;?>
<?php use moviexpert\Http\Controllers\UserController;?>
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
				$iduser=(integer)($user);
				$nombre=UserController::nombreUser($iduser);
				?>
				@foreach($nombre as $nom)
  <div class="col-xs-12 cuadrado container-fluid margintop25">
    <h1 class="col-xs-12 text-center">{{$ins->titulo}}</h1>
    <div class="col-xs-8 container-fluid margintop25">
    <div class="col-xs-9 col-xs-offset-1 margintop25">
      <p class="col-xs-12">Usuario: {{$ins->idusuario}} <?php echo " - ".$nom->nombre;?></p>
    </div>
    <div class="col-xs-10 col-xs-offset-1 margintop25">
      <p class="col-xs-12">Otros Participantes: {{$ins->otrosparticipantes}}</p>
    </div>
    <div class="col-xs-10 col-xs-offset-1 margintop25">
      <p class="col-xs-12">{{$ins->descripcion}}</p>
    </div>
    <div class="col-xs-10 col-xs-offset-1 margintop25">
      <iframe id="corto"  src="https://www.youtube.com/embed/{{$ins->corto}}" frameborder="0" allowfullscreen></iframe>
    </div>
  </div>
  <div class="col-xs-3 cuadrado margintop25">
    <?php
          $idpart=$ins->id;
          //Llamamos a la funcion usuriovoto que esta definida en el controlador y lo unico que hace es pedit datos a la base de datos y retornalos
          $usuarioavotado=VotarcortoController::usuariovoto($idpart,$user);
          $votos=VotarcortoController::votoscorto($idpart);
    ?>
      <p>Total Votos: <?php if($votos=="") echo "0"; else echo $votos;?></p>
      @if($usuarioavotado==0)
			<div>
			{!!Form::open(['route'=>'votarcorto.store','method'=>'POST'])!!}
			 {{ csrf_field() }}
			{!!Form::text('idconcurso',$idpart,['hidden'])!!}
			{!!Form::text('idusuario',$user,['hidden'])!!}
			{!!Form::date('fechavoto',$now,['hidden'])!!}

        <p class="margintop25">Vota este corto</p>
					<p class="col-xs-12">{!!Form::radio('voto', '5')!!}<strong><i class="glyphicon glyphicon-star textoSalmon"></i><i class="glyphicon glyphicon-star textoSalmon"></i><i class="glyphicon glyphicon-star textoSalmon"></i><i class="glyphicon glyphicon-star textoSalmon"></i><i class="glyphicon glyphicon-star textoSalmon"></i></strong></p>
					<p class="col-xs-12">{!!Form::radio('voto', '4')!!}<strong><i class="glyphicon glyphicon-star textoSalmon"></i><i class="glyphicon glyphicon-star textoSalmon"></i></strong><i class="glyphicon glyphicon-star textoSalmon"></i><i class="glyphicon glyphicon-startextoSalmon"></i></strong></p>
					<p class="col-xs-12">{!!Form::radio('voto', '3')!!}<strong><i class="glyphicon glyphicon-star textoSalmon"></i><i class="glyphicon glyphicon-star textoSalmon"></i></strong><i class="glyphicon glyphicon-star textoSalmon"></i></strong></p>
					<p class="col-xs-12">{!!Form::radio('voto', '2')!!}<strong><i class="glyphicon glyphicon-star textoSalmon"></i><i class="glyphicon glyphicon-star textoSalmon"></i></strong></p>
					<p class="col-xs-12">{!!Form::radio('voto', '1',true)!!}<strong><i class="glyphicon glyphicon-star textoSalmon"></i></p>
					{!!Form::submit('Votar',['class'=>'btn boton margin10'])!!}
        </div>
      @endif
    </div>

  </div>
  @endforeach
	@endforeach
</div>




@endsection
