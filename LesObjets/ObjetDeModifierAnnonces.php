<?php

session_start();


  require "Autoloader.php";
  Autoloader::register();
  
  $annonces = new Annonces($_POST['id'],$_POST['domaine'],$_POST['nature']);
  $annonces->setNomAnnonce($_POST['nomAnnonce']);
  $annonces->setContenuAnnonce($_POST['contenuAnnonce']);
  $annonces->setIdAnnonces($_POST['idAnnonces']);
  
  $gdf = new GenerateurDuFormulaire();
  
    if($annonces->ajouterOuModifierOuSupprimerAnnonces("update annonces set titre = '".$annonces->getNomAnnonce()."',contenu = '".$annonces->getContenuAnnonce()."' where idAnnonces = ".$annonces->getIdAnnonces())){

        header("location:formulaireModificationAnnonces.php?result=true");
    
    }
    else{

      header("location:formulaireModificationAnnonces.php?result=false");
    
    }
?>