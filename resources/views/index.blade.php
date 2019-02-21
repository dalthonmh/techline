<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }}</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

</head>


    {{-- navbar --}}
    <div class="container container-navbar">
        <div class="row d-flex align-items-center">
            <div class="col-4 col-lg-3 container-img-logo">
                <img class="img-fluid" alt="Responsive image" src="/img/logo-techline.png" alt="">
            </div>
            <div class="col-8 col-lg-9">
                <nav class="navbar navbar-expand-lg navbar-light navbar-customized">
                    <a class="navbar-brand" href="#"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup"
                        aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                                </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav ml-auto text-right">
                            <a class="nav-item nav-link active" href="#">Inicio <span class="sr-only">(current)</span></a>
                            <a class="nav-item nav-link" href="#">Quienes somos</a>
                            <a class="nav-item nav-link" href="#">Servicios</a>
                            <a class="nav-item nav-link" href="#">Proyectos</a>
                            <a class="nav-item nav-link" href="#">Blog</a>
                            <a class="nav-item nav-link" href="#">RSE</a>
                            <a class="nav-item nav-link" href="#">Contáctanos</a>
                            <div class="dropdown show">
                                <a class="nav-item nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="circle-country"><img src="http://lorempixel.com/20/20" alt="espana"></span> &nbsp; Español
                                </a>
                                
                                <div class="dropdown-menu mr-auto" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="#">
                                    <span class="circle-country"><img src="http://lorempixel.com/20/20" alt="espana"></span> &nbsp; English</a>
                                    <a class="dropdown-item" href="#">
                                    <span class="circle-country"><img src="http://lorempixel.com/20/20" alt="espana"></span> &nbsp; Portuguese</a>
                                    <a class="dropdown-item" href="#">
                                    <span class="circle-country"><img src="http://lorempixel.com/20/20" alt="espana"></span> &nbsp; Francess</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    {{-- fin navbar --}}

    
    {{-- carusel --}}
    <div class="carousel-customized">

        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="/img/fondo_portada3.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="http://lorempixel.com/1366/768" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="http://lorempixel.com/1366/768" alt="Third slide">
                </div>
            </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
        </div>
    </div>



<body>

</body>

</html>


{{--
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
    <div class="top-right links">
        @auth
        <a href="{{ url('/home') }}">Home</a> @else
        <a href="{{ route('login') }}">Login</a> @if (Route::has('register'))
        <a href="{{ route('register') }}">Register</a> @endif @endauth
    </div>
    @endif

</div> --}}