<?php
      $orden="des";
    $cant="9";

 ?>



 <?php



 $filtros = [
 	"marca" => $marcas  ,
 "origen" => $origenes,
 "estilo" => $estilos,
 "color" => $colores
];
 ?>


 @extends('footer')
 @extends('layouts.app')

 @section('content')
<div class="banner-catalogo-principal">
  <!--<img src="images/baner-principal.jpg" alt="">-->
</div>

<div class="container">



  <div class="row">



    <div class="col-12 col-md-4 col-lg-3 contenedor-navFilter" >

      <!-- Barra de filtrado para busqueda -->
      <div class="navFilter ">

        <form class="" action="/catalogo" method="get">

          <?php foreach ($filtros as $filtro => $value): ?>
            <div class="accordion  box-categoria" id="accordionExample">



              <div class=" categoria" id="headingOne">
                <h4 class="mb-0">
                  <button class="btn btn-link boton-categorias" type="button" data-toggle="collapse" data-target="#<?php echo $filtro ?>" aria-expanded="false" aria-controls="collapseOne">
                    <span class="badge pull-rigth"> <img style="width: 10px;" src="/images/down.svg" alt=""> </span>
                    <?php echo $filtro ?>
                  </button>
                </h4>
                </div>

                      <div class="ultimo">
                            <?php foreach ($value as $val): ?>
                            <div id="<?php echo $filtro ?>" class="collapse " aria-labelledby="headingOne" data-parent="#accordionExample">
                              <div class="">
                                <div class="checkbox">

                                  <input type="checkbox" name="<?php echo $filtro ?>" value="<?php echo $val["id"] ?>"><i> </i>
                                  <?php echo $val["nombre"] ?>

                                </div>
                              </div>
                            </div>
                            <?php endforeach ?>
                    </div>
              </div>


          </li>	<?php endforeach ?>

                    <input type="submit" value="FILTRAR" class="contenedor_boton_filter">

      </form>
      </div>

      <!-- banner para publicidad -->
      <div class="banner-catalogo-izquierda">
        <img src="images/beer33.png" alt="">
      </div>

    </div>



    <div class=" col-12 col-md-8 col-lg-9">


      <div class="row">
        <div class="container">


                <!-- opciones de ordenamiento de catalogo -->
                <div class="col-12 col-md-12 col-lg-12 filtro-de-pagina">
                    <form class="" action="/catalogo" method="get">
                          <div class="col-12 col-md-12 col-lg-4 orden-producto">
                            <div class="orden-producto-por">
                              <label>Ordenar por:</label>
                              <select name="orden">
                                <option value="ASC">precio: menor a mayor<?php $orden="desc"; ?></option>
                                <option value="DESC">precio : mayor a menor<?php $orden="asc"; ?></option>
                              </select>
                            </div>
                          </div>

                          <div class="col-12 col-md-12 col-lg-4 mostrar">
                            <input type="submit" class="btn btn-warning " name="MOSTRAR" value="MOSTRAR ">
                          </div>


                          <div class="col-12 col-md-12 col-lg-4 pagina">
                            <div class="limite ">
                              <label>Mostrar:  </label>
                              <select name="cantidad">
                                <option value="<?php if(isset($_GET["cantidad"])){ echo  $_GET["cantidad"];}
                                else echo "9"?>" >
                                <  <?php if(isset($_GET["cantidad"])){ echo  $_GET["cantidad"];}
                                else echo "9" ?> >
                                </option>
                                <option value="9" >
                                    9                </option>
                                  <option value="15">
                                    15              </option>
                                    <option value="30">
                                      30              </option>
                                    </select> por pagina
                              </div>


                            </div>


                      </form>
                      </div>


                <!-- catalogo -->

                <section class=" row catalogo-productos ">

                  <?php foreach ($productos as $producto) : ?>



                    <!-- producto -->
                    <article class="product col-6 col-sm-6 col-md-6 col-lg-4 " >

                      <div class="card_1">

                        <a href="producto/<?php echo $producto["id"]?>">
                          <div class="box_product">
                            <div class="product">
                              <div class="marco div_imagen_proxima_animacion">
                                <div class="contenedor_imagen">
                                  <?php
                                        /*  $file="/storage/{{$producto->imagen}}";
                                          if(is_file($file )){
                                              $img=$producto["imagen"];}
                                          else {
                                            $img="images/NOT-IMG.jpg";
                                          }
                                          {{$img}}
                                          */


                                          ?>
                                  <img src="/storage/{{$producto->imagen}}" alt=" ">
                                </div>
                              </div>

                              <h3><strong><?php echo  $producto["nombre"] ?></strong></h3>
                              <p>
                                      {{$producto->getMarca->nombre}}</p>
                              <div class="precio_producto">$ <?php echo $producto["precio"] ?></div>
                            </div>
                          </div>

                        </a>

                        <!-- puntuacion de producto -->
                        <span class="puntuacion">
                          <!--COPIADO SISTEMA DE RATING DE UNA PAGINA-->
                          <!--<input type="radio" class="rating-input" id="rating-input-1-5" name="rating-input-1">-->
                          <label for="rating-input-1-5" class="rating-star1"></label>
                          <!--	<input type="radio" class="rating-input" id="rating-input-1-5" name="rating-input-1">-->
                          <label for="rating-input-1-5" class="rating-star1"></label>
                          <!--<input type="radio" class="rating-input" id="rating-input-1-5" name="rating-input-1">-->
                          <label for="rating-input-1-5" class="rating-star1"></label>
                          <!--	<input type="radio" class="rating-input" id="rating-input-1-5" name="rating-input-1">-->
                          <label for="rating-input-1-5" class="rating-star1"></label>
                          <!--<input type="radio" class="rating-input" id="rating-input-1-5" name="rating-input-1">-->
                          <label for="rating-input-1-5" class="rating-star1"></label>

                          <!--FIN DE COPIADO SISTEMA DE RATING DE UNA PAGINA-->
                        </span>

                        <!-- añadir al carrito -->
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
                    </article>


                  <?php endforeach ?>
                </section>
              </div>


              <!-- numero de paginas -->




            </div>

              
              {{$productos->links()}}


          </div>



        </div>
        <br><br><br><br>

        <!-- footer -->



      </div>


@endsection
