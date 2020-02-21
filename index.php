<?php session_start();
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
	]
];

?>
<!DOCTYPE html>
<html>
<head>
	<title>Team Birra | Home</title>
	<?=!include_once('head.php'); ?>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/styles2.css">
	<link href="https://fonts.googleapis.com/css?family=Catamaran&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
	<link href="css/style_card.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>

		<div class="cabecera">
			<?=!include_once('barraDeBusqueda.php'); ?>
			<?=!include_once('header.php'); ?>



		</div>

			<div class="slidebar">


							<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
								<ol class="carousel-indicators">
									<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
									<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
									<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
								</ol>
								<div class="carousel-inner">
									<div class="carousel-item active">
										<img class="d-block w-100" src="images/beer1.png" alt="First slide">
									</div>
									<div class="carousel-item">
										<img class="d-block w-100" src="images/beer2.png" alt="Second slide">
									</div>
									<div class="carousel-item">
										<img class="d-block w-100" src="images/beer3.png" alt="Third slide">
									</div>
								</div>
								<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
									<span class="carousel-control-prev-icon" aria-hidden="true"></span>
									<span class="sr-only">Previous</span>
								</a>
								<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
									<span class="carousel-control-next-icon" aria-hidden="true"></span>
									<span class="sr-only">Next</span>
								</a>
							</div>
			</div>


		<?=!include_once('footer.php'); ?>
	<?=!include_once('scripts.php'); ?>

</body>
</html>
