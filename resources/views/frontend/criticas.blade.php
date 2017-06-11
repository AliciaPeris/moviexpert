@extends('layouts.frontend')
	@section('content')


<div class="col-xs-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2 cuadrado">

  		<ul class="nav nav-tabs">
        <li class=""><a class="textoFicha" href="{{ url('/ficha/') }}/{{$peliculas->id}}">Ficha</a></li>
        <li class=""><a class="textoFicha" href="/peliculas">Trailer</a></li>
        <li class="active"><a class="textoFicha" href="{{ url('/criticas/') }}/{{$peliculas->id}}">Críticas</a></li>
      </ul>



<form method="POST" action="/pcritica" class="col-xs-12">
  @if (Auth::guest())
	<div class="alert alert-danger alert-dismissible" role="alert">
    <strong>Tienes que <a href="{{ url('/login') }}">iniciar sesión</a> o <a href="{{ url('/register') }}"> registrarte </a> para poder hacer una crítica</strong>
  </div>
	@else
{!! Form::hidden('idpelicula',$peliculas->id) !!}
{!! Form::hidden('idusuario',Auth::user()->id) !!}
{{ csrf_field() }}
{!! Form::textarea('critica', null, ['class' => ' col-xs-12 margin10']) !!}
{!!Form::submit('Enviar',['class'=>'col-xs-12 btn boton margin10'])!!}
@endif
</form>




      <div class="col-xs-12 col-md-10 col-md-offset-1">
        @foreach($criticas as $critica)
  				<div class="entradaCriticas margin10">
            <h4 class="colorRojo negrita">{{$usuarios[$critica->idusuario]}}:</h4>
            <div class="alinearIzquierda cursiva">{{$critica->critica}}</div>
  	        <div class="alinearDerecha">{{$critica->fechavoto}}</div>
            @if(Auth::user()->tipousuario=='admin' || Auth::user()->id==$critica->idusuario)
            <div class="text-center">
              <a class="btn btn-danger margin5" href="/eliminarCritica/{{$critica->id}}/{{$peliculas->id}}/{{Auth::user()->id}}">Eliminar crítica</a>
            </div>
            @endif
  				</div>
  			@endforeach
      </div>
			{!! $criticas->render() !!}
</div>

  @endsection
