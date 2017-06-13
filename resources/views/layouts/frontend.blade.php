<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MoviExpert</title>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">
    <link rel=icon href="/imagenes/favicon.svg" sizes="any" type="image/svg+xml">
    <!-- Styles -->
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
    {!!Html::style('css/bootstrap.min.css')!!}
    {!!Html::style('css/metisMenu.min.css')!!}
    {!!Html::style('css/estilos.css')!!}
    {!!Html::style('css/font-awesome.min.css')!!}
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-static-top" role="navigation">
            <div class="navbar-header container col-xs-12 fondoCabecera heigth100">
              <div class="col-xs-7 col-xs-offset-2 col-sm-5 col-sm-offset-0 col-md-5 col-md-offset-1 col-lg-5 col-lg-offset-1 marginBotton">
                <a class="navbar-brand marginBotton" href="/"><img class="width100" src="/imagenes/logo.png"></img></a>
              </div>
              <div class="margintop25 hidden-xs col-sm-6 col-sm-offset-1 col-md-5 col-md-offset-1 col-lg-4 col-lg-offset-2">
                <form class="navbar-form" action="/buscar" method="POST">
                  {{ csrf_field() }}
                  <div class="form-group">
                    <input name="buscar" type="text" class="form-control" placeholder="Buscar por película">
                  </div>
                  <button type="submit" class="btn fondoMenu letraBlanca glyphicon glyphicon-search"></button>
                </form>
              </div>
              <div class="hidden-sm hidden-md hidden-lg col-xs-1 col-xs-offset-1 margintop25 ">
              <button id="btnmenuadmin" class="textoMenu glyphicon glyphicon-menu-hamburger fondoCabecera"></button>
              </div>
            </div>
            <div id="menuadmin" class="fondoMenu borderBottom container col-xs-12">
              <ul class="nav navbar-nav navbar-left">
                <li class=""><a class="textoMenu text-center" href="/">Inicio</a></li>
                <li class=""><a class="textoMenu text-center" href="/peliculas">Peliculas</a></li>
                <li class=""><a class="textoMenu text-center" href="/concursos">Concursos</a></li>
                <li class=""><a class="textoMenu text-center" href="/chat">Chats</a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                  <!-- Authentication Links -->
                  @if (Auth::guest())
                      <li><a class="textoMenu text-center" href="{{ url('/login') }}">Inicio Sesión</a></li>
                      <li><a class="textoMenu text-center" href="{{ url('/register') }}">Registro</a></li>
                  @else
                    @if(Auth::user()->tipousuario=='admin')
                    <li class=""><a class="textoMenu text-center" href="/admin">Backend</a></li>
                    @endif
                      <li class="dropdown">
                          <a href="#" class="dropdown-toggle btn textoMenu" data-toggle="dropdown" role="button" aria-expanded="false">
                              {{ Auth::user()->email }} <span class="caret"></span>
                          </a>
                            <?php $user=Auth::user()->id;?>
                          <ul class="dropdown-menu" role="menu">
                              <li><a href="{{ url('/perfilusuario') }}"><i class="fa fa-pencil" aria-hidden="true"> </i>Editar Perfil</a></li>
                              <li><a href="{{ url('/misCriticas/') }}"><i class="fa fa-film" aria-hidden="true"> </i> Mis críticas </a></li>
                              <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"> </i>Cerrar Sesión</a></li>
                          </ul>
                      </li>
                  @endif
              </ul>
            </div>
     </nav>
        <div id="page-wrapper">
            @yield('content')
        </div>
        <div class="col-xs-12 fondoCabecera margintop25">
          <div class="container margintop25">
            <p class="text-center"><a class="textoBlanco" href="">Preguntas más frecuentes</a> | <a class="textoBlanco" href="">Política de privacidad y Condiciones de uso</a></p>
            <p class="text-center"><strong>© 2017 MoviExpert | All Rights Reserved - Todos los derechos reservados</strong></p>
        </div>
        </div>
    </div>
    {!!Html::script('js/jquery.min.js')!!}
    {!!Html::script('js/bootstrap.min.js')!!}
    {!!Html::script('js/metisMenu.min.js')!!}
    {!!Html::script('js/sb-admin-2.js')!!}
    {!!Html::script('js/script.js')!!}
</body>
</html>
