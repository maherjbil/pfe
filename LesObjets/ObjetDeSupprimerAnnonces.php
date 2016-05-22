<?php

  require "Autoloader.php";
  
  Autoloader::register();
  
  $annonces = new Annonces($_POST['id'],$_POST['domaine'],$_POST['nature']);
  $gdf = new GenerateurDuFormulaire();
  $annonces->setIdAnnonces($_POST['idAnnonces']);
  
  if($annonces->ajouterOuModifierOuSupprimerAnnonces("delete from annonces where idAnnonces = ".$annonces->getIdAnnonces())){

      header("location:afficherAnnoncesPersonnels.php?result=true");
  
  }
  else{

      header("location:afficherAnnoncesPersonnels.php?result=false");
  
  }
?>