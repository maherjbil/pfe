<?php

  require "Autoloader.php";
  
  Autoloader::register();

  $default = "null";

  $annonces = new Annonces($_POST['id'],$_POST['domaine'],$_POST['nature']);
  
  $annonces->setNomAnnonce($_POST['nomAnnonce']);
  
  $annonces->setContenuAnnonce($_POST['contenuAnnonce']);
  
  $gdf = new GenerateurDuFormulaire();
  
  if($annonces->getNature() == 'candidat'){
  
        $annonces->setIdCandidat($_POST['id']);
  
    if($annonces->ajouterOuModifierOuSupprimerAnnonces("insert into annonces set titre = '".$annonces->getNomAnnonce()."',contenu = '".$annonces->getContenuAnnonce()."',idCandidat = '".$annonces->getIdCandidat()."'")){

      header('location:formulaireAjoutAnnonces.php?result=true');
    
    }
    else{
    
      echo "la publication de l'annonce a ete echoue veuillez ".$gdf->form("f22","formulaireAjoutAnnonces.php","post").$gdf->hidden("id",$annonces->getId()).$gdf->hidden("domaine",$annonces->getDomaine()).$gdf->hidden("nature",$annonces->getNature()).$gdf->submit("repeterAjout","repeterAjout","reessayer","btn btn-default").$gdf->endForm();
    
    }
   }
   
   else if($annonces->getNature() == 'recruteur'){
   
          if($annonces->ajouterOuModifierOuSupprimerAnnonces("insert into annonces set titre = '".$annonces->getNomAnnonce()."',contenu = '".$annonces->getContenuAnnonce()."',idRecruteur = '".$annonces->getId()."'")){

              header('location:formulaireAjoutAnnonces.php?result=true');
    
          }
          else{
    
              echo "la publication de l'annonce a ete echoue veuillez ".$gdf->form("f23","formulaireAjoutAnnonces.php","post").$gdf->hidden("id",$annonces->getId()).$gdf->hidden("domaine",$annonces->getDomaine()).$gdf->hidden("nature",$annonces->getNature()).$gdf->submit("repeterAjout","repeterAjout","reessayer","btn btn-default").$gdf->endForm();
    
          }
   
   }

?>