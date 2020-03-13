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
                  <div class="container">

                    <div class="categoria">
                      <h4> <?php echo $filtro ?></h4>
                      <div class="boxListCategory">
                        <div class="list">
                          <div class="listBox">
                            <div class="ultimo">
                              <?php foreach ($value as $val): ?>
                                <label class="checkbox">
                                  <input type="checkbox" name="<?php echo $filtro ?>" value="<?php echo $val ?>"><i> </i>
                                  <?php echo $val ?>
                                </label>
                              <?php endforeach ?>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>
                </li>	<?php endforeach ?>
                <div class="contenedor_boton_filter">
                <!--   <a href="#">FILTRAR</a>-->
                    <input type="submit" value="FILTRAR" class="contenedor_boton_filter">
                </div>
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
          <div class="filtro-de-pagina">
            <div class="orden-producto">
              <div class="orden-producto-por">
                <label>Ordenar por:</label>
                <select>
                  <option value="">	Popularidad</option>
                  <option value="">precio: menor a mayor</option>
                  <option value="">precio : mayor a menor</option>
                </select>
              </div>
            </div>

            <div class="pagina">
              <div class="limite ">
                <label>Mostrar:  </label>
                <select>
                  <option value="" selected="selected">
                    9                </option>
                    <option value="">
                      15                </option>
                      <option value="">
                        30                </option>
                      </select> por pagina
                    </div>

                    <div class="clear"></div>
                  </div>
                  <div class="clear"></div>
                </div>


                <!-- catalogo -->

                <section class=" row catalogo-productos ">

                  <?php foreach ($productos as $producto) : ?>
                    <!-- producto -->
                    <article class="product col-6 col-sm-6 col-md-6 col-lg-4 " >
                      <div class="card_1">
                        <a href="producto/<?php echo$producto["idProducto"]?>">
                          <div class="box_product">
                            <div class="product">
                              <div class="marco div_imagen_proxima_animacion">
                                <div class="contenedor_imagen">
                                  <?php
                                          $file=$producto["imagen"];
                                          if(is_file($file )){
                                              $img=$producto["imagen"];}
                                          else {
                                            $img="images/NOT-IMG.jpg";
                                          }?>
                                  <img src="/<?php echo $img ?>" alt="<?php echo $img ?> ">
                                </div>
                              </div>

                              <h3><strong><?php echo  $producto["nombre"] ?></strong></h3>
                              <p>Marca</p>
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
                        <div class="add_bag"><a href="carrito">
                          <img src="images/bag.png" alt="">
                        </a></div>
                      </div>
                    </article>


                  <?php endforeach ?>
                </section>
              </div>


              <!-- numero de paginas -->




            </div>
            @php
              //{{	$productos->links()}}
            @endphp
          </div>



        </div>
        <br><br><br><br>

        <!-- footer -->



      </div>
