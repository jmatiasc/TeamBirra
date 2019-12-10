
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
		"precio" => 50,
		"descripcion" => "descripcion Lorem ipsum dolor sit amet ",
		"color " => "Dorado",
		"Origen" => "Brasil"
	],

	3 => [
		"nombre" =>"Budweiser",
		"imagen" => "images/bud.png",
		"enOferta" => true,
		"esNovedad" => true,
		"precio" => 60,
		"descripcion" => "descripcion Lorem ipsum dolor sit amet ",
	  "color " => "Dorado",
		"Estilo" => "Blonde",
		"Origen" => "Argentina"
	],

	4 => [
		"nombre" =>"Peñon",
		"imagen" => "images/pen-lar.png",
		"enOferta" => true,
		"esNovedad" => true,
		"precio" => 130,
		"descripcion" =>"descripcion Lorem ipsum dolor sit amet ",
		"color " => "Dorado",
		"Estilo" => "Blonde",
		"Origen" => "Argentina"
	],

	5 => [
		"nombre" =>"Peñon Dark",
		"imagen" => "images/peñon1.png",
		"enOferta" => true,
		"esNovedad" => true,
		"precio" => 180,
		"descripcion" =>"descripcion Lorem ipsum dolor sit amet ",
		"color " => "Negro",
		"Estilo" => "Scotch",
		"Origen" => "Argentina"
	],

	6 => [
		"nombre" =>"Peñon Cacao-Ipa",
		"imagen" => "images/peñon3.png",
		"enOferta" => true,
		"esNovedad" => true,
		"precio" => 130,
		"descripcion" =>"descripcion Lorem ipsum dolor sit amet ",
		"color " => "Dorado",
		"Estilo" => "IPA",
		"Origen" => "Argentina"
	],

	7 => [
		"nombre" =>"Stella Artois",
		"imagen" => "images/Stella.png",
		"enOferta" => true,
		"esNovedad" => true,
		"precio" => 65,
		"descripcion" =>"descripcion Lorem ipsum dolor sit amet ",
		"color " => "Dorado",
		"Estilo" => "Blonde",
		"Origen" => "Belgica"
	],

	8 => [
		"nombre" =>"Hoegaarden",
		"imagen" => "images/hoagg.png",
		"enOferta" => true,
		"esNovedad" => true,
		"precio" => 300,
		"descripcion" => "descripcion Lorem ipsum dolor sit amet ",
		"color " => "Dorado",
		"Estilo" => "Blonde",
		"Origen" => "Alemania"
	],

	9 => [
		"nombre" =>"Peñon Arandano",
		"imagen" => "images/peñon2.png",
		"enOferta" => true,
		"esNovedad" => true,
		"precio" => 100,
		"descripcion" => "descripcion Lorem ipsum dolor sit amet ",
		"color " => "Morado",
		"Estilo" => "Pale Lager",
		"Origen" => "Argentina"
	],

	10 => [
		"nombre" =>"Quilmes",
		"imagen" => "images/quilmes.png",
		"enOferta" => true,
		"esNovedad" => true,
		"precio" => 55,
		"descripcion" => "descripcion Lorem ipsum dolor sit amet ",
		"color " => "Dorado",
		"Estilo" => "Blonde",
		"Origen" => "Argentina"
	]
];

$filtros = [
	"Marcas" => [ "Andes Origen",
							 "Brahma",
							 "Budweiser",
							 "Estrella Galicia",
							 "Hoegaarden",
							 "Peñon del Aguila",
							 "Stella Artois",
							 "Crimen Beer"
						],
	"Origen" => [ "Alemania",
							 "Argentina",
							 "Belgica",
							 "España",
							 "Holanda",
							 "Italia",
							 "Perú"
						],
	"Estilos" => [ "Golden Ale",
							 "Red Lager",
							 "Pale Lager",
							 "Scotch Ale",
							 "Amber Lager",
							 "American Ipa",
							 "Pilsen"
						],
	"Color" => [ "Ambar",
							 "Dorado",
							 "Negra",
							 "Oscuro",
							 "Rubí",
							 "Roja"
						]
];
?>

<!DOCTYPE html>
<html>
	<head>
		<?=!include_once('head.php'); ?>
		<title>Catalogo</title>
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/styles2.css">
		<link href="https://fonts.googleapis.com/css?family=Catamaran&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
	</head>
	<body>
		<div class="container-fluid">
			<!-- cabecera -->
			<header class="main-header">
	      		<?=!include_once('header.php'); ?>
			</header>
			<section class="cuerpo" class="row">
				<!-- filtro -->
				<nav class="navegador" class="col-1 col-md-2 col-lg-3">
	      			<ul class="menu">
						<?php foreach ($filtros as $filtro => $value): ?>
						<li> <a href="#"> <?php echo $filtro ?> </a>
					<ul>
						<?php foreach ($value as $val): ?>
						<li> <a href="#"><?php echo $val ?></a> </li>
						<?php endforeach ?>
	        		</ul>
						</li>	<?php endforeach ?>
	        			<li > <a href="#">Graduacion Alcoholica</a>
	          		<ul>
	            		<li> <a href="#"><input type="checkbox" name="graduacionAlcoholica" value="2">2%</a> </li>
	            		<li> <a href="#"><input type="checkbox" name="graduacionAlcoholica" value="25">2.5%</a> </li>
	            		<li> <a href="#"><input type="checkbox" name="graduacionAlcoholica" value="45">4.5%</a> </li>
	            		<li> <a href="#"><input type="checkbox" name="graduacionAlcoholica" value="6">6%</a> </li>
	            		<li> <a href="#"><input type="checkbox" name="graduacionAlcoholica" value="73">7.3%</a> </li>
	            		<li> <a href="#"><input type="checkbox" name="graduacionAlcoholica" value="12">12%</a> </li>
	          		</ul>
	        		</li>
	      			</ul>
	    		</nav>
				<!-- productos -->
				<div class="row">
					<section class="catalogo-productos">
						<?php foreach ($productos as $producto) : ?>
							<article class="product" class="col-sm-11 col-md-12 col-lg-9">
								<div class="contenedor-foto">
									<img class="foto" src="<?php echo $producto["imagen"] ?>" alt="pdto 01">
		          					<h3>$ <?php echo $producto["precio"] ?> </h3>
								</div>
								<a class="nombre" href="Producto.php"><h5><?php echo  $producto["nombre"] ?></h5></a>
		        				<p><?php echo $producto["descripcion"] ?></p>
		        				<a href="carrito.php" class="boton-Comprar btn btn-lg btn-secondary">COMPRAR</a>
		      				</article>
						<?php endforeach ?>
					</section>
				</div>
			</section>
			<br><br><br><br>
			<!-- footer -->
			<footer class="main-footer">
	    		<?=!include_once('footer.php'); ?>
			</footer>
		</div>
		<?=!include_once('scripts.php'); ?>
	</body>
</html>
