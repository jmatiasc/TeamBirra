
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
		<link rel="stylesheet" href="css/style.css">
		<link href="css/style_card.css" rel="stylesheet" type="text/css" media="all" />
	</head>
	<body>
		<div class="container">
			<!-- cabecera -->
			<header class="main-header">

						<?=!include_once('barraDeBusqueda.php'); ?>
	      		<?=!include_once('header.php'); ?>
			</header>

			<div class="row">




			<div class="col-12 col-md-4 col-lg-3" >
				<div class="navFilter">

					<?php foreach ($filtros as $filtro => $value): ?>
						<div class="container">

					<div class="categoria">
								<h4> <?php echo $filtro ?></h4>
								<div class="boxListCategory">
									<div class="list">
										<div class="listBox">
													<div class="ultimo">
														<?php foreach ($value as $val): ?>
															<label class="checkbox"><input type="checkbox" name="checkbox" ><i></i><?php echo $val ?></label>
															<?php endforeach ?>
													</div>
										</div>
									</div>
								</div>
					</div>

					</div>
					</li>	<?php endforeach ?>
					<div class="contenedor_boton_filter">
					<a href="#">FILTRAR</a>
					</div>

			</div>

			</div>
				<!-- productos -->
			<div class="col-12 col-md-8 col-lg-9">


				<div class="row">
					<div class="container">


					<section class="catalogo-productos ">
						<?php foreach ($productos as $producto) : ?>

							<article class="col-sm-12 col-md-11 col-lg-4" class="product"  >
								<div class="card_1">
									<a href="#">
											<div class="box_product">
												<div class="product">
														<div class="marco div_imagen_proxima_animacion">
																<div class="contenedor_imagen">
																	<img src="<?php echo $producto["imagen"] ?>" alt="pdto 01">
																</div>
														</div>
														<h3><?php echo  $producto["nombre"] ?></h3>
														<p>marca</p>
														<div class="precio_producto">$ <?php echo $producto["precio"] ?></div>
												</div>
											</div>



												<!--<p><?php echo $producto["descripcion"] ?></p>-->
									</a>
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

										<div class="add_bag"><a href="carrito.php">
											<img src="images/paper-bag.svg" alt="">
										</a></div>
								</div>
							</article>


						<?php endforeach ?>
					</section>
						</div>
				</div>

				</div>



			</div>
			<br><br><br><br>
			<!-- footer -->
			<footer class="main-footer">
	    		<?=!include_once('footer.php'); ?>
			</footer>
		</div>
		<?=!include_once('scripts.php'); ?>
	</body>
</html>
