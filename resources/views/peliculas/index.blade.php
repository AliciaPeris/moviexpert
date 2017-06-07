
@extends('layouts.admin')
	@section('content')

  <?php $message=Session::get('message')?>
	@if($message=='store')
	<div class="alert alert-success alert-dismissible" role="alert">
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	  <strong>Película Registrada</strong>
	</div>
	@endif
<div class="container-fluid blanco">
<h1 class="text-center">Listado Peliculas</h1><br>
	<table class="table table-hover text-center table-bordered">
		<thead class="fondoMenu">
        <th class="text-center textoBlanco">ID</th>
        <th class="text-center textoBlanco">Título</th>
        <th class="text-center textoBlanco">Año</th>
        <th class="text-center textoBlanco hidden-xs">País</th>
        <th class="text-center textoBlanco hidden-xs hidden-sm">Director</th>
        <th class="text-center textoBlanco hidden-xs hidden-sm">Guión</th>
        <th class="text-center textoBlanco hidden-xs">Reparto</th>
        <th class="text-center textoBlanco hidden-xs">Sinopsis</th>
        <th class="text-center textoBlanco hidden-xs hidden-sm">Trailer</th>
        <th class="text-center textoBlanco">Cartelera</th>
				<th class="text-center textoBlanco">Género</th>
        <th class="text-center textoBlanco">Acciones</th>
      </thead>
			@foreach($peliculas as $peliculas)
      <tbody>
        <td>{{$peliculas->id}}</td>
        <td>{{$peliculas->titulo}}</td>
        <td>{{$peliculas->anio}}</td>
        <td class="hidden-xs">{{$peliculas->pais}}</td>
        <td class="hidden-xs hidden-sm">{{$peliculas->director}}</td>
        <td class="hidden-xs hidden-sm">{{$peliculas->guion}}</td>
        <td class="hidden-xs">{{$peliculas->reparto}}</td>
        <td class="hidden-xs">{{$peliculas->sinopsis}}</td>
        <td class="hidden-xs hidden-sm">{{$peliculas->trailer}}</td>
        <td>{{$peliculas->cartelera}}</td>
				<td>{{$generos[$peliculas->genero]}}</td>
        <td class="fila">
					{!!link_to_route('adminpelicula.edit', $title = "Editar", $parameters = $peliculas->id, $attributes = ['class'=>'btn boton2 margin5'])!!}
	        {!!Form::open(['route'=>['adminpelicula.destroy',$peliculas->id],'method'=>'DELETE'])!!}
	        {!!Form::submit('Eliminar',['class'=>'btn btn-danger margin5'])!!}
	        {!!Form::close()!!}
	      </td>
	    </tbody>

	    @endforeach
	    <tfoot>

	      <tr>
	        <td colspan="12">
	          {!!link_to_route('adminpelicula.create', $title = "Añadir",$parameters= "" , $attributes = ['class'=>'btn boton col-xs-12'])!!}</td>
	      </tr>
	    </tfoot>
	    </table>
	    </div>
			 
	    @endsection
