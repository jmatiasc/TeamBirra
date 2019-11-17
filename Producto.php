<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/styles3.css">
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
    	<img class="photo" src="images/img-pdto-1.jpg" alt="pdto 01">

  </section>


		<!-- productos -->
		<section class="datos">
	       <h2>Nombre del Producto</h2>
		     <h6>linea Quilmes</h6>
         <h3>$100000</h3>
         <p>_______________________________________________</p>
         <h3>Descripción:</h3>
         <p>este producto te la da en la pero, pero mal <br>
            sdasd asd gfd ew tre cvsd sdfsdfs <br> </p>
        <p>Graduacion alcoholica: xx</p>
		</section>
    <p>______________________________________________________________________________________________________________________________________________</p>

    <section class="btn-comprar">
      <a href="#" class="boton-Comprar btn btn-lg btn-secondary">COMPRAR</a>
    </section>






</section>
<br><br><br><br>
		<footer class="main-footer">
      <?=!include_once('footer.php'); ?>
		</footer>
	</div>
	<?=!include_once('scripts.php'); ?>
	</body>
</html>
