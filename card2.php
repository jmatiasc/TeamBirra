<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="css/style_card.css" rel="stylesheet" type="text/css" media="all" />
  </head>
  <body>

    <div class="box_card">
    <div class="card_1"><a href="#">
          <div class=box_product">
            <div class="product">
                <div class="marco div_imagen_proxima_animacion">
                    <div class="contenedor_imagen">
                      <img src="<?php echo $producto["imagen"] ?>" alt="pdto 01">
                    </div>
                </div>
                <div class="precio_producto">$ <?php echo $producto["precio"] ?></div>
            </div>
          </div>
          <h3><?php echo  $producto["nombre"] ?></h3>
          <p>marca</p>
          <!--	<p><?php echo $producto["descripcion"] ?></p> -->
      </a>
      <span class="puntuacion">
            <!--COPIADO SISTEMA DE RATING DE UNA PAGINA-->
          <input type="radio" class="rating-input" id="rating-input-1-5" name="rating-input-1">
          <label for="rating-input-1-5" class="rating-star1"></label>
          <input type="radio" class="rating-input" id="rating-input-1-5" name="rating-input-1">
          <label for="rating-input-1-5" class="rating-star1"></label>
          <input type="radio" class="rating-input" id="rating-input-1-5" name="rating-input-1">
          <label for="rating-input-1-5" class="rating-star1"></label>
          <input type="radio" class="rating-input" id="rating-input-1-5" name="rating-input-1">
          <label for="rating-input-1-5" class="rating-star1"></label>
          <input type="radio" class="rating-input" id="rating-input-1-5" name="rating-input-1">
          <label for="rating-input-1-5" class="rating-star1"></label>
            <!--FIN DE COPIADO SISTEMA DE RATING DE UNA PAGINA-->
      </span>

        <div class="add_bag"><a href="carrito.php">
        + ADD BAG
        </a></div>
    </div>



    </div>
  </body>
</html>
