<!DOCTYPE html>
<html>
<head>
</head>
<body>
<section class = 'container-fluid'>
<?php

  require "Autoloader.php";

  Autoloader::register();

  $postulation = new Postulation($_POST['nature']);

  $postulation->setIdCandidat($_POST['idCandidat']);
  
  $postulation->setIdPostulation($_POST['idPostulation']);
  
  $postulation->setLettreDeMotivation($_POST['nouvelleLettre']);
  
  $postulation->setDomaine($_POST['domaine']);
  
  
  $gdf = new GenerateurDuFormulaire();

        if($postulation->postuler("UPDATE postulation SET lettreDeMotivation = '".$postulation->getLettreDeMotivation()."' WHERE idPostulation = ".$postulation->getIdPostulation())){
        
            echo "Les modification ont etaient effectues avec succes ";
            
            echo "Voulez-vous consulter ".$gdf->form("f31","afficherCandidats.php","post").$gdf->hidden("idPostulation",$postulation->getIdPostulation()).
            $gdf->hidden("id",$postulation->getIdCandidat()).$gdf->hidden("lettreDeMotivation",$postulation->getLettreDeMotivation()).
            $gdf->hidden("domaine",$postulation->getDomaine()).$gdf->hidden("nature",$postulation->getNature()).
            $gdf->submit("afficherCandidats","afficherCandidats","votre candidature","btn btn-default").$gdf->endForm();
        
        }
        else{
        
            echo "La modification a ete echouee veuillez ".$gdf->form("f32","formulaireDeModificationDeLettreDeMotivation.php","post").$gdf->hidden("idPostulation",$postulation->getIdPostulation()).
            $gdf->hidden("idCandidat",$postulation->getIdCandidat()).$gdf->hidden("lettreDeMotivation",$postulation->getLettreDeMotivation()).
            $gdf->hidden("domaine",$postulation->getDomaine()).$gdf->hidden("nature",$postulation->getNature()).
            $gdf->submit("reessayerModificationLettre","reessayerModificationLettre","reessayer","btn btn-default").$gdf->endForm();
        
        }






?>
</section>
</body>
</html>