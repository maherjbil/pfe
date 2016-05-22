<?php
session_start();

  require "Autoloader.php";

  Autoloader::register();

  $candidat = new Candidat($_SESSION['nature']);
  $candidat->setId($_SESSION['id']);
  $candidat->setDomaine($_SESSION['domaine']);
  if(isset($_POST['cv'])){ $candidat->setCV($_POST['cv']); }

  if($candidat->insererDonnees("UPDATE candidat SET cvCandidat = '".$candidat->getCV()."' WHERE idCandidat = ".$candidat->getId())){

  		header("location:formulaireDePublicationDeCandidature.php?result=true");

  }
  else{

  	    header("location:formulaireDePublicationDeCandidature.php?result=false");

  }









?>