@extends('footer')
@extends('nav')


@section('content')




<div class="panel-de-muestra">


<div id="carouselExampleIndicators" class="carousel slide muestrario-p carousel-fade" data-ride="carousel">
    <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" style="background-color:#fece18" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" style="background-color:#fece18" data-slide-to="1"></li>
    </ol>

    <div class="carousel-inner div-panel-muestra-principal" >
      <div class="carousel-item  div-panel-muestra active"style="background-image: url('../images/IMG-PORTADA-1.png');background-repeat: no-repeat;background-size:cover; " >
          <img src="../images/IMG-PORTADA-2.png" alt="">
          <div class="contenido-muestra">
                    <h2 class="texto-panel-muestra"><strong>Nueva: Cerveza Goose <br>Island 312 </strong> </h2>
                    <a href="/producto/20" name="button" class="boton-muestra btn btn-warning">¿La querés probar?</a>

          </div>

      </div>

      <div class="carousel-item div-panel-muestra2" style="background-image: url('../images/IMG-PORTADA2-1.png');background-repeat: no-repeat;background-size:cover; ">

        <img src="../images/ola.png" alt="">

        <div class="contenido-muestra">
          <a href="/producto/17" type="button" name="button" class="boton-muestra btn btn-info">¿La querés probar?</a>
              <div class="texto-panel-muestra2">
                <h1 class="">Echa con agua de mar!</h1>
                <img src="../images/logoAntares.png" alt="">
              </div>
        </div>
      </div>


    </div>




</div>

</div>

<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="panel-ofertas container">
        <label for=""> <h2> OFERTAS</h2></label>
        <section class="container row ">

                    @if ($productos[0])
                    @foreach ($productos[0] as $producto)
                      <!-- producto -->
                      <article class="container catalogo-productos col-12 col-sm-6 col-md-6 col-lg-3 " >

                        <div class="card_1 shadow p-3 mb-5 bg-white rounded">

                          <a href="/producto/<?php echo $producto["id"]?>">

                                  <div class="product">
                                    @php
                                      if ($producto->color->nombre=="Rojo") {
                                        $img="circulo-rojo.png";
                                      }else{
                                        if ($producto->color->nombre=="Negro") {
                                          $img="circulo-negro.png";
                                        }else{
                                            $img="circulo-amarillo.png";
                                        }
                                      }
                                    @endphp
                                    <div class="marco " style="background-image:url('../images/{{$img}}');">
                                        <img src="/storage/{{$producto->imagen}}" alt=" ">
                                    </div>


                                    <div class="marco-nombre">
                                        <h3><strong><?php echo  $producto["nombre"] ?></strong></h3>
                                    </div>

                                    <div class="precio_producto">$ <?php echo $producto["precio"] ?></div>

                                    <div class="puntuacion">

                                        <?php for( $i = 0; $i<$producto->puntuacion; $i++ ) : ?>
                                          <label for="rating-input-1-5" class="rating-star1"></label>
                                        <?php endfor ?>
                                        <?php for( $i = $producto->puntuacion; $i<5; $i++ ) : ?>
                                          <label for="rating-input-1-5" class="rating-star2"></label>
                                        <?php endfor ?>
                                    </div>
                                    <div class="add_bag">
                                      @guest
                                      @if (Route::has('register'))
                                        <a href="/carrito/">  <img src="images/bag.png" alt="">
                                        </a>
                                      @endif
                                      @else
                                      <a href="/carrito/{{Auth::user()->id}}/{{$producto["id"]}}">
                                      <img src="images/bag.png" alt="">
                                    </a>
                                      @endguest
                                  </div>
                                  </div>

                          </a>
                        </div>
                      </article>
                  @endforeach
                  @endif
                </section>

      </div>
    </div>
    <div class="carousel-item">
      <div class="panel-ofertas container">
        <label for=""> <h2> LO MÁS VENDIDO</h2></label>
        <section class="container row ">

                    @if ($productos[1])
                    @foreach ($productos[1] as $producto)
                      <!-- producto -->
                      <article class="container catalogo-productos col-12 col-sm-6 col-md-6 col-lg-3 " >

                        <div class="card_1 shadow p-3 mb-5 bg-white rounded">

                          <a href="/producto/<?php echo $producto["id"]?>">

                                  <div class="product">
                                    @php
                                      if ($producto->color->nombre=="Rojo") {
                                        $img="circulo-rojo.png";
                                      }else{
                                        if ($producto->color->nombre=="Negro") {
                                          $img="circulo-negro.png";
                                        }else{
                                            $img="circulo-amarillo.png";
                                        }
                                      }
                                    @endphp
                                    <div class="marco "  style="background-image:url('../images/{{$img}}');">
                                        <img src="/storage/{{$producto->imagen}}" alt=" ">
                                    </div>


                                    <div class="marco-nombre">
                                        <h3><strong><?php echo  $producto["nombre"] ?></strong></h3>
                                    </div>

                                    <div class="precio_producto">$ <?php echo $producto["precio"] ?></div>

                                    <div class="puntuacion">

                                        <?php for( $i = 0; $i<$producto->puntuacion; $i++ ) : ?>
                                          <label for="rating-input-1-5" class="rating-star1"></label>
                                        <?php endfor ?>
                                        <?php for( $i = $producto->puntuacion; $i<5; $i++ ) : ?>
                                          <label for="rating-input-1-5" class="rating-star2"></label>
                                        <?php endfor ?>
                                    </div>
                                    <div class="add_bag">
                                      @guest
                                      @if (Route::has('register'))
                                        <a href="/carrito/">  <img src="images/bag.png" alt="">
                                        </a>
                                      @endif
                                      @else
                                      <a href="/carrito/{{Auth::user()->id}}/{{$producto["id"]}}">
                                      <img src="images/bag.png" alt="">
                                    </a>
                                      @endguest
                                  </div>
                                  </div>

                          </a>
                        </div>
                      </article>
                  @endforeach
                  @endif
                </section>
      </div>
    </div>

    @if ($productos[2])
      @if (count($productos[2])>=4)
    <div class="carousel-item">
      <div class="panel-ofertas container">
        <label for=""> <h2> ULTIMAS UNIDADES</h2></label>
        <section class="container row ">


                    @foreach ($productos[2] as $producto)
                      <!-- producto -->
                      <article class="container catalogo-productos col-12 col-sm-6 col-md-6 col-lg-3 " >

                        <div class="card_1 shadow p-3 mb-5 bg-white rounded">

                          <a href="/producto/<?php echo $producto["id"]?>">

                                  <div class="product">
                                    @php
                                      if ($producto->color->nombre=="Rojo") {
                                        $img="circulo-rojo.png";
                                      }else{
                                        if ($producto->color->nombre=="Negro") {
                                          $img="circulo-negro.png";
                                        }else{
                                            $img="circulo-amarillo.png";
                                        }
                                      }
                                    @endphp
                                    <div class="marco "  style="background-image:url('../images/{{$img}}');">
                                        <img src="/storage/{{$producto->imagen}}" alt=" ">
                                    </div>


                                    <div class="marco-nombre">
                                        <h3><strong><?php echo  $producto["nombre"] ?></strong></h3>
                                    </div>

                                    <div class="precio_producto">$ <?php echo $producto["precio"] ?></div>

                                    <div class="puntuacion">

                                        <?php for( $i = 0; $i<$producto->puntuacion; $i++ ) : ?>
                                          <label for="rating-input-1-5" class="rating-star1"></label>
                                        <?php endfor ?>
                                        <?php for( $i = $producto->puntuacion; $i<5; $i++ ) : ?>
                                          <label for="rating-input-1-5" class="rating-star2"></label>
                                        <?php endfor ?>
                                    </div>
                                    <div class="add_bag">
                                      @guest
                                      @if (Route::has('register'))
                                        <a href="/carrito/">  <img src="images/bag.png" alt="">
                                        </a>
                                      @endif
                                      @else
                                      <a href="/carrito/{{Auth::user()->id}}/{{$producto["id"]}}">
                                      <img src="images/bag.png" alt="">
                                    </a>
                                      @endguest
                                  </div>
                                  </div>

                          </a>
                        </div>
                      </article>
                  @endforeach
                </section>
      </div>
    </div>

    @endif
    @endif
  </div>
  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
    <img src="/images/chevron-left.svg" width="20%"alt="">>
  </a>
  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
    <img src="/images/chevron-right.svg" width="20%" alt="">
  </a>
