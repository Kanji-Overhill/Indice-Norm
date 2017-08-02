<?php
session_start();

if (!$_SESSION["user"]) {
	header("location:login");

	exit();
}
?>

<main>
	<section class="container-fluid indice-main">
		<div class="row">
			<div class="col-10">
				<div class="row">
					<div class="col-2">
						<a href="marketing">
							<img class="img-fluid" src="views/images/002-office-material.svg" alt="">
							<p>Archivos de Marketing</p>
						</a>
					</div>
					<div class="col-2">
						<a href="analytics">
							<img class="img-fluid" src="views/images/001-analytics.svg" alt="">
							<p>Reportes de Analytics</p>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>