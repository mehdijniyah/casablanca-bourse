<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
	<meta charset="UTF-8">
	<title> Investir </title>

	<?php
	// Css
	foreach ($css as $cssFile) {
		echo '<link rel="stylesheet" href="' . $cssFile . '" />';
	}
	?>

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
			<main role="main" class="col-md-12 ml-sm-auto col-lg-10 px-4">
				<h2 style="color: #002166" id="headAct"> Investir en Bourse </h2>
				<br />
				<ul class="nav nav-tabs">
					<li class="nav-item">
						<a href="#home1" class="nav-link active" role="tab" data-toggle="tab">Introduction</a>
					</li>

					<li class="nav-item">
						<a href="#profile1" class="nav-link" role="tab" data-toggle="tab">Sociétes de Bourse</a>
					</li>

				</ul>

				<div class="tab-content">
					<div role="tabpanel" class="tab-pane active" id="home1">

						<div role="tabpanel" class="tab-pan active" id="Intro">
						<pre>
Tout investissement en bourse suppose l'ouverture, auprès d’une banque ou d’une société de bourse,
d'un compte-titres pour y inscrire les actions, obligations, ou parts de FCP et de SICAV.

Pour investir en Bourse, on peut :
:: Gérer personnellement son portefeuille d’actions ou d’obligations. Dans ce cas l’investisseur
	passe des ordres auprès d’une société de bourse ou d’une agence bancaire.
:: Ou investir dans des placements collectifs ou OPCVM (Organismes de Placement Collectif
	en Valeurs Mobilières) qui sont gérés par les sociétés de gestion.

La Bourse est le lieu où les entreprises qui ont besoin de financement pour investir et
se développer, font appel public à l'épargne (Emprunt obligataire et introduction en bourse).
Elles vendent leurs titres à des investisseurs (institutionnels ou particuliers) qui achètent
	et échangent ces titres.

Pour se financer via la Bourse, les entreprises peuvent :
:: soit émettre des actions, représentant une partie de leur capital. En achetant ces actions,
	les investisseurs deviennent donc actionnaires de l’entreprise.
:: soit émettre des obligations, représentant une dette qu’elles contractent auprès
	des investisseurs.

