<?php

    require "Autoloader.php";
    
    Autoloader::register();
    
    $compte = new Compte($_POST['nature']);
    
    $gdf = new GenerateurDuFormulaire();

    $compte->setId($_POST['id']);
    
    $compte->setNom($_POST['nom']);
    
    $compte->setPrenom($_POST['prenom']);
    
    $compte->setDateNaiss($_POST['dateNaiss']);
    
    $compte->setLogin($_POST['login']);
    
    $compte->setPassword($_POST['password']);
    
    $compte->setDomaine($_POST['domaine']);
      
      
      if($compte->getNature() == 'candidat'){
        
          if($compte->modifierOuSupprimerCompte("update candidat set nom = '".$compte->getNom()."',prenom = '".$compte->getPrenom()."',dateNaiss = '".$compte->getDateNaiss()."',login = '".$compte->getLogin()."',password = '".$compte->getPassword()."'")){
        
                echo "Votre compte a ete modifier voulez-vous <a href = 'connexion.php'>se connecter</a>";
                
                echo "ou consulter votre ".$gdf->form("f38","afficherCompte.php","post").$gdf->hidden("id",$compte->getId()).$gdf->hidden("domaine",$compte->getDomaine()).$gdf->hidden("nature",$compte->getNature()).$gdf->submit("consulterCompte","consulterCompte","compte");
        
          }
          else{
          
                echo "la modification du compte a ete echouee veuillez ".
                
                $gdf->form("f33","formulaireDeModificationDuCompte.php","post").$gdf->hidden("id",$compte->getId()).$gdf->hidden("domaine",$compte->getDomaine).$gdf->hidden("nature",$compte->getNature()).$gdf->submit("reessayerModificationCompte","reessayerModificationCompte","reessayer").$gdf->endForm();
          
          }
       
       }
       
       else if($compte->getNature() == 'recruteur'){
       
            if($compte->modifierOuSupprimerCompte("update recruteur set nom = '".$compte->getNom()."',prenom = '".$compte->getPrenom()."',dateNaiss = '".$compte->getDateNaiss()."',login = '".$compte->getLogin()."',password = '".$compte->getPassword()."'")){
            
                 echo "votre compte a ete modifier voulez-vous <a href = 'connexion.php'>se connecter</a>";
            
            }
            else{
            
                 echo "la modification du compte a ete echouee veuillez ".
                
                $gdf->form("f34","formulaireDeModificationDuCompte.php","post").$gdf->hidden("id",$compte->getId()).$gdf->hidden("domaine",$compte->getDomaine).$gdf->hidden("nature",$compte->getNature()).$gdf->submit("reessayerModificationCompte","reessayerModificationCompte","reessayer").$gdf->endForm();
            
            }
       
       }







?>