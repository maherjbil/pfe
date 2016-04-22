<?php

  require "Autoloader.php";
  
  Autoloader::register();
  
  $annonces = new Annonces($_POST['id'],$_POST['domaine'],$_POST['nature']);
    
    $annonces->setPays($_POST['pays']);
    $annonces->setRegion($_POST['region']);
    $annonces->setVille($_POST['ville']);
    $annonces->setSpecialite($_POST['specialite']);
    $annonces->setNiveau($_POST['niveau']);
    
    if($listAnnonces = $annonces->afficherAnnonces("select * from annonces,candidat,recruteur where annonces.idCandidat = candidat.idCandidat and annonces.domaine = '".$annonces->getDomaine()."' or annonces.idRecruteur = recruteur.idRecruteur and annonces.domaine = '".$annonces->getDomaine()."'")){
    
      echo "<h3>Voila la liste des annonces correspondantes aux criteres de recherche que vous avez choisit</h3>";
      echo "<table border = 2>";
      echo "<tr><td>Titre</td><td>Contenu</td><td>Date de publication</td><td>Numero de telephone</td></tr>";
      
        foreach($listAnnonces as $object){
      
          echo "<tr><td>".$object->nom."</td><td>".$object->contenu."</td><td>".$object->datePublication."</td><td>".$object->numeroTelephone."</td></tr>";
      
        }
      
      echo "</table>";
      
    }
    else if($listAnnonces == null){
    
      echo "aucune annonce ne corresponde aux criteres de selection que vous avez choisit <br/>";
    
    }

?>