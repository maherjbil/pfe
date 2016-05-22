<?php
	
	session_start();

	require "Autoloader.php";

	Autoloader::register();

	if(!isset($_SESSION['login']) && !isset($_SESSION['password'])){

			header("location:connexion.php?result=false");

	}
	else{

			$favoris = new Favoris($_SESSION['nature']);

			$favoris->setIdUser($_SESSION['id']);

			if(isset($_GET['idAnnonces'])){

					$favoris->setIdAnnonces($_GET['idAnnonces']);

			}

			if($favoris->getNature() == 'candidat'){

				if($favoris->updateFavoris("INSERT INTO favoris SET idAnnonces = ".$favoris->getIdAnnonces().",idCandidat = ".$favoris->getIdUser())){

					echo "<i class = 'fa fa-ok'></i> l'annonce a ete ajouter dans la liste de vos <a href = 'afficherFavoris.php'>favoris</a>";

				}
				else{

					echo "l'ajout a ete echoue <a href = 'index.php'>reessayer</a>";

				}

			}
			else if($favoris->getNature() == 'recruteur'){

				if($favoris->updateFavoris("INSERT INTO favoris SET idAnnonces = ".$favoris->getIdAnnonces().",idRecruteur = ".$favoris->getIdUser())){

					echo "<i class = 'fa fa-ok'></i> l'annonce a ete ajouter dans la liste de vos <a href = 'afficherFavoris.php'>favoris</a>";

				}
				else{

					echo "l'ajout a ete echoue <a href = 'index.php'>reessayer</a>";

				}

			}

	}


?>