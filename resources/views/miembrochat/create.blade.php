@extends('layouts.frontend')
	@section('content')
	@include('chat.menuchat')
<h3>El usuario que creo el grupo no tiene porque participar en el chat, pero si puede ver todo el contenido de este, incluso borrar el grupo si le deja de interesar,tambien puede expulsar a un usuario del grupo.</h3>
{!!Form::open(['route'=>'miembrochat.store','method'=>'POST'])!!}
<div class="container">
<img class="part margin10" src="/imagenes/concursos.png" title="Director" alt="Director"></img>
<img class="part margin10" src="/imagenes/usuarios.png" title="Actor" alt="Actor"></img>
<img class="part margin10" src="/imagenes/estrenos.png" title="Camara" alt="Camara"></img>
<img class="part margin10" src="/imagenes/chat.png" title="Guionista" alt="Guionista"></img>
<h3 class="margintop25 text-center ocultar">Unirse al grupo como: </h3>
{!!Form::text('tipomiembro',null,['class'=>'form-control ocultar','placeholder'=>'','readonly','id'=>'info'])!!}
{!!Form::hidden('idchat',$chat->id,['class'=>'form-control ','placeholder'=>''])!!}
<?php $user=Auth::user()->id; ?>
{!!Form::hidden('idusuario',$user,['class'=>'form-control ','placeholder'=>''])!!}
{!!Form::submit('Unirse al Grupo',['class'=>'btn boton margintop25 ocultar'])!!}
</div>
{!!Form::close()!!}
@endsection
