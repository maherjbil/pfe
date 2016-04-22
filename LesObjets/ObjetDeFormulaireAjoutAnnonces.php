<?php

  require "Autoloader.php";
  
  Autoloader::register();
  
  $annonces = new Annonces($_POST['id'],$_POST['domaine'],$_POST['nature']);
  $gdf = new GenerateurDuFormulaire();
  
  echo $gdf->form("f10","ajouterAnnonces.php","post");
    
    echo "Entrer le titre de l'annonce : ".$gdf->input("text","nomAnnonce","idAnnonce");
    echo "Saisir le contenu de l'annonce : ".$gdf->textArea("contenuAnnonce","contenuAnnonce");
    echo " ".$gdf->hidden("id",$annonces->getId());
    echo $gdf->hidden("domaine",$annonces->getDomaine());
    echo $gdf->hidden("nature",$annonces->getNature());
    echo $gdf->submit("publierAnnonce","publierAnnonce","publier cette annonce");

  echo $gdf->endForm();

?>