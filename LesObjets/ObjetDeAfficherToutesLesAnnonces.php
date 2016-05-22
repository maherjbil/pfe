<?php

  require "Autoloader.php";
  
  Autoloader::register();
  
  $gdf = new GenerateurDuFormulaire();

  if(isset($_SESSION['id']) && isset($_SESSION['domaine']) && isset($_SESSION['nature'])){



                  $annonces = new Annonces($_SESSION['id'],$_SESSION['domaine'],$_SESSION['nature']);
  
                  $annonces->setIdCandidat($_SESSION['id']);

                  echo "<div>".$gdf->form("f13","rechercherAnnonceEtCandidature.php","get")."<div class = 'col-md-10 col-md-offset-1 formulaire-recherche-personnalisee'><div class = 'col-md-4'><input class = 'form-control' col-md-4 type = 'text' name = 'motCle' id = 'motCle' placeholder = 'mot cle...'></div><div class = 'col-md-4'>".$gdf->select("categories","categories").$gdf->option("toutesLesCategories","toutes les categories").$gdf->endSelect()."</div><div class = 'col-md-2'>".$gdf->hidden("id",$annonces->getId()).$gdf->hidden("domaine",$annonces->getDomaine()).$gdf->hidden("nature",$annonces->getNature()).$gdf->hidden("idCandidat",$annonces->getIdCandidat()).$gdf->submit("recherchePersonnalisee","recherchePersonnalisee","rechercher","btn btn-default")."</div>".$gdf->endForm()."</div></div>";

                  echo "<div class = 'logos-defiles'><marquee><a href = 'http://www.keejob.com'><img src = 'img/logo_keejob.png' alt = 'keejob'></a> <a href = 'http://www.tanitjobs.com'><img src = 'img/logo-tanitjobs.png' alt = 'tanitjobs'></a> <a href = 'http://www.tunisieTravail.com'><img src = 'img/logo_tunisieTravail.png' alt = 'tunisie travail'></a> <a href = 'http://www.exceljob.com'><img src = 'img/logo-exelJob.png' alt = 'excel'></a></marquee></div>";

                    echo "<div class = 'annonces col-md-10 col-xs-12 col-md-offset-1'>";

                      echo "<div class = 'row'>";

                        echo "<div class = 'col-md-7'>";

                          echo "<div class = 'offre-a-la-une'>";

                            echo "<div class = 'row titre-offre-a-la-une'><h4 class = 'text-center'>Offres a la une</h4></div>";
                  
                                    if($listAnnonces = $annonces->afficherAnnonces("select * from annonces,recruteur where annonces.idRecruteur = recruteur.idRecruteur")){


                                              foreach($listAnnonces as $object){

                                                  echo "<div class = 'row rubrique'>";
                                                      
                                                            echo "<div class = 'col-md-3'><img class = 'img-responsive' src = '".$object->photoRecruteur."'></div><div class = 'col-md-6'><b>".$object->titre."</b><br><b>".$object->nomRecruteur.

                                                            "</b><br/><p>".$object->contenu."</p></div><div class = 'col-md-3'><i class = 'fa fa-map-marker'>".$object->regionRecruteur."</i></div>".

                                                            $gdf->form("f25","afficherAnnonces.php","post").$gdf->hidden("idAnnonces",$object->idAnnonces).

                                                            $gdf->hidden("id",$object->idRecruteur).$gdf->hidden("domaine",$object->domaineRecruteur).

                                                            $gdf->hidden("nature",$object->nature).$gdf->submit("afficherAnnonces","afficherAnnonces","afficher","btn btn-default").$gdf->endForm();
                                              
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
                                                      
                                                            echo "<div class = 'col-md-3'><img class = 'img-responsive' src = '".$object->photoRecruteur."'></div><div class = 'col-md-6'><b>".$object->titre."</b><br><b>".$object->nomRecruteur.

                                                            "</b><br/><p>".$object->contenu."</p></div><div class = 'col-md-3'><i class = 'fa fa-map-marker'>".$object->regionRecruteur."</i></div>".

                                                            $gdf->form("f25","afficherAnnonces.php","post").$gdf->hidden("idAnnonces",$object->idAnnonces).$gdf->hidden("idCandidat",$object->idCandidat).

                                                            $gdf->hidden("id",$object->idRecruteur).$gdf->hidden("domaine",$object->domaineRecruteur).

                                                            $gdf->hidden("nature",$object->nature).$gdf->submit("afficherAnnonces","afficherAnnonces","afficher","btn btn-default").$gdf->endForm();
                                              
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





        echo "<div class = 'logos-defiles'><marquee><a href = 'http://www.keejob.com'><img src = 'img/logo_keejob.png' alt = 'keejob'></a> <a href = 'http://www.tanitjobs.com'><img src = 'img/logo-tanitjobs.png' alt = 'tanitjobs'></a> <a href = 'http://www.tunisieTravail.com'><img src = 'img/logo_tunisieTravail.png' alt = 'tunisie travail'></a> <a href = 'http://www.exceljob.com'><img src = 'img/logo-exelJob.png' alt = 'excel'></a></marquee></div>";

                    echo "<div class = 'annonces col-md-10 col-xs-12 col-md-offset-1'>";

                      echo "<div class = 'row'>";

                        echo "<div class = 'col-md-7'>";

                          echo "<div class = 'offre-a-la-une'>";

                            echo "<div class = 'row titre-offre-a-la-une'><h4 class = 'text-center'>Offres a la une</h4></div>";
                  
                                    if($listAnnonces = $annonces->afficherAnnonces("select * from annonces,recruteur where annonces.idRecruteur = recruteur.idRecruteur")){


                                              foreach($listAnnonces as $object){

                                                  echo "<div class = 'row rubrique'>";
                                                      
                                                            echo "<div class = 'col-md-3'><img class = 'img-responsive' src = '".$object->photoRecruteur."'></div><div class = 'col-md-6'><b>".$object->titre."</b><br><b>".$object->nomRecruteur.

                                                            "</b><br/><p>".$object->contenu."</p></div><div class = 'col-md-3'><i class = 'fa fa-map-marker'>".$object->regionRecruteur."</i></div>".

                                                            $gdf->form("f25","afficherAnnonces.php","post").$gdf->hidden("idAnnonces",$object->idAnnonces).

                                                            $gdf->hidden("id",$object->idRecruteur).$gdf->hidden("domaine",$object->domaineRecruteur).

                                                            $gdf->hidden("nature",$object->nature).$gdf->submit("afficherAnnonces","afficherAnnonces","afficher","btn btn-default").$gdf->endForm();
                                              
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
                                                      
                                                            echo "<div class = 'col-md-3'><img class = 'img-responsive' src = '".$object->photoRecruteur."'></div><div class = 'col-md-6'><b>".$object->titre."</b><br><b>".$object->nomRecruteur.

                                                            "</b><br/><p>".$object->contenu."</p></div><div class = 'col-md-3'><i class = 'fa fa-map-marker'>".$object->regionRecruteur."</i></div>".

                                                            $gdf->form("f25","afficherAnnonces.php","post").$gdf->hidden("idAnnonces",$object->idAnnonces).$gdf->hidden("idCandidat",$object->idCandidat).

                                                            $gdf->hidden("id",$object->idRecruteur).$gdf->hidden("domaine",$object->domaineRecruteur).

                                                            $gdf->hidden("nature",$object->nature).$gdf->submit("afficherAnnonces","afficherAnnonces","afficher","btn btn-default").$gdf->endForm();
                                              
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