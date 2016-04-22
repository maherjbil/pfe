<?php

    require "Autoloader.php";

    Autoloader::register();

    $compte = new Compte($_POST['nature']);
    
    $gdf = new GenerateurDuFormulaire();

    $compte->setId($_POST['id']);
    
    $compte->setDomaine($_POST['domaine']);

        if($compte->getNature() == 'candidat'){
        
            if($comptes = $compte->afficherCompte("SELECT * FROM candidat WHERE idCandidat = ".$compte->getId())){
            
                echo "<table border = 2>";
                
                echo "<tr><td>Nom</td><td>Prenom</td><td>Date de naissance</td><td>Nom d'utilisateur</td><td>Mot de passe</td><td>Specialite</td><td>Domaine</td><td>Niveau d'education</td><td>Nature</td></tr>";
                
                      foreach($comptes as $object){
                      
                            echo "<tr><td>".$object->nom."</td><td>".$object->prenom."</td><td>".$object->dateNaiss."</td><td>".$object->login."</td><td>".$object->password."</td><td>".$object->specialite."</td><td>".$object->domaine."</td><td>".$object->niveau."</td><td>".$object->nature."</td><td>".
                            
                            $gdf->form("f32","formulaireDeModificationDuCompte.php","post").$gdf->hidden("id",$compte->getId()).$gdf->hidden("domaine",$compte->getDomaine()).$gdf->hidden("nature",$compte->getNature()).$gdf->submit("modifierCompte","modifierCompte","modifier").$gdf->endForm()."</td><td>".
                            
                            $gdf->form("f33","supprimerCompte.php","post").$gdf->hidden("id",$compte->getId()).$gdf->hidden("domaine",$compte->getDomaine()).$gdf->hidden("nature",$compte->getNature()).$gdf->submit("desabonner","desabonner","desabonner").$gdf->endForm()."</td></tr>";
                      
                      }
                      
                 echo "</table>";
            
            }
        
        }
        
        else if($compte->getNature() == 'recruteur'){
        
            if($comptes = $compte->afficherCompte("SELECT * FROM Recruteur WHERE idRecruteur = ".$compte->getId())){
            
                echo "<table border = 2>";
                
                echo "<tr><td>Nom</td><td>Prenom</td><td>Date de naissance</td><td>Nom d'utilisateur</td><td>Mot de passe</td><td>Domaine</td><td>Nature</td></tr>";
                
                      foreach($comptes as $object){
                      
                            echo "<tr><td>".$object->nom."</td><td>".$object->prenom."</td><td>".$object->dateNaiss."</td><td>".$object->login."</td><td>".$object->password."</td><td>".$object->domaine."</td><td>".$object->nature."</td><td>".
                            
                            $gdf->form("f34","formulaireDeModificationDuCompte.php","post").$gdf->hidden("id",$compte->getId()).$gdf->hidden("domaine",$compte->getDomaine()).$gdf->hidden("nature",$compte->getNature()).$gdf->submit("modifierCompte","modifierCompte","modifier").$gdf->endForm()."</td><td>".
                            
                            $gdf->form("f35","supprimerCompte.php","post").$gdf->hidden("id",$compte->getId()).$gdf->hidden("domaine",$compte->getDomaine()).$gdf->hidden("nature",$compte->getNature()).$gdf->submit("desabonner","desabonner","desabonner").$gdf->endForm()."</td></tr>";
                      
                      }
                      
                 echo "</table>";
            
            }
        
        }
?>