<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="_token" content="{{ csrf_token() }}" >
        <title>Welcome Home</title>

        <meta property="og:title" content="Welcome Home" />
        <meta property="og:type" content="article" />
        <meta property="og:url" content="http://welcomehome.com.mx/" />
        <meta property="og:image" content="http://welcomehome.com.mx/images/home/home_logo.png" />
        <meta property="og:description" content="Somos un equipo de puro talento mexicano. Te damos la bienvenida para hacer realidad tus ideas." />
        <link rel="shortcut icon" type="image/x-icon" href="http://welcomehome.com.mx/3933favicon.ico">
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
        <noscript><link rel="stylesheet" href="{{ asset('css/main.css') }}" /></noscript>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-48652621-4"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-48652621-4');
        </script>

        <!-- Add fancyBox -->
    <body id="body" class="is-preload">
        <!-- Page Wrapper -->
        <div id="page-wrapper">

            <!-- Wrapper -->
            <div id="wrapper">
                <banner-component
                        header="us"
                        title="¿quiénes somos?"
                        text=""
                ></banner-component>

                <!-- Que Hacemos -->
                <do-component
                        header="do"
                        title="¿qué hacemos?"
                        text=""
                        :items="[]"
                ></do-component>

                <!-- eventos -->
                <events-component
                    header=""
                    title="eventos"
                    text=""
                ></events-component>

                <exhibitions-component
                        header=""
                        title="expos"
                        text=""
                ></exhibitions-component>

                <activation-component
                        header=""
                        title="activación"
                        text=""
                ></activation-component>

                <display-component
                        header=""
                        title="display"
                        text=""
                ></display-component>


                <tech-component
                        header=""
                        title="tech"
                        text=""
                ></tech-component>

                <businness-component
                        header=""
                        title="display"
                        text=""
                ></businness-component>


                <why-component
                        header="why"
                        title="¿por qué trabajar con Welcome Home?"
                        text=""
                        :items="[]"
                ></why-component>

                <how-component
                        header="how"
                        title="¿cómo lo hacemos?"
                        text="<p>Creamos experiencias con base en  <br />proyectos innovadores yproceso simples</p>"
                ></how-component>

                <team-component
                ></team-component>
                <!-- Contacto -->
                <contact-component
                        title="Contacto"
                        text="¿Quieren que te contactemos?"
                ></contact-component>
            </div>
        </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/browser.min.js') }}"></script>
    <script src="{{ asset('assets/js/breakpoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    </body>
</html>
