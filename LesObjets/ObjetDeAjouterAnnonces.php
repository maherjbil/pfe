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
  
    if($annonces->ajouterOuModifierOuSupprimerAnnonces("insert into annonces set titre = '".$annonces->getNomAnnonce()."',contenu = '".$annonces->getContenuAnnonce()."',idCandidat = '".$annonces->getIdCandidat()."',domaine = '".$annonces->getDomaine()."'")){
    
      echo "votre annonce a ete publie et vous pouvez l'observer dans la liste de ".$gdf->form("f11","afficherAnnoncesPersonnels.php","post").$gdf->hidden("id",$annonces->getId()).$gdf->hidden("domaine",$annonces->getDomaine()).$gdf->hidden("nature",$annonces->getNature()).$gdf->submit("afficherAnnonces","afficherAnnonces","vos annonces").$gdf->endForm();
    
    }
    else{
    
      echo "la publication de l'annonce a ete echoue veuillez ".$gdf->form("f22","formulaireAjoutAnnonces.php","post").$gdf->hidden("id",$annonces->getId()).$gdf->hidden("domaine",$annonces->getDomaine()).$gdf->hidden("nature",$annonces->getNature()).$gdf->submit("repeterAjout","repeterAjout","reessayer").$gdf->endForm();
    
    }
   }
   
   else if($annonces->getNature() == 'recruteur'){
   
          if($annonces->ajouterOuModifierOuSupprimerAnnonces("insert into annonces set titre = '".$annonces->getNomAnnonce()."',contenu = '".$annonces->getContenuAnnonce()."',idRecruteur = '".$annonces->getId()."',domaine = '".$annonces->getDomaine()."'")){
    
              echo "votre annonce a ete publie et vous pouvez l'observer dans la liste de ".$gdf->form("f21","afficherAnnoncesPersonnels.php","post").$gdf->hidden("id",$annonces->getId()).$gdf->hidden("domaine",$annonces->getDomaine()).$gdf->hidden("nature",$annonces->getNature()).$gdf->submit("afficherAnnonces","afficherAnnonces","vos annonces").$gdf->endForm();
    
          }
          else{
    
              echo "la publication de l'annonce a ete echoue veuillez ".$gdf->form("f23","formulaireAjoutAnnonces.php","post").$gdf->hidden("id",$annonces->getId()).$gdf->hidden("domaine",$annonces->getDomaine()).$gdf->hidden("nature",$annonces->getNature()).$gdf->submit("repeterAjout","repeterAjout","reessayer").$gdf->endForm();
    
          }
   
   }

?>