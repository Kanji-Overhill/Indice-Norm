<?php
session_start();

if (!$_SESSION["user"]) {
	header("location:login");

	exit();
}
?>
<main>
	<section class="container indice-marketing">
		<div class="row">
			<div class="col-12">
				<h2>Archivos de Marketing</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-10">
				<div class="row">
					<div class="col-4">
						<a target="blank" href="https://www.dropbox.com/sh/4d3dtb3cqzqijyh/AAArpbKRGoWhlZp_oyAFuilDa?dl=0">
							<img class="img-fluid" src="views/images/logotipo-NORM.png" alt="">
						</a>
					</div>
					<div class="col-4">
						<a target="blank" href="https://www.dropbox.com/sh/pjub0xzcuav9qev/AADPgqw0g4MJ-FkeybefgBFda?dl=0">
							<img class="img-fluid" src="views/images/logo-mobil.png" alt="">
						</a>
					</div>
					<div class="col-4">
						<a target="blank" href="https://www.dropbox.com/sh/d8i4kehigmostj6/AAA4gfgu2rOIvptxPTj4JLO1a?dl=0">
							<img class="img-fluid" src="views/images/logo-footer.png" alt="">
						</a>
					</div>
					<div class="col-4">
						<a target="blank" href="https://www.dropbox.com/sh/1z1myq7i99we7kn/AABWN5UTxN7wvOuPLYhcPYKWa?dl=0">
							<img class="img-fluid" src="views/images/logo-img.png" alt="">
						</a>
					</div>
					<div class="col-4">
						<a target="blank" href="https://www.dropbox.com/sh/ugyt2uk7pqokcvd/AAB-9zU-Qk5Guswvdmh_haiIa?dl=0">
							<img class="img-fluid" src="views/images/logo-header.png" alt="">
						</a>
					</div>
					<div class="col-4">
						<a target="blank" href="https://www.dropbox.com/sh/hekiydzmtvagesw/AAA0YlyG-wj5550_mbMqm-GJa?dl=0">
							<img class="img-fluid" src="views/images/logo-cetema.png" alt="">
						</a>
					</div>
					<div class="col-4">
						<a target="blank" href="https://www.dropbox.com/sh/wikgwpgts0qj59y/AADhGR3jgy4cwGPVBWAewkeda?dl=0">
							<img class="img-fluid" src="views/images/logo.png" alt="">
						</a>
					</div>
					<div class="col-4">
						<a target="blank" href="https://www.dropbox.com/sh/pt2d4t6vdiig585/AAAriUcu7lZOsSW-FUlS_eb8a?dl=0">
							<img class="img-fluid" src="views/images/logotipo-CLAUZ-03.png" alt="">
						</a>
					</div>
					<div class="col-4">
						<a target="blank" href="https://www.dropbox.com/sh/80k7tder2msfxlp/AAD7L5iDZ5-C4XJ8Mbqc4w8Ma?dl=0">
							<img class="img-fluid" src="views/images/logo_header.png" alt="">
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>