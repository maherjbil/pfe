<?php

	session_start();

	require "Autoloader.php";

	Autoloader::register();

	$favoris = new Favoris($_SESSION['nature']);

	$favoris->setIdUser($_SESSION['id']);

	if($favoris->getNature() == 'candidat'){

			if($listFavoris = $favoris->afficherFavoris("SELECT * FROM favoris,annonces WHERE favoris.idCandidat = ".$favoris->getIdUser()." and favoris.idAnnonces = annonces.idAnnonces")){

					echo "<div class = 'container'>";

						echo "<div class = 'row'>";


							foreach($listFavoris as $object){


									echo "<div class = 'col-md-10 col-md-offset-1'>";

										echo "<div class = 'rubrique'>";

											echo "<div>".$object->titre."</div>";
											echo "<div>".$object->contenu."</div>";
											echo "<div>".$object->datePublication."</div>";
											echo "<button><a href = 'afficherAnnonce.php'>afficher</a></button>";


										echo "</div>";

									echo "</div>";

							}


						echo "</div>";

					echo "</div>";

			}
			else if($listFavoris == null){

				echo "la liste est vide";
				echo "voulez-vous chercher <a href = 'index.php'>des favoris</a>";

			}

	}
	else if($favoris->getNature() == 'recruteur'){

			if($listFavoris = $favoris->afficherFavoris("SELECT * FROM favoris,annonces WHERE favoris.idRecruteur = ".$favoris->getIdUser()." and favoris.idAnnonces = annonces.idAnnonces")){

					echo "<div class = 'container'>";

						echo "<div class = 'row'>";


							foreach($listFavoris as $object){


									echo "<div class = 'col-md-10 col-md-offset-1'>";

										echo "<div class = 'rubrique'>";

											echo "<div>".$object->titre."</div>";
											echo "<div>".$object->contenu."</div>";
											echo "<div>".$object->datePublication."</div>";
											echo "<button><a href = 'afficherAnnonce.php'>afficher</a></button>";


										echo "</div>";

									echo "</div>";

							}


						echo "</div>";

					echo "</div>";

			}
			else if($listFavoris == null){

				echo "la liste est vide";
				echo "voulez-vous chercher <a href = 'index.php'>des favoris</a>";

			}

	}

	

?>