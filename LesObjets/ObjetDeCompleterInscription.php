<?php

  require "Autoloader.php";

    Autoloader::register();
    
      if($_POST['nature'] == 'candidat'){
      
        $candidat = new Completer($_POST['prenom'],$_POST['specialite'],$_POST['domaine'],$_POST['niveau'],$_POST['pays'],$_POST['region'],$_POST['ville'],$_POST['numeroTelephone']);
        if($candidat->updateCandidat("update candidat set specialite = '".$candidat->getSpecialite()."',domaine = '".$candidat->getDomaine()."',niveau = '".$candidat->getNiveau()."',pays = '".$candidat->getPays()."',region = '".$candidat->getRegion()."',ville = '".$candidat->getVille()."',numeroTelephone = '".$candidat->getNumeroTelephone()."'")){
          
          echo $candidat->getPrenom()." votre inscription est terminee <br/> voulez-vous <a href = 'connexion.php'>se connecter</a>";
        
        }
        else{
        
          echo "insertion echouee veuillez reessayer <br/>";
        
        }
      
      }
      
      if($_POST['nature'] == 'recruteur'){
        
        $null = "";
        
        $recruteur = new Completer($_POST['prenom'],$null,$_POST['domaine'],$null,$_POST['pays'],$_POST['region'],$_POST['ville'],$_POST['numeroTelephone']);
      
        if($recruteur->updateRecruteur("update recruteur set domaine = '".$recruteur->getDomaine()."',pays = '".$recruteur->getPays()."',region = '".$recruteur->getRegion()."',ville = '".$recruteur->getVille()."',numeroTelephone = '".$recruteur->getNumeroTelephone()."'")){
        
          echo $recruteur->getPrenom()." votre inscription est terminee voulez-vous <a href = 'connexion.php'>se connecter</a><br/>";
        
        }
        else{
        
          echo "insertion echouee veuillez reessayer <br/>";
        
        } 
      
      
      }

?>