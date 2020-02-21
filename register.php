<?php
session_start();
$mostrarError = "";
$pNombre = "";
$pApellido = "";
$pEmail = "";
$pEmail2 = "";
$pPass = "";
$pPass2 = "";

/*se crea un array para guardar los errores que se encontraron en la validacion y luego mostrarlos*/
if($_POST){
  $pNombre = $_POST["name"];
  $pApellido = $_POST["apellido"];
  $pEmail = $_POST["email"];
  $pEmail2 = $_POST["c_email"];
  $pPass = $_POST["password"];
  $pPass2 = $_POST["c_password"];


    /*Validación Nombre y Apellido*/
     if(isset($_POST["name"]) && strlen($_POST["name"])!=0){
           $usuario["name"]=$_POST["name"];
     } else {
       $error[]="Ingresá un nombre";
     }
		 if(isset($_POST["apellido"]) && strlen($_POST["apellido"])!=0){
					 $usuario["apellido"]=$_POST["apellido"];
		 }else {
			 $error[]="Ingresá un apellido";
		 }

    /*Validación Email*/
    /*falta validar que no exista dos usuarios con el mismo email*/
      if (isset($_POST["email"]) && strlen($_POST["email"])!=0) {
        if (isset($_POST["c_email"]) && strlen($_POST["c_email"])!=0) {
          if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)!= False) {
            if($_POST["email"] == $_POST["c_email"]){
              $usuario["email"]=$_POST["email"];
            }	else {
              $error[]="Los emails no coinciden";
            }
          } else {
            $error[]="Ingresá un email válido";
          }
        } else {
          $error[]="Ingresá confirmación de email";
        }
      } else {
        $error[]="Ingresá un email";
      }

    /*Validación Password*/
      if (isset($_POST["password"]) && strlen($_POST["password"])!=0) {
        if (strlen($_POST["password"]) > 7) {
          if(isset($_POST["c_password"]) && strlen($_POST["c_password"])!=0 ) {
            if($_POST["password"]==$_POST["c_password"]){
              $usuario["password"]=password_hash($_POST["password"], PASSWORD_DEFAULT);
            } else {
              $error[]="Las contraseñas no coinciden";
            }
          } else {
          $error[]="Ingresá verificación de la contraseña";
          }
        } else {
          $error[]="La contraseña debe tener mínimo 8 caracterres";
        }
      } else {
        $error[]="Ingresá una contraseña";
      }

    /*validacion Imagen*/
    if($_FILES){
      if($_FILES["img"]["error"]!=0){
          $error[]="Ingresá una imagen";
      }
      else {
        $ext = pathinfo($_FILES["img"]["name"],PATHINFO_EXTENSION);

        if($ext !="jpg" && $ext!= "jpeg" && $ext!="png"){
          $error[]="La imagen debe ser del tipo JPG,JPEG O PNG";
        }
        else {
            move_uploaded_file($_FILES["img"]["tmp_name"],"archivos/".$pEmail.".".$ext);
        }
      }

    }

   /*si no hay errores el usuario se guardara en nuesto archivo de registo de usuarios*/
  if(count($error)==0){
    $usuario = [
      "name" => $_POST["name"],
			"apellido" => $_POST["apellido"],
      "email" =>$_POST["email"],
      "password" => password_hash($_POST["password"],PASSWORD_DEFAULT),
      "imagen" =>$pEmail.".".$ext,
  ];

    /* se abre el archivo y se lo guarda en la variable llamada $contenidoArchico (todavia no tiene ningun formato definido)*/
    $contenidoArchivo=file_get_contents("archivos/user.txt");

    /*se le da formato al contenido del archivo guardandolo en la variable llamada $arratyUsuarios*/
    $arrayUsuarios=json_decode($contenidoArchivo, true);

    /*se guarda al usuario logueado en el archivo*/
    $arrayUsuarios["usuarios"][] = $usuario;

    /*se vuelve a guardar en el archivo todos los usuarios, con el nuevo usuario recien creado*/
    file_put_contents("archivos/user.txt", json_encode($arrayUsuarios));

		/*LUEGO DE ESCRIBIR EL ARCHIVO DE USUARIOS, REDIRECCIONAR*/
		header("Location:usuario.php");

		exit;
  } else {
    $mostrarError = $error[0];
  }
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Team Birra | Registro</title>
	<?=!include_once('head.php'); ?>
  	<link href="css/style_card.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>

  <?=!include_once('barraDeBusqueda.php'); ?>
  <?=!include_once('header.php'); ?>
  <div class="container">

	<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  		<main role="main" class="inner cover text-center">
  			<form role="form" action='register.php' method='POST' enctype="multipart/form-data">
  				<div class="col-md-8 offset-md-2 col-sm-8 offset-sm-2">
    					<h3>Registro</h3> <br>
    					<div class="row">
    						<div class="col-xs-6 col-sm-6 col-md-6">
    							<div class="form-group">
    								<input type="text" name="name" id="name" class="form-control input-sm" placeholder="Nombre" value="<?php echo $pNombre ?>" required>
    							</div>
    						</div>
    						<div class="col-xs-6 col-sm-6 col-md-6">
    							<div class="form-group">
    								<input type="text" name="apellido" id="apellido" class="form-control input-sm" placeholder="Apellido" value="<?php echo $pApellido ?>" required>
    							</div>
    						</div>
    					</div>
    					<div class="form-group">
    						<input type="email" name="email" id="email" class="form-control input-sm" placeholder="Email" value="<?php echo $pEmail ?>" required>
    					</div>
    					<div class="form-group">
    						<input type="email" name="c_email" id="c_email" class="form-control input-sm" placeholder="Confirmar Email" value="<?php echo $pEmail2 ?>" required>
    					</div>
    					<div class="row">
    						<div class="col-xs-6 col-sm-6 col-md-6">
    							<div class="form-group">
    								<input type="password" name="password" id="password" class="form-control input-sm" placeholder="Contraseña" value="<?php echo $pPass ?>" required>
    							</div>
    						</div>
    						<div class="col-xs-6 col-sm-6 col-md-6">
    							<div class="form-group">
    								<input type="password" name="c_password" id="c_password" class="form-control input-sm" placeholder="Confirmar Contraseña" value="<?php echo $pPass2 ?>" required>
    							</div>
    						</div>
    					</div>

<!--////////////////////////////////////////////////////SUBIENDO IMAGEN////////////////////////////////////////////////////////-->
              <div class="row">
    						<div class="col-xs-6 col-sm-6 col-md-6">
    							<div class="">
                    <label for="">IMAGEN</label>
    								<input type="file" name="img" id="img"   required>
    							</div>
    						</div>
    					</div>


<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
              <p> <?php echo $mostrarError ?> </p>
              <label><input type="checkbox" id="checkbox_tyc" value="TyC"> Aceptar Términos y Condiciones</label><br>
              <input type="submit" value="Registrarse" class="btn btn-secondary">
  				</div>
  			</form>
  		</main>
  <?=!include_once('footer.php'); ?>
  </div>

  </div>
	<?=!include_once('scripts.php'); ?>
</body>
</html>
