<?php

  require "Autoloader.php";
  
  Autoloader::register();

    $compte = new Compte($_POST['nature']);
    
    $gdf = new GenerateurDuFormulaire();

    $compte->setId($_POST['id']);
    
    $compte->setDomaine($_POST['domaine']);
    
    echo "<script type = 'text/javascript'> alert('ATTENTION ! vous etes sur le point de supprimer votre compte <br/> voulez-vous continuer',true,false); </script>";

        if($compte->getNature() == 'candidat'){
        
            if($compte->modifierOuSupprimerCompte("DELETE FROM candidat WHERE idCandidat = ".$compte->getId())){

                  echo "Votre compte a ete supprimer Voulez-vous <a href = 'inscrire.php'>creer un nouveau compte</a>";

            }
            
        }
        
        else if($compte->getNature() == 'recruteur'){
        
              if($compte->modifierOuSupprimerCompte("DELETE FROM recruteur WHERE idRecruteur = ".$compte->getId())){

                  echo "Votre compte a ete supprimer Voulez-vous <a href = 'inscrire.php'>creer un nouveau compte</a>";

            }
        
        }





?>