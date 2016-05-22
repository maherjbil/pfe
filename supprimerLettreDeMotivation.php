<?php

	require "Autoloader.php";

	Autoloader::register();

	$postulation = new Postulation($_POST['nature']);

	$postulation->setIdPostulation($_POST['idPostulation']);

	if($postulation->postuler("DELETE FROM postulation WHERE idPostulation = ".$postulation->getIdPostulation())){

			echo "Votre lettre de motivation a ete supprimer <br/>";

	}
	else{

			echo "Echec de suppression de votre lettre de motivation<br/>";

	}

?>