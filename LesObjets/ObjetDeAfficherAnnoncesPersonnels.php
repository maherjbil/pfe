 <?php

 session_start();

  require "Autoloader.php";

    Autoloader::register();

  $annonces = new Annonces($_SESSION['id'],$_SESSION['domaine'],$_SESSION['nature']);
  
  
  $gdf = new GenerateurDuFormulaire();
  
  if($annonces->getNature() == 'recruteur'){
  
       if($list = $annonces->afficherAnnonces("select * from annonces where idRecruteur = ".$annonces->getId())){
     
        echo "<h3>Voila la liste des annonces que vous avez deposer</h3>";

        foreach($list as $object){

          echo "<div class = 'row' style = 'margin-bottom:20px;background-color:#ffffff;padding-top:20px;padding-bottom:20px;padding-left:30px'>";
      
          echo "<div class = 'col-md-6'>".$object->titre."<br/><br/>".$object->contenu."</div><div class = 'col-md-3'><i class = 'fa fa-calendar fa-fw fa-2x' area-hidden='true'></i>".$object->datePublication."</div><div class = 'col-md-1' style = 'margin-left:-70px'>".
          $gdf->form("f14","formulaireModificationAnnonces.php","post").$gdf->hidden("nomAnnonce",$object->titre).
          $gdf->hidden("contenuAnnonce",$object->contenu).$gdf->hidden("datePublication",$object->datePublication).
          $gdf->hidden("id",$annonces->getId()).$gdf->hidden('idAnnonces',$object->idAnnonces).
          $gdf->hidden("domaine",$annonces->getDomaine()).$gdf->hidden("nature",$annonces->getNature()).
          $gdf->submit("modifierAnnonces","modifierAnnonces","modifier","btn btn-default").$gdf->endForm()."</div><div class = 'col-md-1'>".
          $gdf->form("f14","supprimerAnnonces.php","post").$gdf->hidden("id",$annonces->getId()).
          $gdf->hidden("domaine",$annonces->getDomaine()).$gdf->hidden("nature",$annonces->getNature()).$gdf->hidden("idAnnonces",$object->idAnnonces).
          $gdf->submit("supprimerAnnonces","supprimerAnnonces","supprimer","btn btn-default").$gdf->endForm()."</div>";

          echo "</div>";
      
        }


        echo "<div class = 'col-md-2 col-md-offset-1'>voulez-vous ajouter ".$gdf->form("f13","formulaireAjoutAnnonces.php","post").
        $gdf->hidden("id",$annonces->getId()).$gdf->hidden("domaine",$annonces->getDomaine()).
        $gdf->hidden("nature",$annonces->getNature()).$gdf->submit("ajouterAnnonces","ajouterAnnonces","une annonce","btn btn-default").$gdf->endForm()."</div>";
      
    }
    else if($list == null){
  
      echo "vous n'avez deposer aucune annonce <br/>";
      echo "voulez-vous".$gdf->form("f9","formulaireAjoutAnnonces.php","post").$gdf->hidden("id",$annonces->getId()).
      $gdf->hidden("domaine",$annonces->getDomaine()).$gdf->hidden("nature",$annonces->getNature()).
      $gdf->submit("ajouterAnnonces","ajouterAnnonces","deposer une","btn btn-default").$gdf->endForm();
  
    }
  
  }

  if(isset($_GET['result'])){

        if($_GET['result'] == 'true'){

              echo "l'annonce a ete supprimer <br/>";
              

        }
        else{

              echo "la suppression de l'annonce  a ete echouee veuillez reessayer";

        }

  }
  
?>