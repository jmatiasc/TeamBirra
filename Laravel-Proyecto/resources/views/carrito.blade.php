
<?php

$productos = [

	0 => [
		"nombre" =>"Ipa Andina",
		"marca" =>"Andes",
		"imagen" => "/images/andes.png",
		"enOferta" => true,
		"esNovedad" => true,
		"precio" => 85,
		"descripcion" =>"descripcion Lorem ipsum dolor sit amet descripcion Lorem ipsum dolor sit amet descripcion Lorem ipsum dolor sit amet descripcion Lorem ipsum dolor sit amet descripcion Lorem ipsum dolor sit amet descripcion Lorem ipsum dolor sit amet ",
		"color" => "Dorado",
		"Estilo" => "Blonde",
		"Origen" => "Argentina"
	],
	1 => [
		"nombre" =>"Andes Rubia",
		"marca" =>"Andes",
		"imagen" => "/images/andesR.png",
		"enOferta" => true,
		"esNovedad" => true,
		"precio" => 80,
		"descripcion" => "descripcion Lorem ipsum dolor sit amet ",
		"color " => "Dorado",
		"Estilo" => "Blonde",
		"Origen" => "Argentina"
	],
	2 => [
		"nombre" =>"Brahma Rubia",
		"marca" =>"Brahma",
		"imagen" => "/images/brahma.png",
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
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<title>Team Birra | Carrito</title>
	<?@extends('head'); ?>
</head>


<body>

	<?

	@extends('footer')
	@extends('carritoContext');
		@extends('header')
	@extends('socialBar') ?>
</body>
</html>
