<?PHP

$error=[];
/*se crea un array para guardar los errores que se encontraron en la validacion y luego mostrarlos*/
if($_POST){
     if(isset($_POST["name"]) && strlen($_POST["name"])!=0){
           $usuario["name"]=$_POST["name"];
     }else {
       $error[0]="no ingreso nombre";
     }


		 if(isset($_POST["apellido"]) && strlen($_POST["apellido"])!=0){
					 $usuario["apellido"]=$_POST["apellido"];
		 }else {
			 $error[0]="no ingreso Apellido";
		 }

     if(isset($_POST["email"]) && strlen($_POST["email"])!=0){
			 					if(isset($_POST["c_email"]) && strlen($_POST["c_email"])!=0 &&	($_POST["c_email"]==$_POST["email"]))
             		{

									$usuario["email"]=$_POST["email"];}
							else {
								echo $_POST["email"];
								echo $_POST["c_email"];
				        $error[1]="error en la confiarmacion de email";
				      }
     }else {
       $error[1]="no ingreso email";
     }


     if(isset($_POST["password"]) && strlen($_POST["password"])!=0){
			  if(isset($_POST["c_password"]) && strlen($_POST["c_password"])!=0 &&	$_POST["c_password"]==$_POST["password"])
          { $usuario["password"]=password_hash($_POST["password"],PASSWORD_DEFAULT);}
				else  $error[3]="las contraseñas no coinciden";
   }else {
     $error[3]="no ingreso password";
   }

   /*si no hay errores el usuario se guardara en nuesto archivo de registo de usuarios*/
  if(count($error)==0){
    $usuario = [
      "name" => $_POST["name"],
			"apellido" => $_POST["apellido"],
      "email" =>$_POST["email"],
      "password" => password_hash($_POST["password"],PASSWORD_DEFAULT),
    ];

    /* se abre el archivo y se lo guarda en la variable llamada $contenidoArchico (todavia no tiene ningun formato definido)*/
    $contenidoArchivo=file_get_contents("archivos/user.txt");

    /*se le da formato al contenido del archivo guardandolo en la variable llamada $arratyUsuarios*/
    $arrayUsuarios=json_decode($contenidoArchivo, true);


    /*se guarda al usuario logueado en el archivo*/
    $arrayUsuarios["usuarios"][] = $usuario;

    /*se vuelve a guardar en el archivo todos los usuarios, con el nuevo usuario recien creado*/
    file_put_contents("archivos/user.txt", json_encode($arrayUsuarios));

		/*LUEGO DE QUE SE ESCRIBIO EL ARCHIVO DE USUARIOS DEBERIA REDIRECCIONAR*/
		header("Location:login.php");
		exit;

  }else

  var_dump($error);
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Team Birra | Registro</title>
	<?=!include_once('head.php'); ?>
</head>
<body>
	<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">

		<?=!include_once('header.php'); ?>

		<main role="main" class="inner cover text-center">
			<form role="form" action='register.php' method='POST' >
				<div class="col-md-8 offset-md-2 col-sm-8 offset-sm-2">
					<h3>Registro</h3>
					<br>
					<div class="row">
						<div class="col-xs-6 col-sm-6 col-md-6">
							<div class="form-group">
								<input type="text" name="name" id="name" class="form-control input-sm" placeholder="Nombre" required>
							</div>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-6">
							<div class="form-group">
								<input type="text" name="apellido" id="apellido" class="form-control input-sm" placeholder="Apellido" required>
							</div>
						</div>
					</div>

					<div class="form-group">
						<input type="email" name="email" id="email" class="form-control input-sm" placeholder="Email" required>
					</div>

					<div class="form-group">
						<input type="email" name="c_email" id="c_email" class="form-control input-sm" placeholder="Confirmar Email" required>
					</div>

					<div class="row">
						<div class="col-xs-6 col-sm-6 col-md-6">
							<div class="form-group">
								<input type="password" name="password" id="password" class="form-control input-sm" placeholder="Contraseña" required>
							</div>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-6">
							<div class="form-group">
								<input type="password" name="c_password" id="c_password" class="form-control input-sm" placeholder="Confirmar Contraseña" required>
							</div>
						</div>
					</div>
					<input type="submit" value="Registrarse" class="btn btn-secondary">
				</div>
			</form>
		</main>

		<?=!include_once('footer.php'); ?>

	</div>

	<?=!include_once('scripts.php'); ?>

</body>
</html>
