<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Suis-moi</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/main.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <main>

            <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
              <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
              </div>
            </div>
            <div class="site-mobile-menu-body"></div>
            </div>



            <header class="site-navbar site-navbar-target" role="banner">

            <div class="container">
              <div class="row align-items-center position-relative">

                <div class="col-3 ">
                  <div class="site-logo">
                    <a href="index.html">Suis-moi</a>
                  </div>
                </div>

                <div class="col-9  text-right">
                  

                  <span class="d-inline-block d-lg-none"><a href="#" class="text-white site-menu-toggle js-menu-toggle py-5 text-white"><span class="icon-menu h3 text-white"></span></a></span>

                  

                  <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
                    <ul class="site-menu main-menu js-clone-nav ml-auto ">
                      <li class="active"><a href="index.html" class="nav-link">Accueil</a></li>
                      <li><a href="services.html" class="nav-link">Publications</a></li>
                      <li><a href="barber-shop.html" class="nav-link">Premium</a></li>
                      <li><a href="about.html" class="nav-link">Contact</a></li>
                      <li><a href="blog.html" class="nav-link">Blog</a></li>
                    </ul>
                  </nav>
                </div>

                
              </div>
            </div>

            </header>
            
            @yield('content')
        </main>
    </div>
</body>
</html>
