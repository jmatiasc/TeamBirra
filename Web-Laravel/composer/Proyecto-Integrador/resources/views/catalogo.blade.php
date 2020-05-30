<?php
      $orden="des";
    $cant="12";


 ?>



 <?php


$marcas->push([
  "id"=>"0",
  "nombre"=>"todos",
  "logo"=>NULL,
]);

$origenes->push([
  "id"=>"0",
  "nombre"=>"todos",
  "logo"=>NULL,
]);

$colores->push([
  "id"=>"0",
  "nombre"=>"todos",
  "red"=>NULL,
  "green"=>NULL,
  "blue"=>NULL,
]);

$estilos->push([
  "id"=>"0",
  "nombre"=>"todos",
  "detalle"=>NULL,
]);

 $filtros = [
 	"marca" => $marcas  ,
 "origen" => $origenes,
 "estilo" => $estilos,
 "color" => $colores
];


 ?>


 @include('nav')
 <body>


<div class="banner-catalogo-principal">
  <!--<img src="images/baner-principal.jpg" alt="">-->
</div>
<div class="box">

<div class="inTo container ">



  <div class="row">



    <div class="col-12 col-md-4 col-lg-3 contenedor-navFilter" >
      @if(isset($_GET["marca"]) || isset($_GET["origen"]) || isset($_GET["estilo"]) || isset($_GET["color"]) || isset($_GET["busqueda"]) )
        <a style="color:#fece18; padding-left:14%;" href="/catalogo"> limpiar Busqueda</a>
      @endif
      <!-- Barra de filtrado para busqueda -->
      <div class="navFilter ">

        <form class="" action="/catalogo" method="get">

          <div class="categoria" id="headingOne">

                        <div class="boton-categorias" style="padding :3%; overflow:hidden;margin:1%;display:block;" >
                              <button  class="btn btn-outline-warning"style="margin: 1%;padding:2%;width: 18%;height: 100%;display:inline-block;">
                                <img style="width: 20px;" src="/images/lupa.svg" alt="">
                              </button>
                              <input type="text"name="busqueda" style="width: 80%;float:left;padding:1%;" id="busqueda" value="" placeholder="Busqueda" class="form-control" id="inputEmail4">

                        </div>


          </div>






          <?php foreach ($filtros as $filtro => $value): ?>
            <div class="accordion  box-categoria" id="accordionExample">



              <div class="categoria" id="headingOne">
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
                                @if (isset($_GET[$filtro]))
                                  @if($_GET[$filtro]==$val["id"])
                                    <input type="radio" name="<?php echo $filtro ?>" value="<?php echo $val["id"] ?>" checked><i> </i>
                                  @else
                                      <input type="radio" name="<?php echo $filtro ?>" value="<?php echo $val["id"] ?>"><i> </i>
                                  @endif
                               @else <input type="radio" name="<?php echo $filtro ?>" value="<?php echo $val["id"] ?>"><i> </i>
                               @endif
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
                          <div class="col-12 col-md-12 col-lg-6 orden-producto">
                            <div class="orden-producto-por">
                              <label>Ordenar por:</label>
                                  <select name="orden" class="orden">
                                          <option value="<?php if(isset($_GET["orden"])){ echo  $_GET["orden"];}else echo "ASC"?>" >
                                                      <  <?php if(isset($_GET["orden"])=="ASC") {echo "precio: menor a mayor";}else {echo "precio : mayor a menor";}
                                                              ?> >
                                          </option>
                                          <option value="ASC">precio: menor a mayor<?php $orden="desc"; ?></option>
                                          <option value="DESC">precio : mayor a menor<?php $orden="asc"; ?></option>
                                  </select>
                            </div>
                          </div>


                          <div class="col-12 col-md-12 col-lg-6 pagina">
                            <div class="limite ">
                              <label>Mostrar </label>
                                  <select name="cantidad" id="cantidad">
                                            <!--El primer option muestra la cantidad actual de productos que se ven en el catalogo por pagina-->
                                            <option value="<?php if(isset($_GET["cantidad"])){ echo  $_GET["cantidad"];}
                                                                else echo "12"?>" > <
                                                                <?php if(isset($_GET["cantidad"]))
                                                                        { echo  $_GET["cantidad"];}
                                                                          else echo "12"
                                                                ?> >
                                            </option>
                                            <option value="12" > 12 </option>
                                            <option value="24"> 24 </option>
                                            <option value="100"> 100 </option>
                                    </select>
                                    <label for="">por pagina </label>

                              </div>

                            </div>
                      </div>


                <!-- catalogo -->

                <section class=" row catalogo-productos ">

                  <?php foreach ($productos as $producto) : ?>



                    <!-- producto -->
                    <article class=" col-6 col-sm-6 col-md-6 col-lg-3 " >

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





                  <?php endforeach ?>
                </section>
              </div>


              <!-- numero de paginas -->

              {{$productos->links()}}


            </div>





          </div>



        </div>
        <br><br><br><br>

        <!-- footer -->



      </div>

    </div>


    </body>
@include('footer')
