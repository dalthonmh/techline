<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

    </head>
        {{-- navbar --}}
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="#">Tech Line</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                  <div class="navbar-nav ml-auto">
                    <a class="nav-item nav-link active" href="#">Inicio <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link" href="#">Quienes somos</a>
                    <a class="nav-item nav-link" href="#">Servicios</a>
                    <a class="nav-item nav-link" href="#">Proyectos</a>
                    <a class="nav-item nav-link" href="#">Blog</a>
                    <a class="nav-item nav-link" href="#">RSE</a>
                    <a class="nav-item nav-link" href="#">Contáctanos</a>
                    <a class="nav-item nav-link" href="#">Español</a>
                  </div>
                </div>
            </div>
        </nav>
        {{-- fin navbar --}}
    <body>
        
    </body>
</html>


{{-- <div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif

</div> --}}