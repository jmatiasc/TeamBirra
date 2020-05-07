@extends('footer')
@extends('nav')


@section('content')

<div class="box ">


<div class=" inTo container">


<div class="panel-novedades container">
  <img src="/images/novedad.jpg" class="img-fluid " alt="Responsive image">
  <div class="logo-novedades">
    <img src="/images/latitas.png" alt="">
  </div>
  <div class="boton-novedades  col-12 col-sm-12 col-md-12 col-lg-12">


    <a href="/catalogo">
      <div class="click">
        COMPRAR
      </div>
    </a>
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


  <div class="panel-empresa  container">

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

@endsection
