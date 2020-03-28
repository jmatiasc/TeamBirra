<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @extends('head')
</head>
<body>

  <div class="contactBar ">

    <div class="elementos">
      <span class="ubicacion">
        <a href="https://goo.gl/maps/bVAst6WiqQJCFpFx9">
        <img src="/images/iconUbicacion.svg" width="10px"alt="">
        Encuentra nuestras cervezas
        </a>
      </span>


    </div>

    <div class="red-social">

      <a href="www.facebook.com"><img src="/images/iconfb.svg" style="fill:#fece18"width="20px" alt=""></a>
      <a href="www.instagram.com"><img src="/images/iconIg.svg" width="20px" alt=""></a>
      <a href="www.twitter.com"><img src="/images/iconTw.svg" width="20px" alt=""></a>
    </div>



  </div>

    <div id="app ">

        <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm row">

              <a class="navbar-brand col-2 col-md-1 col-lg-1 logo" href="index"><img  style="width: 50px;" src="/images/logo1.png" alt="WELCOME"></img></a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

  <div class="panel collapse navbar-collapse col-11 col-md-11 col-lg-11" id="navbarSupportedContent">
          <div class="row total-bar">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto panelCentral col-12 col-md-5 col-lg-5">
                      <li class="nav-item ">
                        <a class="nav-link" href="/index">HOME<span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/catalogo">CATALOGO</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/faq">FAQ</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/contact">CONTACTO</a>
                      </li>
                    </ul>



                    <!-- Right Side Of Navbar -->
                      <ul class="navbar-nav ml-auto PanelIzquierdo col-12 col-md-6 col-lg-6 ">

                                        <!--    <div class="searchBar col-md-2 col-lg-2">
                                          codigo de search NavBar para futuras mejoras

                                            <form class="form-inline  ">
                                            <button class="btn btn-outline-dark btn-sm my-2 my-sm-0 col-md-3 col-lg-3 botonSearch" type="submit"> <img style="" src="images/lupa.svg" alt="Search"></img></button>
                                            <input class="form-control form-control-sm mr-sm-2 col-md-8 col-lg-8 " type="search" placeholder="" aria-label="Search">
                                          </form>
                                        </div>-->

                      <a class="nav-link " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img  style="width: 20px;" src="/images/userIcon.png" alt="WELCOME"></img>
                      </a>
                        <!-- Authentication Links -->
                        <div class="log-reg ">


                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                      </div>

                        <div class="carrito ">
                          <li class="nav-item ">
                            @guest
                            @if (Route::has('register'))
                                <a class="nav-link" href="/carrito/"> <img style="width: 20px;" src="/images/bag.png" alt="instagram"></img>bag<span class="sr-only">(current)</span></a>
                              @endif
                              @else
                            <a class="nav-link" href="/carrito/{{Auth::user()->id}}"> <img style="width: 20px;" src="/images/bag.png" alt="instagram"></img>bag<span class="sr-only">(current)</span></a>
                          </li>
                        </div>
                      @endguest

                    </ul>

                </div>
  </div>


        </nav>
</div>
        <main class="py-4">
          @yield('content')

        </main>



</body>
</html>
