<?php

  require "Autoloader.php";
  
  Autoloader::register();
  
  $user = new Authentification($_POST['login'],$_POST['password']);
  
  $gdf = new GenerateurDuFormulaire();
  
  if($comptes = $user->verifCompte("select * from candidat where login = '".$user->getLogin()."' and password = '".$user->getPassword()."'")){
    
    foreach($comptes as $object){
    
      echo "<h3>Espace personnel : </h3>";
      
      echo "Bonjour ".$object->nom." ".$object->prenom." vous etes un ".$object->nature." <br/>";
      
      
      //envoie des donnees vers la page "afficherToutesLesAnnonces.php"
      
            echo "voulez vous ".$gdf->form("f5","afficherToutesLesAnnonces.php","post").$gdf->hidden("domaine",$object->domaine).$gdf->hidden("idCandidat",$object->idCandidat).
      
            $gdf->hidden("id",$object->idCandidat).$gdf->hidden("nature",$object->nature).$gdf->submit("chercherAnnonces","chercherAnnonces","chercher des annonces").$gdf->endForm().
      
      //fin de l'envoie vers "afficherToutesLesAnnonces.php"
      
      
      
      //envoie des donnees vers la page "afficherAnnoncesPersonnels.php"
      
            $gdf->form("f19","afficherAnnoncesPersonnels.php","post").$gdf->hidden("id",$object->idCandidat).$gdf->hidden("domaine",$object->domaine).
      
            $gdf->hidden("nature",$object->nature).$gdf->submit("consulterAnnoncesPersonnels","consulterAnnoncesPersonnels","consulter vos annonces personnels").$gdf->endForm().
            
     //fin de l'envoie vers "afficherAnnoncesPersonnels.php"
            
            
            
    //envoie du donnees vers la page "afficherCandidats.php" 
    
            $gdf->form("f6","afficherCandidats.php","post").$gdf->hidden("id",$object->idCandidat).$gdf->hidden("domaine",$object->domaine).
      
            $gdf->hidden("nature",$object->nature).$gdf->submit("consulterCandidature","consulterCandidature","consulter votre candidature").$gdf->endForm().
      
    //fin de l'envoie vers "afficherCandidats.php" 
    
    
    //envoie du donnees vers la page "afficherCompte.php"
      
      $gdf->form("f19","afficherCompte.php","post").$gdf->hidden("id",$object->idCandidat).$gdf->hidden("domaine",$object->domaine).
      
      $gdf->hidden("nature",$object->nature).$gdf->submit("gererCompte","gererCompte","gerer votre compte").$gdf->endForm();
      
    //fin de l'envoi vers "afficherCompte.php"  
      
    }
  }
  else if($comptes = $user->verifCompte("select * from recruteur where login = '".$user->getLogin()."' and password = '".$user->getPassword()."'")){
  
    foreach($comptes as $object){
    
      echo "<h3>Espace personnel : </h3>";
      
      echo "Bonjour ".$object->nom." ".$object->prenom." vous etes un ".$object->nature." <br/>";
      
      
      //envoie des donnees vers la page "afficherToutesLesAnnonces.php"
      
            echo "voulez vous ".$gdf->form("f23","AfficherToutesLesAnnonces.php","post").$gdf->hidden("id",$object->idRecruteur).$gdf->hidden("domaine",$object->domaine).
      
            $gdf->hidden("nature",$object->nature).$gdf->hidden("idCandidat",$null = 0).$gdf->submit("chercherAnnonces","chercherAnnonces","chercher des annonces").$gdf->endForm().
      
      //fin de l'envoie vers "afficherToutesLesAnnonces.php"
      
      
      
      //envoie du donnees vers la page "afficherCandidats.php"
      
            $gdf->form("f7","afficherCandidats.php","post").$gdf->hidden("id",$object->idRecruteur).$gdf->hidden("domaine",$object->domaine).
      
            $gdf->hidden("nature",$object->nature).$gdf->submit("chercherCandidats","chercherCandidats","chercher des candidats").$gdf->endForm().
      
      //fin de l'envoie vers "afficherCandidats.php"
      
      
      
      //envoie des donnees vers la page "afficherAnnoncesPersonnels.php"
      
            $gdf->form("f8","afficherAnnoncesPersonnels.php","post").$gdf->hidden("id",$object->idRecruteur).$gdf->hidden("domaine",$object->domaine).
            
            $gdf->hidden("nature",$object->nature).$gdf->submit("consulterAnnoncesPersonnels","consulterAnnoncesPersonnels","consulter vos annonces personnels").
            
            $gdf->endForm().
      
      //fin de l'envoie vers "afficherAnnoncesPersonnels.php"
      
      
      
      //envoie du donnees vers la page "afficherCompte.php"
      
            $gdf->form("f20","afficherCompte.php","post").$gdf->hidden("id",$object->idRecruteur).$gdf->hidden("domaine",$object->domaine).
      
            $gdf->hidden("nature",$object->nature).$gdf->submit("gererCompte","gererCompte","gerer votre compte").$gdf->endForm();
      
    //fin de l'envoi vers "afficherCompte.php"
      
 
    }
  }
  else{
  
    echo "compte introuvable veuillez verifier l'orthographe de vos donnees et <a href = 'connexion.php'>reessayer</a><br/>";
  
  }

?>