<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> About </title>
	<?php
	// Css
	foreach ($css as $cssFile) {
		echo '<link rel="stylesheet" href="' . $cssFile . '" />';
	}
	?>
	<script src="https://kit.fontawesome.com/2b28bccfd5.js"></script>

</head>
<body>
	<div id="app" class="container">
		<nav class="navbar navbar-dark fixed-top flex-md-nowrap p-0 shadows">
			<div class="logo"><img src="http://www.casablanca-bourse.com/BourseWeb/UserFiles/Image//LOGO-B-VF2.gif"
								   alt="Logo"
								   height="50px" width="50px"></div>
			<a class="navbar-brand col-lg-12 mr-0" id="titleId" href="/casablanca-bourse/ListeActions">La bourse de Casablanca</a>
		</nav>
		<div class="container-fluid">
			<div class="row">
				<?php
				// Side bar
				get_instance()->load->view("templates/side_bar");
				?>
						<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4" id="mainInfo" >
							<br />
<h2 style="color: #002166"> À propos </h2>
							<table id="AboutTable">
							<tr>
								<td col-4-lg>
									<img src="http://www.casablanca-bourse.com/BourseWeb/UserFiles/Image//LOGO-B-VF2.gif"  height="165px" width="140px">
								</td>
								<td col-8-lg>
									<div >
										<h5>La Bourse de Casablanca est une Société Anonyme à Conseil d’Administration et Direction Générale dont la mission consiste à assurer le fonctionnement, le développement et la promotion du marché boursier marocain.</h5> <br>
										<h5>Le site web 'Bourse de Casablanca' vous permet d'accéder facilement à toute l'information et les news du marché boursier.</h5>
									</div>
								</td>
							</tr>
							<tr>
								<td col-4-lg>
									<h4>
										<i class="fas fa-wallet"></i>  <br>
										<span style="color: #002166" id="Watchlistlogo" > Ma watchlist</span>
									</h4>
								</td>
								<td>
									<h5> Liste personnalisée d'actions cotées : cours, performances, titres échangés...avec possibilité de créer des alertes sur le cours.</h5>
								</td>
							</tr>
							<tr>
								<td col-4-lg>
									<h4>
										<i class="fas fa-newspaper"></i> <br>
										<span style="color: #002166">Actualités</span>
									</h4>
								</td>
								<td>
									<h5>Dernières publications et News de la Bourse de Casablanca, des sociétés cotées, de la MAP et du AMMC.</h5>
								</td>
							</tr>
							<tr>
								<td col-4-lg>
									<h4>
										<i class="fas fa-sort"></i> <br>
										<span style="color: #002166">Toutes les actions</span>
									</h4>
								</td>
								<td>
									<h5>Liste de l'ensemble des actions cotées à la Bourse de Casablanca.</h5>
								</td>
							</tr>
							<tr>
								<td col-4-lg>
									<h4>
										<i class="fas fa-file-contract"></i> <br>
										<span style="color: #002166">Investir en bourse</span>
									</h4>
								</td>
								<td>
									<h5>Liste des sociétés de bourse et des sociétés de gestion.</h5>
								</td>
							</tr>

						</table>
					</div>

				</main>
			</div>
		</div>
	</div>
	<?php
	// Javascript
	foreach ($js as $jsFile) {
		echo '<script src="' . $jsFile . '"></script>';
	}
	?>
</body>
</html>
