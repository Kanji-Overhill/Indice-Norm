<main>
	<section class="login-section container-fluid">
		<div class="row">
			<div class="col-md-3 col-12">
				<img class="img-fluid" src="views/images/logotipo-NORM.png" alt="">
			</div>
			<div class="col-md-3 col-12">
				<form method="post">
					<div class="form-group">
					    <label>Usuario:</label>
					    <input type="text" class="form-control" name="nameLogin">
					</div>
					<div class="form-group">
					    <label>Contraseña:</label>
					    <input type="password" class="form-control" name="passwordLogin">
					</div>
					<div class="form-group">
					    <input type="submit" value="Entrar" name="login_send">
					</div>
				</form>
				<?php
					$ingreso = new MvcController();
					$ingreso -> loginUsuarioController();
					if (isset($_GET["action"])) {
						if ($_GET["action"] == "fallo") {
							echo '<div class="alert alert-danger" role="alert">
										  <strong> ☹️ <br></strong> Usuario o Password no encontrado.
										</div>';
						}
					}
				?>
			</div>
		</div>
	</section>
</main>