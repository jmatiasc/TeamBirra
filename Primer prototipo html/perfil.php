<?php



if ($_GET) {
  if ($_GET["salir"]){
    session_destroy();
    header("Location:index.php");
  }
}
?>

<main role="main" class="inner cover text-center">
  <section class="login-block">
    <div class="col-md-8 offset-md-2 col-sm-8 offset-sm-2">
      <div class="row ">
        <div class="col login-sec">
          <h3 class="text-center">Mi perfil</h3>
          <p> <img src="archivos/<?php echo $_SESSION["usuario"]["imagen"]?>"  height="100" width="100"> </p>
          <p> <?php echo $_SESSION["usuario"]["name"]; ?> </p>
          <p> <?php echo $_SESSION["usuario"]["apellido"]; ?> </p>
          <p> <?php echo $_SESSION["usuario"]["email"]; ?> </p>
        </div>
        <div>
          <form class="" action='' method='get'>
            <input type="submit" name="salir" value="Cerrar Sesión">
          </form>
        </div>
      </div>
    </div>
  </section>
</main>
