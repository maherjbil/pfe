<?php

session_start();

		require "Autoloader.php";

		Autoloader::register();
		
		$compte = new Compte($_SESSION['nature']);
		
		$gdf = new GenerateurDuFormulaire();

		$compte->setId($_SESSION['id']);
		
		$compte->setDomaine($_SESSION['domaine']);
		
			echo "<h3>Veuillez saisir les nouvelles donnees</h3>";
		
					if($compte->getNature() == 'candidat'){
		
								if($list = $compte->afficherCompte("SELECT * FROM candidat WHERE idCandidat = ".$compte->getId())){
								
													 echo "<table border = 2>";
														
															 echo "<tr><td>Nom</td><td>Nouveau nom</td><td>Prenom</td><td>Nouveau prenom</td><td>Date de naissance</td><td>Nouvelle date</td><td>Login</td><td>Nouveau login</td><td>Mot de passe</td><td>Nouveau mot de passe</td><td>Specicialite</td><td>Domaine</td><td>Niveau</td><td>Nature</td></tr>";
																
																		echo $gdf->form("f37","modifierCompte.php","post");;
																
																				 foreach($list as $object){
																					
																						 echo "<tr><td>".$object->nomCandidat."</td><td>".$gdf->input("text","nom","nom","form-control")."</td><td>".$object->prenomCandidat."</td><td>".$gdf->input("text","prenom","prenom","form-control")."</td><td>".$object->dateNaissCandidat."</td><td>".$gdf->input("date","dateNaiss","dateNaiss","form-control")."</td><td>".$object->loginCandidat."</td><td>".$gdf->input("text","login","login","form-control")."</td><td>".$object->passwordCandidat."</td><td>".$gdf->input("password","password","password","form-control")."</td><td>".$object->specialiteCandidat."</td><td>".$object->domaineCandidat."</td><td>".$object->niveauCandidat."</td><td>".$object->nature."</td></tr>";
																					
																				 }
																				 
																				 echo $gdf->hidden("id",$compte->getId());
																				 
																				 echo $gdf->hidden("domaine",$compte->getDomaine());
																				 
																				 echo $gdf->hidden("nature",$compte->getNature());
																				 
																				 echo $gdf->submit("appliquerModification","appliquerModification","appliquer les modifications","btn btn-default");
																				 
																		echo $gdf->endForm();

																		echo " ou ".$gdf->form("f44","supprimerCompte.php","post").$gdf->hidden("id",$compte->getId()).$gdf->hidden("domaine",$compte->getDomaine()).$gdf->hidden("nature",$compte->getNature()).$gdf->submit("desabonner","desabonner","desabonner","btn btn-default").$gdf->endForm();
																		
														echo "</table>";
											
								}

								if(isset($_GET['result'])){

											if($_GET['result'] == 'true'){

														echo "Votre compte a ete modifier voulez-vous <a href = 'connexion.php'>se connecter</a><br/>";
								
														echo "ou consulter votre ".$gdf->form("f38","afficherCompteCandidat.php","post").$gdf->hidden("id",$compte->getId()).$gdf->hidden("domaine",$compte->getDomaine()).$gdf->hidden("nature",$compte->getNature()).$gdf->submit("consulterCompte","consulterCompte","compte","btn btn-default").$gdf->endForm();

											}
											else{

														echo "la modification du compte a ete echouee veuillez reessayer";

											}

								}
								
								if(isset($_GET['resultSuppression'])){

											if($_GET['resultSuppression'] == 'ok'){

														echo "Votre compte a ete supprimer Voulez-vous <a href = 'InscriptionEmployer.php'>creer un nouveau compte</a>";

											}
											else{

														echo "la suppresseion du compte a ete echouee veuillez reessayer";

											}

								}
		
					}
					
					else if($compte->getNature() == 'recruteur'){
					
										if($list = $compte->afficherCompte("SELECT * FROM recruteur WHERE idRecruteur = ".$compte->getId())){
							
													echo "<table border = 2>";
													
															 echo "<tr><td>Nom</td><td>Nouveau nom</td><td>Prenom</td><td>Nouveau prenom</td><td>Date de naissance</td><td>Nouvelle date</td><td>Login</td><td>Nouveau Login</td><td>Nouveau login</td><td>Mot de passe</td><td>Nouveau mot de passe</td><td>Domaine</td><td>Nature</td></tr>";
															 
																		echo $gdf->form("f36","modifierCompte.php","post");
															 
																					foreach($list as $object){
																					
																								echo "<tr><td>".$object->nomRecruteur."</td><td>".$gdf->input("text","nom","nom","form-control")."</td><td>".$object->prenomRecruteur."</td><td>".$gdf->input("text","prenom","prenom","form-control")."</td><td>".$object->dateNaissRecruteur."</td><td>".$gdf->input("date","dateNaiss","dateNaiss","form-control")."</td><td>".$object->loginRecruteur."</td><td>".$gdf->input("text","login","login","form-control")."</td><td>Mot de passe</td><td>".$object->passwordRecruteur.$gdf->input("password","password","password","form-control")."</td><td>".$object->domaineRecruteur."</td><td>".$object->nature."</td></tr>";
																					
																					}
																					
																					echo $gdf->hidden("id",$compte->getId());
																				 
																					echo $gdf->hidden("domaine",$compte->getDomaine());
																				 
																					echo $gdf->hidden("nature",$compte->getNature());
																					
																					echo $gdf->submit("appliquerModification","appliquerModification","appliquer les modifications","btn btn-default");
																					
																		echo $gdf->endForm();

																		echo " ou ".$gdf->form("f44","supprimerCompte.php","post").$gdf->hidden("id",$compte->getId()).$gdf->hidden("domaine",$compte->getDomaine()).$gdf->hidden("nature",$compte->getNature()).$gdf->submit("desabonner","desabonner","desabonner","btn btn-default").$gdf->endForm();


													echo "</table>";
							
										}

										if(isset($_GET['result'])){

											if($_GET['result'] == 'true'){

														echo "Votre compte a ete modifier voulez-vous <a href = 'connexion.php'>se connecter</a><br/>";
								
														echo "ou consulter votre ".$gdf->form("f38","afficherCompteRecruteur.php","post").$gdf->hidden("id",$compte->getId()).$gdf->hidden("domaine",$compte->getDomaine()).$gdf->hidden("nature",$compte->getNature()).$gdf->submit("consulterCompte","consulterCompte","compte","btn btn-default").$gdf->endForm();

											}
											else{

														echo "la modification du compte a ete echouee veuillez reessayer";

											}

								}

								if(isset($_GET['resultSuppression'])){

											if($_GET['resultSuppression'] == 'ok'){

														echo "Votre compte a ete supprimer Voulez-vous <a href = 'InscriptionEntreprise.php'>creer un nouveau compte</a>";

											}
											else{

														echo "la suppresseion du compte a ete echouee veuillez reessayer";

											}

								}
					
					}



?>