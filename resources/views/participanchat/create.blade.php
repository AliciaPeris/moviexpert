@extends('layouts.admin')
	@section('content')
  {!!Form::open(['route'=>'adminparticipanchat.store','method'=>'POST'])!!}
  <div class="col-xs-12 col-xs-offset-0 col-sm-10 col-sm-offset-1 cuadrado">
		<h1 class="textoMarron text-center">Incripcion a un Grupo de Chat</h1>
      <div class="input-group input-group-lg margin10">
        <span class="input-group-addon glyphicon glyphicon-envelope"></span>
        {!!Form::number('idchat',null,['class'=>'form-control','placeholder'=>'ID Chat'])!!}
      </div>
      <div class="input-group input-group-lg margin10">
        <span class="input-group-addon glyphicon glyphicon-envelope"></span>
        {!!Form::number('idusuario',null,['class'=>'form-control','placeholder'=>'ID Usuario'])!!}
      </div>
      <div class="input-group input-group-lg margin10">
        <span class="input-group-addon glyphicon glyphicon-user"></span>
        {!!Form::text('tipomiembro',null,['class'=>'form-control','placeholder'=>'Tipo Miembro'])!!}
      </div>
      {!!Form::submit('Realizar Inscripcion',['class'=>'btn boton margintop25'])!!}
      {!!Form::close()!!}
  </div>
@endsection
