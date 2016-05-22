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
  $postulation->setDomaine($_POST['domaine']);
  $postulation->setIdAnnonces($_POST['idAnnonces']);
  $postulation->setIdCandidat($_POST['idCandidat']);
  $postulation->setIdRecruteur($_POST['idRecruteur']);
  $postulation->setLettreDeMotivation($_POST['lettreDeMotivation']);
  $default = 'null';

  if($postulation->postuler("INSERT INTO postulation SET lettreDeMotivation = '".$postulation->getLettreDeMotivation()."',idAnnonces = ".$postulation->getIdAnnonces().",idRecruteur = ".$postulation->getIdRecruteur().",idCandidat = ".$postulation->getIdCandidat()."")){
  
      header("location:formulaireDePostulation.php?reponse=true");
  
  }
  else{
  
    header("location:formulaireDePostulation.php?reponse=false");
  
  }

?>
</section>
</body>
</html>