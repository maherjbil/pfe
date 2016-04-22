<?php

  require "Autoloader.php";

  Autoloader::register();

  $postulation = new Postulation($_POST['nature']);

  $postulation->setIdCandidat($_POST['idCandidat']);
  
  $postulation->setIdPostulation($_POST['idPostulation']);
  
  $postulation->setLettreDeMotivation($_POST['nouvelleLettre']);
  
  $postulation->setDomaine($_POST['domaine']);
  
  
  $gdf = new GenerateurDuFormulaire();

        if($postulation->postuler("update postulation set lettreDeMotivation = '".$postulation->getLettreDeMotivation()."' where idPostulation = ".$postulation->getIdPostulation())){
        
            echo "Les modification ont etaient effectues avec succes ";
            
            echo "Voulez-vous consulter ".$gdf->form("f31","afficherCandidats.php","post").$gdf->hidden("idPostulation",$postulation->getIdPostulation()).
            $gdf->hidden("id",$postulation->getIdCandidat()).$gdf->hidden("lettreDeMotivation",$postulation->getLettreDeMotivation()).
            $gdf->hidden("domaine",$postulation->getDomaine()).$gdf->hidden("nature",$postulation->getNature()).
            $gdf->submit("afficherCandidats","afficherCandidats","votre candidature").$gdf->endForm();
        
        }
        else{
        
            echo "La modification a ete echouee veuillez ".$gdf->form("f32","formulaireDeModificationDeLettreDeMotivation.php","post").$gdf->hidden("idPostulation",$postulation->getIdPostulation()).
            $gdf->hidden("idCandidat",$postulation->getIdCandidat()).$gdf->hidden("lettreDeMotivation",$postulation->getLettreDeMotivation()).
            $gdf->hidden("domaine",$postulation->getDomaine()).$gdf->hidden("nature",$postulation->getNature()).
            $gdf->submit("reessayerModificationLettre","reessayerModificationLettre","reessayer").$gdf->endForm();
        
        }






?>