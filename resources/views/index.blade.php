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
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

</head>

<body>
    <main class="principal">

        {{-- carusel --}}
        <div class="carousel-customized">
    
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="/img/fondo_portada1.jpg" alt="First slide">
                        <div class="carousel-caption carousel-caption-custom d-md-block align-middle">
                            <h5 class=""><span class="green-color-text">Epicentro minero</span><br> industrial energético y <br> logístico de Chile y <br> Sudamérica</h5>
                            <p>Conéctate con la región Antofagasta y aprovecha tus recursos.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/img/fondo_portada2.jpg" alt="Second slide">
                        <div class="carousel-caption carousel-caption-custom d-md-block align-middle">
                            <h5 class="">Estamos <br>localizados en el <br> <span class="green-color-text">"Golden Triangle"</span><br>de Sudamérica</h5>
                            <p>Zona estratégica del desarrollo comercial de América del Sur.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/img/fondo_portada3.jpg" alt="Third slide">
                        <div class="carousel-caption carousel-caption-custom d-md-block align-middle">
                            <h5 class="">Gran cantidad de<br>minas en todo el sur <br> de Sudamérica <br> <span class="green-color-text">Mejor calidad de vida</span></h5>
                            <p>Mejor ubicación para la mineria industrial costera.</p>
                        </div>
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
        {{-- fin carusel --}}
    
        {{-- navbar --}}
        <div class="container-navbar ">
            <div class="row justify-content-center align-items-center">
                <div class="col-4 col-lg-3 container-img-logo">
                    <img class="img-fluid" alt="Responsive image" src="/img/logo-techline.png" alt="">
                </div>
                <div class="col-8 col-lg-9 ">
                    <nav class="navbar navbar-expand-lg navbar-light navbar-customized">
                        <a class="navbar-brand" href="#"></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup"
                            aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                    </button>
                        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                            <div class="navbar-nav ml-auto text-right">
                                <a class="nav-item nav-link nav-link-cutsom active" href="#">Inicio <span class="sr-only">(current)</span></a>
                                <a class="nav-item nav-link nav-link-cutsom" href="#">Quienes somos</a>
                                <a class="nav-item nav-link nav-link-cutsom" href="#">Servicios</a>
                                <a class="nav-item nav-link nav-link-cutsom" href="#">Proyectos</a>
                                <a class="nav-item nav-link nav-link-cutsom" href="#">Blog</a>
                                <a class="nav-item nav-link nav-link-cutsom" href="#">RSE</a>
                                <a class="nav-item nav-link nav-link-cutsom" href="#">Contáctanos</a>
                                <div class="dropdown show nav-link-cutsom">
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

    </main>



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