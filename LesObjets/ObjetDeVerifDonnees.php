<?php

session_start();

  require "Autoloader.php";
    
    Autoloader::register();
    
    $default = 'null';
    
    if($_SESSION['nature'] == 'candidat'){
      
      $candidat = new Candidat($_SESSION['nature']);

      if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['Email']) && isset($_POST['password'])){ 

        $candidat->setNom($_POST['nom']);

        $candidat->setPrenom($_POST['prenom']);

        $candidat->setLogin($_POST['Email']);
      
        $candidat->setPassword($_POST['password']);
      
      if($candidat->insererDonnees("insert into candidat set nomCandidat = '".$candidat->getNom()."',prenomCandidat = '".$candidat->getPrenom()."',loginCandidat = '".$candidat->getLogin()."',passwordCandidat = '".$candidat->getPassword()."',nature = '".$candidat->getNature()."'")){
      
        echo "<div class = 'text-center'><b>".$candidat->getPrenom()."</b> votre inscription a ete effectuer avec succes veuillez entrer ces informations supplimentaires pour terminer votre profils </div><br/><br/>";
        
        $gdf = new GenerateurDuFormulaire();


  echo "<div class = 'col-md-8 col-md-offset-2'>";  
        
        echo $gdf->form("f3","completerInscription.php","post");

                          echo $gdf->hidden('prenom',$candidat->getPrenom());
                          echo $gdf->hidden('login',$candidat->getLogin());
                          echo $gdf->hidden('password',$candidat->getPassword());
                          echo $gdf->hidden('nature',$_SESSION['nature']); 
            

        echo "Entrer votre date de naissance : ".$gdf->input("date","dateNaiss","dateNaiss","form-control")." <span id = 'erreurDateNaiss'></span><br/><br/>";
            
        echo "<b>".$candidat->getPrenom()."</b> quelle est votre domaine d'activite ? : ";
        
          echo $gdf->select("domaine","domaine");
            
            echo $gdf->option('0',"");
            echo $gdf->option("Sciences et technologies","Sciences et technologies");
            echo $gdf->option("Arts","Arts");
            echo $gdf->option("Sport","Sport");
            
          echo $gdf->endSelect()." <span id = 'erreurDomaine'></span><br/><br/>";
          
          echo " quelle est votre niveau d'education ? : ";
        
          echo $gdf->select("niveau","niveau");
              echo $gdf->option('0',"");
              echo $gdf->option("Bac","Bac");
              echo $gdf->option("Bac+3","Bac+3");
              echo $gdf->option("Bac+5","Bac+5");
              echo $gdf->option("Plus","Plus");
          echo $gdf->endSelect()." <span id = 'erreurNiveau'></span><br/><br/>";
        
          echo " et quelle est votre specialite ? : ";
        
          echo $gdf->select("specialite","specialite");
              echo $gdf->option('0',"");
              echo $gdf->option("Developpeur","Developpeur");
              echo $gdf->option("Designer","Designer");
              echo $gdf->option("Ingenieur","Ingenieur");
          echo $gdf->endSelect()." <span id = 'erreurSpecialite'></span><br/><br/>";
          
          echo "Vous etes de quel pays ? : ".$gdf->input("text","pays","pays","form-control")." <span id = 'erreurPays'></span><br/><br/>";
          echo "De quelle region ? : ".$gdf->input("text","region","region","form-control")." <span id = 'erreurRegion'></span><br/><br/>";
          echo "de quel ville ? : ".$gdf->input("text","ville","ville","form-control")." <span id = 'erreurVille'></span><br/><br/>";
          echo "Entrer votre numero de telephone : ".$gdf->input("text","numeroTelephone","numeroTelephone","form-control")." <span id = 'erreurNumTel'></span><br/><br/>";
          echo "<div class = 'col-md-8 col-xs-12 col-md-offset-2'><b>Voulez-vous ajouter un photo : </b><br/><br/>".
                $gdf->inputFile("photo","photo","form-control")."</div><br/><br/>";
        
          echo $gdf->submit("envoyer","envoyer","envoyer","btn btn-default");
        echo $gdf->endForm();

  echo "</div>";

      }
      else{
      
        echo "inscription echouee veuillez reessayer <br/>";
      
      }

  }


  if(isset($_GET['result'])){

              if($_GET['result'] == true){

                      echo "<div class = 'text-center'><b>inscription terminee : </b><p>Voulez-vous <a href = 'connexion.php'>se connecter</a></p></div>";

              }
              else{

                      echo "<div class = 'text-center'><b>inscription echouee : </b><p>Veuillez reessayer</p></div>";

              }

  }

    
    }
    else if($_SESSION['nature'] == 'recruteur'){
    
    
      $recruteur = new Recruteur($_SESSION['nature']);

      if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['Email']) && isset($_POST['password'])){ 

        $recruteur->setNom($_POST['nom']);

        $recruteur->setPrenom($_POST['prenom']);

        $recruteur->setLogin($_POST['Email']);
      
        $recruteur->setPassword($_POST['password']);
        
      
       if($recruteur->insererDonnees("insert into recruteur set nomRecruteur = '".$recruteur->getNom()."',prenomRecruteur = '".$recruteur->getPrenom()."',loginRecruteur = '".$recruteur->getLogin()."',passwordRecruteur = '".$recruteur->getPassword()."',nature = '".$recruteur->getNature()."'")){
      
        echo "<div class = 'text-center'><b>".$recruteur->getPrenom()."</b> votre inscription a ete effectuer avec succes veuillez entrer ces informations supplimentaires pour terminer votre profils </div><br/>";
        
        $gdf = new GenerateurDuFormulaire();



echo "<div class = 'col-md-8 col-md-offset-2'>"; 


        echo $gdf->form('f4','completerInscription.php','post');

                          echo $gdf->hidden('prenom',$recruteur->getPrenom());
                          echo $gdf->hidden('login',$recruteur->getLogin());
                          echo $gdf->hidden('password',$recruteur->getPassword());
                          echo $gdf->hidden('nature',$_SESSION['nature']);


        echo "Entrer votre date de naissance : ".$gdf->input("date","dateNaiss","dateNaiss","form-control")."<span id = 'erreurDateNaiss'></span><br/><br/>";
        
        
        echo "quel est votre domaine d'activite : ";
        
          echo $gdf->select('domaine','domaine');
            
            echo $gdf->option('0',"");
            echo $gdf->option('Sciences et technologies','Sciences et technologies');
            echo $gdf->option('Arts','Arts');
            echo $gdf->option('Sport','Sport');
            
          echo $gdf->endSelect()."<span id = 'erreurDomaine'></span><br/><br/>";
          
          echo "Vous etes de quel pays ? : ".$gdf->input("text","pays","pays","form-control")."<span id = 'erreurPays'></span><br/><br/>";
          echo "De quelle region ? : ".$gdf->input("text","region","region","form-control")."<span id = 'erreurRegion'></span><br/><br/>";
          echo "de quel ville ? : ".$gdf->input("text","ville","ville","form-control")."<span id = 'erreurVille'></span><br/><br/>";
          echo "Entrer votre numero de telephone : ".$gdf->input("text","numeroTelephone","numeroTelephone","form-control")."<span id = 'erreurNumTel'></span><br/><br/>";
          echo "<div class = 'col-md-8 col-xs-12 col-md-offset-2'><b>Voulez-vous ajouter un photo : </b><br/><br/>".
                $gdf->inputFile("photo","photo")."</div><br/><br/>";
          
          echo $gdf->submit('envoyer','envoyer','envoyer','btn btn-default');
          
        echo $gdf->endForm();


  echo "</div>";
      
      }
      else{
      
        echo "Compte introuvable <br/>";
      
      }

    }
      if(isset($_GET['result'])){

              if($_GET['result'] == true){

                      echo "<div class = 'text-center'><b>inscription terminee : </b><p>Voulez-vous <a href = 'connexion.php'>se connecter</a></p></div>";

              }
              else{

                      echo "<div class = 'text-center'><b>inscription echouee : </b><p>Veuillez reessayer</p></div>";

              }

    }
    
  
    }




?>