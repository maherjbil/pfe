<?php

  require "Autoloader.php";
  
  Autoloader::register();
  
  $postulation = new Postulation($_POST['nature']);
  $postulation->setDomaine($_POST['domaine']);
  $postulation->setIdAnnonces($_POST['idAnnonces']);
  $postulation->setIdCandidat($_POST['idCandidat']);
  $postulation->setIdRecruteur($_POST['id']);
  $postulation->setLettreDeMotivation($_POST['lettreDeMotivation']);
  $default = 'null';

  if($postulation->postuler("insert into postulation set lettreDeMotivation = '".$postulation->getLettreDeMotivation()."',idAnnonces = '".$postulation->getIdAnnonces()."',idRecruteur = '".$postulation->getIdRecruteur()."',idCandidat = '".$postulation->getIdCandidat()."'")){
  
      echo "Vos donnees ont etaient envoyees <br/>";
  
  }
  else{
  
    echo "echec de l'envoie des donnees veuillez reessayer <br/>";
  
  }

?>