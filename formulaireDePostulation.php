<?php

  require "Autoloader.php";
  
  Autoloader::register();
  
  $gdf = new GenerateurDuFormulaire();
  
      echo $gdf->form("f27","postuler.php","post");
        
          echo "Veuillez rediger une lettre de motivation : ".$gdf->textArea("lettreDeMotivation","lettreDeMotivation");
          echo $gdf->hidden("idAnnonces",$_POST['idAnnonces']);
          echo $gdf->hidden("idCandidat",$_POST['idCandidat']);
          echo $gdf->hidden("id",$_POST['id']);
          echo $gdf->hidden("domaine",$_POST['domaine']);
          echo $gdf->hidden("nature",$_POST['nature']);
          echo $gdf->submit("envoyer","envoyer","envoyer");
          
      echo $gdf->endForm();

?>