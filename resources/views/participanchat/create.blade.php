@extends('layouts.admin')
	@section('content')
  {!!Form::open(['route'=>'adminparticipanchat.store','method'=>'POST'])!!}
	@include('alerts.errorformulario')
 {{ csrf_field() }}
	<div class="col-xs-12 col-xs-offset-0 col-sm-10 col-sm-offset-1 cuadrado">
		<h1 class="textoMarron text-center">Incripcion a un Grupo de Chat</h1>
      <div class="input-group input-group-lg margin10">
        <span class="input-group-addon glyphicon glyphicon-comment"></span>
        {!!Form::select('idchat',$chat,null,['class'=>'form-control','placeholder'=>'Chat'])!!}
      </div>
      <div class="input-group input-group-lg margin10">
        <span class="input-group-addon glyphicon glyphicon-user"></span>
        {!!Form::select('idusuario',$users,null,['class'=>'form-control','placeholder'=>'Usuario'])!!}
      </div>
      <div class="input-group input-group-lg margin10">
        <span class="input-group-addon glyphicon glyphicon-king"></span>
        {!!Form::select('tipomiembro',['Camara' => 'Camara', 'Director' => 'Director', 'Actor' => 'Actor', 'Guionista' => 'Guionista'],null,['class'=>'form-control','placeholder'=>'Tipo Miembro'])!!}
      </div>
      {!!Form::submit('Realizar Inscripcion',['class'=>'btn boton margintop25'])!!}
      {!!Form::close()!!}
  </div>
@endsection
