<!Doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Scripts -->
    <script src="{{ asset('./js/mtz.js') }}" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">    
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="http://localhost/l5/public/css/app.css" rel="stylesheet">


    <title>GAP</title>
</head>
<body>
    <div class="row">
        <nav class="nav-extended teal">
            <div class="nav-content">
                <ul class="tabs teal">
                    <img src="{{url('img/Gap_logo.png')}}" alt="LOGO" height="200" width="200">
                    <li><a href="#" class="brand-logo center">Logo</a></li>
                </ul>
            </div>
            <div class="nav-wrapper">
                <a class="right" href="login"><i class="material-icons right">exit_to_app</i>Salir</a>
                <ul class="left">
                    <li><a href="productos">PRODUCTOS</a></li>
                    <li><a href="servicios">SERVICIOS</a></li>
                    <li><a href="#">EMPLEADOS</a></li>
                </ul>
            </div>
        </nav>
    </div>
    @yield('content')
    <div class="divider"></div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
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
    <script src="{{ asset('./js/materialize.js') }}" defer></script>
</footer>
</html>
