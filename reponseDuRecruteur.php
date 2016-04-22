<?php

  require "Autoloader.php";
  
  Autoloader::register();
  
  $reponse = new Postulation($_POST['nature']);
  
  $gdf = new GenerateurDuFormulaire();
  
  $reponse->setIdCandidat($_POST['idCandidat']);
  
  $reponse->setReponseRecruteur($_POST['reponseDuRecruteur']);
  
  $reponse->setIdPostulation($_POST['idPostulation']);
  
  if($reponse->postuler("update postulation set reponseDuRecruteur = '".$reponse->getReponseRecruteur()."' where idPostulation = ".$reponse->getIdPostulation())){
  
      echo "Votre reponse a ete envoyer <br/><br/>";
  
  }
  else{
  
      echo "l'envoie du reponse a ete echoue veuillez ".$gdf->form("f28","afficherCandidats.php","post").$gdf->hidden("id",$reponse->getIdCandidat()).
      $gdf->hidden("idPostulation",$reponse->getIdPostulation()).$gdf->hidden("nature",$reponse->getNature()).
      $gdf->submit("reessayerReponse","reessayerReponse","reessayer").$gdf->endForm();
  
  }


?>