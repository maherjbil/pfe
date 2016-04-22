<?php

  require "Autoloader.php";
  
  Autoloader::register();

  $annonces = new Annonces($_POST['id'],$_POST['domaine'],$_POST['nature']);
  
  $annonces->setIdCandidat($_POST['idCandidat']);
  
  $gdf = new GenerateurDuFormulaire();
  
    if($listAnnonces = $annonces->afficherAnnonces("select * from annonces,candidat,recruteur where annonces.idCandidat = candidat.idCandidat or annonces.idRecruteur = recruteur.idRecruteur")){
    
      echo "<table border = 2>";
      
      echo "<p style ='margin-left:500px'>voulez-vous effectuer ".$gdf->form("f13","formulaireDeRecherche.php","post").$gdf->hidden("id",$annonces->getId()).
      
      $gdf->hidden("nature",$annonces->getNature()).$gdf->submit("recherchePersonnalisee","recherchePersonnalisee","une recherche personnalisee").$gdf->endForm()."</p>";
      
      echo "<tr><td>Nom</td><td>Contenu</td><td>Date</td><td>Domaine</td></tr>";
    
      foreach($listAnnonces as $object){
              
              if($object->nature == 'candidat'){
              
                    echo "<tr><td>".$object->titre."</td><td>".$object->contenu."</td><td>".$object->datePublication."</td><td>".$object->domaine."</td><td>".
                    $gdf->form("f24","afficherAnnonces.php","post").$gdf->hidden("idAnnonces",$object->idAnnonces).
                    $gdf->hidden("idCandidat",$object->idCandidat).$gdf->hidden("id",$annonces->getId()).
                    $gdf->hidden("domaine",$object->domaine).$gdf->hidden("nature",$annonces->getNature()).
                    $gdf->submit("afficherAnnonces","afficherAnnonces","afficher cette annonce").$gdf->endForm()."</td></tr>";
      
               }
               else if($object->nature == 'recruteur'){
               
                    echo "<tr><td>".$object->titre."</td><td>".$object->contenu."</td><td>".$object->datePublication."</td><td>".$object->domaine."</td><td>".
                    $gdf->form("f24","afficherAnnonces.php","post").$gdf->hidden("idAnnonces",$object->idAnnonces).
                    $gdf->hidden("id",$object->idRecruteur).$gdf->hidden("idCandidat",$annonces->getIdCandidat()).
                    $gdf->hidden("domaine",$object->domaine).$gdf->hidden("nature",$annonces->getNature()).
                    $gdf->submit("afficherAnnonces","afficherAnnonces","afficher cette annonce").$gdf->endForm()."</td></tr>";
               
               }
      }
      
      echo "</table>";
      
    }
    else if($listAnnonces == null){
    
      echo "aucune annonce n'est disponibe <br/>";
    
    }


?>