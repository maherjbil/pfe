<?php

  require "Autoloader.php";
  
  Autoloader::register();
  
  $annonces = new Annonces($_POST['id'],$_POST['domaine'],$_POST['nature']);
  $gdf = new GenerateurDuFormulaire();
  $annonces->setIdAnnonces($_POST['idAnnonces']);
  
  if($annonces->ajouterOuModifierOuSupprimerAnnonces("delete from annonces where idAnnonces = ".$annonces->getIdAnnonces())){
  
      echo "l'annonce a ete supprimer <br/>";
      echo "voulez-vous consulter ".$gdf->form("f17","afficherAnnoncesPersonnels.php","post").$gdf->hidden("id",$annonces->getId()).$gdf->hidden("domaine",$annonces->getDomaine()).$gdf->hidden("nature",$annonces->getNature()).$gdf->submit("consulterAnnoncesPersonnels","consulterAnnoncesPersonnels","vos annonces").$gdf->endForm();
  
  }
  else{
  
      echo "la suppression de l'annonce  a ete echouee veuillez ".$gdf->form("f18","afficherAnnoncesPersonnels.php","post").$gdf->hidden("id",$annonces->getId()).$gdf->hidden("domaine",$annonces->getDomaine()).$gdf->hidden("nature",$annonces->getNature()).$gdf->submit("repeterSuppression","repeterSuppression","reessayer").$gdf->endForm();
  
  }
?>