<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Smartsupp Live Chat script -->
    <script src="{{asset('js/chat.js')}}" type="text/javascript"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Consultas - Uniremington Manizales</title>

    <!--Favicon-->
    <link rel="shortcut icon" type="image/png" href="img/favicon.png">
    <link rel="stylesheet" href="{{asset ('css/background.css')}}">
    <link rel="stylesheet" href="{{asset ('css/welcome.css')}}">

</head>

<body>
    <div class="uniremington-logo">
        <img src="{{asset('img/uniremington_horizontal.png')}}" width="180">
    </div>

    <div class="tic-logo">
        <img src="{{asset('img/logo_tic_blanco.png')}}" width="80">
    </div>

    <div class="campus-logo">
        <img src="{{asset('img/campus.png')}}" width="150">
    </div>

    <div class="mensaje-central">
        <h1>Bienvenido al portal de consultas institucionales</h1></br></br>
        <h3>Inicia sesión como estudiante o docente para acceder a nuestros servicios.</h3>
    </div>

    <!--El fondo de pantalla azul-->
    <div class="area">
        <ul class="circles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>

    @if (Route::has('login'))
    <div class="top-right links">
        @auth
        <a href="{{ url('/home') }}">Home</a>
    </div>
    @else
    <a href="{{ route('login') }}">INICIAR SESIÓN</a>
    <!--@if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif-->
    @endauth
    @endif
</body>

</html>