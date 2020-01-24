<header class="masthead mb-auto">
	<div class="inner">
		<nav class="nav nav-masthead navbar navbar-expand-lg navbar-dark">
			<div class="container">
				<a class="navbar-brand" href="./index.php"><h3 class="masthead-brand"><img style="width: 100px;" src="images/logo21.png" alt="WELCOME"></img></h3></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarsExample07">
					<ul class="navbar-nav ml-auto">
							<li class="nav-item active">
								<a class="nav-link" href="./index.php">HOME <span class="sr-only">(current)</span></a>
							</li>
							<li class="nav-item ">
								<a class="nav-link" href="./catalogo.php">CATALOGO <span class="sr-only">(current)</span></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="register.php">REGISTRO</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="usuario.php">
										<?php
										echo (isset($_SESSION["usuario"]))? "PERFIL" : "LOGIN";
										?>
								</a>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="dropdown07" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ACERCA DE</a>
								<div class="dropdown-menu" aria-labelledby="dropdown07">
									<a class="dropdown-item" href="faq.php">FAQ</a>
									<a class="dropdown-item" href="contact.php">CONTACTO</a>
								</div>
							</li>
							<li class="nav-item ">
								<a class="nav-link" href="./carrito.php"> <img style="width: 20px;" src="images/carrito.svg" alt="instagram"></img> <span class="sr-only">(current)</span></a>
							</li>

					</ul>
				</div>
			</div>
		</nav>
	</div>
</header>
