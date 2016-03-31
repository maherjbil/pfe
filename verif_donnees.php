<?php

  require "Autoloader.php";
    
    Autoloader::register();
    
    $default = 'null';
    
    if($_POST['nature'] == 'condidat'){
      
      $condidat = new Condidat($_POST['nom'],$_POST['prenom'],$_POST['dateNaiss'],$_POST['login'],$_POST['password'],$default,$default,$default,$_POST['nature']);
      
      if($condidat->insererDonnees("insert into condidat set nom = '".$condidat->nom."',prenom = '".$condidat->prenom."',dateNaiss = '".$condidat->dateNaiss."',login = '".$condidat->login."',password = '".$condidat->password."',specialite = '".$condidat->specialite."',domaine = '".$condidat->domaine."',nature = '".$condidat->nature."'")){
      
        echo "<b>".$condidat->prenom."</b> votre inscription a ete effectuer avec succes veuillez entrer ces informations supplimentaires pour terminer votre profils <br/>";
        echo "<b>".$condidat->prenom."</b> quelle est votre domaine d'activite ?";
        
        echo "<form name = 'f2' action = 'completer_inscription.php' method = 'post'>";
        
        echo "<input type = 'hidden' name = 'prenom' value = '".$condidat->prenom."'>";
        echo "<input type = 'hidden' name = 'login' value = '".$condidat->login."'>";
        echo "<input type = 'hidden' name = 'password' value = '".$condidat->password."'>";
        echo "<input type = 'hidden' name = 'nature' value = '".$condidat->nature."'>";
        
        echo "<select name = 'domaine' id = 'domaine'>";
        echo "<option value = 'ST'>Science et technologie</option>";
        echo "<option value = 'Arts'>Arts</option>";
        echo "<option value = 'sport'>Sport</option>";
        echo "</select>";
        echo " quelle est votre niveau d'education <select name = 'niveau' id = 'niveau'>";
        echo "<option value = 'bac'>Bac</option>";
        echo "<option value = 'bac+3'>Bac+3</option>";
        echo "<option value = 'bac+5'>Bac+5</option>";
        echo "<option value = 'plus'>Plus</option>";
        echo "</select>";
        echo " et quelle est votre specialite ? ";
        echo "<select name = 'specialite' id = 'specialite'>";
        echo "<option value = 'developpeur'>Developpeur</option>";
        echo "<option value = 'Designer'>Designer</option>";
        echo "<option value = 'ingenieur'>Ingenieur</option>";
        echo "</select>";
        echo "<input type = 'submit' name = 'envoyer' value = 'envoyer'>";
        echo "</form>";
      }
      else{
      
        echo "inscription echouee veuillez reessayer <br/>";
      
      }
    
    }
    else{
    
    
      $recruteur = new Recruteur($_POST['nom'],$_POST['prenom'],$_POST['dateNaiss'],$_POST['login'],$_POST['password'],$default,$_POST['nature']);
    
      
       if($recruteur->insererDonnees("insert into recruteur set nom = '".$recruteur->nom."',prenom = '".$recruteur->prenom."',dateNaiss = '".$recruteur->dateNaiss."',login = '".$recruteur->login."',password = '".$recruteur->password."',domaine = '".$recruteur->domaine."',nature = '".$recruteur->nature."'")){
      
        echo "<b>".$recruteur->prenom."</b> votre inscription a ete effectuer avec succes veuillez entrer ces informations supplimentaires pour terminer votre profils <br/>";
        echo "quel est votre domaine d'activite";
        echo "<form name = 'f3' action = 'completer_inscription.php' method = 'post'>"; 
         
        echo "<input type = 'hidden' name = 'prenom' value = '".$recruteur->prenom."'>";      
        echo "<input type = 'hidden' name = 'login' value = '".$recruteur->login."'>";
        echo "<input type = 'hidden' name = 'password' value = '".$recruteur->password."'>";
        echo "<input type = 'hidden' name = 'nature' value = '".$recruteur->nature."'>";
        
        
        
        echo "<select name = 'domaine' id = 'domaine'>";
        echo "<option value = 'st'>Science et technologie</option>";
        echo "<option value = 'arts'>Arts</option>";
        echo "<option value = 'sport'>Sport</option>";
        echo "</select>";
        echo "<input type = 'submit' name = 'envoyer' value = 'envoyer'>";
        echo "</form>";
      
      }
    
  
    }




?>