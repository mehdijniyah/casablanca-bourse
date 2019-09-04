<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Action </title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/action_details.css');?>"/>

</head>
<body>
<div id="app" class="container">
    <div class="row">
		<div >
			<button type="button" class="btn btn-default" id="returnButton" onclick="location.href='/casablanca-bourse/ListeActions'">
				<span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span>
			</button>
		</div>
        <div class="col-sm-6 col-md-6 col-lg-6"><h2> {{ detailsAction[0].ticker }}
            <button type="button" class="btn btn-default" aria-label="Right Align" id="addButton" onclick="handleWatchlist();">
                <span v-bind:style="{color: IsInWatchList() ? 'red' : '#002166'}" v-bind:class="['glyphicon', IsInWatchList() ? 'glyphicon-minus' : 'glyphicon-plus']" aria-hidden="true"></span>
            </button> </h2>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-6"><h2>{{ detailsAction[0].cours_courant}}</h2></div>
    </div>
    <div class="row"><h3>{{ detailsAction[0].libelle_fr }}</h3> </div>
    <div class="row">
        <div class="col-sm-6 col-md-6 col-lg-6">
			<h4>
				<div v-if="detailsAction[0].etat_seance == 'O'">
					<span class="green-percentage">Séance ouverte</span>
				</div>
				<div v-if="detailsAction[0].etat_seance != 'O'">
					<span class="red-percentage">Séance clôturée</span>
				</div>
			</h4>
		</div>
        <div class="col-sm-6 col-md-6 col-lg-6">
			<h4 v-bind:class="[IsVariationPositive() ? 'green-percentage' : '', IsVariationNegative() ? 'red-percentage' : '']"> {{ detailsAction[0].variation }} {{detailsAction[0].variation != "-" ? "%" : ""}}</h4 v-bind:class="">
		</div>
    </div>

    <div class="row">
        <div class="col-sm-6 col-md-6 col-lg-6 "> <canvas id="myChart"> </canvas></div>
        <div class="col-sm-6 col-md-6 col-lg-6">
            <table id="details" >
                <tr>
                    <td> Volume :</td>
                    <td> {{ detailsAction[0].volume_courant}} </td>
                </tr>
                <tr>
                    <td> Nb. Titres échangés :</td>
                    <td> {{ detailsAction[0].cumul_echange}} </td>
                </tr>
                <tr>
                    <td> Ouverture :</td>
                    <td> {{ detailsAction[0].cours_ouverture}} </td>
                </tr>
                <tr>
                    <td> C.référence :</td>
                    <td> 476.50</td>
                </tr>
                <tr>
                    <td> Plus haut :</td>
                    <td> {{ detailsAction[0].cours_plus_haut}}</td>
                </tr>
                <tr>
                    <td> Plus bas :</td>
                    <td>{{ detailsAction[0].cours_plus_bas}}</td>
                </tr>
                <tr>
                    <td> Capi :</td>
                    <td> {{ detailsAction[0].capit_courant}}</td>
                </tr>
            </table>
        </div>
    </div>
        <div class="row" style="width: 100%">
                <table id="Achat"  style="width: 100%">
                    <tr id="head">
                        <th style="color: gray">   Meilleure limite   </th>
                        <th style="color: gray">  Achat   </th>
                        <th style="color: gray">  Vente  </th>
                    </tr>
                    <tr>
                        <td>Prix</td>
                        <td>{{ detailsAction[0].best_achat_cours}}</td>
                        <td>{{ detailsAction[0].best_vente_cours}}</td>
                    </tr>
                    <tr>
                        <td>Quantité</td>
                        <td>{{ detailsAction[0].best_achat_quantite}}</td>
                        <td>{{ detailsAction[0].best_vente_quantite}}</td>
                    </tr>
                </table>
        </div>
    <div id="tabControl">
        <div class="row" style="width: 100%"id="buttons">
            <div class="col-lg-4 col-sm-4 col-md-4" >
                <button tabItemIndex="0" type="button" class="btn btn-primary btn-lg">Transactions</button>
            </div>
            <div class="col-lg-4 col-sm-4 col-md-4">
                <button tabItemIndex="1" type="button" class="btn btn-primary btn-lg">Plus d'infos</button>
            </div>
            <div class="col-lg-4 col-sm-4 col-md-4">
                <button tabItemIndex="2" type="button" class="btn btn-primary btn-lg">Actualités</button>
            </div>
        </div>
        <div id="tabControlContent">
            <div id="tabItemTransactions">

				<table class="table table-bordered table-striped">
					<thead>
						<th>Heure</th>
						<th>Prix</th>
						<th>Quantité</th>
					</thead>
					<tbody>
						<tr v-for="transaction in Transactions">
							<td>{{transaction.heure_transaction}}</td>
							<td>{{transaction.cours}}</td>
							<td>{{transaction.quantite}}</td>
						</tr>
					</tbody>
				</table>

			</div>
            <div id="tabItemPlusInfos" tabItemSelected="true">
                <table id="ISIN" style="width: 100%" class="text-center">
                    <tr>
                        <td> Code ISIN :</td>
                        <td> {{ detailsAction[0].code_isin}}</td>
                    </tr>
                    <tr>
                        <td> Cotation :</td>
                        <td> {{ detailsAction[0].cotation}} </td>
					</tr>
                    <tr>
                        <td> Secteur d'activité :</td>
                        <td>{{ detailsAction[0].libelle_ssecteur}} </td>
                    </tr>
                </table>
                <table class="table table-bordered table-striped " id="indicateursTable" style="margin-top:70px">
                    <thead style="background-color: #002166">
                    <tr class="main-row">
                        <th> Indicateurs  </th>
						<th v-for="performanceItem in Performance">{{performanceItem.excircice}}</th>
                    </tr>
                    </thead>
					<tbody>
					<tr v-for="i in Performance[0].indicateur.length">
						<td v-for="j in Performance.length + 1">
							<div v-if="j == 1">
								{{Object.keys(Performance[0].indicateur[i - 1])[0]}}
							</div>
							<div v-else>
								{{Object.values(Performance[j - 2].indicateur[i - 1])[0]}}
							</div>
						</td>
					</tr>
					</tbody>
                </table>
            </div>
            <div id="tabItemActualites">
				<table>
					<tr v-for="newsItem in news">
						<td>
							<div id="newsTitle">
								<h4><a :href="newsItem.REPLACE">{{newsItem.titre}}</a></h4> <br>
								<h5><span style="color: gray">{{newsItem.description}}</span></h5>
							</div>
						</td>
					</tr>
				</table>
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
        data: <?php echo $data; ?>,
        methods:
            {
                IsVariationPositive: function()
                {
                    let variation = parseFloat(this.detailsAction[0].variation.replace(',', '.'));
                    return variation > 0;
                },
                IsVariationNegative: function()
                {
                    let variation = parseFloat(this.detailsAction[0].variation.replace(',', '.'));
                    return variation < 0;
                },
				IsInWatchList: function()
				{
				    return isInWatchlist(this.detailsAction[0].code_valeur.trim());
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

            let myChartElement =document.getElementById('myChart').getContext('2d');
            let config = new Chart(myChart,{
                type: 'line',
                data: {
                    labels:this.Transactions.map(transaction => transaction.heure_transaction),
                    datasets: [{
                        backgroundColor: "#002166",
                        borderColor: "#002166",
                        data: this.Transactions.map(transaction => parseFloat(transaction.cours.replace(',', '.'))),
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
            });
        }
    });

</script>
</body>
</html>