</div>

  <div class="panel-empresa  ">

    <div class="logo-Empresa col-12 col-sm-5 col-md-5 col-lg-5">
      <div class="logotipo-empresa">
        <img src="/images/logo1.png" alt="">
      </div>

    </div>

    <div class="texto-presentacion col-12 col-sm-7 col-md-7 col-lg-7">

    <h5>Una empresa de comercio electrónico dedicada a la venta de cervezas.
    En la que tienes la posibilidad de elegir la cantidad y variedad que desees de nuestros productos
    ( OJO !!! siempre que haya stock).Además puedes tener la posibilidad de editar tu propio perfil, </h5>

    <a href="/faq" class="faq"><strong>¿Quienes somos? </strong></a>
     </div>
  </div>




  <div class="contacto-conjunto container" style="padding-top:5%">

        <div class="contacto-dv col-12 col-md-4 col-lg-4">
          <img src="/images/transporte-cont.png" style="color: #fece18;"width="70px" alt="">
          <h5><strong>ENVIOS</strong></h5>
          <p>Los envios se realizán por una empresa determinada a la ubicación y necesidad del comprado</p>
        </div>

        <div class="contacto-dv col-12 col-md-4 col-lg-4">
          <img src="/images/email-cont.png" style="color: #fece18;"width="70px" alt="">
          <h5><strong>EMAIL</strong></h5>
          <p>Los email serán respondidos de 9 hs a 15 hs de
            lunes a sábados.De no ser así se responderan en el siguiente día en el mismo horario </p>
            <p><strong>shopBeerH@gmail.com</strong> </p>
        </div>

        <div class="contacto-dv col-12 col-md-4 col-lg-4">
          <img src="/images/tel-cont.png" style="color: #fece18;"width="70px" alt="">
          <h5><strong>TELÉFONO</strong></h5>
          <p>El horario de atención por teléfono es de 9hs a 12 hs y de 16hs a 20hs de
            lunes a sábados </p><p><strong>+54(2291)-365896</strong> </p>
        </div>

</div>





@endsection
