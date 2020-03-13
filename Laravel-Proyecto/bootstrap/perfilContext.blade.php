<?php

session_start();
    if ($_GET ) {
      if ($_GET["salir"]){
        session_destroy();
        header("Location:index.php");
      }
    }





?>

<div class="col-12 col-md-4 col-lg-3 contenedor-navFilter cont-perfil" >
  <div class="navFilter navPerfil ">

  <div class="imagen-Perfil">
    <?php
      $str=$_SESSION["usuario"]["imagen"];
      $imgSrc="archivos/".$str;  ?>
      <div class="avatarImg" style="background-image: url(<?php echo $imgSrc?>) " ></div>
  </div>

  <div class="container">
    <div class="categoria">
      <h4> Mi Cuenta</h4>
      <div class="boxListCategory">
        <div class="list">
          <div class="listBox">
            <div class="ultimo">
                <a class="checkbox" href="#">Compras</a>
                <a class="checkbox" href="#">Mis Datos</a>
                <a class="checkbox" href="#">Configuracion</a>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
  </div>
</div>

<div class=" col-12 col-md-8 col-lg-9 contenedor-datos-perfil">



  <div class="datos">
    <h4>Datos personales:</h4>
      <div class="box-p">
        <div class="id-d">
            <div class="id-dato-iz">Nombre:</div>
            <div class="id-dato-der"><?php echo $_SESSION["usuario"]["name"]; ?> </div>
            <div class="edit"><a href="#">  <img src="images/edit.svg" alt=""> </a></div>
        </div>

        <div class="id-d">
            <div class="id-dato-iz">Apellido:</div> <div class="id-dato-der"><?php echo $_SESSION["usuario"]["apellido"]; ?></div>
            <div class="edit"><a href="#">  <img src="images/edit.svg" alt=""> </a></div>
        </div>

        <div class="id-d">
            <div class="id-dato-iz">Telefono:</div> <div class="id-dato-der">2222-9999999 </div>
            <div class="edit"><a href="#">  <img src="images/edit.svg" alt=""> </a></div>
        </div>
      </div>

  </div>

    <div class="datos">
        <h4>Datos de cuentas:</h4>

        <div class="box-p">
        <div class="id-d">
        <div class="id-dato-iz">Usuario:</div><div class="id-dato-der">Master </div><div class="edit"><a href="#">  <img src="images/edit.svg" alt=""> </a></div>
        </div>
        <div class="id-d">
        <div class="id-dato-iz">E-Mail:</div> <div class="id-dato-der"> <?php echo $_SESSION["usuario"]["email"]; ?> </div><div class="edit"><a href="#">  <img src="images/edit.svg" alt=""> </a></div>
        </div>
        </div>

  </div>

  <div class="datos">

    <h4>Direcciones:</h4>
      <div class="box-p">
    <?php /*foreach ($_SESSION["usuario"]["direcciones"]; as $direccion):*/ ?>
        <div class="id-d">
          <div class="id-dato-iz">Calle falsa 1234 </div>  <div class="edit"><a href="#">  <img src="images/edit.svg" alt=""> </a></div>
        </div>
    <?php /*endforeach*/ ?>
    </div>
  </div>


  <div class="btn-cerrar-session datos">
    <form  action='' method='get'>
    <input class="btn-cerrar"type="submit" name="salir" value="Cerrar Sesión">
    </form>
  </div>
</div>