La Bourse est un marché organisé et régulé par une autorité, l'Autorité Marocaine du Marché des
capitaux AMMC (http://www.ammc.ma), qui a pour mission :
:: S’assurer de la protection de l’épargne investie en instruments financiers ;
:: Veiller à l'égalité de traitement des épargnants, à la transparence et à l'intégrité du marché
	des capitaux et à l'information des investisseurs;
:: S'assurer du bon fonctionnement du marché des capitaux et veiller à l'application des
	dispositions législatives et réglementaires ;
:: Assurer le contrôle de l'activité des différents organismes et personnes soumis à son contrôle;
:: Assurer le respect de la législation et de la réglementation en vigueur relatives
	à la lutte contre le blanchiment des capitaux, par les personnes et les organismes placés
ous son contrôle;
:: Contribuer à la promotion de l'éducation financière des épargnants;
:: Assister le gouvernement en matière de réglementation du marché des capitaux
						</pre>
						</div>

					</div>
					<div role="tabpanel" class="tab-pane fade" id="profile1" >

						<div role="tabpanel" class="tab-pan-active" >
							<table id=" SocietesdeBrse" style="width: 100%">
								<tr v-for="societe in steDeBourses">
									<td>
										<img :src="societe.img">
									</td>
									<td>
										<h3>{{societe.name}}</h3>
										<br>
										{{societe.adresse}}
										<br>
										{{societe.tel}}
										<br>
										{{societe.fax}}
										<br>
										{{societe.site}}
										<br>
										{{societe.pdg}}
									</td>
								</tr>
							</table>
						</div>
					</div>

				</div>
			</main>
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
                "steDeBourses": [
                    {
                        "img":"http://www.casablanca-bourse.com/BourseWeb/UserFiles/Image/logo_image/ALMA_2.gif",
                        "name":"  ALMA FINANCE GROUP",
                        "adresse":"92, boulevard d’Anfa 20040, 8ème étage –Casablanca- Maroc",
                        "tel":"(212) 522 58 12 02",
                        "fax": "(212) 522 58 11 74",
                        "site": "www.almafinance.com",
                        "pdg":"M.BOUABID Youssef"

                    },
                    {
                        "img":"http://www.casablanca-bourse.com/BourseWeb/UserFiles/Image/Logo%20ARTBOURSE2010.gif",
                        "name":"  ARTBOURSE",
                        "adresse":"7, Bd Abdelkrim El Khattabi - Casablanca - Maroc",
                        "tel":"(212) 522 95 09 09 / (212) 522 95 08 83",
						"fax":"(212) 522 36 32 86",
                        "site": "www.artbourse.ma",
                        "pdg":"M. Rachid Ouali Alami"

                    },
                    {
                        "img":"http://www.casablanca-bourse.com/BourseWeb/UserFiles/Image/img/atlas_capital_2.jpg",
                        "name":"ATLAS CAPITAL BOURSE",
                        "adresse":"88 Rue El Marrakchi - Quartier Hippodrome - Casablanca - Maroc",
                        "tel":"(212) 522 23 76 02",
                        "fax":"(212) 522 36 87 84",
                        "site": "http://www.atlascapital.ma/",
                        "pdg": "M. Amine EL JIRARI"

                    },
                    {
                        "img":"http://www.casablanca-bourse.com/bourseweb/img/societedebourse/attijari.gif",
                        "name":" ATTIJARI INTERMEDIATION",
                        "adresse":"163, Av. Hassan II - Casablanca - Maroc",
                        "tel":"(212) 522 49 14 82 ",
                        "fax":"(212) 522 49 14 82 ",
                        "site": "www.ati.ma",
                        "pdg":"M. Abdellah Alaoui SEKKOURI"

                    },
                    {
                        "img":"http://www.casablanca-bourse.com/BourseWeb/UserFiles/Image/img/Logo_BMCE_CAPITAL_BOURSE.JPG",
                        "name":" BMCE CAPITAL BOURSE",
                        "adresse":"   BMCE CAPITAL BOURSE",
                        "tel": "(212) 522 48 10 01",
                        "fax":"(212) 522 48 09 52",
                        "site": "www.bmcecapitalbourse.com ",
                        "pdg":"M. Anass MIKOU"

                    },
                    {
                        "img":"http://www.casablanca-bourse.com/BourseWeb/UserFiles/Image/bmci.gif",
                        "name":"  BMCI BOURSE",
                        "adresse":"Bd. Bir Anzarane, Imm. Romandie - Casablanca - Maroc",
                        "tel": "(212) 522 95 38 00 ",
                        "fax": "(212) 522 39 32 09",
                        "site": "www.bmci.ma",
                        "pdg":"M. Nacer Touimi Benjelloun "

                    },
                    {
                        "img":"http://www.casablanca-bourse.com/Bourseweb/UserFiles/capitaltrust.gif",
                        "name":" CAPITAL TRUST SECURITIES",
                        "adresse": "50 Bd. Rachidi, Quartier Gautier, 20.000 Casablanca - Maroc",
                        "tel": "(212) 522 46 63 50",
                        "fax":"(212) 522 49 13 07 ",
                        "site": "www.capitaltrust.ma",
                        "pdg":"M. Anasse OUCHARIF"

                    },
                ],
                "news_marche": [
                    {
                        "id": "115097498",
                        "iddoc": "16683",
                        "titre": "Taqa Morocco : Indicateurs du 2e trimestre 2019 ",
                        "description": "Taqa Morocco : Indicateurs du 2e trimestre 2019 ",
                        "dateUpdate": "2019-08-28 00:00:00",
                        "REPLACE": "http://www.casablanca-bourse.com/BourseWeb/Documents/TQM/fr/TQM_ind_2T_19_fr.pdf"
                    },
                    {
                        "id": "115097499",
                        "iddoc": "16684",
                        "titre": "CMT : Indicateurs du 2e trimestre 2019 ",
                        "description": "CMT : Indicateurs du 2e trimestre 2019 ",
                        "dateUpdate": "2019-08-28 00:00:00",
                        "REPLACE": "http://www.casablanca-bourse.com/BourseWeb/Documents/CMT/fr/CMT_ind_2T_19_fr.pdf"
                    },
                    {
                        "id": "115097500",
                        "iddoc": "16685",
                        "titre": "Marsa Maroc : Indicateurs du 2e trimestre 2019 ",
                        "description": "Marsa Maroc : Indicateurs du 2e trimestre 2019 ",
                        "dateUpdate": "2019-08-28 00:00:00",
                        "REPLACE": "http://www.casablanca-bourse.com/BourseWeb/Documents/MSA/fr/MSA_ind_2T_19_fr.pdf"
                    },
                    {
                        "id": "115097493",
                        "iddoc": "16678",
                        "titre": "Managem : Indicateurs trimestriels au 30/06/2019  ",
                        "description": "Managem : Indicateurs trimestriels au 30/06/2019  ",
                        "dateUpdate": "2019-08-27 00:00:00",
                        "REPLACE": "http://www.casablanca-bourse.com/BourseWeb/Documents/MNG/fr/MNG_ind_2T_19_fr.pdf"
                    },
                    {
                        "id": "115097494",
                        "iddoc": "16679",
                        "titre": "SMI : Indicateurs trimestriels au 30/06/2019  ",
                        "description": "SMI : Indicateurs trimestriels au 30/06/2019  ",
                        "dateUpdate": "2019-08-27 00:00:00",
                        "REPLACE": "http://www.casablanca-bourse.com/BourseWeb/Documents/SMI/fr/SMI_ind_2T_19_fr.pdf"
                    },
                    {
                        "id": "115097495",
                        "iddoc": "16680",
                        "titre": "Maghreb Oxygène : Activité du 2e trimestre 2019 ",
                        "description": "Maghreb Oxygène : Activité du 2e trimestre 2019 ",
                        "dateUpdate": "2019-08-27 00:00:00",
                        "REPLACE": "http://www.casablanca-bourse.com/BourseWeb/Documents/MOX/fr/MOX_ind_2T_19_fr.pdf"
                    },
                    {
                        "id": "115097496",
                        "iddoc": "16681",
                        "titre": "Afriquia Gaz : Activité du 2e trimestre 2019 ",
                        "description": "Afriquia Gaz : Activité du 2e trimestre 2019 ",
                        "dateUpdate": "2019-08-27 00:00:00",
                        "REPLACE": "http://www.casablanca-bourse.com/BourseWeb/Documents/GAZ/fr/GAZ_ind_2T_19_fr.pdf"
                    },
                    {
                        "id": "115097497",
                        "iddoc": "16682",
                        "titre": "Sothema : Indicateurs du 2e trimestre 2019      ",
                        "description": "Sothema : Indicateurs du 2e trimestre 2019     ",
                        "dateUpdate": "2019-08-27 00:00:00",
                        "REPLACE": "http://www.casablanca-bourse.com/BourseWeb/Documents/SOT/fr/SOT_ind_2T_19_fr.PDF"
                    },
                    {
                        "id": "115097488",
                        "iddoc": "16669",
                        "titre": "Mutandis : Activité du 2e trimestre 2019",
                        "description": "Mutandis : Activité du 2e trimestre 2019",
                        "dateUpdate": "2019-08-26 00:00:00",
                        "REPLACE": "http://www.casablanca-bourse.com/BourseWeb/Documents/MUT/fr/MUT_ind_1S_19_fr.PDF"
                    },
                    {
                        "id": "115097489",
                        "iddoc": "16670",
                        "titre": "IAM : Rapport financier du 1er semestre 2019 ",
                        "description": "IAM : Rapport financier du 1er semestre 2019 ",
                        "dateUpdate": "2019-08-26 00:00:00",
                        "REPLACE": "http://www.casablanca-bourse.com/BourseWeb/Documents/IAM/fr/IAM_RF_1S_19_fr.pdf"
                    }
                ]


            },
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
        }
    });

</script>

</body>
</html>
