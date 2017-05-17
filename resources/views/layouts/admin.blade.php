<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Backend</title>
    {!!Html::style('css/bootstrap.min.css')!!}
    {!!Html::style('css/metisMenu.min.css')!!}
    {!!Html::style('css/estilos.css')!!}
    {!!Html::style('css/font-awesome.min.css')!!}
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-static-top" role="navigation">
            <div class="navbar-header container width100 fondoCabecera">
              <div class="navbar-left marginL100">
                <a class="navbar-brand" href="/admin"><img src="imagenes/logo.png"></img></a>
              </div>
              <div class="navbar-right margin25">
                <ul class="nav navbar-nav">
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle textoMenu" data-toggle="dropdown" role="button"><strong>Administrador</strong><span class="caret"></span></a>
                    <ul class="dropdown-menu fondoMenu">
                      <li><a class="textoMenu" href="#">Cerrar Sesion</a></li>
                      <li><a class="textoMenu" href="#">Visitar Pagina</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
              <div class="navbar-right margin25">
                <form class="navbar-form ">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Texto a buscar">
                  </div>
                  <button type="submit" class="btn fondoMenu">Buscar</button>
                  </form>
              </div>
            </div>
            <div class="width100 fondoMenu">
              <ul class="nav nav-pills container">
                <li class="margin5"><a class="textoMenu" href="/admin">Inicio</a></li>
                <li class="margin5"><a class="textoMenu" href="#">Peliculas</a></li>
                <li class="margin5"><a class="textoMenu" href="#">Concursos</a></li>
                <li class="margin5"><a class="textoMenu" href="#">Chats</a></li>
                <li class="margin5"><a class="textoMenu" href="#">Usuarios</a></li>
              </ul>
            </div>
     </nav>

        <div id="page-wrapper">
            @yield('content')
        </div>

    </div>
    {!!Html::script('js/jquery.min.js')!!}
    {!!Html::script('js/bootstrap.min.js')!!}
    {!!Html::script('js/metisMenu.min.js')!!}
    {!!Html::script('js/sb-admin-2.js')!!}
</body>
</html>
