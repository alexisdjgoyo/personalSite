<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Hola, mi nombre es Alexis Goyo, Ingeniero en Informática y desarrollador web, bienvenido a mi sitio web donde te hablaré un poco sobre mi experiencia." />

    <title>Alexis Goyo</title>
    <!-- Bulma Version 0.9.0-->
    <link rel="stylesheet" href="{{asset('/assets/css/bulma.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/css/custom.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/plugins/fontawesome/css/all.css')}}" />
    {{-- <script src="https://kit.fontawesome.com/2828f7885a.js"
        integrity="sha384-WAsFbnLEQcpCk8lM1UTWesAf5rGTCvb2Y+8LvyjAAcxK1c3s5c0L+SYOgxvc6PWG" crossorigin="anonymous">
    </script> --}}
    {{-- <link rel="icon" type="image/png" href="favicon.png" /> --}}
</head>

<body>

    <!-- Begin Preloader -->
    <div class="preloader-wrapper">
        <div class="preloader">
            <img src="{{asset('/assets/img/preloader.gif')}}" alt="" />
        </div>
    </div>
    <!-- End Preloader-->
    <!-- Begin Scroll Up Button -->
    <!-- Begin Scroll Up Button -->

    <form action="#home">
        <a id="toTop" href="#home" title="Go to top">
            <i class="fas fa-angle-up"></i>
        </a>
    </form>
    <!-- End Scroll Up Button -->

    <!-- Begin Header -->
    <div class="header-wrapper" id="home">
        <!-- Begin Hero -->
        <section class="hero is-large" style="background: url({{asset('/assets/img/background.jpg')}});background-position: center;
        background-size: cover;">
            <!-- Begin Mobile Nav -->
            <nav class="navbar is-transparent is-hidden-desktop">
                <!-- Begin Burger Menu -->
                <div class="navbar-brand">
                    <div class="navbar-burger burger" id="burguer-menu" data-target="mobile-nav">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
                <!-- End Burger Menu -->
                <div id="mobile-nav" class="navbar-menu" style="">
                    <div class="navbar-end">
                        <div class="navbar-item">
                            <a class="navbar-item" href="/">
                                Inicio
                            </a>
                        </div>
                        <div class="navbar-item">
                            <a class="navbar-item" href="#about-me">
                                Sobre mí
                            </a>
                        </div>
                        {{-- <div class="navbar-item">
                            <a class="navbar-item" href="#services">
                                Blog
                            </a>
                        </div> --}}
                        <div class="navbar-item">
                            <a class="navbar-item" href="#my-work">
                                Mi trabajo
                            </a>
                        </div>
                        <div class="navbar-item">
                            <a class="navbar-item" href="#contact">
                                Contacto
                            </a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- End Mobile Nav -->
            <!-- Begin Hero Content-->
            <div class="hero-body">
                <div class="container has-text-centered">
                    <h1 class="subtitle" id="hello_world">Hello World!</h1>
                    <h2 class="title">Alexis Goyo</h2>
                    <h1 class="subtitle profession">Web Developer</h1>
                    <a href="https://github.com/alexisdjgoyo" class="button social-buttons" target="_blank">
                        <i class="fab fa-github fa-2x"></i>
                    </a>
                    <a href="https://www.linkedin.com/in/alexisdjgoyo/" class="button social-buttons" target="_blank">
                        <i class="fab fa-linkedin fa-2x"></i>
                    </a>
                    <a href="https://twitter.com/alexisdjgoyo" class="button social-buttons" target="_blank">
                        <i class="fab fa-twitter fa-2x"></i>
                    </a>


                </div>
            </div>
            <!-- End Hero Content-->
            <!-- Begin Hero Menu -->
            <div class="hero-foot is-hidden-mobile" id="">
                <div class="hero-foot--wrapper">
                    <div class="columns">
                        <div class="column is-12 hero-menu-desktop has-text-centered">
                            <ul>
                                <li class="is-active" id="home-link">
                                    <a href="/">Inicio</a>
                                </li>
                                <li>
                                    <a href="#about-me">Sobre mí</a>
                                </li>
                                {{-- <li>
                                    <a href="#services">Blog</a>
                                </li> --}}
                                <li>
                                    <a href="#my-work">Mi trabajo</a>
                                </li>
                                <li>
                                    <a href="#contact">Contacto</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Hero Menu -->
        </section>
        <!-- End Hero -->
    </div>
    <!-- End Header -->

    @yield('content')

    <!-- Begin Footer -->
    <div class="footer">
        <p>
            <strong class="white">Alexis Goyo</strong>
            | 2021

        </p>
    </div>
    <!-- End Footer -->

    <!-- Scripts -->
    <script src="{{asset('/assets/js/jquery.js')}}"></script>
    <script src="{{asset('/assets/js/custom.js')}}"></script>
</body>

</html>
