<?php

    require "Autoloader.php";

    Autoloader::register();
    
    $compte = new Compte($_POST['nature']);
    
    $gdf = new GenerateurDuFormulaire();

    $compte->setId($_POST['id']);
    
    $compte->setDomaine($_POST['domaine']);
    
      echo "<h3>Veuillez saisir les nouvelles donnees</h3>";
    
          if($compte->getNature() == 'candidat'){
    
                if($list = $compte->afficherCompte("select * from candidat where idCandidat = ".$compte->getId())){
                
                           echo "<table border = 2>";
                            
                               echo "<tr><td>Nom</td><td>Nouveau nom</td><td>Prenom</td><td>Nouveau prenom</td><td>Date de naissance</td><td>Nouvelle date</td><td>Login</td><td>Nouveau login</td><td>Mot de passe</td><td>Nouveau mot de passe</td><td>Specicialite</td><td>Domaine</td><td>Niveau</td><td>Nature</td></tr>";
                                
                                    echo $gdf->form("f37","modifierCompte.php","post");;
                                
                                         foreach($list as $object){
                                          
                                             echo "<tr><td>".$object->nom."</td><td>".$gdf->input("text","nom","nom")."</td><td>".$object->prenom."</td><td>".$gdf->input("text","prenom","prenom")."</td><td>".$object->dateNaiss."</td><td>".$gdf->input("text","dateNaiss","dateNaiss")."</td><td>".$object->login."</td><td>".$gdf->input("text","login","login")."</td><td>".$object->password."</td><td>".$gdf->input("password","password","password")."</td><td>".$object->specialite."</td><td>".$object->domaine."</td><td>".$object->niveau."</td><td>".$object->nature."</td></tr>";
                                          
                                         }
                                         
                                         echo $gdf->hidden("id",$compte->getId());
                                         
                                         echo $gdf->hidden("domaine",$compte->getDomaine());
                                         
                                         echo $gdf->hidden("nature",$compte->getNature());
                                         
                                         echo $gdf->submit("appliquerModification","appliquerModification","appliquer les modifications");
                                         
                                    echo $gdf->endForm();
                                    
                            echo "</table>";
                      
                }
    
          }
          
          else if($compte->getNature() == 'recruteur'){
          
                    if($list = $compte->afficherCompte("select * from recruteur where idRecruteur = ".$compte->getId())){
              
                          echo "<table border = 2>";
                          
                               echo "<tr><td>Nom</td><td>Nouveau nom</td><td>Prenom</td><td>Nouveau prenom</td><td>Date de naissance</td><td>Nouvelle date</td><td>Login</td><td>Nouveau Login</td><td>Nouveau login</td><td>Mot de passe</td><td>Nouveau mot de passe</td><td>Specialite</td><td>Domaine</td><td>Niveau</td><td>Nature</td></tr>";
                               
                                    echo $gdf->form("f36","modifierCompte.php","post");
                               
                                          foreach($list as $object){
                                          
                                                echo "<tr><td>".$object->nom."</td><td>".$gdf->input("text","nom","nom")."</td><td>".$object->prenom."</td><td>".$gdf->input("text","prenom","prenom")."</td><td>".$object->dateNaiss."</td><td>".$gdf->input("text","dateNiass","dateNaiss")."</td><td>".$object->login."</td><td>".$gdf->input("text","login","login")."</td><td>Mot de passe</td><td>".$gdf->input("password","password","password")."</td><td>".$object->domaine."</td><td>".$object->nature."</td></tr>";
                                          
                                          }
                                          
                                          echo $gdf->submit("appliquerModification","appliquerModification","appliquer les modifications");
                                          
                                    echo $gdf->endForm();
              
                    }
          
          }



?>