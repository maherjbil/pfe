<?php

  require "Autoloader.php";
  Autoloader::register();
  
  $annonces = new Annonces($_POST['id'],$_POST['domaine'],$_POST['nature']);
  $annonces->setNomAnnonce($_POST['nomAnnonce']);
  $annonces->setContenuAnnonce($_POST['contenuAnnonce']);
  $annonces->setIdAnnonces($_POST['idAnnonces']);
  
  $gdf = new GenerateurDuFormulaire();
  
    if($annonces->ajouterOuModifierOuSupprimerAnnonces("update annonces set titre = '".$annonces->getNomAnnonce()."',contenu = '".$annonces->getContenuAnnonce()."' where idAnnonces = ".$annonces->getIdAnnonces())){
    
        echo "les modifications sont effectuees avec succes <br/>";
        echo "voulez-vous consulter ".$gdf->form("f15","afficherAnnoncesPersonnels.php","post").$gdf->hidden("id",$annonces->getId()).$gdf->hidden("domaine",$annonces->getDomaine()).$gdf->hidden("nature",$annonces->getNature()).$gdf->submit("consulterAnnoncesPersonnels","consulterAnnoncesPersonnels","vos annonces").$gdf->endForm();
    
    }
    else{
    
      echo "les modifications ont echoues veuillez ".$gdf->form("f16","formulaireModificationAnnonces.php","post").$gdf->hidden("id",$annonces->getId()).$gdf->hidden("domaine",$annonces->getDomaine()).$gdf->hidden("nature",$annonces->getNature()).$gdf->submit("repeterModification","repeterModification","reessayer").$gdf->endForm();
    
    }
?>