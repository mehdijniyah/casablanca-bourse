<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> About </title>
	<link rel="stylesheet" href="<?php echo base_url('assets/css/about.css');?>"/>
	<link rel="stylesheet" href="<?php echo base_url('assets/css/actions.css');?>"/>
	<link rel="stylesheet" href="<?php echo base_url('assets/css/actualites.css');?>"/>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/2b28bccfd5.js"></script>

</head>
<body>
	<!--<div role="tabpanel" class="tab-pan" id="mainInfo">
		<table>
			<tr>
				<td col-4-lg>
					<img src="http://www.casablanca-bourse.com/BourseWeb/UserFiles/Image//LOGO-B-VF2.gif"  height="150px" width="150px">
				</td>
				<td col-8-lg>
					<div >
						<h3>La Bourse de Casablanca est une Société Anonyme à Conseil d’Administration et Direction Générale dont la mission consiste à assurer le fonctionnement, le développement et la promotion du marché boursier marocain.</h3> <br>
						<h3>Le site web 'Bourse de Casablanca' vous permet d'accéder facilement à toute l'information et les news du marché boursier.</h3>
					</div>
				</td>
			</tr>
			<tr>
				<td col-4-lg>
					<h3>
					<i class="fas fa-wallet"></i>  <br>
					<span style="color: #002166">Ma watchlist <br> Mes alertes</span>
					</h3>
				</td>
				<td>
					<h3> Liste personnalisée d'actions cotées : cours, performances, titres échangés...avec possibilité de créer des alertes sur le cours.</h3>
				</td>
			</tr>
			<tr>
				<td col-4-lg>
					<h3>
					<i class="fas fa-newspaper"></i> <br>
					<span style="color: #002166">Actualités</span>
					</h3>
				</td>
				<td>
					<h3>Dernières publications et News de la Bourse de Casablanca, des sociétés cotées, de la MAP et du AMMC.</h3>
				</td>
			</tr>
			<tr>
				<td col-4-lg>
					<h3>
						<i class="fas fa-sort"></i> <br>
						<span style="color: #002166">Toutes le actions</span>
					</h3>
				</td>
				<td>
					<h3>Liste de l'ensemble des actions cotées à la Bourse de Casablanca.</h3>
				</td>
			</tr>
			<tr>
				<td col-4-lg>
					<h3>
						<i class="fas fa-file-contract"></i> <br>
						<span style="color: #002166">Investir en bourse</span>
					</h3>
				</td>
				<td>
					<h3>Liste des sociétés de bourse et des sociétés de gestion.</h3>
				</td>
			</tr>

		</table>
	</div> -->
	<div id="app" class="container">
		<nav class="navbar navbar-dark fixed-top flex-md-nowrap p-0 shadows">
			<div class="logo"><img src="http://www.casablanca-bourse.com/BourseWeb/UserFiles/Image//LOGO-B-VF2.gif"
								   alt="Logo"
								   height="50px" width="50px"></div>
			<a class="navbar-brand col-lg-12 mr-0" id="titleId" href="/bourse/ListeActions">La bourse de Casablanca</a>
		</nav>
		<div class="container-fluid">
			<div class="row">
				<nav class="col-md-2 d-none d-md-block sidebar" id="sidebar">
					<div class="sidebar-sticky">
						<ul class="nav flex-column">
							<?php
							get_instance()->config->load("side_bar_navigation");
							$navigation = get_instance()->config->item("navigation");
							?>

							<?php foreach($navigation as $navigationItem): ?>
								<li class="nav-item">
									<a class="nav-link" href="<?php echo $navigationItem["url"]; ?>">
										<i class="fas fa-<?php echo $navigationItem["faIcon"]; ?>"></i>
										<?php echo $navigationItem["name"]; ?>
									</a>
								</li>
							<?php endforeach; ?>
						</ul>
					</div>
				</nav>
						<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4" id="mainInfo" >
							<br />
							<pre>
<h2 style="color: #002166"> À propos </h2>
							</pre>

							<table id="AboutTable">
							<tr>
								<td col-4-lg>
									<img src="http://www.casablanca-bourse.com/BourseWeb/UserFiles/Image//LOGO-B-VF2.gif"  height="165px" width="150px">
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
</body>
</html>
