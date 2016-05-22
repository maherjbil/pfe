<?php

  //require "Autoloader.php"; cette classe est appelee dans la page rechercherAnnoncesEtCandidature.php je ne peut pas la rediclarer
  
  Autoloader::register();

  if(isset($_SESSION['id']) && isset($_SESSION['domaine']) && isset($_SESSION['nature'])){



            $annonces = new Annonces($_SESSION['id'],$_SESSION['domaine'],$_SESSION['nature']);

                echo "<div class = 'col-md-10 col-md-offset-1'>";

                    $count = 0;

                    
                    if(isset($_GET['motCle'])){

                              if($listAnnonces1 = $annonces->afficherAnnonces("select * from annonces,recruteur where annonces.idRecruteur = recruteur.idRecruteur and annonces.titre = '".$_GET['motCle']."' or annonces.titre like '".$_GET['motCle']."%' or annonces.titre like '%".$_GET['motCle']."' or annonces.titre like '%".$_GET['motCle']."%' or annonces.contenu like '%".$_GET['motCle']."' or annonces.contenu like '".$_GET['motCle']."%' or annonces.contenu like '%".$_GET['motCle']."%' limit 1")){

                                  foreach($listAnnonces1 as $object1){

                                    $count += 1;

                                        echo "<div class = 'row ligne-de-resultat-de-recherche'>";

                                            echo "<div class = 'col-md-2'><img class = 'img-responsive' src = '".$object1->photoRecruteur."'></div><div class = 'col-md-4'><h4>".$object1->titre."</h4><br/><h4>".$object1->nomRecruteur."</h4></div><div class = 'col-md-4'><b>".$object1->villeRecruteur."</b><p>".$object1->datePublication."</p></div><div class = 'col-md-1'><i class = 'fa fa-envelope-o'></i></div><div class = 'col-md-1'><a href = 'ajouterFavoris.php?idAnnonces=".$object1->idAnnonces."'><i class = 'fa fa-star-o star-favoris'></i></a></div>";

                                        echo "</div>";
                                
                                  }

                              }


                    }

                          if($count == 0){

                                     echo "Aucune annonce n'est trouvee<br/>";

                          }          
                                   

                echo "</div>";



  }

  else{


        $annonces = new Annonces('null','null','null');

          echo "<div class = 'col-md-10 col-md-offset-1'>";

                    $count = 0;

                    
                    if(isset($_GET['motCle'])){

                              if($listAnnonces1 = $annonces->afficherAnnonces("select * from annonces,recruteur where annonces.idRecruteur = recruteur.idRecruteur and annonces.titre = '".$_GET['motCle']."' or annonces.titre like '".$_GET['motCle']."%' or annonces.titre like '%".$_GET['motCle']."' or annonces.titre like '%".$_GET['motCle']."%' or annonces.contenu like '%".$_GET['motCle']."' or annonces.contenu like '".$_GET['motCle']."%' or annonces.contenu like '%".$_GET['motCle']."%' limit 1")){

                                  foreach($listAnnonces1 as $object1){

                                    $count += 1;

                                        echo "<div class = 'row ligne-de-resultat-de-recherche'>";

                                            echo "<div class = 'col-md-2'><img class = 'img-responsive' src = '".$object1->photoRecruteur."'></div><div class = 'col-md-4'><h4>".$object1->titre."</h4><br/><h4>".$object1->nomRecruteur."</h4></div><div class = 'col-md-4'><b>".$object1->villeRecruteur."</b><p>".$object1->datePublication."</p></div><div class = 'col-md-1'><i class = 'fa fa-envelope-o'></i></div><div class = 'col-md-1'><a href = 'ajouterFavoris.php?idAnnonces=".$object1->idAnnonces."'><i class = 'fa fa-star-o star-favoris'></i></a></div>";

                                        echo "</div>";
                                
                                  }

                              }


                    }

                          if($count == 0){

                                     echo "Aucune annonce n'est trouvee<br/>";

                          }          
                                   

                echo "</div>";




  }


  
  
  

?>