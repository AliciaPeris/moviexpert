@extends('layouts.admin')
	@section('content')

  <?php $message=Session::get('message')?>
	@if($message=='store')
	<div class="alert alert-success alert-dismissible" role="alert">
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	  <strong>Película Registrada</strong>
	</div>
	@endif
<div class="container-fluid">
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
				<td>{{$peliculas->genero}}</td>
        <td class="fila">
          {!!link_to_route('adminpeliculas.edit', $title = "Editar", $parameters = $peliculas->id, $attributes = ['class'=>'btn boton2 margin5'])!!}
          {!!Form::open(['route'=>['adminpeliculas.destroy',$pelicula->id],'method'=>'DELETE'])!!}
					<div class='btn-group'>
                    <a href="{!! route('peliculas.show', [$peliculas->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('peliculas.edit', [$peliculas->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
          {!!Form::submit('Eliminar',['class'=>'btn btn-danger margin5'])!!}
          {!!Form::close()!!}
        </td>
      </tbody>
      @endforeach
    </table>
  </div>
  @endsection
