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
                          
                              if($listAnnonces1 = $annonces->afficherAnnonces("SELECT * FROM annonces,recruteur WHERE annonces.idAnnonces = ".$annonces->getIdAnnonces()." AND annonces.idRecruteur = recruteur.idRecruteur")){
                                                
                                                    foreach($listAnnonces1 as $object1){


                                                            echo "<div class = 'container'>

                                                                <div class = 'row'>
                                                
                                                                    <div class = 'col-md-2 col-xs-12 col-md-offset-5'><img class = 'img-responsive' src = 'img\\".$object1->photoRecruteur."'></div>

                                                                </div>

                                                            </div>";


                                                            echo "<div class = 'row aside'>";

                                                                            echo "<div class = 'col-md-3 col-xs-12'>";

                                                                                    echo "<div class = 'titre-details-annonce text-center'>
                                                                                            <h3>Details de l'annonce</h3></div>";

                                                                                    echo "<div class = 'content-details-annonces'>";
                                                                                         echo "<div>

                                                                                                    <p class = 'row'><span class = 'col-md-2'><img src = 'img\Calque3copie2.png'></span><span class = 'col-md-9 col-md-offset-1'>Publiee le : ".$object->datePublication."</span></p>


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

                                                                                            echo "<div><span class = 'nom-annonceur'>Nom : </span><span class = 'valeur-de-nom-annonceur'>".$object1->nomRecruteur."</span></div>";

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
                          
                              if($listAnnonces1 = $annonces->afficherAnnonces("SELECT * FROM annonces,recruteur WHERE annonces.idAnnonces = ".$annonces->getIdAnnonces()." AND annonces.idRecruteur = recruteur.idRecruteur")){
                                                
                                                    foreach($listAnnonces1 as $object1){


                                                            echo "<div class = 'container'>

                                                                <div class = 'row'>
                                                
                                                                    <div class = 'col-md-2 col-xs-12 col-md-offset-5'><img class = 'img-responsive' src = 'img\\".$object1->photoRecruteur."'></div>

                                                                </div>

                                                            </div>";


                                                            echo "<div class = 'row aside'>";

                                                                            echo "<div class = 'col-md-3 col-xs-12'>";

                                                                                    echo "<div class = 'titre-details-annonce text-center'>
                                                                                            <h3>Details de l'annonce</h3></div>";

                                                                                    echo "<div class = 'content-details-annonces'>";
                                                                                         echo "<div>
                                                                                                    <p class = 'row'>
                                                                                                        <span class = 'col-md-2'>
                                                                                                            <img src = 'img\Calque3copie2.png'>
                                                                                                        </span>
                                                                                                        <span class = 'col-md-5' style = 'font-weight:bold;color:#989696'>Publiee le : </span>
                                                                                                        <span class = 'col-md-6' style = 'color:#8ba09c;margin-left:-45px;font-size:0.8em'>".
                                                                                                            $object1->datePublication.
                                                                                                        "</span>
                                                                                                    </p>


                                                                                                    <p class = 'row'>
                                                                                                        <span class = 'col-md-2' style = 'margin-left:5px'>
                                                                                                            <img src = 'img\Calque4copie.png'>
                                                                                                        </span>
                                                                                                        <span class = 'col-md-7' style = 'margin-left:-6px;font-weight:bold;color:#989696'>Lieu de travail : </span><br/><span class = 'col-md-5' style = 'color:#8ba09c;font-size:0.8em'>".$object1->paysRecruteur."/".$object1->regionRecruteur."/<br/>".$object1->villeRecruteur."</span>
                                                                                                    </p>


                                                                                                    <p class = 'row'>
                                                                                                        <span class = 'col-md-2'>
                                                                                                            <img src = 'img\sac1.png'>
                                                                                                        </span>
                                                                                                        <span class = 'col-md-5' style = 'font-weight:bold;color:#989696'>Experience : </span>
                                                                                                        <span class = 'col-md-6' style = 'color:#8ba09c;margin-left:-38px;font-size:0.8em'>Entre 2 et 5 ans</span>
                                                                                                    </p>


                                                                                                    <p class = 'row'>
                                                                                                        <span class = 'col-md-2'>
                                                                                                            <i class = 'fa fa-mortar-board fa-2x'></i>
                                                                                                        </span>
                                                                                                        <span class = 'col-md-4' style = 'font-weight:bold;color:#989696'>Etudes : </span>
                                                                                                        <span class = 'col-md-5' style = 'color:#8ba09c;margin-left:-38px;font-size:0.8em'>bac + 2</span>
                                                                                                    </p>


                                                                                                    <p class = 'row'>
                                                                                                        <span class = 'col-md-2'>
                                                                                                            <i class = 'fa fa-language fa fa-2x'></i>
                                                                                                        </span>
                                                                                                        <span class = 'col-md-4' style = 'font-weight:bold;color:#989696'>Langue : </span>
                                                                                                        <span class = 'col-md-5' style = 'color:#8ba09c;margin-left:-36px;font-size:0.8em'>arabe,francais,anglais</span>
                                                                                                    </p>


                                                                                                    <p class = 'row'>
                                                                                                        <span class = 'col-md-2'>
                                                                                                            <i class = 'glyphicon glyphicon-time fa-2x'></i>
                                                                                                        </span>
                                                                                                        <span class = 'col-md-5' style = 'font-weight:bold;color:#989696'>Disponibilite : </span>
                                                                                                        <span class = 'col-md-5' style = 'color:#8ba09c;margin-left:-25px;font-size:0.8em'>Plein temps</span>
                                                                                                    </p>


                                                                                                    <p class = 'row'>
                                                                                                        <span class = 'col-md-2'>
                                                                                                            <i class = 'glyphicon glyphicon-usd fa-2x'></i>
                                                                                                        </span>
                                                                                                        <span class = 'col-md-4' style = 'font-weight:bold;color:#989696'>Salaire : </span>
                                                                                                        <span class = 'col-md-5' style = 'color:#8ba09c;margin-left:-38px;font-size:0.8em'>a discuter</span>
                                                                                                    </p>


                                                                                                    <p class = 'row'>
                                                                                                        <span class = 'col-md-2'><i class = 'fa fa-tag fa-rotate-90 fa-2x'></i>
                                                                                                        </span>
                                                                                                        <span class = 'col-md-7' style = 'font-weight:bold;color:#989696'>Statut de l'emploi : </span>
                                                                                                        <span class = 'col-md-3' style = 'color:#8ba09c;margin-left:-45px;font-size:0.8em'>contrat</span>
                                                                                                    </p>


                                                                                                    <p class = 'row'>
                                                                                                        <span class = 'col-md-2'>
                                                                                                            <img src = 'img\voiture.png'>
                                                                                                        </span>
                                                                                                        <span class = 'col-md-4' style = 'font-weight:bold;color:#989696'>Mobilite :</span>
                                                                                                        <span class = 'col-md-5' style = 'color:#8ba09c;margin-left:-33px;font-size:0.8em'>locale,international</span>
                                                                                                    </p>


                                                                                                </div>";
                                                                                    echo "</div>";





                                                                                    echo "<div>";

                                                                                                    echo "<div class = 'titre-details-annonce text-center'>
                                                                                                            <h3>Competances</h3></div>";

                                                                                                    echo "<div class = 'content-details-annonces'>";
                                                                                                        echo "<div>
                                                                                                             <p><i class = 'glyphicon glyphicon-ok'></i> Avoir une bonne connaissance des logiciels
                                                                                                                    hw_Modifyobject(connection, object_to_change, remove, add)icrosoft Office (Word, Excel et Outlook).</p>
                                                                                                            <p><i class = 'glyphicon glyphicon-ok'></i> Démontrer un bon esprit d’équipe.</p>

                                                                                                        </div>";
                                                                                                    echo "</div>";

                                                                                    echo "</div>";






                                                                            echo "</div>";

                                                                            echo "<div class = 'col-md-9 col-xs-12'>";

                                                                                    echo "<div class = 'description-annonces'>";

                                                                                            echo "<div class = 'titre-description-annonces'><h4>".$object1->titre."</h4></div>";

                                                                                            echo "<div><span class = 'nom-annonceur'>Nom : </span><span class = 'valeur-de-nom-annonceur'>".$object1->nomRecruteur."</span></div>";

                                                                                            echo "<div><span class = 'domaine'>Domaine : </span><span class = 'couleur-lettre'>".$object1->domaineRecruteur."</span></div>";

                                                                                            echo "<div><span class = 'numTel'>Numero de telephone : </span><span class = 'couleur-lettre'>".$object1->numeroTelephoneRecruteur."</span></div><br/>";

                                                                                            echo "<div class = 'titre-paragraphe'>Description de l'annonce : </div>";
                                                                                            echo "<div class = 'paragraphe couleur-lettre'><p>".$object1->contenu."</p></div>";
                                                            


                                                                        echo $gdf->form("f40","formulaireDePostulation.php","post").$gdf->hidden("id",$annonces->getId()).
                                                                        $gdf->hidden("domaine",$annonces->getDomaine()).$gdf->hidden("idAnnonces",$annonces->getIdAnnonces()).
                                                                        $gdf->hidden("idCandidat",$annonces->getIdCandidat()).$gdf->hidden("nature",$annonces->getNature())."<div class = 'text-center btn-postuler'>".$gdf->submit("postuler","postuler","postuler","btn btn-default").$gdf->endForm()."
                                                                                                      </div>";

                                                                                     echo "</div>";



                                                                            echo "</div>";       

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