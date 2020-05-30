<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    @extends('head')
</head>


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

            <a href="https://www.facebook.com/"><img src="/images/iconfb.svg" style="color: #fece18;"width="20px" alt=""></a>
            <a href="https://www.instagram.com/?hl=es-la"><img src="/images/iconIg.svg" width="20px" alt=""></a>
            <a href="https://twitter.com/login?lang=es"><img src="/images/iconTw.svg" width="20px" alt=""></a>
          </div>



        </div>


                <div class="user-var col-12">
                  <span class=" link-pag-user">
                      @guest
                      @if (Route::has('register'))
                            <a class="" href="/carrito/"> <img style="width: 20px;" src="/images/bag.png" alt="instagram"></img>Carrito<span class="sr-only">(current)</span></a>
                      @endif
                      @else
                            <a class="" href="/carrito/{{Auth::user()->id}}"> <img style="width: 20px;" src="/images/bag.png" alt="instagram"></img>Carrito<span class="sr-only">(current)</span></a>
                      @endguest
                  </span>



                      <div class="">
                        @guest
                          <span class="link-pag-user ">
                                <a class="" href="{{ route('login') }}">{{ __('Login') }}</a>
                          </span>
                        @if (Route::has('register'))
                            <span class="link-pag-user">
                                  <a class="" href="{{ route('register') }}">{{ __('Registráte') }}</a>
                            </span>
                        @endif
                        @else
                            <span class="dropdown link-pag-user">
                                  <a id="Dropdown" class=" dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <img  style="width: 20px;" src="/images/userIcon.png" alt="WELCOME"></img>{{ Auth::user()->nickName }}
                                  </a>
                                  <div class="dropdown-menu dropdown-menu-right link-pag-user" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="/perfilUsuario/{{Auth::user()->id}}">
                                            Perfil
                                        </a>
                                        <a class="dropdown-item " href="{{ route('logout') }}"onclick="event.preventDefault();
                                                                   document.getElementById('logout-form').submit();">
                                                      {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                  @csrf
                                        </form>
                                  </div>
                              </span>
                          @endguest


                    </div>
                </div>


        <div class="contenedor-nav-principal">
          <nav class="nav navbar navbar-expand-lg navbar ">
            <a class="navbar-brand logo-nav" href="/"><img src="/images/logo1.png" alt="SHOP BEER HOUSE"></img></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"><img style="width:60px" src="/images/toggleIcon.png" alt="X"> </img></span>
            </button>

            <div class="collapse navbar-collapse " id="navbarSupportedContent">
              <div class="content-links navbar-nav col-12 col-md-12 col-lg-12">


                <li class="nav-item link-pag  ">
                  <a class="nav-link" href="/"><strong>HOME</strong></a>
                </li>
                <li class="nav-item link-pag  ">
                  <a class="nav-link" href="/catalogo"><strong>CATALOGO</strong></a>
                </li>
                <li class="nav-item link-pag  ">
                  <a class="nav-link" href="/faq"><strong>FAQ</strong></a>
                </li>
                <li class="nav-item link-pag ">
                  <a class="nav-link" href="/contact"><strong>CONTACTO</strong></a>
                </li>


              </div>

            </div>
          </nav>
        </div>

</html>
