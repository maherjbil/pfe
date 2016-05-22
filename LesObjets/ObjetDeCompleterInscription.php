<?php

  require "Autoloader.php";

    Autoloader::register();
    
      if($_POST['nature'] == 'candidat'){
      
        $candidat = new Candidat($_POST['nature']);
        $candidat->setLogin($_POST['login']);
        $candidat->setPassword($_POST['password']);
        $candidat->setDateNaiss($_POST['dateNaiss']);
        $candidat->setSpecialite($_POST['specialite']);
        $candidat->setDomaine($_POST['domaine']);
        $candidat->setNiveau($_POST['niveau']);
        $candidat->setPays($_POST['pays']);
        $candidat->setRegion($_POST['region']);
        $candidat->setVille($_POST['ville']);
        $candidat->setNumeroTelephone($_POST['numeroTelephone']);
        $candidat->setPhoto($_POST['photo']);

        

        if($res = $candidat->afficherCandidat("select * from candidat where loginCandidat = '".$candidat->getLogin()."' and passwordCandidat = '".$candidat->getPassword()."'")){

              foreach($res as $object){

                    $candidat->setId($object->idCandidat);

              }

        }
        else if($res == null){

              echo "impossible de recuperer la cle primaire de la table candidat";

        }


        if($candidat->updateCandidat("update candidat set dateNaissCandidat = '".$candidat->getDateNaiss()."',specialiteCandidat = '".$candidat->getSpecialite()."',domaineCandidat = '".$candidat->getDomaine()."',niveauCandidat = '".$candidat->getNiveau()."',paysCandidat = '".$candidat->getPays()."',regionCandidat = '".$candidat->getRegion()."',villeCandidat = '".$candidat->getVille()."',numeroTelephoneCandidat = '".$candidat->getNumeroTelephone()."',photoCandidat = '".$candidat->getPhoto()."' where idCandidat = '".$candidat->getId()."'")){
          
           header("location:verifDonneesCandidat.php?result=true");
        
        }
        else{
        
            header("location:verifDonneesCandidat.php?result=false");
        
        }
      
      }
      
      else if($_POST['nature'] == 'recruteur'){

        
        $null = "";
        
        $recruteur = new Recruteur($_POST['nature']);
        $recruteur->setLogin($_POST['login']);
        $recruteur->setPassword($_POST['password']);
        $recruteur->setDateNaiss($_POST['dateNaiss']);
        $recruteur->setDomaine($_POST['domaine']);
        $recruteur->setPays($_POST['pays']);
        $recruteur->setRegion($_POST['region']);
        $recruteur->setVille($_POST['ville']);
        $recruteur->setNumeroTelephone($_POST['numeroTelephone']);
        $recruteur->setPhoto($_POST['photo']);
      


        if($res = $recruteur->afficherRecruteur("select * from recruteur where loginRecruteur = '".$recruteur->getLogin()."' and passwordRecruteur = '".$recruteur->getPassword()."'")){

              foreach($res as $object){

                    $recruteur->setId($object->idRecruteur);

              }

        }
        else if($res == null){

              echo "impossible de recuperer la cle primaire de la table recruteur";

        }

      
        if($recruteur->updateRecruteur("update recruteur set dateNaissRecruteur = '".$recruteur->getDateNaiss()."',domaineRecruteur = '".$recruteur->getDomaine()."',paysRecruteur = '".$recruteur->getPays()."',regionRecruteur = '".$recruteur->getRegion()."',villeRecruteur = '".$recruteur->getVille()."',numeroTelephoneRecruteur = '".$recruteur->getNumeroTelephone()."',photoRecruteur = '".$recruteur->getPhoto()."' where idRecruteur = '".$recruteur->getId()."'")){
        
            header("location:verifDonneesRecruteur.php?result=true");
        
        }
        else{
        
            header("location:verifDonneesRecruteur.php?result=false");
        
        } 
      
      
      }

?>