<?php
$referencias = [
  "COSTOS DE ENVÍO"  				=> "faq.php",
  "TIEMPOS DE ENVÍO"	  		=> "faq.php",
  "FORMAS DE PAGO"  				=> "faq.php",
  "PREGUNTAS FRECUENTES"		=> "faq.php",
  "COMENTARIOS DE CLIENTES" => "faq.php",
  "CONTACTANOS" 						=> "contact.php",
  "EVENTOS" 								=> "faq.php",
  "REGALOS EMPRESARIALES" 	=> "faq.php",
  "BLOG" 	 									=> "index.php",
  "NOSOTROS"  							=> "faq.php",
  "PRENSA"  								=> "faq.php",
  "TÉRMINOS Y CONDICIONES"  => "faq.php"
];
?>
<footer class="mastfoot mt-auto text-center">
  <div class="inner">
    <h2>NEWSLETTER</h2>
    <form action="index.php">
      <div class="form-group">
        <label for="exampleInputEmail1">Dejanos tu email para recibir promociones</label>
        <br> <br>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingresá tu email">
        <button type="button" class="btn btn-info">></button>
      </div>
    </form>
  </div>
  <div class="items">
    <?php
    foreach ($referencias as $value => $href): ?>
    <a href="<?php echo $href ?>"> <?php echo $value ?></a>
  <?php endforeach;	?>
  <h5>SEGUINOS</h5>
  <a href="https://instagram.com"><img style="width: 25px;" src="images/instagram.svg" alt="instagram"></img></a>
  <a href="https://facebook.com"><img style="width: 25px;" src="images/facebook.svg" alt="facebook"></img></a>
  <a href="https://twitter.com"><img style="width: 25px;" src="images/twitter.svg" alt="twitter"></img></a>
</div>
<div>
  <h5>CERVEZAS MÁS BUSCADAS</h5>
  <a href="index.php">PATAGONIA</a>
  <a href="index.php">CORONA</a>
  <a href="index.php">STELLA ARTOIS</a>
  <a href="index.php">ANDES ORIGEN</a>
  <a href="index.php">BUDWEISTER</a>
  <a href="index.php">IMPERIAL</a>
</div>
</footer>
