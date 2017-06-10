
<div class="col-xs-12 text-center cuadrado">
  <p class="col-xs-12 textoMarron"> Actor: <i class="glyphicon glyphicon-user"></i> | Guionista: <i class="glyphicon glyphicon-list-alt"></i> | Director: <i class="glyphicon glyphicon-film"></i> | Camara: <i class="glyphicon glyphicon-facetime-video"></i></p>
<div class="margintop25">
    <a class="btn boton margin5" href="/chat">Lista Chat</a>
{!!link_to_route('miembrochat.index', $title = "Mis Chat",$parameters= "", $attributes = ['class'=>'btn boton margin5'])!!}
{!!link_to_route('grupochat.index', $title = "Administrar Grupo Chat",$parameters= "", $attributes = ['class'=>'btn boton margin5'])!!}
{!!link_to_route('grupochat.create', $title = "Nuevo Grupo Chat",$parameters= "" , $attributes = ['class'=>'btn boton margin5'])!!}
</div>
