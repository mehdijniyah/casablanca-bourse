<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Bourse de Casablanca</title>
	<?php
	// Css
	foreach ($css as $cssFile) {
		echo '<link rel="stylesheet" href="' . $cssFile . '" />';
	}
	?>
</head>
<body>
<div id="app">
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
								<a class="nav-link" href="<?php echo base_url($navigationItem["url"]); ?>">
									<i class="fas fa-<?php echo $navigationItem["faIcon"]; ?>"></i>
									<?php echo $navigationItem["name"]; ?>
								</a>
							</li>
						<?php endforeach; ?>
					</ul>
				</div>
			</nav>

			<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
				<h2 style="color: #002166">Watchlist</h2>
				<div class="table-responsive">
					<table class="table table-striped table-sm">
						<thead style="background-color: #002166">
						<tr class="main-row">
							<th> Ticker</th>
							<th> Libellé</th>
							<th> Cours courant</th>
							<th> Variation</th>
						</tr>
						</thead>
						<tbody id="actions-table-content">
						<tr v-for="(action, index) in watchlist" v-on:click="goToWebsite('<?php echo site_url(); ?>/Action/details/' + action.code_valeur.trim())">
							<td>{{action.ticker}}</td>
							<td>{{action.libelle_fr}}</td>
							<td>{{action.cours_courant}}</td>
							<td v-bind:class="[IsVariationPositive(index) ? 'green-percentage' : '', IsVariationNegative(index) ? 'red-percentage' : '']">{{action.variation}} {{action.variation != "-" ? "%" : ""}}</td>
						</tr>
						</tbody>
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
<script>
    let app = new Vue({
        el: '#app',
        data: {"actions": <?php echo $data ?>},
		computed:
			{
                watchlist: function()
                {
                    return this.actions.filter((action) => isInWatchlist(action.code_valeur.trim()));
                }
			},
			methods:
			{
                goToWebsite: function(website)
				{
					window.location.href = website;
				},
                IsVariationPositive: function(index)
				{
                    let variation = parseFloat(this.actions[index].variation.replace(',', '.'));
				    return variation > 0;
				},
                IsVariationNegative: function(index)
                {
                    let variation = parseFloat(this.actions[index].variation.replace(',', '.'));
                    return variation < 0;
                }
			}
    });
</script>
</body>
</html>
