<?php

	Autoloader::register();

	$candidat = new Candidat($_SESSION['nature']);

	$candidat->setId($_SESSION['id']);

	$candidat->setDomaine($_SESSION['domaine']);

	$gdf = new GenerateurDuFormulaire();

	if($candidat->getNature() == 'recruteur'){

		if($candidature = $candidat->afficherCandidat("SELECT * FROM candidat")){

			echo "<div class = 'col-md-10 col-md-offset-1'>";

					foreach($candidature as $object){

						echo "<div class = 'rubrique col-md-12'>";

								echo "<div class = 'col-md-4'><img class = 'img-responsive' src = '".$object->photoCandidat."'></div><div class = 'col-md-6'><b>Nom : </b>".$object->nomCandidat."<br/><b>Prenom : </b>".$object->prenomCandidat."<br/><b>Date de naissance : </b>".$object->dateNaissCandidat."<br/><b>Email : </b>".$object->loginCandidat."<br/><b>Domaine : </b>".$object->domaineCandidat."<br/><b>Niveau : </b>".$object->niveauCandidat."<br/><b>Specialite : </b>".$object->specialiteCandidat."<br/>".$object->cvCandidat."<br/></div><div class = 'col-md-2'>".$gdf->form("f42","contact.php","post").$gdf->hidden("idRecruteur",$candidat->getId()).$gdf->hidden('idCandidat',$object->idCandidat).$gdf->hidden("domaine",$candidat->getDomaine()).$gdf->hidden("nature",$candidat->getNature()).$gdf->submit("contacter","contacter","contacter","btn btn-default").$gdf->endForm()."</div>";

						echo "</div>";

					}

			echo "</div>";

		}

	}


?>