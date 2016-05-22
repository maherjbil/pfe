<?php

session_start();

  require "Autoloader.php";
  
  Autoloader::register();
  
  $postulation = new Postulation($_SESSION['nature']);
  
  $postulation->setDomaine($_SESSION['domaine']);
  
  $gdf = new GenerateurDuFormulaire();
  
  if($postulation->getNature() == 'candidat'){
  
    $postulation->setIdCandidat($_SESSION['id']);
    
    if($candidatures = $postulation->afficherCandidatures("select * from postulation where idCandidat = ".$postulation->getIdCandidat())){
    
      echo "<table border = 2 >";
      
      echo "<tr><td>Votre lettre de motivation</td><td>Reponse du recruteur</td><td>Date de postulation</td><td></td><td></td></tr>";
      
        foreach($candidatures as $object){
        
          echo "<tr><td>".$object->lettreDeMotivation."</td><td>".$object->reponseDuRecruteur."</td><td>".$object->datePostulation."</td><td>".
          $gdf->form("f29","formulaireDeModificationDeLettreDeMotivation.php","post").$gdf->hidden("idPostulation",$object->idPostulation).
          $gdf->hidden("idCandidat",$postulation->getIdCandidat()).$gdf->hidden("lettreDeMotivation",$object->lettreDeMotivation).$gdf->hidden("domaine",$postulation->getDomaine()).$gdf->hidden("nature",$postulation->getNature()).
          $gdf->submit("modifierLettreMotivation","modifierLettreMotivation","modifier votre lettre","btn btn-default").$gdf->endForm()."</td><td>".
          $gdf->form("f29","supprimerLettreDeMotivation.php","post").$gdf->hidden("idPostulation",$object->idPostulation).
          $gdf->hidden("idCandidat",$postulation->getIdCandidat()).$gdf->hidden("domaine",$postulation->getDomaine()).$gdf->hidden("nature",$postulation->getNature()).
          $gdf->submit("supprimerLettreMotivation","supprimerLettreMotivation","suuprimer votre lettre","btn btn-default").$gdf->endForm()."</td></tr>";
        
        }
        
      echo "</table>";
    
    }
    else if($candidatures == null){
    
      echo "vous n'avait deposer aucune candidature voulez vous ".$gdf->form("f18","formulaireDePublicationDeCandidature.php","post").$gdf->hidden("id",$postulation->getIdCandidat()).
      $gdf->hidden("domanine",$postulation->getDomaine()).$gdf->hidden("nature",$postulation->getNature()).
      $gdf->submit("deposerCandidature","deposerCandidature","deposer une","btn btn-default").$gdf->endForm();
    
    }
  
  }
  
  else if($postulation->getNature() == 'recruteur'){
  
      $postulation->setIdRecruteur($_SESSION['id']);
      
      if($candidatures = $postulation->afficherCandidatures("select * from postulation,annonces,candidat where postulation.idRecruteur = ".$postulation->getIdRecruteur()." and postulation.idAnnonces = annonces.idAnnonces and postulation.idCandidat = candidat.idCandidat")){
     
        echo "<h3>Voila les candidatures disponibles</h3>";
        echo "<table border = 2>";
        echo "<tr><td>Nom du candidat</td><td>Prenom</td><td>Lettre de motivation</td><td>Votre reponse</td><td>Date de postulation</td><td>Nom de l'annonce</td></tr>";
        
        foreach($candidatures as $object){
                  
          echo "<tr><td>".$object->nomCandidat."</td><td>".$object->prenomCandidat."</td><td>".$object->lettreDeMotivation."</td><td>".
          $gdf->form("f27","reponseDuRecruteur.php","post").$gdf->textArea("reponseDuRecruteur","reponseDuRecruteur").$gdf->hidden("idCandidat",$object->idCandidat).
          $gdf->hidden("nature",$object->nature).$gdf->hidden("idPostulation",$object->idPostulation).
          $gdf->hidden("domaine",$object->domaineCandidat).$gdf->submit("repondre","repondre","Repondre a cette annonce","btn btn-default").$gdf->endForm()."</td><td>".$object->datePostulation."</td><td>".$object->titre."</td></tr>";
    
        }
        
        echo "</table>";
        
      }
      else if($candidatures == null){
      
        echo "aucune candidature n'est trouvee <br/>";
      
      }
      
  }

?>