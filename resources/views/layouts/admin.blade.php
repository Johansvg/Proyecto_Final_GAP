<!Doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="{{ asset('css/css.css') }}" rel="stylesheet">
    <!-- Scripts -->
    <script src="{{ asset('./js/mtz.js') }}" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">    
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="{{ asset('js/mtz.js') }}" defer></script>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <title>GAP</title>
</head>
<body id="fondoAdmin">
    <nav class="nav-extended">
        <div class="nav-wrapper ">
          <a href="#" class="brand-logo center"><img id="logo" src="{{asset("img/Gap_logo.png") }}" height="50" width="130"></a>
          <a data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="{{route("login.index")}}"><i class="material-icons right">exit_to_app</i>Salir</a></li>
          </ul>
        </div>
        <div class="nav-wrapper teal lighten-1">
          <ul>
            <li class="tab"><a href="{{route("productos.index")}}">Productos</a></li>
            <li class="tab"><a href="{{route("servicios.index")}}">Servicios</a></li>
            <li class="tab"><a href="{{route("cargos.index")}}">Cargos</a></li>
            <li class="tab"><a href="{{route("empleados.index")}}">Empleados</a></li>
          </ul>
        </div>
      </nav>
      <ul class="sidenav" id="mobile-demo">
        <li><a href="{{route("login.destroy")}}">Salir</a></li>
      </ul>
    </nav> 
    <div class="block">
        @yield('content')
    </div>
    {{-- incluir archivos javascript --}}
    <script src="{{ asset('js/mtz.js') }}" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</body>
<footer class="page-footer teal darken-2">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <h6 class="white-text">pie de pagina admin</h6>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
            </div>
            <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                    <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
        © 2014 Copyright Text
        <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
        </div>
    </div>
</footer>
</html>
