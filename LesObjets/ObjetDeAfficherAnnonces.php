<?php

session_start();

    require "Autoloader.php";
    
    Autoloader::register();

    $gdf = new GenerateurDuFormulaire();

    if(isset($_SESSION['id']) && isset($_SESSION['domaine']) && isset($_SESSION['nature']) && isset($_POST['idAnnonces']) && isset($_GET['idAnnonces'])){



                $annonces = new Annonces($_SESSION['id'],$_SESSION['domaine'],$_SESSION['nature']);
    
                $annonces->setIdAnnonces($_POST['idAnnonces']);
                $annonces->setIdAnnonces($_GET['idAnnonces']);
                        
                        //J'ai utilise deux requetes avec jointure l'une parcourit les deux tables annonces et candidat et l'autre parcourit les tables annonces et recruteur
                        //afain d'eviter le conflit entre les deux tables candidat et recruteur qui ont deux champs communs 'domaine' et 'nature'
                         
                    if($listAnnonces = $annonces->afficherAnnonces("SELECT * FROM annonces,candidat WHERE annonces.idAnnonces = ".$annonces->getIdAnnonces()." AND annonces.idCandidat = candidat.idCandidat")){
                                
                                echo "<div class = 'container-fluid'>";

                                    

                        foreach($listAnnonces as $object){


                        echo "<div class = 'container'>

                            <div class = 'row'>
                        
                                            <div class = 'col-md-2 col-xs-12 col-md-offset-5'><img class = 'img-responsive' src = '".$object->photoCandidat."'></div>

                                        </div>

                                    </div>";


                                    echo "<div class = 'row aside'>";

                                                    echo "<div class = 'col-md-3 col-xs-12'>";

                                                            echo "<div class = 'titre-details-annonce text-center'>
                                                                    <h3>Details de l'annonce</h3></div>";

                                                            echo "<div class = 'content-details-annonces'>";
                                                                 echo "<div>
                                                                            <p><i class = 'fa fa-calendar'></i>Publiee le : ".$object->datePublication."</p>
                                                                            <p><i class = 'fa fa-mapmaker'></i>Lieu de travail : ".$object->paysCandidat."/".$object->regionCandidat."/<br/>".$object->villeCandidat."</p>
                                                                            <p>Experience : Entre 2 et 5 ans</p>
                                                                            <p>Etudes : ".$object->niveauCandidat."</p>
                                                                            <p>Langue : arabe,francais,anglais</p>
                                                                            <p>Disponibilite : Plein temps</p>
                                                                            <p>Salaire : a discuter</p>
                                                                            <p>Statut de l'emploi : contrat</p>
                                                                            <p><div class = 'glyphicon glyphicon-car'></div>Mobilite : locale,international</p>
                                                                            <p>Email : ".$object->loginCandidat."</p>

                                                                        </div>";
                                                            echo "</div>";
                                                    echo "</div>";

                                                    echo "<div class = 'col-md-9 col-xs-12'>";

                                                            echo "<div class = 'description-annonces'>";

                                                                    echo "<div class = 'titre-description-annonces'></i><h4>".$object->titre."</h4></div>";

                                                                    echo "<div><span class = 'annonceur'>Annonceur : </span>".$object->nature."</div>";

                                                                    echo "<div><span class = 'nom-annonceur'>Nom : </span><span class = 'valeur-de-nom-annonceur'>".$object->prenomCandidat."</span></div>";

                                                                    echo "<div><span class = 'domaine'>Domaine : </span><span class = 'couleur-lettre'>".$object->domaineCandidat."</span></div>";

                                                                    echo "<div><span class = 'numTel'>Numero de telephone : </span><span class = 'couleur-lettre'>".$object->numeroTelephoneCandidat."</span></div><br/>";

                                                                    echo "<div class = 'titre-paragraphe'>Description de l'annonce : </div>";
                                                                    echo "<div class = 'paragraphe couleur-lettre'><p>".$object->contenu."</p></div>";


                                                            echo "</div>";

                                                    echo "</div>";       

                            echo "</div>";


                            echo "<div class = 'row aside'>";

                                        echo "<div class = 'col-md-3 col-xs-12'>";

                                                            echo "<div class = 'titre-details-annonce text-center'>
                                                                    <h3>Competances</h3></div>";

                                                            echo "<div class = 'content-details-annonces'>";
                                                                 echo "<div>
                                                                            <p><div class = 'glyphicon glyphicon-ok'></div>Avoir une bonne connaissance des logiciels
                                                                                Microsoft Office (Word, Excel et Outlook).</p>
                                                                            <p><div class = 'fa fa-ok'></div>Démontrer un bon esprit d’équipe.</p>

                                                                        </div>";
                                                            echo "</div>";

                                        echo "</div>";
                                    echo "</div>";
                                             
                        }
                                  

                                  
                      
                                        echo "Chercher des autres ".$gdf->form("f26","afficherToutesLesAnnonces.php","post").$gdf->hidden("id",$annonces->getId()).
                                        $gdf->hidden("domaine",$annonces->getDomaine()).$gdf->hidden("nature",$annonces->getNature()).
                                        $gdf->submit("repeterAffichageAnnonces","repeterAffichageAnnonces","annonces","btn btn-default").$gdf->endForm();
                              }
                          
                              else if($listAnnonces1 = $annonces->afficherAnnonces("SELECT * FROM annonces,recruteur WHERE annonces.idAnnonces = ".$annonces->getIdAnnonces()." AND annonces.idRecruteur = recruteur.idRecruteur")){
                                                
                                                    foreach($listAnnonces1 as $object1){


                                                            echo "<div class = 'container'>

                                                                <div class = 'row'>
                                                
                                                                    <div class = 'col-md-2 col-xs-12 col-md-offset-5'><img class = 'img-responsive' src = '".$object1->photoRecruteur."'></div>

                                                                </div>

                                                            </div>";


                                                            echo "<div class = 'row aside'>";

                                                                            echo "<div class = 'col-md-3 col-xs-12'>";

                                                                                    echo "<div class = 'titre-details-annonce text-center'>
                                                                                            <h3>Details de l'annonce</h3></div>";

                                                                                    echo "<div class = 'content-details-annonces'>";
                                                                                         echo "<div>
                                                                                                    <p>Publiee le : ".$object1->datePublication."</p>
                                                                                                    <p>Lieu de travail : ".$object1->paysRecruteur."/".$object1->regionRecruteur."/<br/>".$object1->villeRecruteur."</p>
                                                                                                    <p>Experience : Entre 2 et 5 ans</p>
                                                                                                    <p>Etudes : bac + 2</p>
                                                                                                    <p>Langue : arabe,francais,anglais</p>
                                                                                                    <p>Disponibilite : Plein temps</p>
                                                                                                    <p>Salaire : a discuter</p>
                                                                                                    <p>Statut de l'emploi : contrat</p>
                                                                                                    <p>Mobilite : locale,international</p>
                                                                                                    <p>Email : ".$object1->loginRecruteur."</p>

                                                                                                </div>";
                                                                                    echo "</div>";
                                                                            echo "</div>";

                                                                            echo "<div class = 'col-md-9 col-xs-12'>";

                                                                                    echo "<div class = 'description-annonces'>";

                                                                                            echo "<div class = 'titre-description-annonces'><h4>".$object1->titre."</h4></div>";

                                                                                            echo "<div><span class = 'annonceur'>Annonceur : </span>".$object1->nature."</div>";

                                                                                            echo "<div><span class = 'nom-annonceur'>Nom : </span><span class = 'valeur-de-nom-annonceur'>".$object1->prenomRecruteur."</span></div>";

                                                                                            echo "<div><span class = 'domaine'>Domaine : </span><span class = 'couleur-lettre'>".$object1->domaineRecruteur."</span></div>";

                                                                                            echo "<div><span class = 'numTel'>Numero de telephone : </span><span class = 'couleur-lettre'>".$object1->numeroTelephoneRecruteur."</span></div><br/>";

                                                                                            echo "<div class = 'titre-paragraphe'>Description de l'annonce : </div>";
                                                                                            echo "<div class = 'paragraphe couleur-lettre'><p>".$object1->contenu."</p></div>";

                                                                        echo $gdf->form("f40","formulaireDePostulation.php","post").$gdf->hidden("id",$annonces->getId()).
                                                                        $gdf->hidden("domaine",$annonces->getDomaine()).$gdf->hidden("idAnnonces",$annonces->getIdAnnonces()).
                                                                        $gdf->hidden("idCandidat",$annonces->getIdCandidat()).$gdf->hidden("nature",$annonces->getNature())."<div class = 'text-center btn-postuler'>".$gdf->submit("postuler","postuler","postuler","btn btn-default").$gdf->endForm()."
                                                                                                      </div>";

                                                                          echo $gdf->form("f44","contact.php","post").$gdf->hidden("idAnnonces",$object1->idAnnonces).

                                                                                $gdf->hidden("idCandidat",$annonces->getIdCandidat()).$gdf->hidden("idRecruteur",$annonces->getId()).

                                                                                $gdf->hidden("domaine",$object1->domaineRecruteur).$gdf->hidden("nature",$annonces->getNature())."<div class = 'text-center'>".$gdf->submit("contacter","contacter","contacter","btn btn-default").$gdf->endForm()."</div>";

                                                                                     echo "</div>";



                                                                            echo "</div>";       

                                                            echo "</div>";


                                                            echo "</div class = 'row aside'>";

                                                                echo "<div class = 'col-md-3 col-xs-12'>";

                                                                                    echo "<div class = 'titre-details-annonce text-center'>
                                                                                            <h3>Competances</h3></div>";

                                                                                    echo "<div class = 'content-details-annonces'>";
                                                                                         echo "<div>
                                                                                                    <p>Avoir une bonne connaissance des logiciels
                                                                                                        Microsoft Office (Word, Excel et Outlook).</p>
                                                                                                    <p>Démontrer un bon esprit d’équipe.</p>

                                                                                                </div>";
                                                                                    echo "</div>";

                                                                 echo "</div>";
                                                            echo "</div>";
                                                                     
                                        }
                      
                                        echo "<div class = 'text-center'>Chercher des autres ".$gdf->form("f26","index.php","post").$gdf->hidden("id",$annonces->getId()).
                                        $gdf->hidden("domaine",$annonces->getDomaine()).$gdf->hidden("nature",$annonces->getNature()).
                                        $gdf->submit("repeterAffichageAnnonces","repeterAffichageAnnonces","annonces","btn btn-default").$gdf->endForm()."</div>";
                          
                             }
                              else{
                          
                                    echo "aucune annonce";
                          
                             }



    }
    else{



                $annonces = new Annonces('null','null','null');
    
                if(isset($_POST['idAnnonces'])){ $annonces->setIdAnnonces($_POST['idAnnonces']); }
                if(isset($_GET['idAnnonces'])){ $annonces->setIdAnnonces($_GET['idAnnonces']); }
                        
                        //J'ai utilise deux requetes avec jointure l'une parcourit les deux tables annonces et candidat et l'autre parcourit les tables annonces et recruteur
                        //afain d'eviter le conflit entre les deux tables candidat et recruteur qui ont deux champs communs 'domaine' et 'nature'
                         
                    if($listAnnonces = $annonces->afficherAnnonces("SELECT * FROM annonces,candidat WHERE annonces.idAnnonces = ".$annonces->getIdAnnonces()." AND annonces.idCandidat = candidat.idCandidat")){
                                
                                echo "<div class = 'container-fluid'>";

                                    

                        foreach($listAnnonces as $object){


                        echo "<div class = 'container'>

                            <div class = 'row'>
                        
                                            <div class = 'col-md-2 col-xs-12 col-md-offset-5'><img class = 'img-responsive' src = '".$object->photoCandidat."'></div>

                                        </div>

                                    </div>";


                                    echo "<div class = 'row aside'>";

                                                    echo "<div class = 'col-md-3 col-xs-12'>";

                                                            echo "<div class = 'titre-details-annonce text-center'>
                                                                    <h3>Details de l'annonce</h3></div>";

                                                            echo "<div class = 'content-details-annonces'>";
                                                                 echo "<div>
                                                                            <p><i class = 'fa fa-calendar'></i>Publiee le : ".$object->datePublication."</p>
                                                                            <p>Lieu de travail : ".$object->paysCandidat."/".$object->regionCandidat."/<br/>".$object->villeCandidat."</p>
                                                                            <p>Experience : Entre 2 et 5 ans</p>
                                                                            <p>Etudes : ".$object->niveauCandidat."</p>
                                                                            <p>Langue : arabe,francais,anglais</p>
                                                                            <p>Disponibilite : Plein temps</p>
                                                                            <p>Salaire : a discuter</p>
                                                                            <p>Statut de l'emploi : contrat</p>
                                                                            <p>Mobilite : locale,international</p>
                                                                            <p>Email : ".$object->loginCandidat."</p>

                                                                        </div>";
                                                            echo "</div>";
                                                    echo "</div>";

                                                    echo "<div class = 'col-md-9 col-xs-12'>";

                                                            echo "<div class = 'description-annonces'>";

                                                                    echo "<div class = 'titre-description-annonces'><h4>".$object->titre."</h4></div>";

                                                                    echo "<div><span class = 'annonceur'>Annonceur : </span>".$object->nature."</div>";

                                                                    echo "<div><span class = 'nom-annonceur'>Nom : </span><span class = 'valeur-de-nom-annonceur'>".$object->prenomCandidat."</span></div>";

                                                                    echo "<div><span class = 'domaine'>Domaine : </span><span class = 'couleur-lettre'>".$object->domaineCandidat."</span></div>";

                                                                    echo "<div><span class = 'numTel'>Numero de telephone : </span><span class = 'couleur-lettre'>".$object->numeroTelephoneCandidat."</span></div><br/>";

                                                                    echo "<div class = 'titre-paragraphe'>Description de l'annonce : </div>";
                                                                    echo "<div class = 'paragraphe couleur-lettre'><p>".$object->contenu."</p></div>";


                                                            echo "</div>";

                                                    echo "</div>";       

                            echo "</div>";


                            echo "<div class = 'row aside'>";

                                        echo "<div class = 'col-md-3 col-xs-12'>";

                                                            echo "<div class = 'titre-details-annonce text-center'>
                                                                    <h3>Competances</h3></div>";

                                                            echo "<div class = 'content-details-annonces'>";
                                                                 echo "<div>
                                                                            <p>Avoir une bonne connaissance des logiciels
                                                                                Microsoft Office (Word, Excel et Outlook).</p>
                                                                            <p>Démontrer un bon esprit d’équipe.</p>

                                                                        </div>";
                                                            echo "</div>";

                                        echo "</div>";
                                    echo "</div>";
                                             
                        }
                                  

                                  
                      
                                        echo "Chercher des autres ".$gdf->form("f26","afficherToutesLesAnnonces.php","post").$gdf->hidden("id",$annonces->getId()).
                                        $gdf->hidden("domaine",$annonces->getDomaine()).$gdf->hidden("nature",$annonces->getNature()).
                                        $gdf->submit("repeterAffichageAnnonces","repeterAffichageAnnonces","annonces","btn btn-default").$gdf->endForm();
                              }
                          
                              else if($listAnnonces1 = $annonces->afficherAnnonces("SELECT * FROM annonces,recruteur WHERE annonces.idAnnonces = ".$annonces->getIdAnnonces()." AND annonces.idRecruteur = recruteur.idRecruteur")){
                                                
                                                    foreach($listAnnonces1 as $object1){


                                                            echo "<div class = 'container'>

                                                                <div class = 'row'>
                                                
                                                                    <div class = 'col-md-2 col-xs-12 col-md-offset-5'><img class = 'img-responsive' src = '".$object1->photoRecruteur."'></div>

                                                                </div>

                                                            </div>";


                                                            echo "<div class = 'row aside'>";

                                                                            echo "<div class = 'col-md-3 col-xs-12'>";

                                                                                    echo "<div class = 'titre-details-annonce text-center'>
                                                                                            <h3>Details de l'annonce</h3></div>";

                                                                                    echo "<div class = 'content-details-annonces'>";
                                                                                         echo "<div>
                                                                                                    <p><i class = 'glyphicon glyphicon-calendar fa-inverse fa-2x'></i>  Publiee le : ".$object1->datePublication."</p>
                                                                                                    <p><i class = 'fa fa-map-marker fa-inverse fa-2x'></i> Lieu de travail : ".$object1->paysRecruteur."/".$object1->regionRecruteur."/<br/>".$object1->villeRecruteur."</p>
                                                                                                    <p>Experience : Entre 2 et 5 ans</p>
                                                                                                    <p><i class = 'fa fa-mortar-board fa-2x'></i> Etudes : bac + 2</p>
                                                                                                    <p><i class = 'fa fa-language fa fa-2x'></i> Langue : arabe,francais,anglais</p>
                                                                                                    <p><i class = 'glyphicon glyphicon-time fa-2x'></i> Disponibilite : Plein temps</p>
                                                                                                    <p><i class = 'glyphicon glyphicon-usd fa-2x'></i> Salaire : a discuter</p>
                                                                                                    <p><i class = 'fa fa-tag fa-rotate-90 fa-2x'></i> Statut de l'emploi : contrat</p>
                                                                                                    <p><i class = 'fa fa-car fa-2x'></i> Mobilite : locale,international</p>
                                                                                                    <p>Email : ".$object1->loginRecruteur."</p>

                                                                                                </div>";
                                                                                    echo "</div>";
                                                                            echo "</div>";

                                                                            echo "<div class = 'col-md-9 col-xs-12'>";

                                                                                    echo "<div class = 'description-annonces'>";

                                                                                            echo "<div class = 'titre-description-annonces'><h4>".$object1->titre."</h4></div>";

                                                                                            echo "<div><span class = 'annonceur'>Annonceur : </span>".$object1->nature."</div>";

                                                                                            echo "<div><span class = 'nom-annonceur'>Nom : </span><span class = 'valeur-de-nom-annonceur'>".$object1->prenomRecruteur."</span></div>";

                                                                                            echo "<div><span class = 'domaine'>Domaine : </span><span class = 'couleur-lettre'>".$object1->domaineRecruteur."</span></div>";

                                                                                            echo "<div><span class = 'numTel'>Numero de telephone : </span><span class = 'couleur-lettre'>".$object1->numeroTelephoneRecruteur."</span></div><br/>";

                                                                                            echo "<div class = 'titre-paragraphe'>Description de l'annonce : </div>";
                                                                                            echo "<div class = 'paragraphe couleur-lettre'><p>".$object1->contenu."</p></div>";

                                                                        echo $gdf->form("f40","formulaireDePostulation.php","post").$gdf->hidden("id",$annonces->getId()).
                                                                        $gdf->hidden("domaine",$annonces->getDomaine()).$gdf->hidden("idAnnonces",$annonces->getIdAnnonces()).
                                                                        $gdf->hidden("idCandidat",$annonces->getIdCandidat()).$gdf->hidden("nature",$annonces->getNature())."<div class = 'text-center btn-postuler'>".$gdf->submit("postuler","postuler","postuler","btn btn-default").$gdf->endForm()."
                                                                                                      </div>";

                                                                          echo $gdf->form("f44","contact.php","post").$gdf->hidden("idAnnonces",$object1->idAnnonces).

                                                                                $gdf->hidden("idCandidat",$annonces->getIdCandidat()).$gdf->hidden("idRecruteur",$annonces->getId()).

                                                                                $gdf->hidden("domaine",$object1->domaineRecruteur).$gdf->hidden("nature",$annonces->getNature())."<div class = 'text-center'>".$gdf->submit("contacter","contacter","contacter","btn btn-default").$gdf->endForm()."</div>";

                                                                                     echo "</div>";



                                                                            echo "</div>";       

                                                            echo "</div>";


                                                            echo "</div class = 'row aside'>";

                                                                echo "<div class = 'col-md-3 col-xs-12'>";

                                                                                    echo "<div class = 'titre-details-annonce text-center'>
                                                                                            <h3>Competances</h3></div>";

                                                                                    echo "<div class = 'content-details-annonces'>";
                                                                                         echo "<div>
                                                                                                    <p><i class = 'glyphicon glyphicon-ok'></i> Avoir une bonne connaissance des logiciels
                                                                                                        Microsoft Office (Word, Excel et Outlook).</p>
                                                                                                    <p><i class = 'glyphicon glyphicon-ok'></i> Démontrer un bon esprit d’équipe.</p>

                                                                                                </div>";
                                                                                    echo "</div>";

                                                                 echo "</div>";
                                                            echo "</div>";
                                                                     
                                        }
                      
                                        echo "<div class = 'text-center'>Chercher des autres ".$gdf->form("f26","index.php","post").$gdf->hidden("id",$annonces->getId()).
                                        $gdf->hidden("domaine",$annonces->getDomaine()).$gdf->hidden("nature",$annonces->getNature()).
                                        $gdf->submit("repeterAffichageAnnonces","repeterAffichageAnnonces","annonces","btn btn-default").$gdf->endForm()."</div>";
                          
                             }
                              else{
                          
                                    echo "aucune annonce";
                          
                             }



    }
    
    
         

?>