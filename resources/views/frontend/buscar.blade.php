<?php use moviexpert\Http\Controllers\FrontendController;
	?>
	@extends('layouts.frontend')
	@section('content')

	<div class="col-xs-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2 cuadrado">
     @if($peliculasT)
    <div class="encabezados">Películas cuyo titulo coincide con: "{{ $buscar }}":</div>
		<div class="col-xs-12">

				@foreach($peliculasT as $pelicula)

					<a class="col-xs-12 fichaRes3" href="{{ url('/ficha/') }}/{{$pelicula->id}}">
					<img class="fotoValoracion" src="/imagenes/cartelera/{{$pelicula->cartelera}}">
          <div class="fichaRes3Content">
		        <div class="colorNegro"> <span class="titulosPeliculas negrita">Título: </span> {{$pelicula->titulo}}</div>
		        <div class=" colorNegro"> <span class="titulosPeliculas negrita">Año: </span>{{$pelicula->anio}}</div>
						<div class="colorNegro sinopsis"><span class="titulosPeliculas negrita">Director: </span> {{$pelicula->director}}</div>
            <div class="colorNegro sinopsis"><span class="titulosPeliculas negrita">Reparto: </span> {{$pelicula->reparto}}</div>
          </div>
					</a>
				@endforeach
			</div>
      @endif
       @if($peliculasA)
      <div class="encabezados">Películas cuyo año coincide con: "{{ $buscar }}":</div>
  		<div class="col-xs-12">

  				@foreach($peliculasA as $pelicula)

  					<a class="col-xs-12 fichaRes3" href="{{ url('/ficha/') }}/{{$pelicula->id}}">
  					<img class="fotoValoracion" src="/imagenes/cartelera/{{$pelicula->cartelera}}">
            <div class="fichaRes3Content">
  		        <div class="colorNegro"> <span class="titulosPeliculas negrita">Título: </span> {{$pelicula->titulo}}</div>
  		        <div class=" colorNegro"> <span class="titulosPeliculas negrita">Año: </span>{{$pelicula->anio}}</div>
  						<div class="colorNegro sinopsis"><span class="titulosPeliculas negrita">Director: </span> {{$pelicula->director}}</div>
              <div class="colorNegro sinopsis"><span class="titulosPeliculas negrita">Reparto: </span> {{$pelicula->reparto}}</div>
            </div>
  					</a>
  				@endforeach
  			</div>
        @endif
         @if($peliculasD)
        <div class="encabezados">Películas cuyo director coincide con: "{{ $buscar }}":</div>
    		<div class="col-xs-12">

    				@foreach($peliculasD as $pelicula)

    					<a class="col-xs-12 fichaRes3" href="{{ url('/ficha/') }}/{{$pelicula->id}}">
    					<img class="fotoValoracion" src="/imagenes/cartelera/{{$pelicula->cartelera}}">
              <div class="fichaRes3Content">
    		        <div class="colorNegro"> <span class="titulosPeliculas negrita">Título: </span> {{$pelicula->titulo}}</div>
    		        <div class=" colorNegro"> <span class="titulosPeliculas negrita">Año: </span>{{$pelicula->anio}}</div>
    						<div class="colorNegro sinopsis"><span class="titulosPeliculas negrita">Director: </span> {{$pelicula->director}}</div>
                <div class="colorNegro sinopsis"><span class="titulosPeliculas negrita">Reparto: </span> {{$pelicula->reparto}}</div>
              </div>
    					</a>
    				@endforeach
    			</div>
           @endif
           @if($peliculasR)
          <div class="encabezados">Películas cuyo reparto coincide con: "{{ $buscar }}":</div>
      		<div class="col-xs-12">

      				@foreach($peliculasR as $pelicula)

      					<a class="col-xs-12 fichaRes3" href="{{ url('/ficha/') }}/{{$pelicula->id}}">
      					<img class="fotoValoracion" src="/imagenes/cartelera/{{$pelicula->cartelera}}">
                <div class="fichaRes3Content">
      		        <div class="colorNegro"> <span class="titulosPeliculas negrita">Título: </span> {{$pelicula->titulo}}</div>
      		        <div class=" colorNegro"> <span class="titulosPeliculas negrita">Año: </span>{{$pelicula->anio}}</div>
      						<div class="colorNegro sinopsis"><span class="titulosPeliculas negrita">Director: </span> {{$pelicula->director}}</div>
                  <div class="colorNegro sinopsis"><span class="titulosPeliculas negrita">Reparto: </span> {{$pelicula->reparto}}</div>
                </div>
      					</a>
      				@endforeach

      			</div>
            @endif
            @if (!$peliculasT && !$peliculasA && !$peliculasD && !$peliculasR)
            <div class="encabezados">No hay resultados para esta búsqueda</div>
            @endif
		</div>
@endsection
