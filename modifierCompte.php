<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel = 'stylesheet' type = 'text/css' href = 'bootstrap/css/bootstrap-responsive.css'>
  <link rel = 'stylesheet' type = 'text/css' href = 'bootstrap/css/bootstrap.min.css'>
</head>
<section class = 'container-fluid'>
<?php

session_start();
$_SESSION['id'] = $_POST['id'];
$_SESSION['domaine'] = $_POST['domaine'];
$_SESSION['nature'] = $_POST['nature'];

    require "Autoloader.php";
    
    Autoloader::register();
    
    $compte = new Compte($_POST['nature']);
    
    $gdf = new GenerateurDuFormulaire();

    $compte->setId($_POST['id']);
    
    $compte->setNom($_POST['nom']);
    
    $compte->setPrenom($_POST['prenom']);
    
    $compte->setDateNaiss($_POST['dateNaiss']);
    
    $compte->setLogin($_POST['login']);
    
    $compte->setPassword($_POST['password']);
    
    $compte->setDomaine($_POST['domaine']);
      
      
      if($compte->getNature() == 'candidat'){
        
          if($compte->modifierOuSupprimerCompte("update candidat set nomCandidat = '".$compte->getNom()."',prenomCandidat = '".$compte->getPrenom()."',dateNaissCandidat = '".$compte->getDateNaiss()."',loginCandidat = '".$compte->getLogin()."',passwordCandidat = '".$compte->getPassword()."'")){

                header("location:formulaireDeModificationDuCompteCandidat.php?result=true");
        
          }
          else{
          

                header("location:formulaireDeModificationDuCompteCandidat.php?result=false");
          
          }
       
       }
       
       else if($compte->getNature() == 'recruteur'){
       
            if($compte->modifierOuSupprimerCompte("update recruteur set nomRecruteur = '".$compte->getNom()."',prenomRecruteur = '".$compte->getPrenom()."',dateNaissRecruteur = '".$compte->getDateNaiss()."',loginRecruteur = '".$compte->getLogin()."',passwordRecruteur = '".$compte->getPassword()."'")){

                 header("location:formulaireDeModificationDuCompteRecruteur.php?result=true");
            
            }
            else{
                
                header("location:formulaireDeModificationDuCompteRecruteur.php?result=false");
            
            }
       
       }







?>
</section>
</body>
</html>