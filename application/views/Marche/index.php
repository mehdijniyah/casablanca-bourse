<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Market </title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/actions.css');?>"/>
	<link rel="stylesheet" href="<?php echo base_url('assets/css/marche.css');?>"/>

</head>
<body>
<div id="app" class="container">

	<nav class="navbar navbar-dark fixed-top flex-md-nowrap p-0 shadows">
		<div class="logo"><img src="http://www.casablanca-bourse.com/BourseWeb/UserFiles/Image//LOGO-B-VF2.gif"
							   alt="Logo"
							   height="50px" width="50px"></div>
		<a class="navbar-brand col-lg-12 mr-0" id="titleId" href="/bourse/ListeActions">La bourse de Casablanca</a>

		<input class="form-control mr-sm-2" type="search" placeholder="Search">
			<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
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
			<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4" id="mainMarche">
					<br />
				<h2 style="color: #002166"> Marché </h2>

					<ul class="nav nav-tabs">
						<li class="nav-item">
							<a href="#home" class="nav-link active" role="tab" data-toggle="tab">Top Hausses</a>
						</li>

						<li class="nav-item">
							<a href="#profile" class="nav-link" role="tab" data-toggle="tab">Top Baisses</a>
						</li>

						<li class="nav-item">
							<a href="#about" class="nav-link" role="tab" data-toggle="tab">Top Volumes</a>
						</li>

					</ul>

					<div class="tab-content">
						<div role="tabpanel" class="tab-pane active" id="home">
							<div role="tabpanel" class="tab-pan active" id="tabItemHausses">
								<table class="table table-bordered table-striped">
									<thead id="headHausse">
									<th>Valeurs</th>
									<th>Cours</th>
									<th>Variations</th>
									</thead>
									<tbody id="stats-hausses">
									<tr v-for="(hausse,index) in topHausses">
										<td><a :href="hausse.monLien"> {{hausse.libelle_fr}}</a></td>
										<td>{{hausse.cours_courant}}</td>
										<td v-bind:class="[IsVariationPositive(index) ? 'green-percentage' : '', IsVariationNegative(index) ? 'red-percentage' : '']">{{hausse.variation}} %</td>
									</tr>
									</tbody>
								</table>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="profile">
							<div role="tabpanel" class="tab-pan-active" id="tabItemBaisses">
								<table class="table table-bordered table-striped">
									<thead>
									<th>Valeurs</th>
									<th>Cours</th>
									<th>Variations</th>
									</thead>
									<tbody id="stats-baisses">
									<tr v-for="(baisse,index) in topBaisses">
										<td><a :href="'Action/details/' + baisse.code_valeur.trim()">{{baisse.libelle_fr}}</a></td>
										<td>{{baisse.cours_courant}}</td>
										<td v-bind:class="[IsVariationNegative(index) ? 'red-percentage' : '']">{{baisse.variation}} %</td>
									</tr>
									</tbody>
								</table>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="about">
							<div role="tabpanel" class="tab-pan" id="tabItemVolumes">
								<table class="table table-bordered table-striped">
									<thead>
									<th>Valeurs</th>
									<th>Cours</th>
									<th>Volumes</th>
									</thead>
									<tbody id="stats-volumes">
									<tr v-for="volume in topVolumes">
										<td>{{volume.libelle_fr}}</td>
										<td></td>
										<td>{{volume.VOLUME_COURANT}}</td>
									</tr>
									</tbody>
								</table>
							</div>
						</div>
			</main>
			</div>
		</div>
	</div>
</div>

<?php
// Javascript
foreach($js as $jsFile)
{
	echo '<script src="' . $jsFile . '"></script>';
}
?>

