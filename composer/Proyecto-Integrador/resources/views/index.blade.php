@extends('footer')
@extends('nav')


@section('content')




<div class="panel-de-muestra">


<div id="carouselExampleIndicators" class="carousel slide muestrario-p" data-ride="carousel">
    <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" style="background-color:#fece18" data-slide-to="0" class="active"></li>

    <li data-target="#carouselExampleIndicators" style="background-color:#fece18" data-slide-to="1"></li>

    </ol>

    <div class="carousel-inner div-panel-muestra-principal" style="background-image: url('../images/IMG-PORTADA-1.png');background-repeat: no-repeat;background-size:cover; ">
      <div class="carousel-item  div-panel-muestra active" >
          <img src="../images/IMG-PORTADA-2.png" alt="">
          <div class="contenido-muestra">
                <h1 class="texto-panel-muestra">Nueva: Cerveza Goose <br>Island 312  </h1>
                <button type="button" name="button" class="boton-muestra btn btn-warning">¿La querés probar?</button>
          </div>

      </div>

            <div class="carousel-item " >

              <div class="titulo-novedades">
                <label for=""> <h1>Populares</h1> </label>
              </div>
              <section class=" row  presentacion-ofertas">

              <?php foreach ($productos[1] as $producto) : ?>
                <article class="product col-12 col-sm-3 col-md-3 col-lg-3 " >

                  <div class="card_1 shadow p-3 mb-5 bg-white rounded">



                    <a href="/producto/<?php echo $producto["id"]?>">

                      <div class="box_product">
                          <div class="marco div_imagen_proxima_animacion">
                            <div class="contenedor_imagen">
                              <img src="/storage/{{$producto->imagen}}" alt=" ">
                            </div>
                          </div>

                          <h3><strong><?php echo  $producto["nombre"] ?></strong></h3>
                          <div class="precio_producto">$ <?php echo $producto["precio"] ?></div>
                        </div>
                    </a>
                  </div>
                </article>


              <?php endforeach ?>
              </section>



            </div>


    </div>




</div>

</div>


  <div class="panel-empresa  ">

    <div class="logo-Empresa col-5 col-sm-5 col-md-5 col-lg-5">
      <div class="logotipo-empresa">
        <img src="/images/logo1.png" alt="">
      </div>

    </div>

    <div class="texto-presentacion col-7 col-sm-7 col-md-7 col-lg-7">

    <h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
       sed do eiusmod tempor incididun  ut labore et dolore magna
       aliqua. Ut enim ad minim veniam, </h5>

    <a href="/faq" class="faq"><strong>¿Quienes somos? </strong></a>
     </div>
  </div>



<div class="panel-ofertas">


  <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">

    <div class="carousel-inner">

      <div class="carousel-item active" data-interval="100">
        <section class=" row  presentacion-ofertas">

        <?php foreach ($productos[0] as $producto) : ?>
          <article class="product col-12 col-sm-3 col-md-3 col-lg-3 " >

            <div class="card_1 shadow p-3 mb-5 bg-white rounded">



              <a href="/producto/<?php echo $producto["id"]?>">

                <div class="box_product">
                    <div class="marco div_imagen_proxima_animacion">
                      <div class="contenedor_imagen">
                        <img src="/storage/{{$producto->imagen}}" alt=" ">
                      </div>
                    </div>

                    <h3><strong><?php echo  $producto["nombre"] ?></strong></h3>
                    <div class="precio_producto">$ <?php echo $producto["precio"] ?></div>
                  </div>
              </a>
            </div>
          </article>


        <?php endforeach ?>
        </section>

      </div>

          <div class="carousel-item " data-interval="100">
            <section class=" row  presentacion-ofertas">

            <?php foreach ($productos[1] as $producto) : ?>
              <article class="product col-12 col-sm-3 col-md-3 col-lg-3 " >

                <div class="card_1 shadow p-3 mb-5 bg-white rounded">



                  <a href="/producto/<?php echo $producto["id"]?>">

                    <div class="box_product">
                        <div class="marco div_imagen_proxima_animacion">
                          <div class="contenedor_imagen">
                            <img src="/storage/{{$producto->imagen}}" alt=" ">
                          </div>
                        </div>

                        <h3><strong><?php echo  $producto["nombre"] ?></strong></h3>
                        <div class="precio_producto">$ <?php echo $producto["precio"] ?></div>
                      </div>
                  </a>
                </div>
              </article>


            <?php endforeach ?>
            </section>

          </div>

    </div>

    <a class="carousel-control-prev " href="#carouselExampleInterval" role="button" data-slide="prev">
      <img src="/images/chevron-left.svg" width="20%"alt="">
    </a>
    <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
      <img src="/images/chevron-right.svg" width="20%" alt="">
    </a>
  </div>
</div>


@endsection
