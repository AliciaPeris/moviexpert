<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MoviExpert</title>
    {!!Html::style('css/bootstrap.min.css')!!}
    {!!Html::style('css/metisMenu.min.css')!!}
    {!!Html::style('css/estilos.css')!!}
    {!!Html::style('css/font-awesome.min.css')!!}
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-static-top" role="navigation">
            <div class="navbar-header container col-xs-12 fondoCabecera heigth100">
              <div class="col-xs-7 col-xs-offset-2 col-sm-5 col-sm-offset-0 col-md-5 col-md-offset-1 col-lg-5 col-lg-offset-1">
                <a class="navbar-brand" href="/admin"><img class="width100" src="/imagenes/logo.png"></img></a>
              </div>
              <div class="margintop25 hidden-xs col-sm-6 col-sm-offset-1 col-md-5 col-md-offset-1 col-lg-4 col-lg-offset-2">
                <form class="navbar-form">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Texto a buscar">
                  </div>
                  <button type="submit" class="btn fondoMenu">Buscar</button>
                  </form>
              </div>
              <div class="hidden-sm hidden-md hidden-lg col-xs-1 col-xs-offset-1 margintop25 ">
              <button id="btnmenuadmin" class="textoMenu glyphicon glyphicon-menu-hamburger fondoCabecera"></button>
              </div>
            </div>
            <div id="menuadmin" class="fondoMenu container col-lg-12">
              <ul class="nav nav-pills col-lg-10">
                <li class=""><a class="textoMenu" href="/">Inicio</a></li>
                <li class=""><a class="textoMenu" href="/peliculas">Peliculas</a></li>
                <li class=""><a class="textoMenu" href="/concursos">Concursos</a></li>
                <li class=""><a class="textoMenu" href="/chat">Chats</a></li>
              </ul>
              <ul class="nav nav-pills col-lg-2">
                <li class=""><a class="textoMenu hide" href="#">Cerrar Sesion</a></li>
                <li class=""><a type="button" class="textoMenu" data-toggle="modal" data-target="#favoritesModal">Login</a></li>
              </ul>
            </div>
     </nav>
     <div class="modal fade" id="favoritesModal" tabindex="-1" role="dialog" aria-labelledby="favoritesModalLabel">
       <div class="modal-dialog" role="document">
         <div class="modal-content">
           <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span></button>
             <h1 class="modal-title">Inicio de Sesión</h1>
           </div>
           <div class="modal-body">
             <div class="input-group input-group-lg margin10">
               <span class="input-group-addon glyphicon glyphicon-envelope"></span>
               {!!Form::text('email',null,['class'=>'form-control','placeholder'=>'Ingrese el email'])!!}
             </div>
             <div class="input-group input-group-lg margin10">
               <span class="input-group-addon glyphicon glyphicon-certificate"></span>
               {!!Form::password('password',['class'=>'form-control','placeholder'=>'Ingrese la contraseña'])!!}
             </div>
           </div>
           <div class="modal-footer">
             <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
             <span class="pull-right">
               <button type="button" class="btn boton">Iniciar Sesión</button>
             </span>
           </div>
         </div>
       </div>
     </div>
        <div id="page-wrapper">
            @yield('content')
        </div>
        <div class="col-xs-12 fondoCabecera">
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
