<?php

	require "Autoloader.php";

	Autoloader::register();

	$pdo = new PDO("mysql:dbname=offreEmploi;host=localhost","root","");
	$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

	$gdf = new GenerateurDuFormulaire();
	
	var_dump($_POST['Email'],$_POST['titreFormulaireContact'],$_POST['message'],$_POST['idCandidat'],$_POST['idRecruteur']);

	if($pdo->exec("INSERT INTO message SET email = '".$_POST['Email']."',titre = '".$_POST['titreFormulaireContact']."',message = '".$_POST['message']."',idCandidat = '".$_POST['idCandidat']."',idRecruteur='".$_POST['idRecruteur']."'")){

			header("location:contact.php?reponse=true");

	}
	else{

			header("location:contact.php?reponse=false");

	}

?>