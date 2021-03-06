<?php

session_start();

  require "Autoloader.php";
  
  Autoloader::register();

  $gdf = new GenerateurDuFormulaire();
  
  $annonces = new Annonces($_SESSION['id'],$_SESSION['domaine'],$_SESSION['nature']);
  
if(isset($_POST['idAnnonces'])){


  if($listAnnonces = $annonces->afficherAnnonces("select * from annonces where annonces.idAnnonces = ".$_POST['idAnnonces']." and annonces.idcandidat = ".
    $annonces->getId()." or annonces.idAnnonces = ".$_POST['idAnnonces']." and annonces.idRecruteur = ".$annonces->getId())){
  
    echo "<h3>Veuillez remplir le formulaire de modification</h3>";
    
    echo $gdf->form("f15","modifierAnnonces.php","post");
    
    echo "<table border = 2>";
    
    echo "<tr><td colspan = '2' style = 'text-align:center'>Titre</td><td style = 'text-align:center'>Nouveau Titre</td><td colspan = '2' style = 'text-align:center'>Contenu</td><td style = 'text-align:center'>Nouveau Contenu</td><td colspan = '2' style = 'text-align:center'>Date de publication</td></tr>";
      
          foreach($listAnnonces as $object){
       
            echo "<tr><td colspan = 2>".$object->titre."</td><td>".
            $gdf->input("text","nomAnnonce","nomAnnonce","form-control")."</td><td colspan = 2>".$object->contenu." </td><td>".
            $gdf->textArea("contenuAnnonce","contenuAnnonce")."</td><td colspan = 2>".$object->datePublication." </td><td>".$gdf->hidden("id",$annonces->getId()).
            $gdf->hidden("domaine",$annonces->getDomaine()).$gdf->hidden("nature",$annonces->getNature()).$gdf->hidden("idAnnonces",$_POST['idAnnonces']).
            "</td></tr>";

          }
    
            echo "</table>";
    
          echo "<br/>";
        echo $gdf->submit("appliquerModification","appliquerModification","appliquer les modifications","btn btn-default");
       
       echo $gdf->endForm();
    
  }


}


  if(isset($_GET['result'])){

      if($_GET['result'] == 'true'){

          echo "les modifications sont effectuees avec succes <br/>";
          echo "voulez-vous consulter ".$gdf->form("f15","afficherAnnoncesPersonnels.php","post").$gdf->hidden("id",$annonces->getId()).$gdf->hidden("domaine",$annonces->getDomaine()).$gdf->hidden("nature",$annonces->getNature()).$gdf->submit("consulterAnnoncesPersonnels","consulterAnnoncesPersonnels","vos annonces","btn btn-default").$gdf->endForm();

      }
      else{

          echo "les modifications ont ete echouee";

      }

  }
  
?>