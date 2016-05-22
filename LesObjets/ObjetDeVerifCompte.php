<?php

session_start();

  require "Autoloader.php";
  
  Autoloader::register();
  
  $user = new Authentification($_POST['login'],$_POST['password']);
  
  $gdf = new GenerateurDuFormulaire();

  $_SESSION['login'] = $user->getLogin();
  $_SESSION['password'] = $user->getPassword();
  
  if($comptes = $user->verifCompte("SELECT * FROM candidat WHERE loginCandidat = '".$user->getLogin()."' AND passwordCandidat = '".$user->getPassword()."'")){

  		foreach($comptes as $object){

          $_SESSION['id'] = $object->idCandidat;
  				$_SESSION['domaine'] = $object->domaineCandidat;
  				$_SESSION['nature'] = $object->nature;
  				header("location:afficherCompteCandidat.php");


  		}
  }
  else if($comptes = $user->verifCompte("SELECT * FROM recruteur WHERE loginRecruteur = '".$user->getLogin()."' AND passwordRecruteur = '".$user->getPassword()."'")){
  
    foreach($comptes as $object){

      $_SESSION['id'] = $object->idRecruteur;
 			$_SESSION['domaine'] = $object->domaineRecruteur;
  		$_SESSION['nature'] = $object->nature;
 			header("location:afficherCompteRecruteur.php");     
 
    }
  }
  else{
  
    header("location:connexion.php?resultat=false");
  
  }

?>