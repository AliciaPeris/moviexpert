@extends('layouts.frontend')
	@section('content')
  <div class="col-xs-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2 cuadrado">
    <div class="encabezados">Mis críticas</div>
    <div class="col-xs-12 col-md-10 col-md-offset-1">
      @foreach($criticas as $critica)
        <div class="entradaCriticas margin10">
          <h4 class="colorRojo negrita">{{$peliculas[$critica->idpelicula]}}:</h4>
          <div class="alinearIzquierda cursiva">{{$critica->critica}}</div>
          <div class="alinearDerecha">{{$critica->fechavoto}}</div>
          <div class="text-center">
            <a class="btn btn-danger margin5" href="/eliminarCritica/{{$critica->id}}/{{$critica->idpelicula}}/{{Auth::user()->id}}">Eliminar crítica</a>
          </div>
        </div>
      @endforeach
    </div>
</div>
@endsection
