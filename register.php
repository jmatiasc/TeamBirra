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
			<form role="form" method="post" action="#">
				<div class="col-md-8 offset-md-2 col-sm-8 offset-sm-2">
					<h3>Registro</h3>
					<br>
					<div class="row">
						<div class="col-xs-6 col-sm-6 col-md-6">
							<div class="form-group">
								<input type="text" name="nombre" id="nombre" class="form-control input-sm" placeholder="Nombre" required>
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