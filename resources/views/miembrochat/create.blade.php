<?php use moviexpert\Http\Controllers\MiembrochatController;?>
@extends('layouts.frontend')
	@section('content')
	@include('chat.menuchat')
<h3>El usuario que creo el grupo no tiene porque participar en el chat, pero si puede ver todo el contenido de este, incluso borrar el grupo si le deja de interesar,tambien puede expulsar a un usuario del grupo.</h3>
{!!Form::open(['route'=>'miembrochat.store','method'=>'POST'])!!}
<div class="container blanco">
	<?php
	$idchat=$chat->id;
	$numcam=$chat->numcamaras;
	$numgui=$chat->numguionistas;
	$numdir=$chat->numdirectores;
	$numact=$chat->numactores;
	$numcam2=MiembrochatController::contarcamaras($idchat);
	$numact2=MiembrochatController::contaractores($idchat);
	$numdir2=MiembrochatController::contardirectores($idchat);
	$numgui2=MiembrochatController::contarguionistas($idchat);
	?>
	@if($numdir2<$numdir)
			<img class="part margin10" src="/imagenes/concursos.png" title="Director" alt="Director"></img>
	@else
			<img class="margin10" src="/imagenes/concursoscompleto.png" title="Director" alt="Director"></img>
	@endif
	@if($numact2<$numact)
		<img class="part margin10" src="/imagenes/usuarios.png" title="Actor" alt="Actor"></img>
	@else
		<img class="margin10" src="/imagenes/usuarioscompleto.png" title="Actor" alt="Actor"></img>
	@endif
	@if($numcam2<$numcam)
		<img class="part margin10" src="/imagenes/estrenos.png" title="Camara" alt="Camara"></img>
	@else
		<img class="margin10" src="/imagenes/estrenoscompleto.png" title="Camara" alt="Camara"></img>
	@endif
	@if($numgui2<$numgui)
		<img class="part margin10" src="/imagenes/chat.png" title="Guionista" alt="Guionista"></img>
	@else
		<img class="margin10" src="/imagenes/chatcompleto.png" title="Guionista" alt="Guionista"></img>
	@endif
<h3 class="margintop25 text-center ocultar">Unirse al grupo como: </h3>
{!!Form::text('tipomiembro',null,['class'=>'form-control ocultar','placeholder'=>'','readonly','id'=>'info'])!!}
{!!Form::text('idchat',$chat->id,['class'=>'form-control novisible','placeholder'=>''])!!}
<?php $user=Auth::user()->id; ?>
{!!Form::text('idusuario',$user,['class'=>'form-control novisible','placeholder'=>''])!!}
{!!Form::submit('Unirse al Grupo',['class'=>'btn boton margintop25 ocultar'])!!}
</div>
{!!Form::close()!!}
@endsection
