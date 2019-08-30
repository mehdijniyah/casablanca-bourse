<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
	<meta charset="UTF-8">
	<title> Market </title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/actualites.css');?>"/>
	<link rel="stylesheet" href="<?php echo base_url('assets/css/actions.css');?>"/>

</head>
<body>
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
					<h2 style="color: #002166" id="headAct"> Actualités et événements </h2>
					<br />
						<ul class="nav nav-tabs">
							<li class="nav-item">
								<a href="#home" class="nav-link active" role="tab" data-toggle="tab">Actualités</a>
							</li>

							<li class="nav-item">
								<a href="#profile" class="nav-link" role="tab" data-toggle="tab">News Marché</a>
							</li>

						</ul>

						<div class="tab-content">
							<div role="tabpanel" class="tab-pane active" id="home">

								<div role="tabpanel" class="tab-pan active" id="colActualites">
									<table>
										<tr v-for="actualite in actualites">
											<td col-6-lg>
												<img :src="actualite.imagemin">
											</td>
											<td col-6-lg>
												<div >
													<h4><a v-bind:href="actualite.liens.length > 0 ? actualite.liens[0].url : ''">{{actualite.titre}}</a></h4> <br>
													<h5><span style="color: gray " v-html="actualite.description"></span></h5>
												</div>
											</td>
										</tr>

									</table>
								</div>

							</div>

							<div role="tabpanel" class="tab-pane fade" id="profile" >

								<div role="tabpanel" class="tab-pan-active" >
									<table id=" colNewsMarche" style="width: 100%">
										<tr v-for="newsmarch in news_marche">
											<td>
												<div id="newsTitle">
													<h4><a :href="newsmarch.REPLACE">{{newsmarch.titre}}</a></h4> <br>
													<h5><span style="color: gray">{{newsmarch.description}}</span></h5>
												</div>
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
        "actualites": [
        {
            "id_article": "1326",
            "titre": "Fête du trône : La Bourse de Casablanca présente ses voeux ",
            "description": "A l’occasion du 20ème anniversaire de l’accession au trône de SA MAJESTE LE ROI MOHAMMED VI, le Conseil d’Administration, le Directeur Général et le Personnel de la Bourse de Casablanca ont l’insigne honneur de présenter à SA MAJESTE LE ROI MOHAMMED VI QUE DIEU LE GLORIFIE leurs vœux les plus déférents de bonheur et de prospérité ainsi qu’à tous les membres de la Famille Royale et l’ensemble du peuple marocain.",
            "imagemin": "http://www.casablanca-bourse.com/BourseWeb/UserFiles/Image//LOGO VF.1.jpg",
            "image": "http://www.casablanca-bourse.com/BourseWeb/UserFiles/Image//LOGO VF.2.jpg",
            "dateUpdate": "2019-07-31 16:47:38",
            "liens": []
        },
        {
            "id_article": "1325",
            "titre": "CIH Bank : augmentation de capital ",
            "description": "<p><a href='/BourseWeb/UserFiles/File/2019/Prospectus Augmentation de capital CIH Bank.pdf'>Télécharger le prospectus de l’opération <br /></a></p><p> </p>",
            "imagemin": "http://www.casablanca-bourse.com/BourseWeb/UserFiles/Image/logo_image/cih_f_1.gif",
            "image": "http://www.casablanca-bourse.com/BourseWeb/UserFiles/Image/logo_image/cih_f_2.gif",
            "dateUpdate": "2019-07-31 10:51:39",
            "liens": [
                {
                    "url": "http://www.casablanca-bourse.com/BourseWeb/UserFiles/File/2019/Prospectus Augmentation de capital CIH Bank.pdf",
                    "titre": "Télécharger le prospectus de l’opération <br />"
                }
            ]
        },
        {
            "id_article": "1322",
            "titre": "BMCE Bank Of Africa : augmentation de capital ",
            "description": "<p><a href='/BourseWeb/UserFiles/File/2019/Bmce24juin19vf.pdf'>Télécharger le prospectus de l’opération <br /></a></p><p> </p>",
            "imagemin": "http://www.casablanca-bourse.com/BourseWeb/UserFiles/Image/2013_img/BMCESITE1.gif",
            "image": "http://www.casablanca-bourse.com/BourseWeb/UserFiles/Image/2013_img/BMCESITE2.gif",
            "dateUpdate": "2019-06-26 11:09:59",
            "liens": [
                {
                    "url": "http://www.casablanca-bourse.com/BourseWeb/UserFiles/File/2019/Bmce24juin19vf.pdf",
                    "titre": "Télécharger le prospectus de l’opération <br />"
                }
            ]
        },
        {
            "id_article": "1319",
            "titre": "IAM : Offre de Vente au Public",
            "description": "<a href='/BourseWeb/UserFiles/File/2019/Prospectus_IAM.pdf'>Télécharger le prospectus</a>",
            "imagemin": "http://www.casablanca-bourse.com/BourseWeb/UserFiles/Image//IAM-1.gif",
            "image": "http://www.casablanca-bourse.com/BourseWeb/UserFiles/Image//IAM2.gif",
            "dateUpdate": "2019-06-17 10:32:05",
            "liens": [
                {
                    "url": "http://www.casablanca-bourse.com/BourseWeb/UserFiles/File/2019/Prospectus_IAM.pdf",
                    "titre": "Télécharger le prospectus"
                }
            ]
        },
        {
            "id_article": "1316",
            "titre": "Séance du vendredi 7 juin 2019 ",
            "description": "<p>La Bourse de Casablanca informe ses clients et partenaires qu’elle sera ouverte le vendredi 7 juin 2019 si le mardi 4 juin 2019 coïncide avec le dernier jour du mois sacré de Ramadan. <br /><br />Par ailleurs, en raison de l’indisponibilité du système de règlement des opérations qui est assuré par un établissement public et pour qui la journée est fériée, le marché sera fermé à la négociation le vendredi 7 juin 2019. En effet, le dénouement des opérations ne pourra pas être réalisé conformément aux règles de gestion des risques et de garanties en vigueur. <br /><br />La Bourse de Casablanca vous souhaite une bonne fête. </p><p> </p>",
            "imagemin": "http://www.casablanca-bourse.com/BourseWeb/UserFiles/Image/2013_img/Voeux AID-AL-FITR-2019.gif",
            "image": "http://www.casablanca-bourse.com/BourseWeb/UserFiles/Image/2013_img/Voeux AID-AL-FITR-2019.gif",
            "dateUpdate": "2019-06-04 15:27:52",
            "liens": []
        },
        {
            "id_article": "1314",
            "titre": "Bourse de Casablanca : Rapport annuel 2018 ",
            "description": "<p><a href='/BourseWeb/UserFiles/File/2019/RapportAnnuel VF2018 18juin.pdf'>Télécharger le rapport <br /></a></p><p> </p>",
            "imagemin": "http://www.casablanca-bourse.com/BourseWeb/UserFiles/Image/2013_img/site1rapport2018.gif",
            "image": "http://www.casablanca-bourse.com/BourseWeb/UserFiles/Image/2013_img/site2rapport2018.gif",
            "dateUpdate": "2019-05-31 15:34:39",
            "liens": [
                {
                    "url": "http://www.casablanca-bourse.com/BourseWeb/UserFiles/File/2019/RapportAnnuel VF2018 18juin.pdf",
                    "titre": "Télécharger le rapport <br />"
                }
            ]
        },
        {
            "id_article": "1309",
            "titre": "BCP: Augmentation de capital de la BCP réservée aux membres du personnel",
            "description": "<a target='_blank' href='/BourseWeb/UserFiles/File/BCP_NI_AK_salaries_2019_FR.pdf'>Télécharger la note d’information</a>",
            "imagemin": "http://www.casablanca-bourse.com/BourseWeb/UserFiles/Image/img/BP-1.gif",
            "image": "http://www.casablanca-bourse.com/BourseWeb/UserFiles/Image/img/BP-2.gif",
            "dateUpdate": "2019-05-28 15:09:13",
            "liens": [
                {
                    "url": "http://www.casablanca-bourse.com/BourseWeb/UserFiles/File/BCP_NI_AK_salaries_2019_FR.pdf",
                    "titre": "Télécharger la note d’information"
                }
            ]
        },
        {
            "id_article": "1306",
            "titre": "BCP : Augmentation de capital de la BCP réservée aux Banques Populaires Régionales",
            "description": "<a href='/BourseWeb/UserFiles/File/2019/BCP_NI_AK_BPR_2019.pdf' target='_blank'>Télécharger la note d’information </a>",
            "imagemin": "http://www.casablanca-bourse.com/BourseWeb/UserFiles/Image/img/BP-1.gif",
            "image": "http://www.casablanca-bourse.com/BourseWeb/UserFiles/Image/img/BP-2.gif",
            "dateUpdate": "2019-05-28 13:25:00",
            "liens": [
                {
                    "url": "http://www.casablanca-bourse.com/BourseWeb/UserFiles/File/2019/BCP_NI_AK_BPR_2019.pdf target=_blank",
                    "titre": "Télécharger la note d’information "
                }
            ]
        },
        {
            "id_article": "1303",
            "titre": "Morocco Capital Markets Days à Londres : 4ème édition ",
            "description": "<p>Pour la 4ème année consécutive, la Bourse de Casablanca organise en partenariat avec London Stock Exchange Group, le Morocco Capital Markets Days (MCMD) les 15 et 16 avril à Londres afin de renforcer l’attractivité de la place financière marocaine auprès des investisseurs internationaux. <br /><br /><a href='/BourseWeb/UserFiles/File/2019/CP MCMD 2019.pdf'>Télécharger le communiqué de presse</a> </p><p><br /></p><p> </p>",
            "imagemin": "http://www.casablanca-bourse.com/BourseWeb/UserFiles/Image/2013_img/MCMD2019-1[1].gif",
            "image": "http://www.casablanca-bourse.com/BourseWeb/UserFiles/Image/2013_img/MCMD20192.gif",
            "dateUpdate": "2019-05-07 11:59:39",
            "liens": [
                {
                    "url": "http://www.casablanca-bourse.com/BourseWeb/UserFiles/File/2019/CP MCMD 2019.pdf",
                    "titre": "Télécharger le communiqué de presse"
                }
            ]
        },
        {
            "id_article": "1300",
            "titre": "Workshop : Quel attrait de l’Assurance Participative dite Takaful aux yeux des Marocains ?",
            "description": "<p>L’Association Marocaine pour les Professionnels de la Finance Participative (AMFP) en partenariat avec la Bourse de Casablanca et Kantar a organisé, le 21 mars 2019, un workshop sous le thème « Quel attrait de l’Assurance Participative dite Takaful aux yeux des Marocains ? »</p><p> </p>",
            "imagemin": "http://www.casablanca-bourse.com/BourseWeb/UserFiles/Image/2013_img/WORKSHOP-TAKAFUL mars19-SITE-1-1.gif",
            "image": "http://www.casablanca-bourse.com/BourseWeb/UserFiles/Image/2013_img/WORKSHOP-TAKAFUL mars 19-SITE-2.gif",
            "dateUpdate": "2019-03-22 11:12:09",
            "liens": []
        }
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
<script>
    $( document ).ready(function() {
      //  $('[href="#home"]').trigger('click');
        $('.nav-tabs a[href="#home"]').tab('show');
    });
</script>
</body>
</html>
