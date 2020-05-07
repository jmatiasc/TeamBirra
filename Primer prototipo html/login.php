<?php
$logEmail = "";
$logPass = "";
$mostrarError = "";

if($_POST){
  $logEmail = $_POST["email"];
  $logPass = $_POST["password"];

  /* se abre el archivo y se lo guarda en la variable llamada $contenidoArchico (todavia no tiene ningun formato definido)*/
  $contenidoArchivo = file_get_contents("archivos/user.txt");

  /*se le da formato al contenido del archivo guardandolo en la variable llamada $arratyUsuarios*/
  $arrayUsuarios = json_decode($contenidoArchivo, true);

  /*Valida que haya consistencia en los campos: Email y Contraseña*/
  if (isset($_POST["email"])  && strlen($_POST["email"])!=0) {
    if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) == False) {
      $error[]="Ingresá un email válido";
    }
  } else {
    $error[]="Ingresá un email";
  }

  if (isset($_POST["password"]) && strlen($_POST["password"])!=0) {
    if (strlen($_POST["password"]) < 8) {
      $error[] = "La contraseña ingresada es incorrecta";
    }
  } else {
    $error[]="Ingresá tu contraseña";
  }

  if (isset($arrayUsuarios["usuarios"])) {
    foreach ($arrayUsuarios as $usuarios => $usuarios2) {
      foreach ($usuarios2 as $posUsuario => $usuario) {
        if ($_POST["email"] == $usuario["email"]) {
          if (password_verify($_POST["password"], $usuario["password"]) == false) {
            $error[] = "La contraseña ingresada es incorrecta";
          } else {
            $_SESSION["usuario"]["name"] = $usuario["name"];
            $_SESSION["usuario"]["apellido"] = $usuario["apellido"];
            $_SESSION["usuario"]["email"] = $usuario["email"];
            $_SESSION["usuario"]["imagen"] = $usuario["imagen"];
            header("Location:usuario.php");
            break;
          }
        } else {
          $error[] = "El email ingresado no coincide con ninguna cuenta";
        }
      }
    }
  } else {
    $error[] = "El email ingresado no coincide con ninguna cuenta";
  }


  if (isset($error[0])) {
    $mostrarError = $error[0];
  }
} /*fin del if(!$_POST)*/
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body>

  <div class="container">

    <main role="main" class="inner cover text-center">
      <section class="login-block">
        <div class="col-md-8 offset-md-2 col-sm-8 offset-sm-2">
          <div class="container-login">
            <div class="row ">
              <div class="col login-sec">
                <h3 class="text-center">Iniciar Sesion</h3>
                <form class="login-form" action='usuario.php' method='POST' >
                  <fieldset >
                    <!-- DIV DEL INGRESO DE EMAIL-->
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email</label>
                      <input type="email" name="email" id="email" class="form-control" placeholder="Ingresá tu email" value="<?php echo $logEmail ?>" required >
                      <span id='register_email_errorloc' class='error'></span>
                    </div>

                    <!-- DIV DEL INGRESO DE PASSWORD-->
                    <div class="form-group">
                      <label for="exampleInputPassword1">Contraseña</label>
                      <input type="password" name="password" id="password" class="form-control" placeholder="Ingresá tu contraseña" value="<?php echo $logPass ?>" required >
                      <div id='register_password_errorloc' class='error' style='clear:both'></div>
                    </div>

                    <!-- CHECKBOX DE REMEMBER-->
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="checkbox" name="remember" id="remember" class="form-check-input">
                        <small>Recordarme</small>
                      </label>
                    </div>
                    <div>
                      <p><?php echo $mostrarError ?></p>
                      <button type="submit" class="btn btn-secondary float-right">Iniciar Sesion</button>
                    </div>
                  </fieldset>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

  </div>
</body>
</html>
