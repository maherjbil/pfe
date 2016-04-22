<?php

  require "Autoloader.php";
    
    Autoloader::register();
    
    $default = 'null';
    
    if($_POST['nature'] == 'candidat'){
      
      $candidat = new Candidat($_POST['nom'],$_POST['prenom'],$_POST['dateNaiss'],$_POST['login'],$_POST['password'],$default,$default,$default,$_POST['nature'],$default,$default,$default,$default);
      
      if($candidat->insererDonnees("insert into candidat set nom = '".$candidat->getNom()."',prenom = '".$candidat->getPrenom()."',dateNaiss = '".$candidat->getDateNaiss()."',login = '".$candidat->getLogin()."',password = '".$candidat->getPassword()."',specialite = '".$candidat->getSpecialite()."',domaine = '".$candidat->getDomaine()."',niveau = '".$candidat->getNiveau()."',nature = '".$candidat->getNature()."'")){
      
        echo "<b>".$candidat->getPrenom()."</b> votre inscription a ete effectuer avec succes veuillez entrer ces informations supplimentaires pour terminer votre profils <br/><br/>";
        
        $gdf = new GenerateurDuFormulaire();
        
        
        echo $gdf->form("f3","completerInscription.php","post");
        
            echo $gdf->hidden('prenom',$candidat->getPrenom());
            echo $gdf->hidden('login',$candidat->getLogin());
            echo $gdf->hidden('password',$candidat->getPassword());
            echo $gdf->hidden('nature',$candidat->getNature());
            
        echo "<b>".$candidat->getPrenom()."</b> quelle est votre domaine d'activite ? : ";
        
          echo $gdf->select("domaine","domaine");
            
            echo $gdf->option('0',"");
            echo $gdf->option("Sciences et technologies","Sciences et technologies");
            echo $gdf->option("Arts","Arts");
            echo $gdf->option("Sport","Sport");
            
          echo $gdf->endSelect()."<br/><br/>";
          
          echo " quelle est votre niveau d'education ? : ";
        
          echo $gdf->select("niveau","niveau");
              echo $gdf->option('0',"");
              echo $gdf->option("Bac","Bac");
              echo $gdf->option("Bac+3","Bac+3");
              echo $gdf->option("Bac+5","Bac+5");
              echo $gdf->option("Plus","Plus");
          echo $gdf->endSelect()."<br/><br/>";
        
          echo " et quelle est votre specialite ? : ";
        
          echo $gdf->select("specialite","specialite");
              echo $gdf->option('0',"");
              echo $gdf->option("Developpeur","Developpeur");
              echo $gdf->option("Designer","Designer");
              echo $gdf->option("Ingenieur","Ingenieur");
          echo $gdf->endSelect()."<br/><br/>";
          
          echo "Vous etes de quel pays ? : ".$gdf->input("text","pays","pays")."<br/><br/>";
          echo "De quelle region ? : ".$gdf->input("text","region","region")."<br/><br/>";
          echo "de quel ville ? : ".$gdf->input("text","ville","ville")."<br/><br/>";
          echo "Entrer votre numero de telephone : ".$gdf->input("text","numeroTelephone","numeroTelephone")."<br/><br/>";
        
          echo $gdf->submit("envoyer","envoyer","envoyer");
        echo $gdf->endForm();
      }
      else{
      
        echo "inscription echouee veuillez reessayer <br/>";
      
      }
    
    }
    else if($_POST['nature'] == 'recruteur'){
    
    
      $recruteur = new Recruteur($_POST['nom'],$_POST['prenom'],$_POST['dateNaiss'],$_POST['login'],$_POST['password'],$default,$_POST['nature'],$default,$default,$default,$default);
        
      
       if($recruteur->insererDonnees("insert into recruteur set nom = '".$recruteur->getNom()."',prenom = '".$recruteur->getPrenom()."',dateNaiss = '".$recruteur->getDateNaiss()."',login = '".$recruteur->getLogin()."',password = '".$recruteur->getPassword()."',domaine = '".$recruteur->getDomaine()."',nature = '".$recruteur->getNature()."'")){
      
        echo "<b>".$recruteur->getPrenom()."</b> votre inscription a ete effectuer avec succes veuillez entrer ces informations supplimentaires pour terminer votre profils <br/>";
        
        $gdf = new GenerateurDuFormulaire();
        
        echo $gdf->form('f4','completerInscription.php','post');
         
          echo $gdf->hidden('prenom',$recruteur->getPrenom());      
          echo $gdf->hidden('login',$recruteur->getLogin());
          echo $gdf->hidden('password',$recruteur->getPassword());
          echo $gdf->hidden('nature',$recruteur->getnature());
        
        
        echo "quel est votre domaine d'activite : ";
        
          echo $gdf->select('domaine','domaine');
            
            echo $gdf->option('0',"");
            echo $gdf->option('Sciences et technologies','Sciences et technologies');
            echo $gdf->option('Arts','Arts');
            echo $gdf->option('Sport','Sport');
            
          echo $gdf->endSelect()."<br/><br/>";
          
          echo "Vous etes de quel pays ? : ".$gdf->input("text","pays","pays")."<br/><br/>";
          echo "De quelle region ? : ".$gdf->input("text","region","region")."<br/><br/>";
          echo "de quel ville ? : ".$gdf->input("text","ville","ville")."<br/><br/>";
          echo "Entrer votre numero de telephone : ".$gdf->input("text","numeroTelephone","numeroTelephone")."<br/><br/>";
          
          echo $gdf->submit('envoyer','envoyer','envoyer');
          
        echo $gdf->endForm();
      
      }
      else{
      
        echo "Compte introuvable <br/>";
      
      }
    
  
    }

?>