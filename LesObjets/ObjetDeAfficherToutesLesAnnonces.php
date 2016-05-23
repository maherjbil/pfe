<?php

  require "Autoloader.php";
  
  Autoloader::register();
  
  $gdf = new GenerateurDuFormulaire();

  if(isset($_SESSION['id']) && isset($_SESSION['domaine']) && isset($_SESSION['nature'])){



                  $annonces = new Annonces($_SESSION['id'],$_SESSION['domaine'],$_SESSION['nature']);
  
                  $annonces->setIdCandidat($_SESSION['id']);

                  echo "<div>".$gdf->form("f13","rechercherAnnonceEtCandidature.php","get")."<div class = 'col-md-10 col-md-offset-1 formulaire-recherche-personnalisee'><div class = 'col-md-4'><input class = 'form-control' col-md-4 type = 'text' name = 'motCle' id = 'motCle' placeholder = 'mot cle...'></div><div class = 'col-md-4'>".$gdf->select("categories","categories").$gdf->option("toutesLesCategories","toutes les categories").$gdf->endSelect()."</div><div class = 'col-md-2'>".$gdf->hidden("id",$annonces->getId()).$gdf->hidden("domaine",$annonces->getDomaine()).$gdf->hidden("nature",$annonces->getNature()).$gdf->hidden("idCandidat",$annonces->getIdCandidat()).$gdf->submit("recherchePersonnalisee","recherchePersonnalisee","rechercher","btn btn-default")."</div>".$gdf->endForm()."</div></div>";

                  echo "<div class = 'container logos-defiles'><div class = 'row'><marquee><div class = 'col-md-3'><a href = 'http://www.keejob.com'><img class = 'img-responsive' src = 'img/logo_keejob.png' alt = 'keejob'></a></div><div class = 'col-md-3'><a href = 'http://www.tanitjobs.com'><img class = 'img-responsive' src = 'img/logo-tanitjobs.png' alt = 'tanitjobs'></a></div><div class = 'col-md-3'><a href = 'http://www.tunisieTravail.com'><img class = 'img-responsive' src = 'img/logo_tunisieTravail.png' alt = 'tunisie travail'></a></div><div class = 'col-md-3'><a href = 'http://www.exceljob.com'><img class = 'img-responsive' src = 'img/logo-exelJob.png' alt = 'excel'></a></div></marquee></div></div>";

                    echo "<div class = 'annonces col-md-10 col-xs-12 col-md-offset-1'>";

                      echo "<div class = 'row'>";

                        echo "<div class = 'col-md-7'>";

                          echo "<div class = 'offre-a-la-une'>";

                            echo "<div class = 'row titre-offre-a-la-une'><h4 class = 'text-center'>Offres a la une</h4></div>";
                  
                                    if($listAnnonces = $annonces->afficherAnnonces("select * from annonces,recruteur where annonces.idRecruteur = recruteur.idRecruteur")){


                                              foreach($listAnnonces as $object){

                                                  echo "<div class = 'row rubrique'>";
                                                      
                                                            echo "<a href = 'afficherAnnonces.php?idAnnonces=".$object->idAnnonces."&idCandidat=".$object->idCandidat."&id=".$object->idRecruteur."&domaine=".$object->domaineRecruteur."&nature=".$object->nature."'><div class = 'col-md-3'><img class = 'img-responsive' src = 'img\\".$object->photoRecruteur."' style = 'height:60px;width:100px'></div><div class = 'col-md-6'  style = 'height:80px;color:#353232'><b class = 'titreAnnonce'>".$object->titre."</b><br><b class = 'nomRecruteur'>".$object->nomRecruteur.

                                                            "</b><br/></div><div class = 'col-md-3' style = 'margin-top:20px;left:40px'><i class = 'col-md-4 fa fa-map-marker' style = 'margin-top:2px'></i><span class = 'col-md-8' style = 'color:#7a7a7a;margin-left:-25px'>".$object->regionRecruteur."</span></div></a>";
                                              
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

                                    if($listAnnonces = $annonces->afficherAnnonces("select * from annonces,recruteur where annonces.idRecruteur = recruteur.idRecruteur")){


                                              foreach($listAnnonces as $object){

                                                  echo "<div class = 'row rubrique'>";
                                                      
                                                            echo "<a href = 'afficherAnnonces.php?idAnnonces=".$object->idAnnonces."&idCandidat=".$object->idCandidat."&id=".$object->idRecruteur."&domaine=".$object->domaineRecruteur."&nature=".$object->nature."'><div class = 'col-md-3'><img class = 'img-responsive' src = 'img\\".$object->photoRecruteur."'style = 'height:60px;width:100px'/></div><div class = 'col-md-6 style = 'color:#353232' style = 'height:80px'><b class = 'titreAnnonce'>".$object->titre."</b><br><b class = 'nomRecruteur'>".$object->nomRecruteur.

                                                            "</b><br/></div><div class = 'col-md-3'><i class = 'col-md-4 fa fa-map-marker'></i><span class = 'col-md-8' style = 'color:#7a7a7a'>".$object->regionRecruteur."</span></div></a>";
                                              
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
                              echo "<div class = 'row'><img class = 'img-responsive' src = 'img/art-oratoire.jpg'/></div>";
                              echo "<div class = 'row'><img class = 'img-responsive' src = 'img/bonheur_responsabilite.jpg'/></div>";
                              echo "<div class = 'row'><img class = 'img-responsive' src = 'img/testsderecrutement.jpg'/></div>";
                              echo "<div class = 'row'><img class = 'img-responsive' src = 'img/3150.jpg'/></div>";

                              echo "</div>";



                  echo "</div>";

                echo "</div>";




  }
  else{



        $annonces = new Annonces('null','null','null');
  
                  $annonces->setIdCandidat('null');



        echo "<div>".$gdf->form("f13","rechercherAnnonceEtCandidature.php","get")."<div class = 'col-md-10 col-md-offset-1 formulaire-recherche-personnalisee'><div class = 'col-md-4'><input class = 'form-control' col-md-4 type = 'text' name = 'motCle' id = 'motCle' placeholder = 'mot cle...'></div><div class = 'col-md-4'>".$gdf->select("categories","categories").$gdf->option("toutesLesCategories","toutes les categories").$gdf->endSelect()."</div><div class = 'col-md-2'>".$gdf->submit("recherchePersonnalisee","recherchePersonnalisee","rechercher","btn btn-default")."</div>".$gdf->endForm()."</div>";





        echo "<div class = 'container logos-defiles'><div class = 'row'><marquee><div class = 'col-md-3'><a href = 'http://www.keejob.com'><img class = 'img-responsive' src = 'img/logo_keejob.png' alt = 'keejob'></a></div><div class = 'col-md-3'><a href = 'http://www.tanitjobs.com'><img class = 'img-responsive' src = 'img/logo-tanitjobs.png' alt = 'tanitjobs'></a></div><div class = 'col-md-3'><a href = 'http://www.tunisieTravail.com'><img class = 'img-responsive' src = 'img/logo_tunisieTravail.png' alt = 'tunisie travail'></a></div><div class = 'col-md-3'><a href = 'http://www.exceljob.com'><img class = 'img-responsive' src = 'img/logo-exelJob.png' alt = 'excel'></a></div></marquee></div>";

                    echo "<div class = 'annonces col-md-10 col-xs-12 col-md-offset-1'>";

                      echo "<div class = 'row'>";

                        echo "<div class = 'col-md-7'>";

                          echo "<div class = 'offre-a-la-une'>";

                            echo "<div class = 'row titre-offre-a-la-une'><h4 class = 'text-center'>Offres a la une</h4></div>";
                  
                                    if($listAnnonces = $annonces->afficherAnnonces("select * from annonces,recruteur where annonces.idRecruteur = recruteur.idRecruteur")){


                                              foreach($listAnnonces as $object){

                                                  echo "<div class = 'row rubrique'>";
                                                      
                                                            echo "<a href = 'afficherAnnonces.php?idAnnonces=".$object->idAnnonces."&idCandidat=".$object->idCandidat."&id=".$object->idRecruteur."&domaine=".$object->domaineRecruteur."&nature=".$object->nature."'><div class = 'col-md-3'><img class = 'img-responsive' src = '".$object->photoRecruteur."'></div><div class = 'col-md-6' style = 'color:#353232'><b class = 'titreAnnonce'>".$object->titre."</b><br><b class = 'nomRecruteur'>".$object->nomRecruteur.

                                                            "</b><br/></div><div class = 'col-md-3'><i class = 'col-md-4 fa fa-map-marker'></i><span class = 'col-md-8' style = '#7a7a7a'>".$object->regionRecruteur."</span></div></a>";
                                              
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

                                    if($listAnnonces = $annonces->afficherAnnonces("select * from annonces,recruteur where annonces.idRecruteur = recruteur.idRecruteur")){


                                              foreach($listAnnonces as $object){

                                                  echo "<div class = 'row rubrique'>";
                                                      
                                                            echo "<a href = 'afficherAnnonces.php?idAnnonces=".$object->idAnnonces."&idCandidat=".$object->idCandidat."&id=".$object->idRecruteur."&domaine=".$object->domaineRecruteur."&nature=".$object->nature."'><div class = 'col-md-3'><img class = 'img-responsive' src = '".$object->photoRecruteur."'></div><div class = 'col-md-6' style = 'color:#353232'><b class = 'titreAnnonce'>".$object->titre."</b><br><b class = 'nomRecruteur'>".$object->nomRecruteur.

                                                            "</b><br/></div><div class = 'col-md-3'><i class = 'col-md-4 fa fa-map-marker'></i>span class = 'col-md-8' style = 'color:#7a7a7a'>".$object->regionRecruteur."</span></div></a>";
                                              
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
                              echo "<div class = 'row'><img class = 'img-responsive' src = 'img/art-oratoire.jpg'/></div>";
                              echo "<div class = 'row'><img class = 'img-responsive' src = 'img/bonheur_responsabilite.jpg'/></div>";
                              echo "<div class = 'row'><img class = 'img-responsive' src = 'img/testsderecrutement.jpg'/></div>";
                              echo "<div class = 'row'><img class = 'img-responsive' src = 'img/3150.jpg'/></div>";

                              echo "</div>";



                  echo "</div>";

                echo "</div>";





  }

  

?>