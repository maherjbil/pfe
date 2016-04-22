<?php

  require "Autoloader.php";

  Autoloader::register();
  
  $postulation = new Postulation($_POST['nature']);

  $postulation->setIdCandidat($_POST['idCandidat']);
  
  $postulation->setIdPostulation($_POST['idPostulation']);
  
  $postulation->setLettreDeMotivation($_POST['lettreDeMotivation']);
  
  $postulation->setDomaine($_POST['domaine']);
  
  
  $gdf = new GenerateurDuFormulaire();

    echo "<table border = 2>";
    
      echo "<tr><td>Lettre de motivation</td><td>Saisir le nouveau contenu</td></tr>";
    
        echo $gdf->form("f30","modifierLettreDeMotivation.php","post");
    
              echo "<tr><td>{$postulation->getLettreDeMotivation()}</td><td>{$gdf->textArea("nouvelleLettre","nouvelleLettre")}</td></tr>";
    
              echo $gdf->hidden("idPostulation",$postulation->getIdPostulation());
    
              echo $gdf->hidden("idCandidat",$postulation->getIdCandidat());
    
              echo $gdf->hidden("domaine",$postulation->getDomaine());
          
              echo $gdf->hidden("nature",$postulation->getNature());
              
              echo $gdf->submit("appliquerModificationLettre","appliquerModificationLettre","appliquer les modifications");
    
        echo $gdf->endForm();
        
      echo "</table>";



?>