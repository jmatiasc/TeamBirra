<?php
$error=[];
if($_POST){


  /* se abre el archivo y se lo guarda en la variable llamada $contenidoArchico (todavia no tiene ningun formato definido)*/
  $contenidoArchivo=file_get_contents("archivos/user.txt");

  /*se le da formato al contenido del archivo guardandolo en la variable llamada $arratyUsuarios*/
  $arrayUsuarios=json_decode($contenidoArchivo, true);

  if(isset($_POST["email"]) && strlen($_POST["email"])!=0){
          $usuario["email"]=$_POST["email"];
  }else {
    $error[1]="no ingreso email";
  }


       if(isset($_POST["password"]) && strlen($_POST["password"])!=0){
             $usuario["password"]=password_hash($_POST["password"],PASSWORD_DEFAULT);
     }else {
       $error[2]="no ingreso password";
     }


  if(count($error)==0){
					      /*solo para mostrar el archivo
					      var_dump($arrayUsuarios);*/


					      $cont=0;
					      /*se buscará en el archivo que exista un usuario logueado con el email ingresado
					        y la contraseña correspondiente  */
					      foreach ($arrayUsuarios as $key => $value) {
					        if(($value[$cont]["email"]==$_POST["email"]) ){
									 	if(password_verify($_POST["password"],$value[$cont]["password"]))
					              {
													/*SOLO PARA PROVAR QUE FUNCIONA, APARECE ARRIBA A LA IZQUIERDA SI EL USUARIO EXISTE*/
					                  echo "BIENVENIDO:";
					                  echo $value[$cont]["name"];

					                  /*ACA DEBERIA REDIRIGIR LA PAGINA*/
														header("Location:index.php");
														exit;
					              }else {echo "contraseña incorrecta";

																}
					          }
										$cont++;
					      }

								if($cont==count($arrayUsuarios)) echo "no se encontro usuario";

			 }else var_dump($error);

}/*fin del if(!$_POST)*/
 ?>



<!DOCTYPE html>
<html>
<head>
	<title>Team Birra | Login</title>
	<?=!include_once('head.php'); ?>
</head>
<body>
	<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">

		<?=!include_once('header.php'); ?>

		<main role="main" class="inner cover text-center">
			<section class="login-block">
				<div class="col-md-8 offset-md-2 col-sm-8 offset-sm-2">
					<div class="container-login">
						<div class="row ">
							<div class="col login-sec">
								<h3 class="text-center">Iniciar Sesion</h3>
								<form class="login-form" action='login.php' method='POST' >
												   <fieldset >
														<!-- DIV DEL INGRESO DE EMAIL-->
														<div class="form-group">
															<label for="exampleInputEmail1">Email</label>
															<input type="email" name="email" id="email" class="form-control" placeholder="" required>
															<span id='register_email_errorloc' class='error'></span>
														</div>

														<!-- DIV DEL INGRESO DE PASSWORD-->
														<div class="form-group">
														<label for="exampleInputPassword1">Contraseña</label>
														<input type="password" name="password" id="password" class="form-control" placeholder="" required>
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

		<?=!include_once('footer.php'); ?>

	</div>

	<?=!include_once('scripts.php'); ?>

</body>
</html>
