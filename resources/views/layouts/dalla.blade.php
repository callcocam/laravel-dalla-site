<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Dalla Cervejaria</title>
    <meta name="description" content="Ela mudou. Descubra uma nova sensação.  Experimente Dalla, a cerveja dos mestres! "/>
    <meta name="keywords" content="Dalla, Cervejaria, Cerveja Artesanal, Santa Catarina"/>
    <meta name="robots" content="index,follow"/>
    <meta property="og:title" content="Dalla Cervejaria" />
    <meta property="og:description" content="Ela mudou. Descubra uma nova sensação.  Experimente Dalla, a cerveja dos mestres!" />
    <meta property="og:image" content="https://www.dallacervejaria.com.br/img/banner.jpg" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="675" />
    <meta property="og:url" content="https://www.dallacervejaria.com.br/" />
    <meta property="og:site_name" content="Dalla Cervejaria" />
    <meta property="og:locale" content="pt_BR" />
    <meta property="article:author" content="https://www.facebook.com/cervejariadalla" />
    <meta property="article:publisher" content="https://www.facebook.com/cervejariadalla" />
    <!-- Fonts -->

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
   <!--Favicon-->
   <link rel="icon" href="{{ asset('/img/favicon-dalla.png') }}" type="image/x-icon">
   <!-- Styles -->
    <link href="{{ asset('_cdn/dalla/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <header class="top">
            <div class="container">
                <div class="row">
                    <div class="col col-md-2">
                        <div class="logo">
                            <img src="{{ asset('img/logo.fw.png') }}">
                        </div>
                    </div>
                    <div class="col col-md-10">
                        <nav class="navbar navbar-expand-lg navbar-dark">
                            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav ml-auto text-right">
                                    @include('dalla.includes.nav')
                                    @include('dalla.includes.lang')
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <div class="main">
            @yield('content')
        </div>
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col col-md-4 gold small">
                        <div class="logo_footer">
                            <img src="{{ asset('img/logo-footer.fw.png') }}">
                        </div>
                        <div class="endereco_footer">
                            <p> {{ $tenant->address->street }} {{ $tenant->address->district }} {{ $tenant->address->city }} - {{ $tenant->address->state }} | {{ $tenant->address->zip }}</p>
                        </div>
                        <div class="fone_footer font-weight-bold" style="font-size: 17px">
                            {{ $tenant->phone }}
                        </div>
                        <div class="email_footer">
                            {{ $tenant->email }}
                        </div>
                        <div class="social_footer">
                            <a target="_blank" class="social_footer_icon" href="https://www.youtube.com/channel/UCbmGYHzXjufLBZfyag0uuuw"><img src="{{ asset('img/icon/youtube.fw.png') }}"> </a>
                            <a target="_blank" class="social_footer_icon" href="https://www.facebook.com/cervejariadalla"><img src="{{ asset('img/icon/facebook.fw.png') }}"> </a>
                            <a target="_blank" class="social_footer_icon" href="https://www.instagram.com/dallacervejaria/"><img src="{{ asset('img/icon/instagram.fw.png') }}"> </a>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="row h-100">
                            <div class="my-auto"  style="width: 100%">
                                <nav class="navbar navbar-expand-lg navbar-dark antonio footer_nav">
                                        <ul class="navbar-nav ml-auto">
                                          @include('dalla.includes.nav')
                                        </ul>
                                </nav>
                                <div class="copy_footer">
                                    <p class="small">Todos direitos reservados @ 2020 | Desenhado por SPO | Desenvolvido por Studio DCM</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Social Icons -->
        <ul id="social_side_links">
            <li><a target="_blank" href="https://www.youtube.com/channel/UCbmGYHzXjufLBZfyag0uuuw"><img src="{{ asset('img/icon/youtube.fw.png') }}"> </a>
            <li><a target="_blank" href="https://www.facebook.com/cervejariadalla"><img class="ml-1" src="{{ asset('img/icon/facebook.fw.png') }}"> </a>
            <li><a target="_blank"  href="https://www.instagram.com/dallacervejaria/"><img src="{{ asset('img/icon/instagram.fw.png') }}"> </a>
        </ul>
    </div>
 <!-- Scripts -->
<script src="{{ asset('_cdn/js/app3.js') }}" defer></script>
</body>
</html>
