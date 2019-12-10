		<!-- productos -->
<?php
session_start();
$productos = [

0 => [
	"nombre" =>"Andes Ipa",
	"imagen" => "images/andes.png",
	"enOferta" => true,
	"esNovedad" => true,
	"precio" => 85,
	"descripcion" =>"descripcion Lorem ipsum dolor sit amet ",
	"color " => "Dorado",
	"Estilo" => "Blonde",
	"Origen" => "Argentina"
],
1 => [
		"nombre" =>"Andes Rubia",
	"imagen" => "images/andesR.png",
	"enOferta" => true,
	"esNovedad" => true,
	"precio" => 80,
	"descripcion" => "descripcion Lorem ipsum dolor sit amet ",
"color " => "Dorado",
	"Estilo" => "Blonde",
	"Origen" => "Argentina"
],
2 => [
		"nombre" =>"Brahma",
	"imagen" => "images/brahma.png",
	"enOferta" => true,
	"esNovedad" => true,
	"precio" => 45,
	"descripcion" => "descripcion Lorem ipsum dolor sit amet ",
	"color " => "Dorado",
	"Estilo" => "Blonde",
	"Origen" => "Brasil"
]
]; ?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Catalogo</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/styles3.css">
		<link href="https://fonts.googleapis.com/css?family=Catamaran&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    <?=!include_once('head.php'); ?>
	</head>
	<body>
	<div class="container">
		<!-- cabecera -->
		<header class="main-header">
      <?=!include_once('header.php'); ?>
		</header>
		<section class="cuerpo">
			<?php $sumarTotal=0; ?>
				<?php foreach ($productos as $producto) : ?>
					<article class="productoComprado">
						<div class="imagenCompra">
							<img class="foto"  src="<?php echo $producto["imagen"] ?>" alt="pdto 01">
						</div>
						<div class="descripcionCompra">
							<a class="nombre" href="Producto.php"><h5><?php echo  $producto["nombre"] ?></h5></a>
							<p><?php echo  $producto["descripcion"] ?></p>
						</div>
						<div class="precio">
							<h5>$ <?php echo  $producto["precio"] ?> </h5>
						</div>
				    	<?php $sumarTotal+=$producto["precio"] ?>
						<div class="elegirCantidad">
						</div>
					</article>
				<?php endforeach ?>
			<div class="mostrar-total-compra">
				TOTAL: <?php echo "$sumarTotal" ?>
			</div>
				<div class="botonParaComprar">
					<a href="index.php" class="boton-Comprar btn btn-lg btn-secondary">Finalizar compra</a>
				</div>
		</section>
<br><br><br><br>
		<footer class="main-footer">
      <?=!include_once('footer.php'); ?>
		</footer>
	</div>
	<?=!include_once('scripts.php'); ?>
	</body>
</html>
