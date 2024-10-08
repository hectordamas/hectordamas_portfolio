<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="no-js" >
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Héctor Damas - Fullstack Developer</title>
    <meta name="description" content="Soy un apasionado del desarrollo y la tecnología, con una trayectoria de más de 6 años, enfocada en la creación de soluciones innovadoras que transformen las experiencias digitales. A lo largo de mi carrera, me he comprometido a ofrecer resultados que generan valor tanto para las empresas como para los usuarios finales.">

    <script>
        document.documentElement.classList.remove('no-js');
        document.documentElement.classList.add('js');
    </script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">


    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="{{ asset('css/vendor.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

    <!-- favicons
    ================================================== -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png')  }}">
    <link rel="manifest" href="{{ asset('site.webmanifest') }}">

</head>


<body id="top">

    
    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader" class="dots-fade">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>


    <!-- page wrap
    ================================================== -->
    <div id="page" class="s-pagewrap ss-home">


        <!-- # site header 
        ================================================== -->
        <header class="s-header">

            <div class="row s-header__inner width-sixteen-col">

                <div class="s-header__block">
                    <div class="s-header__logo">
                        <a class="logo" href="{{ url('/') }}">
                            <img src="{{ asset('images/logo.png') }}" alt="{{ env('APP_NAME') }} logotipo">
                        </a>
                    </div>

                    <a class="s-header__menu-toggle" href="#0"><span>Menu</span></a>
                </div> <!-- end s-header__block -->

                <nav class="s-header__nav">
    
                    <ul class="s-header__menu-links">
                        <li><a href="{{ url('/#intro') }}" class="smoothscroll">Inicio</a></li>
                        <li><a href="{{ url('/#about') }}" class="smoothscroll">Acerca De</a></li>
                        <li><a href="{{ url('/#portfolio') }}" class="smoothscroll">Portafolio</a></li>
                        <li><a href="{{ url('/#experience') }}" class="smoothscroll">Experiencia</a></li>
                        <li><a href="{{ url('/#contact') }}" class="smoothscroll">Contacto</a></li>
                    </ul> <!-- s-header__menu-links -->

                    <div class="s-header__contact">
                        <a target="_blank" href="https://wa.me/584241930033?text=Hola, acabo de ver tu portafolio y me gustaría trabajar contigo" class="btn btn--primary s-header__contact-btn">
                            Contactame via WhatsApp
                        </a>                        
                    </div> <!-- s-header__contact -->
    
                </nav> <!-- end s-header__nav -->

            </div> <!-- end s-header__inner -->

        </header> <!-- end s-header -->


        <!-- # site main content
        ================================================== -->
        <section id="content" class="s-content">

            <!-- intro
            ----------------------------------------------- -->
            <section id="intro" class="s-intro">

                <div class="row s-intro__content width-sixteen-col">

                    <div class="column lg-12 s-intro__content-inner grid-block">
                        
                        <div class="s-intro__content-text">
                            <div class="s-intro__content-pretitle text-pretitle">Hola, soy Héctor Damas</div>
                            <h1 class="s-intro__content-title">
                                Fullstask Developer | Desarrollador Web
                            </h1>
                        </div> <!-- s-intro__content-text -->
                        
                        

                        <div class="s-intro__content-media"> 
                            <div class="s-intro__content-media-inner">                               
                                <img src="images/intro-bg.jpg" srcset="images/intro-bg.jpg 1x, images/intro-bg@2x.jpg 2x" alt="">
                                <div class="lines">                               
                                    <span></span>                                  
                                </div>
                            </div>
                        </div> <!-- s-intro__content-media -->                      

                        <div class="s-intro__scroll-down">
                            <a href="#about" class="smoothscroll">
                                <div class="scroll-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="36" height="36" fill="none" stroke="#97b34a" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">&lt;!--!  Atomicons Free 1.00 by @atisalab License - https://atomicons.com/license/ (Icons: CC BY 4.0) Copyright 2021 Atomicons --&gt;<polyline points="7 13 12 18 17 13"></polyline><line x1="12" y1="18" x2="12" y2="6"></line></svg>
                                </div>
                                <span>Acerca De</span>
                            </a>
                        </div> <!-- s-intro__scroll-down -->
                        
                    </div> <!-- s-intro__content-inner -->

                </div> <!-- s-intro__content -->

            </section> <!-- end s-intro -->

            <!-- about
            ----------------------------------------------- -->
            <section id="about" class="s-about target-section">

                <div class="row s-about__content width-sixteen-col">
                    <div class="column grid-block grid-section-split">
            
                        <img src="{{ asset('images/geometric_shape.svg') }}" class="s-about__content-imgbg">
            
                        <div class="section-header grid-section-split__header">
                            <div class="text-pretitle">Sobre mí</div>                           
                            <h2 class="text-display-title">
                                Dar vida a las ideas a través del Software
                            </h2>                           
                        </div> <!-- end section-header -->
            
                        <div class="s-about__content-main grid-section-split__primary">
                            <p class="attention-getter">
                                Soy un apasionado del desarrollo y la tecnología, con una trayectoria de más de 6 años, enfocada en la creación de soluciones innovadoras que transformen las experiencias digitales. A lo largo de mi carrera, me he comprometido a ofrecer resultados que generan valor tanto para las empresas como para los usuarios finales.
                            </p>
            
                            <p class="attention-getter">
                                Mi enfoque se centra en la resolución de problemas complejos con un pensamiento creativo y estratégico, buscando siempre la excelencia en cada proyecto.
                            </p>

                            <h4 class="text-light">
                                Skills:
                            </h4>
                            <ul class="s-about__social social-list justify-content-start">
                                <li>
                                    <a href="#0">
                                        <i class="fab fa-laravel text-light" style="font-size: 35px;"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#0">
                                        <i class="fab fa-react text-light" style="font-size: 35px;"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#0">
                                        <i class="fab fa-wordpress text-light" style="font-size: 35px;"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#0">
                                        <i class="fab fa-js-square text-light" style="font-size: 35px;"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#0">
                                        <i class="fas fa-database text-light" style="font-size: 35px;"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#0">
                                        <i class="fab fa-css3 text-light" style="font-size: 35px;"></i>
                                    </a>
                                </li>
                            </ul> <!-- end s-footer__social -->
                        </div> <!-- end s-about__content-main -->

                        <div class="s-about__content-btn grid-section-split__bottom">
                            <a href="{{ asset('CV Héctor.pdf') }}" target="_blank" class="btn btn--stroke u-fullwidth"><i class="far fa-file-pdf"></i> Descargar CV</a>

                            <ul class="s-about__social social-list">
                                <li>
                                    <a href="#0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:"><path d="M20,3H4C3.447,3,3,3.448,3,4v16c0,0.552,0.447,1,1,1h8.615v-6.96h-2.338v-2.725h2.338v-2c0-2.325,1.42-3.592,3.5-3.592 c0.699-0.002,1.399,0.034,2.095,0.107v2.42h-1.435c-1.128,0-1.348,0.538-1.348,1.325v1.735h2.697l-0.35,2.725h-2.348V21H20 c0.553,0,1-0.448,1-1V4C21,3.448,20.553,3,20,3z"></path></svg>
                                        <span class="u-screen-reader-text">Facebook</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:"><path d="M19.633,7.997c0.013,0.175,0.013,0.349,0.013,0.523c0,5.325-4.053,11.461-11.46,11.461c-2.282,0-4.402-0.661-6.186-1.809 c0.324,0.037,0.636,0.05,0.973,0.05c1.883,0,3.616-0.636,5.001-1.721c-1.771-0.037-3.255-1.197-3.767-2.793 c0.249,0.037,0.499,0.062,0.761,0.062c0.361,0,0.724-0.05,1.061-0.137c-1.847-0.374-3.23-1.995-3.23-3.953v-0.05 c0.537,0.299,1.16,0.486,1.82,0.511C3.534,9.419,2.823,8.184,2.823,6.787c0-0.748,0.199-1.434,0.548-2.032 c1.983,2.443,4.964,4.04,8.306,4.215c-0.062-0.3-0.1-0.611-0.1-0.923c0-2.22,1.796-4.028,4.028-4.028 c1.16,0,2.207,0.486,2.943,1.272c0.91-0.175,1.782-0.512,2.556-0.973c-0.299,0.935-0.936,1.721-1.771,2.22 c0.811-0.088,1.597-0.312,2.319-0.624C21.104,6.712,20.419,7.423,19.633,7.997z"></path></svg>
                                        <span class="u-screen-reader-text">Twitter</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:"><path d="M11.999,7.377c-2.554,0-4.623,2.07-4.623,4.623c0,2.554,2.069,4.624,4.623,4.624c2.552,0,4.623-2.07,4.623-4.624 C16.622,9.447,14.551,7.377,11.999,7.377L11.999,7.377z M11.999,15.004c-1.659,0-3.004-1.345-3.004-3.003 c0-1.659,1.345-3.003,3.004-3.003s3.002,1.344,3.002,3.003C15.001,13.659,13.658,15.004,11.999,15.004L11.999,15.004z"></path><circle cx="16.806" cy="7.207" r="1.078"></circle><path d="M20.533,6.111c-0.469-1.209-1.424-2.165-2.633-2.632c-0.699-0.263-1.438-0.404-2.186-0.42 c-0.963-0.042-1.268-0.054-3.71-0.054s-2.755,0-3.71,0.054C7.548,3.074,6.809,3.215,6.11,3.479C4.9,3.946,3.945,4.902,3.477,6.111 c-0.263,0.7-0.404,1.438-0.419,2.186c-0.043,0.962-0.056,1.267-0.056,3.71c0,2.442,0,2.753,0.056,3.71 c0.015,0.748,0.156,1.486,0.419,2.187c0.469,1.208,1.424,2.164,2.634,2.632c0.696,0.272,1.435,0.426,2.185,0.45 c0.963,0.042,1.268,0.055,3.71,0.055s2.755,0,3.71-0.055c0.747-0.015,1.486-0.157,2.186-0.419c1.209-0.469,2.164-1.424,2.633-2.633 c0.263-0.7,0.404-1.438,0.419-2.186c0.043-0.962,0.056-1.267,0.056-3.71s0-2.753-0.056-3.71C20.941,7.57,20.801,6.819,20.533,6.111z M19.315,15.643c-0.007,0.576-0.111,1.147-0.311,1.688c-0.305,0.787-0.926,1.409-1.712,1.711c-0.535,0.199-1.099,0.303-1.67,0.311 c-0.95,0.044-1.218,0.055-3.654,0.055c-2.438,0-2.687,0-3.655-0.055c-0.569-0.007-1.135-0.112-1.669-0.311 c-0.789-0.301-1.414-0.923-1.719-1.711c-0.196-0.534-0.302-1.099-0.311-1.669c-0.043-0.95-0.053-1.218-0.053-3.654 c0-2.437,0-2.686,0.053-3.655c0.007-0.576,0.111-1.146,0.311-1.687c0.305-0.789,0.93-1.41,1.719-1.712 c0.534-0.198,1.1-0.303,1.669-0.311c0.951-0.043,1.218-0.055,3.655-0.055c2.437,0,2.687,0,3.654,0.055 c0.571,0.007,1.135,0.112,1.67,0.311c0.786,0.303,1.407,0.925,1.712,1.712c0.196,0.534,0.302,1.099,0.311,1.669 c0.043,0.951,0.054,1.218,0.054,3.655c0,2.436,0,2.698-0.043,3.654H19.315z"></path></svg>
                                        <span class="u-screen-reader-text">Instagram</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#0">
                                        <i class="fab fa-whatsapp text-light ml-2" style="font-size: 28px;"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#0">
                                        <i class="fab fa-linkedin text-light ml-2" style="font-size: 28px;"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#0">
                                        <i class="fab fa-github text-light ml-2" style="font-size: 28px;"></i>
                                    </a>
                                </li>
                            </ul> <!-- end s-footer__social -->
                        </div> <!-- end s-about__content-btn -->
            
                    </div>
                </div> <!-- end row -->
            
            </section>


            <!-- portfolio
            ----------------------------------------------- -->
            <section id="portfolio" class="s-expertise">
            
                <div class="container-fluid">
                    <div class="row no-gutters">
                    
                        <div class="col-12 mb-5 text-center">
                            <div class="text-pretitle">Portafolio</div>                           
                            <h2 class="text-display-title">Proyectos Destacados</h2>
                            <p class="lead">
                                A continuación, te presento una selección de proyectos en los que he trabajado, cada uno diseñado para resolver desafíos únicos utilizando las tecnologías más adecuadas.
                            </p>
                        </div> <!-- end col-12 -->
                    
                        <!-- Proyecto 1 -->
                        @foreach ($projects as $project)
                        <div class="col-lg-4 col-md-6 mb-5 pr-lg-4">
                            <div class="card h-100 shadow border-0 rounded-3 overflow-hidden">
                                <img src="{{ $project->image }}" class="card-img-top img-fluid" alt="Imagen de Proyecto: {{ $project->name }}" style="object-fit: cover; height: 220px;">
                                
                                <div class="card-body d-flex flex-column justify-content-between">
                                    <div>
                                        <h5 class="mt-0 custom-card-title mb-3">{{ Str::words($project->name, 8) }}</h5>
                                        
                                        <p class="text-card text-dark mb-4">
                                            {{ Str::words($project->description, 20) }}
                                        </p>
                        
                                        <p class="text-muted small mb-3">
                                            <strong>Stack:</strong> 
                                            @foreach($project->stack as $s)
                                                {{ $s }}@if(!$loop->last), @endif
                                            @endforeach
                                        </p>
                                    </div>
                        
                                    <div class="mb-0">
                                        @if(isset($project->link))
                                            <a href="{{ $project->link }}" target="_blank" class="btn btn-outline-primary btn-block mb-0">
                                                <i class="fas fa-external-link-alt"></i> Ver Proyecto
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    
                    
                    </div> <!-- end row -->
                
                    <div class="row mt-5">
                        <div class="col-12 text-center">
                            <a href="https://github.com/hectordamas" target="blank" class="btn btn-primary btn-lg">
                                <i class="fab fa-github"></i> Ver Proyectos en Github
                            </a>
                        </div>
                    </div> <!-- end row -->
                
                </div> <!-- end container -->
            
            </section> <!-- end portfolio -->


            <!-- Experiencia laboral
            ----------------------------------------------- -->
            <section id="experience" class="s-clients">          

                <div class="row s-clients__content-block width-sixteen-col">
                    <div class="column xl-12 grid-block grid-section-split">
                    
                        <div class="section-header grid-section-split__header">
                            <div class="text-pretitle">Experiencia Laboral</div>                           
                            <h2 class="text-display-title">
                                Trayectoria Profesional Destacada
                            </h2>       
                        </div> <!-- end section-header -->
                    
                        <div class="grid-section-split__primary">
                            @foreach ($experiences->take(1) as $experience)
                            <div class="experience-item mb-5 card">
                                <div class="card-body">
                                    <h5 class="custom-experience-title mb-0 mt-5">
                                        <i class="fas fa-briefcase mr-2"></i> {{ $experience->position }}
                                    </h5>
                                    <p class="text-muted mb-0"><strong>Empresa:</strong> {{ $experience->company }}</p>
                                    <p class="text-muted mb-0"><strong>Periodo:</strong> {{ $experience->start_date }} - {{ $experience->end_date ?? 'Actualidad' }}</p>
                                    <p class="mb-5 text-card">
                                        {!! $experience->description !!}
                                    </p>
                                </div>
                            </div>
                            @endforeach
                        </div> <!-- end grid-section-split__primary -->
                    
                    </div> <!-- end column -->

                    @foreach($experiences->skip(1)->take(4) as $experience)
                    <div class="col-md-6">
                        <div class="experience-item mb-5 card">
                            <div class="card-body">
                                <h5 class="custom-experience-title mb-0 mt-5">
                                    <i class="fas fa-briefcase mr-2"></i> {{ $experience->position }}
                                </h5>
                                <p class="text-muted mb-0"><strong>Empresa:</strong> {{ $experience->company }}</p>
                                <p class="text-muted mb-0"><strong>Periodo:</strong> {{ $experience->start_date }} - {{ $experience->end_date ?? 'Actualidad' }}</p>
                                <p class="mb-5 text-card">{!! $experience->description !!}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach


                </div> <!-- end row -->

                <div class="row mt-5">
                    <div class="col-12 text-center">
                        <a href="https://linkedin.com/in/hectordamas" target="blank" class="btn btn--stroke">
                            <i class="fab fa-linkedin"></i> Ver Más en LinkedIn
                        </a>
                    </div>
                </div> <!-- end row -->

            </section> <!-- end s-clients --> 
        </section> <!-- s-content-->

        <section id="certifications" class="s-certifications s-cta">

            <div class="row row-x-center">
                <div class="column xl-12 lg-12">
                    <div class="s-certifications__content">
                        <h2 class="text-display-title">
                            Certificaciones Profesionales
                        </h2>
                        <p class="lead">
                            A lo largo de mi carrera, he obtenido diversas certificaciones que demuestran mi compromiso con el aprendizaje continuo y la excelencia técnica.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row row-x-center">
                <div class="column xl-12 lg-12">
                    <div class="row row-x-center">
                        <div class="column xl-6 lg-6">
                            <ul class="certifications-list" style="list-style: none;">
                                @foreach($certifications->take(16) as $certification)
                                <li class="text-light">
                                    <a class="text-light" href="{{ url($certification->url) }}" target="_blank">
                                        <i class="fas fa-trophy" style="color: gold;"></i> {{$certification->name}}
                                    </a>
                                </li>                                
                                @endforeach
                            </ul>
                        </div>
                        <div class="column xl-6 lg-6">
                            <ul class="certifications-list" style="list-style: none;">
                                @foreach($certifications->skip(16)->take(15) as $certification)
                                <li class="text-light">
                                    <a class="text-light" href="{{ url($certification->url) }}" target="_blank">
                                        <i class="fas fa-trophy" style="color: gold;"></i> {{$certification->name}}
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </div>

                    </div>
                </div>

            </div>
        
        </section>

        <section id="contact" class="s-journal">

            <div class="row s-journal__content width-sixteen-col justify-content-center">
                <div class="column xl-10 grid-block">
                    <div class="grid-full section-header text-center">
                        <div class="text-pretitle">Contacto</div>                           
                        <h2 class="text-display-title">
                        Trabajemos Juntos!
                        </h2>  
                        <p class="lead mt-5">
                            Si tienes algún proyecto en mente o simplemente quieres conocer más sobre cómo puedo ayudarte a alcanzar tus objetivos, no dudes en ponerte en contacto. Estoy aquí para hacer realidad tus ideas.
                        </p>
                    </div> <!-- end section-header --> 
                </div> <!-- end grid-block-->
            </div> <!-- end s-journal__content -->

            <div class="row justify-content-center">
                <div class="col-md-10">
                    <form class="row" method="POST" action="{{ url('sendMessage') }}">
                        @csrf
                        <div class="col-md-6 form-group">
                            <label class="text-light">Ingresa Tu Nombre Completo</label>
                            <input class="u-fullwidth" type="text" name="name" placeholder="Joe Doe" >
                        </div>
                        <div class="col-md-6 form-group">
                            <label class="text-light">Ingresa Tu Correo Electrónico</label>
                            <input class="u-fullwidth" type="email" name="email" placeholder="ejemplo@mailbox.com">
                        </div>

                        <div class="col-md-6 form-group">
                            <label class="text-light">Ingresa Tu Número Telefónico</label>
                            <input class="u-fullwidth" type="text" name="phone" placeholder="04241234567">
                        </div>

                        <div class="col-md-6 form-group">
                            <label class="text-light">Asunto</label>
                            <input class="u-fullwidth" type="text" name="subject" placeholder="Contacto">
                        </div>

                        <div class="col-md-12 form-group">
                            <label class="text-light">Escribe tu Mensaje</label>
                            <textarea class="u-fullwidth" placeholder="Mensaje de Contacto" name="message"></textarea>    
                        </div>

                        <div class="col-md-12">
                            <button class="btn--primary u-fullwidth" type="submit">
                                <i class="fas fa-paper-plane"></i> Enviar Mensaje
                            </button>
                        </div>
                    </form>
                </div>
            </div>

        </section>
        



        <!-- # footer 
        ================================================== -->
        <footer class="s-footer">
            <div class="row s-footer__content">
                <div class="column xl-6 lg-6 md-12 s-footer__block s-footer__about">                    
                    <h3>Acerca De</h3>
                    <p>
                        Soy un apasionado del desarrollo y la tecnología, con una trayectoria de más de 6 años, enfocada en la creación de soluciones innovadoras que transformen las experiencias digitales. A lo largo de mi carrera, me he comprometido a ofrecer resultados que generan valor tanto para las empresas como para los usuarios finales.
                    </p>               
                </div>                
                <div class="column xl-3 lg-6 md-12 s-footer__block s-footer__site-links">
                    <h3>Enlaces</h3>
                    <ul class="link-list">
                        <li><a class="smoothscroll" href="#intro">Inicio</a></li>
                        <li><a class="smoothscroll" href="#about">Acerca De</a></li>
                        <li><a class="smoothscroll" href="#portfolio">Portafolio</a></li>
                        <li><a class="smoothscroll" href="#experience">Experiencia Laboral</a></li>
                        <li><a class="smoothscroll" href="#contact">Contacto</a></li>
                    </ul>
                </div>
 
            </div>    
            
            <div class="row s-footer__bottom">
                <div class="column xl-6 lg-12">
                    <ul class="s-footer__social social-list">
                        <li>
                            <a href="#0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:"><path d="M20,3H4C3.447,3,3,3.448,3,4v16c0,0.552,0.447,1,1,1h8.615v-6.96h-2.338v-2.725h2.338v-2c0-2.325,1.42-3.592,3.5-3.592 c0.699-0.002,1.399,0.034,2.095,0.107v2.42h-1.435c-1.128,0-1.348,0.538-1.348,1.325v1.735h2.697l-0.35,2.725h-2.348V21H20 c0.553,0,1-0.448,1-1V4C21,3.448,20.553,3,20,3z"></path></svg>
                                <span class="u-screen-reader-text">Facebook</span>
                            </a>
                        </li>
                        <li>
                            <a href="#0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:"><path d="M19.633,7.997c0.013,0.175,0.013,0.349,0.013,0.523c0,5.325-4.053,11.461-11.46,11.461c-2.282,0-4.402-0.661-6.186-1.809 c0.324,0.037,0.636,0.05,0.973,0.05c1.883,0,3.616-0.636,5.001-1.721c-1.771-0.037-3.255-1.197-3.767-2.793 c0.249,0.037,0.499,0.062,0.761,0.062c0.361,0,0.724-0.05,1.061-0.137c-1.847-0.374-3.23-1.995-3.23-3.953v-0.05 c0.537,0.299,1.16,0.486,1.82,0.511C3.534,9.419,2.823,8.184,2.823,6.787c0-0.748,0.199-1.434,0.548-2.032 c1.983,2.443,4.964,4.04,8.306,4.215c-0.062-0.3-0.1-0.611-0.1-0.923c0-2.22,1.796-4.028,4.028-4.028 c1.16,0,2.207,0.486,2.943,1.272c0.91-0.175,1.782-0.512,2.556-0.973c-0.299,0.935-0.936,1.721-1.771,2.22 c0.811-0.088,1.597-0.312,2.319-0.624C21.104,6.712,20.419,7.423,19.633,7.997z"></path></svg>
                                <span class="u-screen-reader-text">Twitter</span>
                            </a>
                        </li>
                        <li>
                            <a href="#0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:"><path d="M11.999,7.377c-2.554,0-4.623,2.07-4.623,4.623c0,2.554,2.069,4.624,4.623,4.624c2.552,0,4.623-2.07,4.623-4.624 C16.622,9.447,14.551,7.377,11.999,7.377L11.999,7.377z M11.999,15.004c-1.659,0-3.004-1.345-3.004-3.003 c0-1.659,1.345-3.003,3.004-3.003s3.002,1.344,3.002,3.003C15.001,13.659,13.658,15.004,11.999,15.004L11.999,15.004z"></path><circle cx="16.806" cy="7.207" r="1.078"></circle><path d="M20.533,6.111c-0.469-1.209-1.424-2.165-2.633-2.632c-0.699-0.263-1.438-0.404-2.186-0.42 c-0.963-0.042-1.268-0.054-3.71-0.054s-2.755,0-3.71,0.054C7.548,3.074,6.809,3.215,6.11,3.479C4.9,3.946,3.945,4.902,3.477,6.111 c-0.263,0.7-0.404,1.438-0.419,2.186c-0.043,0.962-0.056,1.267-0.056,3.71c0,2.442,0,2.753,0.056,3.71 c0.015,0.748,0.156,1.486,0.419,2.187c0.469,1.208,1.424,2.164,2.634,2.632c0.696,0.272,1.435,0.426,2.185,0.45 c0.963,0.042,1.268,0.055,3.71,0.055s2.755,0,3.71-0.055c0.747-0.015,1.486-0.157,2.186-0.419c1.209-0.469,2.164-1.424,2.633-2.633 c0.263-0.7,0.404-1.438,0.419-2.186c0.043-0.962,0.056-1.267,0.056-3.71s0-2.753-0.056-3.71C20.941,7.57,20.801,6.819,20.533,6.111z M19.315,15.643c-0.007,0.576-0.111,1.147-0.311,1.688c-0.305,0.787-0.926,1.409-1.712,1.711c-0.535,0.199-1.099,0.303-1.67,0.311 c-0.95,0.044-1.218,0.055-3.654,0.055c-2.438,0-2.687,0-3.655-0.055c-0.569-0.007-1.135-0.112-1.669-0.311 c-0.789-0.301-1.414-0.923-1.719-1.711c-0.196-0.534-0.302-1.099-0.311-1.669c-0.043-0.95-0.053-1.218-0.053-3.654 c0-2.437,0-2.686,0.053-3.655c0.007-0.576,0.111-1.146,0.311-1.687c0.305-0.789,0.93-1.41,1.719-1.712 c0.534-0.198,1.1-0.303,1.669-0.311c0.951-0.043,1.218-0.055,3.655-0.055c2.437,0,2.687,0,3.654,0.055 c0.571,0.007,1.135,0.112,1.67,0.311c0.786,0.303,1.407,0.925,1.712,1.712c0.196,0.534,0.302,1.099,0.311,1.669 c0.043,0.951,0.054,1.218,0.054,3.655c0,2.436,0,2.698-0.043,3.654H19.315z"></path></svg>
                                <span class="u-screen-reader-text">Instagram</span>
                            </a>
                        </li>
                        <li>
                            <a href="#0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M20.66 6.98a9.932 9.932 0 0 0-3.641-3.64C15.486 2.447 13.813 2 12 2s-3.486.447-5.02 1.34c-1.533.893-2.747 2.107-3.64 3.64S2 10.187 2 12s.446 3.487 1.34 5.02a9.924 9.924 0 0 0 3.641 3.64C8.514 21.553 10.187 22 12 22s3.486-.447 5.02-1.34a9.932 9.932 0 0 0 3.641-3.64C21.554 15.487 22 13.813 22 12s-.446-3.487-1.34-5.02zM12 3.66c2 0 3.772.64 5.32 1.919-.92 1.174-2.286 2.14-4.1 2.9-1.002-1.813-2.088-3.327-3.261-4.54A7.715 7.715 0 0 1 12 3.66zM5.51 6.8a8.116 8.116 0 0 1 2.711-2.22c1.212 1.201 2.325 2.7 3.34 4.5-2 .6-4.114.9-6.341.9-.573 0-1.006-.013-1.3-.04A8.549 8.549 0 0 1 5.51 6.8zM3.66 12c0-.054.003-.12.01-.2.007-.08.01-.146.01-.2.254.014.641.02 1.161.02 2.666 0 5.146-.367 7.439-1.1.187.373.381.793.58 1.26-1.32.293-2.674 1.006-4.061 2.14S6.4 16.247 5.76 17.5c-1.4-1.587-2.1-3.42-2.1-5.5zM12 20.34c-1.894 0-3.594-.587-5.101-1.759.601-1.187 1.524-2.322 2.771-3.401 1.246-1.08 2.483-1.753 3.71-2.02a29.441 29.441 0 0 1 1.56 6.62 8.166 8.166 0 0 1-2.94.56zm7.08-3.96a8.351 8.351 0 0 1-2.58 2.621c-.24-2.08-.7-4.107-1.379-6.081.932-.066 1.765-.1 2.5-.1.799 0 1.686.034 2.659.1a8.098 8.098 0 0 1-1.2 3.46zm-1.24-5c-1.16 0-2.233.047-3.22.14a27.053 27.053 0 0 0-.68-1.62c2.066-.906 3.532-2.006 4.399-3.3 1.2 1.414 1.854 3.027 1.96 4.84-.812-.04-1.632-.06-2.459-.06z"></path></svg>
                                <span class="u-screen-reader-text">Dribbble</span>
                            </a>
                        </li>
                    </ul> <!-- end s-footer__social -->
                </div>

                <div class="ss-go-top">
                    <a class="smoothscroll" title="Back to Top" href="#top">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="36" height="36" fill="none" stroke="#ffffff" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">&lt;!--!  Atomicons Free 1.00 by @atisalab License - https://atomicons.com/license/ (Icons: CC BY 4.0) Copyright 2021 Atomicons --&gt;<polyline points="17 11 12 6 7 11"></polyline><line x1="12" y1="18" x2="12" y2="6"></line></svg>
                    </a>
                </div> <!-- end ss-go-top -->
            </div>
            
        </footer> <!-- end s-footer -->

    </div> <!-- end page-wrap -->

    <!-- Java Script
    ================================================== -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('js/plugins.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

</body>
</html>