<?php
session_start();
$producto = [
		"nombre" =>"Ipa Andina",
    "marca" =>"Andes",
		"imagen" => "images/andes.png",
		"enOferta" => true,
		"esNovedad" => true,
		"precio" => 85,
		"descripcion" =>"descripcion Lorem ipsum dolor sit amet descripcion Lorem ipsum dolor sit amet descripcion Lorem ipsum dolor sit amet descripcion Lorem ipsum dolor sit amet descripcion Lorem ipsum dolor sit amet descripcion Lorem ipsum dolor sit amet ",
		"color" => "Dorado",
		"Estilo" => "Blonde",
		"Origen" => "Argentina"];
  ?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <?=!include_once('head.php'); ?>
  	<link rel="stylesheet" href="css/font-awesome.min.css">
  	<link rel="stylesheet" href="css/styles2.css">
  	<link href="https://fonts.googleapis.com/css?family=Catamaran&display=swap" rel="stylesheet">
  	<link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
  	<link rel="stylesheet" href="css/style.css">
  	<link href="css/style_card.css" rel="stylesheet" type="text/css" media="all" />
  </head>
  <body>

      <?=!include_once('barraDeBusqueda.php'); ?>
      <?=!include_once('header.php'); ?>

<div class="container producto-Unitario">

      <div class="imagen-producto col-12 col-sm-5 col-md-5 col-lg-5">
                  <img src="<?php echo $producto["imagen"] ?>" alt="pdto 01">
      </div>



      <div class="descripcion-producto col-12 col-sm-6 col-md-6 col-lg-6">
          <div class="nombre-Producto">
            <h2><?php echo $producto["nombre"]; ?></h2>
          </div>

          <div class="marca">
            <h5><?php echo $producto["marca"]; ?></h5>
          </div>

          <div class="estrellas">


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
          </div>

          <div class="descripcion">
              <div class="texto-descriptivo">

              <h5><?php echo $producto["descripcion"]; ?></h5>

            </div>

              <div class="detalles">
                <div class="colorName col-4 col-sm-4 col-md-4 col-lg-4">
                  <h6>Color:</h6>
                </div>
                <div class="color col-8 col-sm-8 col-md-8 col-lg-8">
                  <h6><?php echo $producto["color"]; ?></h6>
                </div>

                <div class="EstiloName col-4 col-sm-4 col-md-4 col-lg-4">
                  <h6>Estilo:</h6>

                </div>
                <div class="Estilo col-8 col-sm-8 col-md-8 col-lg-8">
                  <h6><?php echo $producto["Estilo"]; ?></h6>
                </div>

                <div class="OrigenName col-4 col-sm-4 col-md-4 col-lg-4">
                  <h6>Origen:</h6>
                </div>
                <div class="Origen col-8 col-sm-8 col-md-8 col-lg-8">
                  <h6><?php echo $producto["Origen"]; ?></h6>
                </div>


              </div>

          </div>

          <div class="cuentas col-12 col-sm-12 col-md-12 col-lg-12">

          <div class="cantidad col-4 col-sm-4 col-md-4 col-lg-4">
              <samp class="sumar-restar"><a href="#">-</a></samp>
              <label for=""> 1 </label>
              <samp class="sumar-restar"><a href="#">+</a></samp>
          </div>

          <div class="precio-producto col-8 col-sm-8 col-md-8 col-lg-8">
                $ <?php echo $producto["precio"]; ?>
          </div>

        </div>

        <div class="boton-comprar">
            <a href="carrito2.php">COMPRAR</a>
        </div>

      </div>


</div>
      <!-- footer -->
      <footer class="main-footer">
          <?=!include_once('footer.php'); ?>
      </footer>
    </div>
    <?=!include_once('scripts.php'); ?>
    </body>
</html>
