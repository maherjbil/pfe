<?php

  require "Autoloader.php";
  
  Autoloader::register();
  
  $gdf = new GenerateurDuFormulaire();

  if(isset($_SESSION['id']) && isset($_SESSION['domaine']) && isset($_SESSION['nature'])){



                  $annonces = new Annonces($_SESSION['id'],$_SESSION['domaine'],$_SESSION['nature']);
  
                  $annonces->setIdCandidat($_SESSION['id']);

                  echo "<div>".$gdf->form("f13","rechercherAnnonceEtCandidature.php","get")."<div class = 'col-md-10 col-md-offset-1 formulaire-recherche-personnalisee'><div class = 'col-md-4'><input class = 'form-control' col-md-4 type = 'text' name = 'motCle' id = 'motCle' placeholder = 'mot cle...'><i class = 'fa fa-search'></i></div><div class = 'col-md-4'>".$gdf->select("categories","categories").$gdf->option("toutesLesCategories","toutes les categories").$gdf->endSelect()."</div><div class = 'col-md-2'>".$gdf->hidden("id",$annonces->getId()).$gdf->hidden("domaine",$annonces->getDomaine()).$gdf->hidden("nature",$annonces->getNature()).$gdf->hidden("idCandidat",$annonces->getIdCandidat()).$gdf->submit("recherchePersonnalisee","recherchePersonnalisee","rechercher","btn btn-default")."</div>".$gdf->endForm()."</div></div>";

                  echo "<div class = 'container logos-defiles'><div class = 'row'><marquee><div class = 'col-md-3'><a href = 'http://www.keejob.com'><img class = 'img-responsive' src = 'img/logo_keejob.png' alt = 'keejob'></a></div><div class = 'col-md-3'><a href = 'http://www.tanitjobs.com'><img class = 'img-responsive' src = 'img/logo-tanitjobs.png' alt = 'tanitjobs'></a></div><div class = 'col-md-3'><a href = 'http://www.tunisieTravail.com'><img class = 'img-responsive' src = 'img/logo_tunisieTravail.png' alt = 'tunisie travail'></a></div><div class = 'col-md-3'><a href = 'http://www.exceljob.com'><img class = 'img-responsive' src = 'img/logo-exelJob.png' alt = 'excel'></a></div></marquee></div></div>";

                    echo "<div class = 'annonces col-md-10 col-xs-12 col-md-offset-1'>";

                      echo "<div class = 'row'>";

                        echo "<div class = 'col-md-7'>";

                          echo "<div class = 'offre-a-la-une'>";

                            echo "<div class = 'row titre-offre-a-la-une'><h4 class = 'text-center'>Offres a la une</h4></div>";
                  
                                    if($listAnnonces = $annonces->afficherAnnonces("SELECT * FROM annonces,recruteur WHERE annonces.idRecruteur = recruteur.idRecruteur ORDER BY datePublication ASC LIMIT 4")){


                                              foreach($listAnnonces as $object){

                                                  echo "<div class = 'row rubrique'>";
                                                      
                                                            echo "<a href = 'afficherAnnonces.php?idAnnonces=".$object->idAnnonces."&idCandidat=".$object->idCandidat."&id=".$object->idRecruteur."&domaine=".$object->domaineRecruteur."&nature=".$object->nature."'><div class = 'col-md-3'><img class = 'img-responsive' src = 'img\\".$object->photoRecruteur."' style = 'height:60px;width:100px'></div><div class = 'col-md-6' style = 'height:80px;color:#353232'><span class = 'titreAnnonce'>".$object->titre."</span><br><span class = 'nomRecruteur'>".$object->nomRecruteur.

                                                            "</span><br/></div><div class = 'col-md-3' style = 'margin-top:20px;left:40px'><i class = 'col-md-4 fa fa-map-marker' style = 'margin-top:2px'></i><span class = 'col-md-8' style = 'color:#7a7a7a;margin-left:-25px'>".$object->regionRecruteur."</span></div></a>";
                                              
                                                  echo "</div>";

                                              }

                                    }
                                     else if($listAnnonces == null){
                      
                                        echo "<div class = 'annonces col-md-10 col-xs-12 col-md-offset-1'>";

                                              echo "<div class = 'row'>";

                                                  echo "<div class = 'offre-a-la-une col-md-7'>";

                                                   echo "<div class = 'row titre-offre-a-la-une'><h4 class = 'text-center'>Offres a la une</h4></div>";

                                                    echo "<class = 'lead'>Aucun offre n'est disponible</div>";

                                               echo "</div>";

                                        echo "</div>";


                    
                    }

                    echo "</div>";

                          echo "<div class = 'offre-recents'>";

                            echo "<div class = 'row titre-offre-a-la-une'><h4 class = 'text-center'>Offres recentes</h4></div>";

                                    if($listAnnonces = $annonces->afficherAnnonces("SELECT * FROM annonces,recruteur WHERE annonces.idRecruteur = recruteur.idRecruteur ORDER BY datePublication DESC LIMIT 4")){


                                              foreach($listAnnonces as $object){

                                                  echo "<div class = 'row rubrique'>";
                                                      
                                                            echo "<a href = 'afficherAnnonces.php?idAnnonces=".$object->idAnnonces."&idCandidat=".$object->idCandidat."&id=".$object->idRecruteur."&domaine=".$object->domaineRecruteur."&nature=".$object->nature."'><div class = 'col-md-3'><img class = 'img-responsive' src = 'img\\".$object->photoRecruteur."' style = 'height:60px;width:100px'/></div><div class = 'col-md-6' style='height:80px;color:#353232;'><span class = 'titreAnnonce'>".$object->titre."</span><br><span class = 'nomRecruteur'>".$object->nomRecruteur.

                                                            "</span><br/></div><div class = 'col-md-3'  style = 'margin-top:20px;left:40px'><i class = 'col-md-4 fa fa-map-marker'  style = 'margin-top:2px'></i><span class = 'col-md-8' style = 'color:#7a7a7a;margin-left:-25px'>".$object->regionRecruteur."</span></div></a>";
                                              
                                                  echo "</div>";

                                              }

                                    }
                                    else if($listAnnonces == null){
                      
                                        echo "<div class = 'annonces col-md-10 col-xs-12 col-md-offset-1'>";

                                              echo "<div class = 'row'>";

                                                  echo "<div class = 'offre-a-la-une col-md-7'>";

                                                   echo "<div class = 'row titre-offre-a-la-une'><h4 class = 'text-center'>Offres a la une</h4></div>";

                                                    echo "<class = 'lead'>Aucun offre recent</div>";

                                               echo "</div>";

                                        echo "</div>";


                    
                                    }

                      echo "</div>";

                  echo "</div>";

                            echo "<div class = 'conseil-emploi col-md-4 col-md-offset-1'>";

                              echo "<div class = 'row'><div class = 'col-md-12 titre-conseil-emploi'><h4 class = 'text-center'>Conseil emploi</h4></div></div>";
                              echo "<div class = 'row'><img class = 'img-responsive' src = 'img/artoratoire.png'/><a href = '#'  style = 'margin-top:-30px;color:black'>Retour aux etudes a 35 ans : failes vous confiance!</a></div>";
                              echo "<div class = 'row'><img class = 'img-responsive' src = 'img/bonheur&responsabilite.png'/></div>";
                              echo "<div class = 'row'><img class = 'img-responsive' src = 'img/testDeRecrutement.png'/></div>";
                              echo "<div class = 'row'><img class = 'img-responsive' src = 'img/44.png'/></div>";

                              echo "</div>";



                  echo "</div>";

                echo "</div>";




  }
  else{



        $annonces = new Annonces('null','null','null');
  
                  $annonces->setIdCandidat('null');



        echo "<div>".$gdf->form("f13","rechercherAnnonceEtCandidature.php","get")."<div class = 'col-md-10 col-md-offset-1 formulaire-recherche-personnalisee'><div class = 'col-md-4'><input class = 'form-control' col-md-4 type = 'text' name = 'motCle' id = 'motCle' placeholder = 'mot cle...'></div><i class = 'fa fa-search' style = 'margin-left:50px'></i><div class = 'col-md-4'>".$gdf->select("categories","categories").$gdf->option("toutesLesCategories","toutes les categories").$gdf->endSelect()."</div><div class = 'col-md-2'>".$gdf->submit("recherchePersonnalisee","recherchePersonnalisee","rechercher","btn btn-default")."</div>".$gdf->endForm()."</div>";





        echo "<div class = 'container logos-defiles'><div class = 'row'><marquee><div class = 'col-md-3'><a href = 'http://www.keejob.com'><img class = 'img-responsive' src = 'img/logo_keejob.png' alt = 'keejob'></a></div><div class = 'col-md-3'><a href = 'http://www.tanitjobs.com'><img class = 'img-responsive' src = 'img/logo-tanitjobs.png' alt = 'tanitjobs'></a></div><div class = 'col-md-3'><a href = 'http://www.tunisieTravail.com'><img class = 'img-responsive' src = 'img/logo_tunisieTravail.png' alt = 'tunisie travail'></a></div><div class = 'col-md-3'><a href = 'http://www.exceljob.com'><img class = 'img-responsive' src = 'img/logo-exelJob.png' alt = 'excel'></a></div></marquee></div></div>";

                    echo "<div class = 'annonces col-md-10 col-xs-12 col-md-offset-1'>";

                      echo "<div class = 'row'>";

                        echo "<div class = 'col-md-7'>";

                          echo "<div class = 'offre-a-la-une'>";

                            echo "<div class = 'row titre-offre-a-la-une'><h4 class = 'text-center'>Offres a la une</h4></div>";
                  
                                    if($listAnnonces = $annonces->afficherAnnonces("SELECT * FROM annonces,recruteur WHERE annonces.idRecruteur = recruteur.idRecruteur ORDER BY datePublication ASC LIMIT 4")){


                                              foreach($listAnnonces as $object){

                                                  echo "<div class = 'row rubrique'>";
                                                      
                                                            echo "<a href = 'afficherAnnonces.php?idAnnonces=".$object->idAnnonces."&idCandidat=".$object->idCandidat."&id=".$object->idRecruteur."&domaine=".$object->domaineRecruteur."&nature=".$object->nature."'><div class = 'col-md-3'><img class = 'img-responsive' src = 'img\\".$object->photoRecruteur."' style = 'height:60px;width:100px'/></div><div class = 'col-md-6' style = 'height:80px;color:#353232'><span class = 'titreAnnonce'>".$object->titre."</span><br/><span class = 'nomRecruteur'>".$object->nomRecruteur."</span><br/></div><div class = 'col-md-3'  style = 'margin-top:20px;left:40px'>

                                                            <i class = 'col-md-4 fa fa-map-marker'  style = 'margin-top:2px'></i><span class = 'col-md-8' style = 'color:#7a7a7a;margin-left:-25px'>".$object->regionRecruteur."</span></div></a>";
                                              
                                                  echo "</div>";

                                              }

                                    }
                                     else if($listAnnonces == null){
                      
                                        echo "<div class = 'annonces col-md-10 col-xs-12 col-md-offset-1'>";

                                              echo "<div class = 'row'>";

                                                  echo "<div class = 'offre-a-la-une col-md-7'>";

                                                   echo "<div class = 'row titre-offre-a-la-une'><h4 class = 'text-center'>Offres a la une</h4></div>";

                                                    echo "<class = 'lead'>Aucun offre n'est disponible</div>";

                                               echo "</div>";

                                        echo "</div>";


                    
                    }

                    echo "</div>";

                          echo "<div class = 'offre-recents'>";

                            echo "<div class = 'row titre-offre-a-la-une'><h4 class = 'text-center'>Offres recentes</h4></div>";

                                    if($listAnnonces = $annonces->afficherAnnonces("SELECT * FROM annonces,recruteur WHERE annonces.idRecruteur = recruteur.idRecruteur ORDER BY datePublication DESC LIMIT 4")){


                                              foreach($listAnnonces as $object){

                                                  echo "<div class = 'row rubrique'>";
                                                      
                                                            echo "<a href = 'afficherAnnonces.php?idAnnonces=".$object->idAnnonces."&idCandidat=".$object->idCandidat."&id=".$object->idRecruteur."&domaine=".$object->domaineRecruteur."&nature=".$object->nature."'><div class = 'col-md-3'><img class = 'img-responsive' src = 'img\\".$object->photoRecruteur."' style = 'height:60px;width:100px'/></div><div class = 'col-md-6' style = 'height:80px;color:#353232'><span class = 'titreAnnonce'>".$object->titre."</span><br/><span class = 'nomRecruteur'>".$object->nomRecruteur.

                                                            "</span><br/></div><div class = 'col-md-3'  style = 'margin-top:20px;left:40px'><i class = 'col-md-4 fa fa-map-marker'  style = 'margin-top:2px'></i><span class = 'col-md-8' style = 'color:#7a7a7a;margin-left:-25px'>".$object->regionRecruteur."</span></div></a>";
                                              
                                                  echo "</div>";

                                              }

                                    }
                                    else if($listAnnonces == null){
                      
                                        echo "<div class = 'annonces col-md-10 col-xs-12 col-md-offset-1'>";

                                              echo "<div class = 'row'>";

                                                  echo "<div class = 'offre-a-la-une col-md-7'>";

                                                   echo "<div class = 'row titre-offre-a-la-une'><h4 class = 'text-center'>Offres a la une</h4></div>";

                                                    echo "<class = 'lead'>Aucun offre recent</div>";

                                               echo "</div>";

                                        echo "</div>";


                    
                                    }

                      echo "</div>";

                  echo "</div>";

                            echo "<div class = 'conseil-emploi col-md-4 col-md-offset-1'>";

                              echo "<div class = 'row'><div class = 'col-md-12 titre-conseil-emploi'><h4 class = 'text-center'>Conseil emploi</h4></div></div>";
                              echo "<div class = 'row'><img class = 'img-responsive' src = 'img/artoratoire.png'/><a href = '#' style = 'margin-top:-30px;color:black'>Retour aux etudes a 35 ans : failes vous confiance!</a></div>";
                              echo "<div class = 'row'><img class = 'img-responsive' src = 'img/bonheur&responsabilite.png'/></div>";
                              echo "<div class = 'row'><img class = 'img-responsive' src = 'img/testDeRecrutement.png'/></div>";
                              echo "<div class = 'row'><img class = 'img-responsive' src = 'img/44.png'/></div>";

                              echo "</div>";



                  echo "</div>";

                echo "</div>";





  }

  

?>