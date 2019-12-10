<?php
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Producto</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/styles2.css">
    <link href="https://fonts.googleapis.com/css?family=Catamaran&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    <?=!include_once('head.php'); ?>
		<title>Responsive Web Design</title>
	</head>
	<body>

	<div class="container">

		<!-- cabecera -->
		<header class="main-header">
      <?=!include_once('header.php'); ?>
		</header>

    <p>______________________________________________________________________________________________________________________________________________</p>

<section class="cuerpo">

  <section class="imagen">
    	<img class="photo" src="images/quilmes.png" alt="pdto 01">

  </section>


		<!-- productos -->
		<section class="datos">
	       <h2>Qulimes</h2>
		     <h6>linea Quilmes</h6>
         <h3>$55</h3>
         <p>____________________________________________________________________</p>
         <h3>Descripción:</h3>
         <p>Es una cerveza equilibrada, de gran refrescancia y cuerpo balanceado,<br>
					  que marida con platos más bien grasosos o pesados. La gasificación de <br>
						esta cerveza barre el paladar manteniendo las notas de sabores en la boca,<br>
						 y su gran refrescancia invita a comer acompañando siempre con la bebida.<br>
						 Recomendamos acompañarla con tostado clásico, milanesa con papas fritas, <br>
						 pizza de jamón y morrones.
 <br> </p>
        <p><strong>Graduacion alcoholica:</strong> xx </p>
				<p><strong>Origen: </strong> Argentina</p>

				<section class="btn-comprar">
			      <a href="#" class="boton-Comprar btn btn-lg btn-secondary">COMPRAR</a>
			      </section>
			  </section>
    <p>______________________________________________________________________________________________________________________________________________</p>

</section>
<br><br><br><br>
		<footer class="main-footer">
      <?=!include_once('footer.php'); ?>
		</footer>
	</div>
	<?=!include_once('scripts.php'); ?>
	</body>
</html>
