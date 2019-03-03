<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }}</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts -->
    {{--  <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">  --}}

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
                                            <span class="circle-country"><img src="/img/lang/es.jpg" alt="espana"></span> &nbsp; Español
                                    </a>
                                    
                                    <div class="dropdown-menu mr-auto" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="#">
                                        <span class="circle-country"><img src="/img/lang/en.jpg" alt="espana"></span> &nbsp; English</a>
                                        <a class="dropdown-item" href="#">
                                        <span class="circle-country"><img src="/img/lang/br.png" alt="espana"></span> &nbsp; Portuguese</a>
                                        <a class="dropdown-item" href="#">
                                        <span class="circle-country"><img src="/img/lang/fr.jpg" alt="espana"></span> &nbsp; Francess</a>
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


{{--  INICIO DE PROYECTOS DESTACADOS  --}}

{{--  <section class="jumbotron jumbotron-fluid jumbotron-proyectos">
    
  <div class="container proyecto">
    <div class="proyeto_title">
        <h2 class="proyecto_title_h2">Proyectos Destacados</h2>
        <h3 class="proyecto_title_h3">Proyectos Asociativos Nacionales</h3>
    </div>
    <div class="proyecto_bottom">
        <div class="proyecto_head">
            <div class="proyecto_head_img">
                <img class="img-fluid" src="/img/proyectos/profoex.jpg" alt="profoex">
            </div>
            <div class="proyecto_head_bottom">
                <h2 class="proyecto_head_title">PROFOEX PERÚ</h2>
                <div class="proyeto_head_description">
                    <p>Profo financiado por corfo que promueve la expansión y búsqueda de nuevos mercados.</p>
                    <button class="btn btn-dark">Visitar Web</button>
                </div>
            </div>
        </div>
        <div class="proyecto_body">
            <h3 class="proyecto_body_title">UN ESFUERZO LIDERADO POR :</h3>
            <div class="proyecto_body_img">
                <img class="img-fluid" src="/img/proyectos/techline.png" alt="techline">
                <img class="img-fluid" src="/img/proyectos/corfo.jpg" alt="corfo">
                <img class="img-fluid" src="/img/proyectos/codesser.jpg" alt="codesser">
            </div>
        </div>
    </div>
    <div class="proyecto_footer">
        <h3 class="proyecto_footer_title">EMPRESAS PARTICIPANTES :</h3>
        <div class="proyeto_footer_carousel">
            <div id="slider-uno" class="slider">
                <div class="cont-img"><img src="/img/clientes/1.png" alt="image 1"></div>
                <div class="cont-img"><img src="/img/clientes/2.png" alt="image 2"></div>
                <div class="cont-img"><img src="/img/clientes/3.gif" alt="image 3"></div>
                <div class="cont-img"><img src="/img/clientes/4.jpg" alt="image 4"></div>
                <div class="cont-img"><img src="/img/clientes/5.png" alt="image 5"></div>
                <div class="cont-img"><img src="/img/clientes/6.png" alt="image 6"></div>
                <div class="cont-img"><img src="/img/clientes/7.png" alt="image 7"></div>
                <div class="cont-img"><img src="/img/clientes/8.png" alt="image 8"></div>
                <div class="cont-img"><img src="/img/clientes/9.jpg" alt="image 9"></div>
                <div class="cont-img"><img src="/img/clientes/10.png" alt="image 10"></div>
                <div class="cont-img"><img src="/img/clientes/11.jpg" alt="image 11"></div>
                <div class="cont-img"><img src="/img/clientes/12.png" alt="image 12"></div>
                <div class="cont-img"><img src="/img/clientes/13.jpg" alt="image 13"></div>
                <div class="cont-img"><img src="/img/clientes/14.png" alt="image 14"></div>
                <div class="cont-img"><img src="/img/clientes/15.png" alt="image 15"></div>
                <div class="cont-img"><img src="/img/clientes/16.png" alt="image 16"></div>
                <div class="cont-img"><img src="/img/clientes/17.png" alt="image 17"></div>
                <div class="cont-img"><img src="/img/clientes/18.png" alt="image 18"></div>
                <div class="cont-img"><img src="/img/clientes/19.png" alt="image 19"></div>
                <div class="cont-img"><img src="/img/clientes/20.png" alt="image 20"></div>
                <div class="cont-img"><img src="/img/clientes/21.png" alt="image 21"></div>
                <div class="cont-img"><img src="/img/clientes/22.jpg" alt="image 22"></div>
                <div class="cont-img"><img src="/img/clientes/23.png" alt="image 23"></div>
                <div class="cont-img"><img src="/img/clientes/24.png" alt="image 24"></div>
                <div class="cont-img"><img src="/img/clientes/25.png" alt="image 25"></div>
                <div class="cont-img"><img src="/img/clientes/26.png" alt="image 26"></div>
                <div class="cont-img"><img src="/img/clientes/27.png" alt="image 27"></div>
                <div class="cont-img"><img src="/img/clientes/28.jpg" alt="image 28"></div>
                <div class="cont-img"><img src="/img/clientes/29.jpg" alt="image 29"></div>
                <div class="cont-img"><img src="/img/clientes/30.png" alt="image 30"></div>
                <div class="cont-img"><img src="/img/clientes/31.jpg" alt="image 31"></div>
              </div>
        </div>
    </div>
  </div>
  <br>
  <hr>
  
  <div class="container proyecto">
        <div class="proyecto_bottom">
            <div class="proyecto_head">
                <div class="proyecto_head_img">
                    <img class="img-fluid" src="/img/proyectos/nodo.jpg" alt="nodo">
                </div>
                <div class="proyecto_head_bottom">
                    <h2 class="proyecto_head_title">NODO</h2>
                    <div class="proyeto_head_description">
                        <p>Proyecto que promueve la asociación de las pymes regionales del norte de Chile.</p>
                        <button class="btn btn-dark">Visitar Web</button>
                    </div>
                </div>
            </div>
            <div class="proyecto_body">
                <h3 class="proyecto_body_title">UN ESFUERZO LIDERADO POR :</h3>
                <div class="proyecto_body_img">
                    <img class="img-fluid" src="/img/proyectos/techline.png" alt="techline">
                    <img class="img-fluid" src="/img/proyectos/corfo.jpg" alt="corfo">
                    <img class="img-fluid" src="/img/proyectos/codesser.jpg" alt="codesser">
                </div>
            </div>
        </div>
        <div class="proyecto_footer">
            <h3 class="proyecto_footer_title">EMPRESAS PARTICIPANTES :</h3>
            <div class="proyeto_footer_carousel">
                <div id="slider-uno" class="slider">
                    <div class="cont-img"><img src="/img/clientes/1.png" alt="image 1"></div>
                    <div class="cont-img"><img src="/img/clientes/2.png" alt="image 2"></div>
                    <div class="cont-img"><img src="/img/clientes/3.gif" alt="image 3"></div>
                    <div class="cont-img"><img src="/img/clientes/4.jpg" alt="image 4"></div>
                    <div class="cont-img"><img src="/img/clientes/5.png" alt="image 5"></div>
                    <div class="cont-img"><img src="/img/clientes/6.png" alt="image 6"></div>
                    <div class="cont-img"><img src="/img/clientes/7.png" alt="image 7"></div>
                    <div class="cont-img"><img src="/img/clientes/8.png" alt="image 8"></div>
                    <div class="cont-img"><img src="/img/clientes/9.jpg" alt="image 9"></div>
                    <div class="cont-img"><img src="/img/clientes/10.png" alt="image 10"></div>
                    <div class="cont-img"><img src="/img/clientes/11.jpg" alt="image 11"></div>
                    <div class="cont-img"><img src="/img/clientes/12.png" alt="image 12"></div>
                    <div class="cont-img"><img src="/img/clientes/13.jpg" alt="image 13"></div>
                    <div class="cont-img"><img src="/img/clientes/14.png" alt="image 14"></div>
                    <div class="cont-img"><img src="/img/clientes/15.png" alt="image 15"></div>
                    <div class="cont-img"><img src="/img/clientes/16.png" alt="image 16"></div>
                    <div class="cont-img"><img src="/img/clientes/17.png" alt="image 17"></div>
                    <div class="cont-img"><img src="/img/clientes/18.png" alt="image 18"></div>
                    <div class="cont-img"><img src="/img/clientes/19.png" alt="image 19"></div>
                    <div class="cont-img"><img src="/img/clientes/20.png" alt="image 20"></div>
                    <div class="cont-img"><img src="/img/clientes/21.png" alt="image 21"></div>
                    <div class="cont-img"><img src="/img/clientes/22.jpg" alt="image 22"></div>
                    <div class="cont-img"><img src="/img/clientes/23.png" alt="image 23"></div>
                    <div class="cont-img"><img src="/img/clientes/24.png" alt="image 24"></div>
                    <div class="cont-img"><img src="/img/clientes/25.png" alt="image 25"></div>
                    <div class="cont-img"><img src="/img/clientes/26.png" alt="image 26"></div>
                    <div class="cont-img"><img src="/img/clientes/27.png" alt="image 27"></div>
                    <div class="cont-img"><img src="/img/clientes/28.jpg" alt="image 28"></div>
                    <div class="cont-img"><img src="/img/clientes/29.jpg" alt="image 29"></div>
                    <div class="cont-img"><img src="/img/clientes/30.png" alt="image 30"></div>
                    <div class="cont-img"><img src="/img/clientes/31.jpg" alt="image 31"></div>
                    </div>
            </div>
        </div>
    </div>
</section>  --}}

{{--  FIN DE PROYECTOS DESTACADOS  --}}

{{-- GIRAS TECNOLÓGICAS --}}
<section class="jumbotron jumbotron-fluid jumbotron_girastecnologicas">
    <div class="jumbotron_gt_head text-center">
        <h2>Principales giras tecnológicas, comerciales y empresariales <br class="separation">organizadas entre el 2004 y 2018</h2>
        <h3>Proyectos asociativos internacionales</h3>
    </div>
    <div class="jumbotron_gt_middle">
        <a href="#" class="d-block text-center" id="reload"><i class="fa fa-refresh" aria-hidden="true"></i></a>
    
        <div class="carousel-container">
            <a href="#" class="arrow" id="prev"><i class="fa fa-angle-left"></i></a>
            <div id="carousel">
                <a href="#"><img class="img-fluid" src="/img/giras/1.jpg" id="item-1" /></a>
                <a href="#"><img class="img-fluid" src="/img/giras/2.jpg" id="item-2" /></a>
                <a href="#"><img class="img-fluid" src="/img/giras/3.jpg" id="item-3" /></a>
                <a href="#"><img class="img-fluid" src="/img/giras/4.jpg" id="item-4" /></a>
                <a href="#"><img class="img-fluid" src="/img/giras/5.jpg" id="item-5" /></a>
            </div>
            <a href="#" class="arrow" id="next"><i class="fa fa-angle-right"></i></a>
        </div>
    </div>
    <div class="jumbotron_gt_footer">
        <div class="numbers container">
            <div class="jb_gt_g_item"> {{-- siglas iniciales de cada nivel --}}
                <div class="item_icon"><i class="fa fa-building"></i></div>
                <div class="item_number"><span class="value">13</span></div>
                <div class="item_desc">Años en el mercado</div>
            </div>
            <div class="jb_gt_g_item">
                <div class="item_icon"><i class="fa fa-flag"></i></div>
                <div class="item_number"><span class="value">27</span></div>
                <div class="item_desc">Países visitados</div>
            </div>
            <div class="jb_gt_g_item">
                <div class="item_icon"><i class="fa fa-globe"></i></div>
                <div class="item_number"><span class="value">47</span></div>
                <div class="item_desc">Giras realizadas</div>
            </div>
            <div class="jb_gt_g_item">
                <div class="item_icon"><i class="fa fa-building"></i></div>
                <div class="item_number">+<span class="value">300</span></div>
                <div class="item_desc">Empresas participantes</div>
            </div>
            <div class="jb_gt_g_item">
                <div class="item_icon"><i class="fa fa-handshake-o"></i></div>
                <div class="item_number">+<span class="value">500</span></div>
                <div class="item_desc">Empresarios beneficiados</div>
            </div>
        </div>
    </div>

</section>
{{-- FIN DE GIRAS TECNOLÓGICAS --}}

{{--  SECCION BLOG O ULTIMAS PUBLICACIONES O NEWSLETTER  --}}
<section class="jumbotron jumbotron-fluid jumbotron_blog">
    <div class="jg_b_head">
        <h2>Últimas <strong>Publicaciones y Newsletter</strong></h2>
    </div>
    <div class="jb_b_body">
        <div class="jb_b_b_item">
            <div class="item_tag">
                <p class="it_t_black">PROYECTOS</p>
            </div>
            <div class="item_img">
                <img class="img-fluid" src="/img/blog/1.jpg" alt="proyectos img">
            </div>
            <div class="item_cont">
                <h3>Conoce nuestras experiencias del 2005 - 2008 realizadas en China</h3>
                <p>El día 23 de Marzo, en la sede central de la UTEPSA (Universidad Tecnológica Privada de Santa de la Sierra), en Bolivia, se llevó a [...]</p>
                <button class="btn btn-success">Ver más</button>
            </div>
        </div>
        <div class="jb_b_b_item">
            <div class="item_tag">
                <p class="it_t_red">NOTICIAS</p>
            </div>
            <div class="item_img">
                <img class="img-fluid" src="/img/blog/2.jpg" alt="proyectos img">
            </div>
            <div class="item_cont">
                <h3>Conoce nuestras experiencias del 2005 - 2008 realizadas en China</h3>
                <p>El día 23 de Marzo, en la sede central de la UTEPSA (Universidad Tecnológica Privada de Santa de la Sierra), en Bolivia, se llevó a [...]</p>
                <button class="btn btn-success">Ver más</button>
            </div>
        </div>
        <div class="jb_b_b_item">
            <div class="item_tag">
                <p class="it_t_black">PROYECTOS</p>
            </div>
            <div class="item_img">
                <img class="img-fluid" src="/img/blog/3.jpg" alt="proyectos img">
            </div>
            <div class="item_cont">
                <h3>Conoce nuestras experiencias del 2005 - 2008 realizadas en China</h3>
                <p>El día 23 de Marzo, en la sede central de la UTEPSA (Universidad Tecnológica Privada de Santa de la Sierra), en Bolivia, se llevó a [...]</p>
                <button class="btn btn-success">Ver más</button>
            </div>
        </div>
    </div>
    <div class="jb_b_footer">
        <button class="btn btn-success">MÁS PUBLICACIONES</button>
    </div>
</section>





<script src="/js/jquery.min.js" type="text/javascript"></script> {{--  poner antiguo script  --}}
<script>
$(document).on('ready', function() {
    //proyectos destacados slider
    $('#slider-uno, #slider-dos').slick({
    dots: false,
    infinite: true,
    autoplaySpeed: 2000,
    adaptiveHeight: true,
    autoplay: true,

    slidesToShow: 5,
    slidesToScroll: 1,
    responsive: [
        {
        breakpoint: 1024,
        settings: {
            slidesToShow: 5,
            slidesToScroll: 1,
            infinite: true,
            dots: false
        }
        },
        {
        breakpoint: 600,
        settings: {
            slidesToShow: 4,
            slidesToScroll: 2
        }
        },
        {
        breakpoint: 480,
        settings: {
            slidesToShow: 3,
            slidesToScroll: 1
        }
        }
    ]
    });

    // jquery water carousel
    var carousel = $("#carousel").waterwheelCarousel({
        flankingItems: 2, //cantidad de imagenes al costado
        opacityMultiplier: 1, //cambia la opaciodad
        //horizonOffset: 100, //las otras imagenes se vienen de arriba de este tamaño
        autoPlay: 1000,
        keyboardNav: true, //habilita tecla flecha para mover los slides
        //horizon: 20, // lo mueve para arriba
        //separation: 200,
        // agregar los breakpoints
        separation: 100,
        forcedImageWidth: 150,
        forcedImageHeight: 100,  

        
    });

    $('#prev').bind('click', function () {
        carousel.prev();
        return false
    });

    $('#next').bind('click', function () {
        carousel.next();
        return false;
    });

    $('#reload').bind('click', function () {
        var datos = "{flankingItems: 2,autoPlay: 1000,keyboardNav: true,opacityMultiplier: 1,separation: 100}"; //string
        newOptions = eval("(" + datos + ")");
        carousel.reload(newOptions);
        return false;

    });


        var isBreakPoint = function (bp) {
            var bps = [320, 576, 768, 992],
                w = $(window).width(),
                min, max
                for (var i = 0, l = bps.length; i < l; i++) {
                if (bps[i] === bp) {
                    min = bps[i-1] || 0
                    max = bps[i]
                    break
                }
            }
            return w > min && w <= max
        }

        
        // Usage
        if (isBreakPoint(320)) {
            console.log('320px');
            var datos = "{flankingItems: 2,autoPlay: 1000,keyboardNav: true,opacityMultiplier: 1,separation: 100,forcedImageWidth: 150,forcedImageHeight: 100}"; //string
            newOptions = eval("(" + datos + ")");
            carousel.reload(newOptions);
            
        }
        if(isBreakPoint(576)){
            console.log('480px');
            var datos = "{flankingItems: 2,autoPlay: 1000,keyboardNav: true,opacityMultiplier: 1,separation: 100,forcedImageWidth: 170,forcedImageHeight: 120}"; //string
            newOptions = eval("(" + datos + ")");
            carousel.reload(newOptions);
        }
        if(isBreakPoint(768)){
            console.log('768px');
            var datos = "{flankingItems: 2,autoPlay: 1000,keyboardNav: true,opacityMultiplier: 1,separation: 100,forcedImageWidth: 200,forcedImageHeight: 150}"; //string
            newOptions = eval("(" + datos + ")");
            carousel.reload(newOptions);
        }
        if(isBreakPoint(992)){
            console.log('992px');
            var datos = "{flankingItems: 2,autoPlay: 1000,keyboardNav: true,opacityMultiplier: 1,separation: 100,forcedImageWidth: 250,forcedImageHeight: 200}"; //string
            newOptions = eval("(" + datos + ")");
            carousel.reload(newOptions);
        }




    // giras tecnológicas incremento de numeros
    var section = document.querySelector('.numbers');
    var hasEntered = false;

    window.addEventListener('scroll', (e) => {
        var shouldAnimate = (window.scrollY + window.innerHeight) >= section.offsetTop;

        if (shouldAnimate && !hasEntered) {
            hasEntered = true;
            
            $('.value').each(function () {
                $(this).prop('Counter',0).animate({
                Counter: $(this).text()
                }, {
                duration: 3500,
                easing: 'swing',
                step: function (now) {
                    $(this).text(Math.ceil(now));
                }
                });
            });

        }
    });


  });

</script>

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

{{-- 
    separation: 100,
    forcedImageWidth: 150,
    forcedImageHeight: 100,    
--}}