<?php

  require "Autoloader.php";

    Autoloader::register();
    
      if($_POST['nature'] == 'condidat'){
      
        $condidat = new Completer();
        if($condidat->updateCondidat("update condidat set specialite = '".$_POST['specialite']."',domaine = '".$_POST['domaine']."',niveau = '".$_POST['niveau']."'")){
          
          echo $_POST['prenom']." votre inscription est terminee <br/>";
        
        }
        else{
        
          echo "insertion echouee veuillez reessayer <br/>";
        
        }
      
      }
      
      if($_POST['nature'] == 'recruteur'){
      
        $recruteur = new Completer();
      
        if($recruteur->updateRecruteur("update recruteur set domaine = '".$_POST['domaine']."'")){
        
          echo $_POST['prenom']." votre inscription est terminee <br/>";
        
        }
        else{
        
          echo "insertion echouee veuillez reessayer <br/>";
        
        } 
      
      
      }



?>