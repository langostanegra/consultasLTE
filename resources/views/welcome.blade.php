<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    	<!-- Smartsupp Live Chat script -->
        <script type="text/javascript">
var _smartsupp = _smartsupp || {};
_smartsupp.key = '2fd84a73081231a6df0cc373b1ef36dae6057ef7';
window.smartsupp||(function(d) {
  var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
  s=d.getElementsByTagName('script')[0];c=d.createElement('script');
  c.type='text/javascript';c.charset='utf-8';c.async=true;
  c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
})(document);
</script>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Consultas - Uniremington Manizales</title>
                
        <link rel="stylesheet" href="{{asset ('css/background.css')}}">
        <link rel="stylesheet" href="{{asset ('css/welcome.css')}}">        

    </head>
    <body>                     
        <div class="uniremington-logo">
            <img src="{{asset('img/uniremington_horizontal.png')}}" width="220">
        </div>

        
        <div class="tic-logo">
            <img src="{{asset('img/logo_tic_blanco.png')}}" width="100">
        </div>
        

        <div class="mensaje-central">
            <h1>Bienvenido al portal de consultas institucionales</h1></br></br>
            <h3>Inicia sesión como estudiante o docente para acceder a nuestros servicios.</h3>
        </div>

        <div class="area" >
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
        </div >

        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <a href="{{ url('/home') }}">Home</a>
        @else            
            <a href="{{ route('login') }}">INICIAR SESIÓN</a>
                        <!--@if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif-->
                @endauth
        @endif                
    </body>    
</html>
