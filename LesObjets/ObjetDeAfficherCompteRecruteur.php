<?php

session_start();

    require "Autoloader.php";

    Autoloader::register();

    $compte = new Compte($_SESSION['nature']);
    
    $gdf = new GenerateurDuFormulaire();

    $compte->setId($_SESSION['id']);
    
    $compte->setDomaine($_SESSION['domaine']);

        if($compte->getNature() == 'recruteur'){
        
            if($comptes = $compte->afficherCompte("SELECT * FROM recruteur WHERE idRecruteur = ".$compte->getId())){
            
               
                
                      foreach($comptes as $object){

                            echo "<div class = 'row'><div class = 'col-md-4'><div class = 'col-md-6 photo-profil'><img class = 'img-responsive' src = '".$object->photoRecruteur."'></div><div class = 'col-md-6 nom-candidat'><h4>".$object->nomRecruteur." ".$object->prenomRecruteur."</h4></div></div></div>";

                            echo "<div class = 'row partie1'>";

                                echo "<div class = 'col-md-3'>";
                
                                    echo "<div class = 'cadre-informations-generales'>";

                                            echo "<div class = 'row'><div class = 'Nos-avantages'><h4 class = 'text-center'><i class = 'glyphicon glyphicon-plus fa-fw icon-white'></i><span class = 'text-center'>Nos avantages</span></h4></div></div>";
                                            echo "<div class = 'contenu-details-compte'><p><i class = 'fa fa-umbrella fa-fw fa-2x'></i>Assurance</p>
                                                  <p>Air climatise</p>
                                                  <p>Conges mobiles</p>
                                                  <p>Horaire flexible</p>
                                                  <p><i class = 'glyphicon glyphicon-star fa-fw fa-2x'></i>Programme de formation</p>
                                                  <p>Retraite</p>
                                                  <p>Programme de reconnaissance</p>
                                                  <p>Vaccances</p>
                                                  <p><i class = 'fa fa-'></i>Service de garde</p>


                                                  </div>";

                                    echo "</div>";

                                    echo "<div class = 'cadre-Competences'>";

                                            echo "<div class = 'row'><div class = 'En-savoir-plus text-center'><h4><i class = 'fa fa-tag fa-rotate-90 fa-fw icon-white'></i>En savoir plus</h4></div></div>";
                                            echo "<div class = 'contenu-details-compte'><p>ENVIRONNEMENT DE TRAVAIL</p>
                                                  <p>GESTION DES CARRIERES</p>
                                                  <p>IMPLICATION COMMUNAUTAIRE</p>
                                                  </div>";

                                    echo "</div>";

                                echo "</div>";

                                echo "<div class = 'col-md-8 col-md-offset-1'>";

                                    echo "<div class = 'navigation text-center'>

                                                <button class = 'btn btn-default informations'>informations</button>
                                                <button class = 'btn btn-default mes-annonces'><a href = 'afficherAnnoncesPersonnels.php'>Mes annonces</a></button>
                                                <button class = 'btn btn-default candidatures'><a href = 'afficherCandidats.php'>candidatures</a></button>
                                                <button class = 'btn btn-default offres-emploi'><a href = 'afficherToutsLesCandidats.php'>Demandes d'emploi</a></button>
                                                <button class = 'btn btn-default offres'><a href = 'index.php'>Annonces</a></button>
                                                <button class = 'btn btn-default parametres'><a href = 'formulaireDeModificationDuCompteRecruteur.php'>Parametres</a></button>
                                          </div>";

                                          $_SESSION['id'] = $compte->getId();
                                          $_SESSION['domaine'] = $compte->getDomaine();
                                          $_SESSION['nature'] = $compte->getNature();

                                    echo "<div class = 'partie2 text-center'>

                                            <div class = 'titre-partie2 text-center'><h4><i class = 'fa fa-home fa-fw'></i>QUI SOMMES-NOUS</h4></div>
                                            <div class = 'contenu-partie2'>

                                                <p>Le Groupe Jean Coutu est une entreprise renommee dans le domaine du commerce de detail en pharmacie au Canada. La Societe exploite un reseau de 416 etablissements franchises, au Quebec, au Nouveau-Brunswick et en Ontario sous les bannieres PJC Jean Coutu, PJC Clinique, PJC Sante et PJC Sante Beaute et emploie plus de 20 000 personnes. De plus, depuis decembre 2007, le Groupe Jean Coutu possede Pro Doc ltee (« Pro Doc »), une filiale situee au Quebec, qui fabrique des medicaments generiques.</p>

                                                <p>Sa position de leader et sa strategie de developpement axee sur l'efficacite amenent le Groupe Jean Coutu a jouer un rôle influent en ce qui a trait a l'avancement de la pratique professionnelle en pharmacie. Sa rigueur, son sens de l'innovation et sa capacite d'adopter de nouvelles façons de faire lui permettent de beneficier des possibilites de developpement offertes par un secteur d'activites en pleine croissance.</p>

                                                <b><i class = 'fa fa-cog fa-fw'></i>Mission</b>
                                                <p>Le Groupe Jean Coutu est un leader du domaine de la pharmacie dans ses marches choisis. La compagnie offre des produits de premiere qualite pour la sante, l'hygiene et la beaute, dans un environnement chaleureux et efficace. Notre force repose sur la notoriete du concept PJC, notre leadership marketing et les services d'encadrement fournis à nos franchises. Nous nous engageons à fournir une performance superieure a nos actionnaires et des carrieres interessantes a tous les professionnels et employes du reseau et du Groupe Jean Coutu.</p>

                                                <b>Carrieres</b>
                                                <p>Le Groupe Jean Coutu est une entreprise renommee dans le domaine du commerce de detail en pharmacie au Canada.</p>
                                                <p>Le siege social, ses centres de distribution et la filiale a part entiere du Groupe Jean Coutu, dont le Centre d'information Rx Ltee (technologie de l'information) sont tous etablis e Longueuil (pres de Montreal) et a Hawkesbury, et emploient conjointement pres de 1 000 personnes.</p>

                                                <p>Le Groupe Jean Coutu est a la tête d'un reseau de 417 etablissements franchises qui emploient pres de 20 000 personnes</p>

                                            </div>

                                        </div>";

                                echo "</div>";

                            echo "</div>";
                      
                      }
            
            }
        
        }
?>