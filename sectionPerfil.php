<?php
$perfNombre = "";
$perfEmail = "";
  $contenidoArchivo = file_get_contents("archivos/user.txt");
    if(isset($arrayUsuarios)){
      $arrayUsuarios = json_decode($contenidoArchivo, true);
      foreach ($arrayUsuarios as $usuarios => $usuarios2) {
        foreach ($usuarios2 as $posUsuario => $usuario) {
          if($usuario["estado"] == true) {
          $perfNombre = $usuario["name"];
          $perfEmail = $usuario["email"];
          break;
          }
        }
      }
    }
?>
<main role="main" class="inner cover text-center">
  <section class="login-block">
    <div class="col-md-8 offset-md-2 col-sm-8 offset-sm-2">
      <div class="row ">
        <div class="col login-sec">
          <h3 class="text-center">Mi perfil</h3>
            <p> <?: $perfNombre; ?> </p>
            <p> <?: $perfEmail ; ?> </p>
        </div>
      </div>
    </div>
  </section>
</main>
