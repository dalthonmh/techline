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
    <section class="principal">

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
        
        
    </section>
    
    {{--  SECTION QUIENES SOMOS  --}}
    <section class="container-about">
        <div class="jumbotron jumbotron-fluid jumbotron-img">
            <div class="container">
                <div class="tag-lugar">ANTOFAGASTA - CHILE</div>
            </div>
        </div>


        <div class="jumbotron jumbotron-fluid jumbotron-text">
            <div class="container">
                <h3><i class="fa fa-building"></i> Acerca de nosotros</h3>
                <h1>TECH LINE Ltda.</h1>
                <h2>Openning Business Oportunities</h2>
                <p>Tech line ltda. Es una empresa de servicios de ingeniería industrial y comercial, cuyo negocio es la asesoría especializada gestión de proyectos, programas, asesorías y capacitación a empresas chilenas y extranjeras, en desarrollo de nuevos mercados internacionales, en proyectos de transferencia técnica y tecnológica, y en la asesoría para la comercialización import / export de productos y bienes hacia/desde china y Asia.</p>
                <button class="btn btn-success">MÁS SOBRE NOSOTROS</button>
            </div>
        </div>
    </section>
    {{--  FIN SECCION QUIENES SOMOS  --}}



    {{-- SECTION SERVICIOS --}}
    <div class="row">
        <div class="container">
            {{-- servicio 1 --}}
            <div class="container-servicio">
                <div class="row d-flex align-items-center">
                    <div class="col-12 col-md-6 col-costom">
                        <div class="servicio-text">
                            <h3>SERVICIO 1</h3>
                            <h2>Transferencia Tecnológica: <br> Programas y Proyectos</h2>
                            <div class="servicio-text-img">
                                <img class="img-fluid ml-auto" src="/img/servicios/icono1_2.png" alt="Transferencia tecnológica">
                            </div>
                            <p>Tech Line provee asesoría especializada en ingeniería industrial y comercial. para ayudar a nuestros clientes a desarrollar, organizar y presentar a fuentes de financia- miento nacionales o internacionales, proyectos y/o pro- gramas de introducción y/o adquisición de tecnología. para la mejora competitiva.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-costom">
                        <div class="servicio-img">
                            <img class="img-fluid" src="/img/servicios/s1-1.png" alt="servicio1-1">
                            <img class="img-fluid" src="/img/servicios/s1-2.png" alt="servicio1-2">
                        </div>
                    </div>
                </div>
            </div>
            {{-- servicio 2 --}}
            <div class="container-servicio">
                <div class="row d-flex flex-row-reverse align-items-center">
                    <div class="col-12 col-md-6 col-custom">
                        <div class="servicio-text servicio-text-border">
                            <h3>SERVICIO 2</h3>
                            <h2>Desarrollo de Mercados <br>Internacionales</h2>
                            <div class="servicio-text-img">
                                <img class="img-fluid ml-auto" src="/img/servicios/icono2_2.png" alt="Transferencia tecnológica">
                            </div>
                            <p>Tech Line provee asesoría especializada en ingeniería industrial y comercial, para ayudar a nuestros clientes a incursionar y/o desarrollar nuevas y seguras operaciones comerciales y/o de exportación de bienes, productos y servicios hacia nuevos mercados internacionales. Nuestros mercados objetivo son Perú y China.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-custom">
                        <div class="servicio-img">
                            <img class="img-fluid" src="/img/servicios/s2-1.png" alt="servicio2-1">
                            <img class="img-fluid" src="/img/servicios/s2-2.png" alt="servicio2-2">
                        </div>
            
                    </div>
                </div>
            </div>

            {{-- servicio 3 --}}
            <div class="container-servicio">
                <div class="row d-flex align-items-center">
                    <div class="col-12 col-md-6 col-custom">
                        <div class="servicio-text servicio-text-border">
                            <h3>SERVICIO 3</h3>
                            <h2>Importaciones de Commodities <br>Industriales</h2>
                            <div class="servicio-text-img">
                                <img class="img-fluid ml-auto" src="/img/servicios/icono3_2.png" alt="Transferencia tecnológica">
                            </div>
                            <p>Tech Line provee servicios especializados de ingeniería industrial y comercial, para ayudar a nuestros clientes a importar a chile y/o exportar hacia mercados internacionales, distintos tipos de commodities industriales, como lo son maquinarias, equipos, insumos, materias primas, componentes, partes, entre otros, bajo un esquema de seguridad, confiabilidad y de costos competitivos. Nuestros mercados objetivos son Chi-na,Hhong Kong, Australia, Perú.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-custom">
                        <div class="servicio-img">
                            <img class="img-fluid" src="/img/servicios/s3-1.png" alt="servicio3-1">
                            <img class="img-fluid img-duple" src="/img/servicios/s3-2.png" alt="servicio3-2">
                            <img class="img-fluid img-duple" src="/img/servicios/s3-3.png" alt="servicio3-3">
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
    {{-- FIN SECCION SERVICIOS --}}

    {{-- SECTION MERCADOS OBJETIVOS --}}
    <section class="jumbotron jumbotron-fluid jumbotron-mercado">
        <div class="container">
            <h1 class="display-border">Nuestros <strong>Mercados Objetivos</strong></h1>
        </div>
        <div class="row" style="margin:0;">
            <div class="col-md-3 container-mercados">
                <div class="jumbotron jumbotron-fluid mercado-1">
                        <h1 class="display-4">PERÚ</h1>
                        <p class="lead">Oportunidades en el serctor minero.</p>
                        <button class="btn btn-success">Ver más</button>
                </div>
            </div>
            <div class="col-md-3 container-mercados">
                <div class="jumbotron jumbotron-fluid mercado-2">
                        <h1 class="display-4">CHINA</h1>
                        <p class="lead">Acceso a nuevos mercados, nuevos clientes, nuevos proveedores en el Asia Pacífico.</p>
                        <button class="btn btn-success">Ver más</button>
                </div>
            </div>
            <div class="col-md-3 container-mercados">
                <div class="jumbotron jumbotron-fluid mercado-3">
                        <h1 class="display-4">HONG KONG</h1>
                        <p class="lead">Plataforma comercialy financiera en Asia para Pymes de la ZICOSUR.</p>
                        <button class="btn btn-success">Ver más</button>
                </div>
            </div>
            <div class="col-md-3 container-mercados">
                <div class="jumbotron jumbotron-fluid mercado-4">
                        <h1 class="display-4">AUSTRALIA</h1>
                        <p class="lead">Oportunidades comerciales y tecnológicas para proveedores mineros e industriales.</p>
                        <button class="btn btn-success">Ver más</button>
                </div>
            </div>
        </div>
    </section>  

{{-- FIN SECCION MERCADOS OBJETIVOS --}}


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