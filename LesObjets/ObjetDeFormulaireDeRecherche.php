<?php

  require "Autoloader.php";
    
    Autoloader::register();

    $gdf = new GenerateurDuFormulaire();

      echo $gdf->form("f13","rechercherAnnonceEtCandidature.php","post");
        
        echo "Pays : ".$gdf->input("text","pays","pays")." ";
        echo "Region : ".$gdf->input("text","region","region")." ";
        echo "Ville : ".$gdf->input("text","ville","ville")."<br/><br/>";
        
        echo "Domaine : ".$gdf->select("domaine","domaine");
          echo $gdf->option("Sciences et technologies","Sciences et technologies");
          echo $gdf->option("Arts","Arts");
          echo $gdf->option("Sports","Sport");
        echo $gdf->endSelect()." ";
        
        echo "Specialite : ".$gdf->select("specialite","specialite");
          echo $gdf->option("Developpeur","Developpeur");
          echo $gdf->option("Designer","Designer");
          echo $gdf->option("Ingenieur","Ingenieur");
        echo $gdf->endSelect()." ";
        
        echo "Niveau d'education : ".$gdf->select("niveau","niveau");
          echo $gdf->option("Bac","Bac");
          echo $gdf->option("Bac+3","Bac+3");
          echo $gdf->option("Bac+5","Bac+5");
          echo $gdf->option("Plus","Plus");
        echo $gdf->endSelect()." ";
        
        echo $gdf->hidden("id",$_POST['id']);
        echo $gdf->hidden("nature",$_POST['nature']);
        
        echo $gdf->submit("rechercher","rechercher","rechercher");
        
      echo $gdf->endForm();

?>