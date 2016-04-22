 <?php

  require "Autoloader.php";

    Autoloader::register();

  $annonces = new Annonces($_POST['id'],$_POST['domaine'],$_POST['nature']);
  
  
  $gdf = new GenerateurDuFormulaire();
  
    if($annonces->getNature() == 'candidat'){
      
      if($list = $annonces->afficherAnnonces("select * from annonces where idCandidat = ".$annonces->getId())){
     
        echo "<h3>Voila la liste des annonces disponibles</h3>";
      
        echo "<table border = 2>";
        
        echo "<tr><td style = 'text-align:center'>Titre</td><td style = 'text-align:center'>Contenu</td><td style = 'text-align:center'>Date de publication</td><td colspan = '2' style ='text-align:center'>Action</td></tr>";
        
        foreach($list as $object){
      
          echo "<tr><td>".$object->titre."</td><td>".$object->contenu."</td><td>".$object->datePublication."</td><td>".
          $gdf->form("f14","formulaireModificationAnnonces.php","post").$gdf->hidden("nomAnnonce",$object->titre).
          $gdf->hidden("contenuAnnonce",$object->contenu).$gdf->hidden("datePublication",$object->datePublication).
          $gdf->hidden("idAnnonces",$object->idAnnonces).$gdf->hidden("id",$annonces->getId()).
          $gdf->hidden("domaine",$annonces->getDomaine()).$gdf->hidden("nature",$annonces->getNature()).
          $gdf->submit("modifierAnnonces","modifierAnnonces","modifier").$gdf->endForm()."</td><td>".
          $gdf->form("f14","supprimerAnnonces.php","post").$gdf->hidden("id",$annonces->getId()).
          $gdf->hidden("domaine",$annonces->getDomaine()).$gdf->hidden("nature",$annonces->getNature()).$gdf->hidden("idAnnonces",$object->idAnnonces).
          $gdf->submit("supprimerAnnonces","supprimerAnnonces","supprimer").$gdf->endForm()."</td></tr>";
      
        }
      
        echo "</table>";
        
        echo "voulez-vous ajouter ".$gdf->form("f12","formulaireAjoutAnnonces.php","post").
        $gdf->hidden("id",$annonces->getId()).$gdf->hidden("domaine",$annonces->getDomaine()).
        $gdf->hidden("nature",$annonces->getNature()).$gdf->submit("ajouterAnnonces","ajouterAnnonces","une annonce").$gdf->endForm();
      
    }
    else if($list == null){
  
      echo "vous n'avait publie aucune annonce voulez-vous ".$gdf->form("f20","formulaireAjoutAnnonces.php","post").
      $gdf->hidden("id",$annonces->getId()).$gdf->hidden("domaine",$annonces->getDomaine()).$gdf->hidden("nature",$annonces->getNature()).
      $gdf->submit("ajouterAnnonces","ajouterAnnonces","ajouter Une").$gdf->endForm();
  
    }
  }
  
  else if($annonces->getNature() == 'recruteur'){
  
       if($list = $annonces->afficherAnnonces("select * from annonces where idRecruteur = ".$annonces->getId())){
     
        echo "<h3>Voila la liste des annonces que vous avez deposer</h3>";
      
        echo "<table border = 2>";
        
        echo "<tr><td style = 'text-align:center'>Titre</td><td style = 'text-align:center'>Contenu</td><td style = 'text-align:center'>Date de publication</td><td colspan = '2' style ='text-align:center'>Action</td></tr>";
        
        foreach($list as $object){
      
          echo "<tr><td>".$object->titre."</td><td>".$object->contenu."</td><td>".$object->datePublication."</td><td>".
          $gdf->form("f14","formulaireModificationAnnonces.php","post").$gdf->hidden("nomAnnonce",$object->titre).
          $gdf->hidden("contenuAnnonce",$object->contenu).$gdf->hidden("datePublication",$object->datePublication).
          $gdf->hidden("idAnnonces",$object->idAnnonces).$gdf->hidden("id",$annonces->getId()).
          $gdf->hidden("domaine",$annonces->getDomaine()).$gdf->hidden("nature",$annonces->getNature()).
          $gdf->submit("modifierAnnonces","modifierAnnonces","modifier").$gdf->endForm()."</td><td>".
          $gdf->form("f14","supprimerAnnonces.php","post").$gdf->hidden("id",$annonces->getId()).
          $gdf->hidden("domaine",$annonces->getDomaine()).$gdf->hidden("nature",$annonces->getNature()).$gdf->hidden("idAnnonces",$object->idAnnonces).
          $gdf->submit("supprimerAnnonces","supprimerAnnonces","supprimer").$gdf->endForm()."</td></tr>";
      
        }
      
        echo "</table>";
        echo "voulez-vous ajouter ".$gdf->form("f13","formulaireAjoutAnnonces.php","post").
        $gdf->hidden("id",$annonces->getId()).$gdf->hidden("domaine",$annonces->getDomaine()).
        $gdf->hidden("nature",$annonces->getNature()).$gdf->submit("ajouterAnnonces","ajouterAnnonces","une annonce").$gdf->endForm();
      
    }
    else if($list == null){
  
      echo "vous n'avez deposer aucune annonce <br/>";
      echo "voulez-vous".$gdf->form("f9","formulaireAjoutAnnonces.php","post").$gdf->hidden("id",$annonces->getId()).
      $gdf->hidden("domaine",$annonces->getDomaine()).$gdf->hidden("nature",$annonces->getNature()).
      $gdf->submit("ajouterAnnonces","ajouterAnnonces","deposer une").$gdf->endForm();
  
    }
  
  }
  
?>