@extends('layout.main')

@section('content')
<!-- Begin Main Content -->
<div class="main-content">
    <!-- Begin About Me Section -->
    <div class="section-light about-me" id="about-me">
        <div class="container">
            <div class="columns is-multiline">
                <div class="column is-8 has-vertically-aligned-content" data-aos="fade-right">
                    <div class="column is-12 about-me">
                        <h1 class="title has-text-centered section-title">Sobre mí</h1>
                    </div>
                    <p class="is-larger" align="justify">
                        &emsp;&emsp;<strong>Hola, soy Alexis Goyo, Ingeniero en Informática y desarrollador
                            web.</strong>
                    </p>
                    <br />
                    <p align="justify">
                        &emsp;&emsp;Desde hace 2 años y medio me dedico al desarrollo de aplicaciones web y
                        móvil/híbrido utilizando tecnologías como: Angular, Ionic y Laravel.
                    </p>
                    <p align="justify">
                        &emsp;&emsp;Desde pequeño me ha interesado la tecnología en general y eso me llevó a
                        estudiar Ingeniería en Informática.
                        Durante mi formación académica y de manera autodidacta he aprendido sobre multiples
                        herramientas y lenguajes de programación para
                        el desarrollo de soluciones informáticas.
                    </p>
                    <p align="justify">
                        &emsp;&emsp;Aficionado del mundo de linux y el software libre, utilizando actualmente Elementary
                        OS como sistema operativo principal.
                    </p>
                    {{-- <br />
                        <div class="is-divider"></div>
                        <div class="columns about-links">
                            <div class="column">
                                <p class="heading">
                                    <strong>Give me a ring</strong>
                                </p>
                                <p class="subheading">
                                    123-456-7890
                                </p>
                            </div>
                            <div class="column">
                                <p class="heading">
                                    <strong>Email Me</strong>
                                </p>
                                <p class="subheading">
                                    hello@example.com
                                </p>
                            </div>
                            <div class="column">
                                <p class="heading">
                                    <strong>View my portfolio</strong>
                                </p>
                                <p class="subheading">
                                    example.com
                                </p>
                            </div>
                        </div> --}}
                </div>
                <div class="column is-4 right-image " data-aos="fade-left">
                    <img class="is-rounded" src="{{asset('/assets/img/avatar/avatar.jpg')}}" width="100%" height="100%" alt="" />
                </div>
            </div>
        </div>
    </div>
    <!-- End About Me Content -->
    <div class="section-dark resume">
        <div class="container">
            <div class="columns is-multiline" data-aos="fade-in" data-aos-easing="linear">
                <div class="column is-12 about-me">
                    <h1 class="title has-text-centered section-title">
                        Descarga mi CV
                    </h1>
                </div>
                <div class="column is-10 has-text-centered is-offset-1">
                    {{-- <h2 class="subtitle">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor incididunt ut labore et doloremagna aliqua
                        </h2> --}}

                    <a href="{{asset('/assets/docs/cv.pdf')}}" class="button is-large" target="_blank">
                        Descarga mi CV&emsp;<i class="fas fa-download fa-lg"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Begin Services Content -->
    <div class="section-color services" id="my-work">
    {{-- <div class="section-color services" id="services"> --}}
        <div class="container">
            <div class="columns is-multiline">
                <div class="column is-12 about-me" data-aos="fade-in" data-aos-easing="linear">
                    <h1 class="title has-text-centered section-title">¿A qué me dedico?</h1>
                    <h2 class="subtitle">
                        {{-- <p align="center">
                            A continuación describo algunas de las funciones que he ejercido durante mi carrera
                            profesional.
                        </p> --}}
                    </h2>
                    <br />
                </div>
                <div class="columns is-12">
                    <div class="column is-4 has-text-centered" data-aos="fade-in" data-aos-easing="linear">
                        <i class="fas fa-laptop-code fa-3x"></i>
                        <hr/>
                        <h2 class="title has-text-centered section-title" style="padding-bottom: 0px">Desarrollo de aplicaciones Web</h2>
                        {{-- <h2>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                            do eiusmod tempor incididunt ut labore et dolore magna aliqua
                        </h2> --}}
                    </div>
                    <div class="column is-4 has-text-centered" data-aos="fade-in" data-aos-easing="linear">
                        <i class="fas fa-mobile-alt fa-3x"></i>
                        <hr />
                        <h2 class="title has-text-centered section-title" style="padding-bottom: 0px">Desarrollo de aplicaciones móvil/híbrido</h2>
                        {{-- <h2>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                            do eiusmod tempor incididunt ut labore et dolore magna aliqua
                        </h2> --}}
                    </div>
                    <div class="column is-4 has-text-centered" data-aos="fade-in" data-aos-easing="linear">
                        <i class="fas fa-rocket fa-3x"></i>
                        <hr />
                        <h2 class="title has-text-centered section-title" style="padding-bottom: 0px">Despliegue de aplicaciones web/móvil</h2>
                        {{-- <h2>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                            do eiusmod tempor incididunt ut labore et dolore magna aliqua
                        </h2> --}}
                    </div>
                </div>
                <hr />
            </div>
        </div>
    </div>
    <!-- End Services Content -->
    <!-- Begin Skills Content -->
    {{-- <div class="section-light skills" id="skills">
        <div class="container">
            <div class="columns is-multiline">
                <div class="column is-12 about-me">
                    <h1 class="title has-text-centered section-title">Mis Habilidades</h1>
                </div>
                <div class="column is-6" data-aos="fade-in" data-aos-easing="linear">
                    <h1>Adobe Experience Design</h1>
                    <progress class="progress" value="70" max="100">30%</progress>
                    <h1>Adobe After Effects</h1>
                    <progress class="progress" value="65" max="100">30%</progress>
                    <h1>Visual Studio Code</h1>
                    <progress class="progress" value="58" max="100">45%</progress>
                    <h1>Sketch</h1>
                    <progress class="progress" value="90" max="100">60%</progress>
                </div>
                <div class="column is-6" data-aos="fade-in" data-aos-easing="linear">
                    <h1>HTML</h1>
                    <progress class="progress" value="85" max="100">30%</progress>
                    <h1>CSS</h1>
                    <progress class="progress" value="95" max="100">30%</progress>
                    <h1>VueJS</h1>
                    <progress class="progress" value="70" max="100">45%</progress>
                    <h1>React</h1>
                    <progress class="progress" value="60" max="100">60%</progress>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- End Skills Content -->
    <!-- Begin Work Content -->
    {{-- <div class="section-dark my-work" id="my-work">
        <div class="container">
            <div class="columns is-multiline" data-aos="fade-in" data-aos-easing="linear">
                <div class="column is-12">
                    <h1 class="title has-text-centered section-title">My Work</h1>
                </div>
                <div class="column is-3">
                    <a href="#">
                        <figure class="image is-2by1 work-item"
                            style="background-image: url('https://picsum.photos/320/180?image=0');"></figure>
                    </a>
                </div>
                <div class="column is-3">
                    <a href="#">
                        <figure class="image is-2by1 work-item"
                            style="background-image: url('https://picsum.photos/320/180?image=10');"></figure>
                    </a>
                </div>
                <div class="column is-3">
                    <a href="#">
                        <figure class="image is-2by1 work-item"
                            style="background-image: url('https://picsum.photos/320/180?image=20');"></figure>
                    </a>
                </div>
                <div class="column is-3">
                    <a href="#">
                        <figure class="image is-2by1 work-item"
                            style="background-image: url('https://picsum.photos/320/180?image=30');"></figure>
                    </a>
                </div>
                <div class="column is-3">
                    <a href="#">
                        <figure class="image is-2by1 work-item"
                            style="background-image: url('https://picsum.photos/320/180?image=40');"></figure>
                    </a>
                </div>
                <div class="column is-3">
                    <a href="#">
                        <figure class="image is-2by1 work-item"
                            style="background-image: url('https://picsum.photos/320/180?image=50');"></figure>
                    </a>
                </div>
                <div class="column is-3">
                    <a href="#">
                        <figure class="image is-2by1 work-item"
                            style="background-image: url('https://picsum.photos/320/180?image=60');"></figure>
                    </a>
                </div>
                <div class="column is-3">
                    <a href="#">
                        <figure class="image is-2by1 work-item"
                            style="background-image: url('https://picsum.photos/320/180?image=70');"></figure>
                    </a>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- End Work Content -->
    <!-- Begin Contact Content -->
    <div class="section-light contact" id="contact">
        <div class="container">
            <div class="columns is-multiline" data-aos="fade-in-up" data-aos-easing="linear">
                <div class="column is-12 about-me">
                    <h1 class="title has-text-centered section-title">
                        Contacto
                    </h1>
                </div>
                <div class="column is-10 is-offset-1">
                    <form action="#" method="POST">
                        <div class="field">
                            <label class="label">Nombre</label>
                            <div class="control has-icons-left">
                                <input class="input" type="text" placeholder="" name="Name" />
                                <span class="icon is-small is-left">
                                    <i class="fas fa-user"></i>
                                </span>
                            </div>
                        </div>
                        <div class="field">
                            <label class="label">Correo</label>
                            <div class="control has-icons-left">
                                <input class="input" type="email" placeholder="" name="Email" />
                                <span class="icon is-small is-left">
                                    <i class="fas fa-envelope"></i>
                                </span>
                            </div>
                        </div>
                        <div class="field">
                            <label class="label">Asunto</label>
                            <div class="control has-icons-left">
                                <input class="input" type="text" placeholder="" name="Name" />
                                <span class="icon is-small is-left">
                                    <i class="fas fa-user"></i>
                                </span>
                            </div>
                        </div>
                        <div class="field">
                            <label class="label">Mensaje</label>
                            <div class="control">
                                <textarea class="textarea" placeholder="Textarea" name="Message"></textarea>
                            </div>
                        </div>
                        <div class="field">
                            <div class="control ">
                                <button class="button submit-button" disabled="true">
                                    Enviar&nbsp;&nbsp;
                                    <i class="fas fa-paper-plane"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact Content -->
</div>
<!-- End Main Content -->
@endsection
