<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
			<title>Catalogo</title>
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


<section class="cuerpo">


		<nav class="navegador">
      <ul class="menu">
        <li> <a href="#">Marcas</a>
          <ul>
            <li> <a href="#">Andes Origen</a> </li>
            <li> <a href="#">Brahma</a> </li>
            <li> <a href="#">Budweiser</a> </li>
            <li> <a href="#">Estrella Galicia</a> </li>
            <li> <a href="#">Hoegaarden</a> </li>
            <li> <a href="#">Peñon del Aguila</a> </li>
						<li> <a href="#">Stella Artois</a> </li>
						<li> <a href="#">Crimen Beer</a> </li>
          </ul>
        </li>

        <li> <a href="#">Origen</a>
          <ul>
						<li> <a href="#">Alemania</a> </li>
            <li> <a href="#">Argentina</a> </li>
            <li> <a href="#">Belgica</a> </li>
            <li> <a href="#">España</a> </li>
            <li> <a href="#">Holanda</a> </li>
            <li> <a href="#">Italia</a> </li>
            <li> <a href="#">Perú</a> </li>
          </ul>
        </li>


        <li> <a href="#">Estilos</a>
          <ul>
            <li> <a href="#">Golden Ale</a> </li>
            <li> <a href="#">Red Lager</a> </li>
            <li> <a href="#">Pale Lager</a> </li>
            <li> <a href="#">Scotch Ale</a> </li>
            <li> <a href="#">Amber Lager</a> </li>
            <li> <a href="#">American Ipa</a> </li>
						<li> <a href="#">Pilsen</a> </li>
          </ul>
        </li>

        <li> <a href="#">color</a>
          <ul>
            <li> <a href="#">Ambar</a> </li>
            <li> <a href="#">Dorado</a> </li>
            <li> <a href="#">Negra</a> </li>
            <li> <a href="#">Oscuro</a> </li>
            <li> <a href="#">Rubí</a> </li>
            <li> <a href="#">Roja</a> </li>
          </ul>
        </li>

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


		<?php $productos = [

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
]; ?>
		<section class="catalogo-productos">
			<?php foreach ($productos as $producto) : ?>
									<article class="product">
										<div class="contenedor-foto">
											<img class="foto"  src="<?php echo $producto["imagen"] ?>" alt="pdto 01">

						          <h3>$ <?php echo  $producto["precio"] ?> </h3>
									</div>
										<a class="nombre" href="Producto.php"><h5><?php echo  $producto["nombre"] ?></h5></a>
						        <p><?php echo  $producto["descripcion"] ?></p>
						        <a href="#" class="boton-Comprar btn btn-lg btn-secondary">COMPRAR</a>


						      </article>
			<?php endforeach ?>

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
