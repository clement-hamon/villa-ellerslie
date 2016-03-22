<?php
if (isset($_GET['p'])) {
	$page = htmlentities($_GET['p']);
	$link = htmlentities($_GET['p']);
}else{
	$page = 'accueil';
	$link = 'accueil';
}

switch ($page) {
	case 'villa':
		$title = "Villa Ellerslie - l'histoire";
		$metaDescritption = "Villa de villégiature située à Saint-Malo au bord de la grande plage et se trouve à 20 minutes à pied d’ intra-muros";
		$metaKeywords ="saint malo, villa, plage, sillon, chambres, logement, chambre d'hotes, hotel, sillon, thermes marins";
	break;
	case 'chambres':
		$title = "Villa Ellerslie - les chambres";
		$metaDescritption = "Chambres d'hotes dans un cadre exceptionnel au bord de la plage du sillon a saint malo";
		$metaKeywords = "saint malo, chambres, logement, chambre d'hotes, hotel, sillon, thermes marins";
	break;
	case 'cezembre':
		$title = "Villa Ellerslie - la chambre cezembre";
		$metaDescritption = "Grande chambre de 20m2 avec balcon face a la mer";
		$metaKeywords = "saint malo, chambres, logement, chambre d'hotes, hotel, sillon, thermes marins";
	break;
	case 'harbour':
		$title = "Villa Ellerslie - la chambre harbour";
		$metaDescritption = "Chambre de 14 m2 décorée avec des meubles de famille et des éléments de décoration originaux";
		$metaKeywords = "saint malo, chambres, logement, chambre d'hotes, hotel, sillon, thermes marins";
	break;
	case 'familiale':
		$title = "Villa Ellerslie - la double chambre familiale";
		$metaDescritption = "Double chambre familiale face a la baie de saint malo";
		$metaKeywords = "saint malo, chambres, logement, chambre d'hotes, hotel, sillon, thermes marins";
	break;
	case 'contact':
		$title = "Villa Ellerslie - Contact";
		$metaDescritption = "Resevez votre chambre au bord de la plage a saint malo";
		$metaKeywords = "contact, reservation, saint malo, chambres, logement, chambre d'hotes, hotel, sillon, thermes marins";
	break;	
	default:
		$title = "Villa Ellerslie";
		$metaDescritption = "Chambres d'hotes dans un cadre exceptionnel au bord de la plage du sillon a saint malo";
		$metaKeywords = "saint malo, chambres, logement, chambre d'hotes, hotel, sillon, thermes marins";
		break;
}


//conctact

if(isset($_POST) && !empty($_POST)){
	require 'functions/contact.php';
}

include 'template.php';