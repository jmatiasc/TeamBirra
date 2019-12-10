<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Team Birra | Login</title>
    <?=!include_once('head.php'); ?>
  </head>
  <body>
  	<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  		<?=!include_once('header.php'); ?>
  		<main role="main" class="inner cover text-center">
          <?php
            if(isset($_SESSION["usuario"])){
              !include_once("perfil.php");
            } else {
              !include_once("login.php");
            }
          ?>
  		</main>
  		<?=!include_once('footer.php'); ?>
  	</div>
  	<?=!include_once('scripts.php'); ?>
  </body>
</html>