<script>
    let application = new Vue({
        el: '#app',
        data:
		{
			topHausses: [
				{
					code_valeur: "11100 ",
					libelle_fr: "LABEL VIE",
					ticker: "LBV ",
					cours_courant: "2 799,00",
					variation: "7,61",
					cours_plus_haut: "2 799,00",
					cours_plus_bas: "2 799,00",
					cumul_echange: "68",
					monLien :"http://localhost:8080/bourse//Action/details/11100"
				},
				{
					code_valeur: "12000 ",
					libelle_fr: "RES DAR SAADA",
					ticker: "RDS ",
					cours_courant: "80,00",
					variation: "5,22",
					cours_plus_haut: "80,50",
					cours_plus_bas: "78,00",
					cumul_echange: "585",
                    monLien :"http://localhost:8080/bourse//Action/details/12000"
				},
				{
					code_valeur: "4100 ",
					libelle_fr: "COSUMAR",
					ticker: "CSR ",
					cours_courant: "219,00",
					variation: "2,74",
					cours_plus_haut: "222,00",
					cours_plus_bas: "214,80",
					cumul_echange: "3 712",
                    monLien :"http://localhost:8080/bourse//Action/details/4100"
				},
				{
					code_valeur: "5100 ",
					libelle_fr: "BMCI",
					ticker: "BCI ",
					cours_courant: "680,00",
					variation: "2,41",
					cours_plus_haut: "680,00",
					cours_plus_bas: "674,00",
					cumul_echange: "1 128",
                    monLien :"http://localhost:8080/bourse//Action/details/5100"
				},
				{
					code_valeur: "11900 ",
					libelle_fr: "TAQA MOROCCO",
					ticker: "TQM ",
					cours_courant: "904,50",
					variation: "2,20",
					cours_plus_haut: "904,50",
					cours_plus_bas: "899,00",
					cumul_echange: "1 549",
                    monLien :"http://localhost:8080/bourse//Action/details/11900"
				}
			],
			topBaisses: [
				{
					code_valeur: "11500 ",
					libelle_fr: "STROC INDUSTRIE",
					ticker: "STR ",
					cours_courant: "13,51",
					variation: "-6,83",
					cours_plus_haut: "13,51",
					cours_plus_bas: "13,51",
					cumul_echange: "1 000",
				},
				{
					code_valeur: "10400 ",
					libelle_fr: "STOKVIS NORD AFRIQUE",
					ticker: "SNA ",
					cours_courant: "11,47",
					variation: "-5,13",
					cours_plus_haut: "12,07",
					cours_plus_bas: "11,47",
					cumul_echange: "714",
				},
				{
					code_valeur: "11200 ",
					libelle_fr: "ALLIANCES",
					ticker: "ADI ",
					cours_courant: "77,01",
					variation: "-3,74",
					cours_plus_haut: "82,50",
					cours_plus_bas: "77,00",
					cumul_echange: "10 079",
				},
				{
					code_valeur: "21 ",
					libelle_fr: "MUTANDIS SCA",
					ticker: "MUT ",
					cours_courant: "180,00",
					variation: "-1,91",
					cours_plus_haut: "180,10",
					cours_plus_bas: "180,00",
					cumul_echange: "718",
				},
				{
					code_valeur: "1100 ",
					libelle_fr: "BMCE BANK",
					ticker: "BCE ",
					cours_courant: "190,05",
					variation: "-1,02",
					cours_plus_haut: "192,00",
					cours_plus_bas: "190,05",
					cumul_echange: "774",
				}
			],
			topVolumes: [
				{
					code_valeur: "8200 ",
					libelle_fr: "ATTIJARIWAFA BANK",
					ticker: "ATW ",
					cours_courant: "485,50",
					variation: "1,55",
					cours_plus_haut: "485.50",
					cours_plus_bas: "480.00",
					cumul_echange: "24725.00",
					VOLUME_COURANT: "11 986 864,50",
				},
				{
					code_valeur: "8001 ",
					libelle_fr: "ITISSALAT AL-MAGHRIB",
					ticker: "IAM ",
					cours_courant: "145,85",
					variation: "0,03",
					cours_plus_haut: "145.85",
					cours_plus_bas: "145.00",
					cumul_echange: "43598.00",
					VOLUME_COURANT: "6 350 538,35",
				},
				{
					code_valeur: "3800 ",
					libelle_fr: "LAFARGEHOLCIM MAR",
					ticker: "BCP ",
					cours_courant: "1 700,00",
					variation: "0,29",
					cours_plus_haut: "1700.00",
					cours_plus_bas: "1700.00",
					cumul_echange: "1400.00",
					VOLUME_COURANT: "2 380 000,00",
				},
				{
					code_valeur: "8000 ",
					libelle_fr: "BCP",
					ticker: "BCP ",
					cours_courant: "274,00",
					variation: "0,18",
					cours_plus_haut: "274.00",
					cours_plus_bas: "274.00",
					cumul_echange: "7016.00",
					VOLUME_COURANT: "1 922 384,00",
				},
				{
					code_valeur: "3100 ",
					libelle_fr: "CIH",
					ticker: "CIH ",
					cours_courant: "282,50",
					variation: "0,32",
					cours_plus_haut: "282.50",
					cours_plus_bas: "282.00",
					cumul_echange: "6593.00",
					VOLUME_COURANT: "1 861 876,00",
				}
			]
		},
        methods:
            {
                IsVariationPositive: function(index)
                {
                    let variation = parseFloat(this.topHausses[index].variation.replace(',', '.'));
                    return variation > 0;
                },
                IsVariationNegative: function(index)
                {
                    let variation = parseFloat(this.topBaisses[index].variation.replace(',', '.'));
                    return variation < 0;
                }
            },
        mounted()
        {
            // Tab control script
			(function()
			{
            function showElement(element)
            {
                $(element).css('display', '');
            }

            function hideElement(element)
            {
                $(element).css('display', 'none');
            }

            function updateTabControl(tabControl)
            {
                $(tabControl)
                    .find("#tabControlContent")
                    .children()
                    .each((index, item) =>
                    {
                        if($(item).attr('tabItemSelected') == "true")
                            showElement(item);
                        else
                            hideElement(item);
                    });
            }

            function selectTabControlItem(event)
            {
                let selectedIndex = $(event.target).attr('tabItemIndex');
                $("#tabControlContent")
                    .children()
                    .each((index, item) =>
                    {
                        if(index == selectedIndex)
                        {
                            $(item).attr('tabItemSelected', "true");
                        }
                        else
                        {
                            $(item).attr('tabItemSelected', "");
                        }
                    });
                updateTabControl($("#tabControl"));
            }

            $("#tabControl button").click(selectTabControlItem);
            updateTabControl($("#tabControl"));
            })();

           /* let myChartElement =document.getElementById('myChart').getContext('2d');
            let config = new Chart(myChart,{
                type: 'line',
                data: {
                    labels:['19/08','20/08','21/08','22/08','23/08'],
                    datasets: [{
                        backgroundColor: "#002166",
                        borderColor: "#002166",
                        data: [
                            474.20,
                            475.02,
                            475.75,
                            476.48,
                            476.47
                        ],
                        fill: true,
                    },]
                },
                options: {
                    responsive: true,
                    title: {
                        display: true,
                    },
                    tooltips: {
                        mode: 'index',
                        intersect: false,
                    },
                    hover: {
                        mode: 'nearest',
                        intersect: true
                    },
                    scales: {
                        xAxes: [{
                            display: true,
                            scaleLabel: {
                                display: true,
                            }
                        }],
                        yAxes: [{
                            display: true,
                            scaleLabel: {
                                display: true,
                            }
                        }]
                    }
                }
            });*/
        }
    });

</script>
</body>
</html>
