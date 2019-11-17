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
								<form class="login-form">
									<div class="form-group">
										<label for="exampleInputEmail1">Email</label>
										<input type="email" name="email" id="email" class="form-control" placeholder="" required>
									</div>
									<div class="form-group">
										<label for="exampleInputPassword1">Contraseña</label>
										<input type="password" name="password" id="password" class="form-control" placeholder="" required>
									</div>
									<div class="form-check">
										<label class="form-check-label">
											<input type="checkbox" name="remember" id="remember" class="form-check-input">
											<small>Recordarme</small>
										</label>
										<button type="submit" class="btn btn-secondary float-right">Iniciar Sesion</button>
									</div>
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