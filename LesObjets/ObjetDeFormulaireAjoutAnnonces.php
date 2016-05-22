<?php

session_start();

  require "Autoloader.php";
  
  Autoloader::register();
  
  $annonces = new Annonces($_SESSION['id'],$_SESSION['domaine'],$_SESSION['nature']);
  $gdf = new GenerateurDuFormulaire();

  echo "<div class = 'col-md-8 col-md-offset-2 formulaire-ajout-annonce'>";
  
      echo $gdf->form("f10","ajouterAnnonces.php","post");
          
          echo "<b>Titre : </b> : <span id = 'erreurTitreAnnonce'></span>".$gdf->input("text","titreAnnonce","titreAnnonce","form-control");
          echo "<b>Contenu : </b> : <span id = 'erreurContenuAnnonce'></span>".$gdf->textArea("contenuAnnonce","contenuAnnonce");
          echo " ".$gdf->hidden("id",$annonces->getId());
          echo $gdf->hidden("domaine",$annonces->getDomaine());
          echo $gdf->hidden("nature",$annonces->getNature());
          echo "<div class = 'text-center'>".$gdf->submit("publierAnnonce","publierAnnonce","publier cette annonce","btn btn-default")."</div>";

      echo $gdf->endForm();

  echo "</div>";

  if(isset($_GET['result'])){

        if($_GET['result'] == 'true'){

              echo "<div class = 'row'><div class = 'col-md-4 col-md-offset-4 text-center'>votre annonce a ete publie et vous pouvez l'observer dans la liste de ".$gdf->form("f11","afficherAnnoncesPersonnels.php","post").$gdf->hidden("id",$annonces->getId()).$gdf->hidden("domaine",$annonces->getDomaine()).$gdf->hidden("nature",$annonces->getNature()).$gdf->submit("afficherAnnonces","afficherAnnonces","vos annonces","btn btn-default").$gdf->endForm()."</div></div>";

        }

  }

?>