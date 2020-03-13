<?php
function is_session_started()
{
    if ( php_sapi_name() !== 'cli' ) {
        if ( version_compare(phpversion(), '5.4.0', '>=') ) {
            return session_status() === PHP_SESSION_ACTIVE ? TRUE : FALSE;
        } else {
            return session_id() === '' ? FALSE : TRUE;
        }
    }
    return FALSE;
}


if ( is_session_started() == FALSE ) session_start();

 ?>

<nav class="navbar navbar-expand-lg navbar-light contenedor">
  <div class="container-fluid panel">
    <a class="navbar-brand col-2 col-md-1 col-lg-1 logo" href="home"><img  style="width: 50px;" src="/images/logo1.png" alt="WELCOME"></img></a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <div class="panelCentral col-md-6 col-lg-6">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item ">
            <a class="nav-link" href="/home">HOME<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/catalogo">CATALOGO</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/faq">FAQ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/contact">CONTACTO</a>
          </li>
        </div>


        <div class="PanelIzquierdo  col-md-4 col-lg-4">

          <div class="searchBar col-md-6 col-lg-6">
            <!--codigo de search NavBar para futuras mejoras

            <form class="form-inline  ">
            <button class="btn btn-outline-dark btn-sm my-2 my-sm-0 col-md-3 col-lg-3 botonSearch" type="submit"> <img style="" src="images/lupa.svg" alt="Search"></img></button>
            <input class="form-control form-control-sm mr-sm-2 col-md-8 col-lg-8 " type="search" placeholder="" aria-label="Search">
          </form>-->
        </div>

        <div class="log-reg col-md-3 col-lg-3">

          <li class="nav-item dropdown ">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <img  style="width: 20px;" src="/images/userIcon.png" alt="WELCOME"></img>

              <?php
                  if (isset($_SESSION["usuario"]["name"]))
                    echo $_SESSION["usuario"]["name"];
                    else echo " Sign In";
                    ?>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="/register">REGISTRO</a>
              <?php
                if (isset($_SESSION["usuario"]["name"])){

                    $web="/perfil";
                    $mostrar="PERFIL";
                  }else {
                    $web="/login";
                    $mostrar="LOGIN";
                  }
                  ?>

              <a class="dropdown-item" href=<?php echo $web ?>>

                <?php
                  echo $mostrar;
                ?>
              </a>
            </div>
          </li>
        </div>

        <div class="carrito col-md-3 col-lg-3">
          <li class="nav-item ">
            <a class="nav-link" href="carrito"> <img style="width: 20px;" src="/images/bag.png" alt="instagram"></img>bag<span class="sr-only">(current)</span></a>
          </li>
        </div>

      </div>




    </div>


  </div>
</nav>
