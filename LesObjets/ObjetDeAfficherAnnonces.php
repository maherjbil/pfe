<?php

    require "Autoloader.php";
    
    Autoloader::register();
    
    $annonces = new Annonces($_POST['id'],$_POST['domaine'],$_POST['nature']);
    
    $annonces->setIdAnnonces($_POST['idAnnonces']);
    
    $gdf = new GenerateurDuFormulaire();
    
        if($annonces->getNature() == 'candidat'){
    
            $annonces->setIdCandidat($_POST['idCandidat']);
            
            //J'ai utilise deux requetes avec jointure l'une parcourit les deux tables annonces et candidat et l'autre parcourit les tables annonces et recruteur
            //afain d'eviter le conflit entre les deux tables candidat et recruteur qui ont deux champs communs 'domaine' et 'nature'
             
                   if($listAnnonces = $annonces->afficherAnnonces("select * from annonces,candidat where annonces.idAnnonces = ".$annonces->getIdAnnonces()." and annonces.idCandidat = candidat.idCandidat")){
                    
                            echo "<table border = 2>";
        
                            echo "<tr><td>Titre</td><td>Contenu</td><td>Date de publication</td><td>Domaine</td><td>Candidat/Recruteur</td></tr>";
        
        
                                    foreach($listAnnonces as $object){
                                
                                            echo "<tr><td>".$object->titre."</td><td>".$object->contenu."</td><td>".$object->datePublication."</td><td>".
                                            $object->domaine."</td><td>".$object->nature."</td><td>".$gdf->form("f25","formulaireDePostulation.php","post").$gdf->hidden("idAnnonces",$object->idAnnonces).
                                            $gdf->hidden("idCandidat",$annonces->getIdCandidat()).$gdf->hidden("id",$annonces->getId()).$gdf->hidden("domaine",$object->domaine).
                                            $gdf->hidden("nature",$annonces->getNature()).$gdf->submit("postuler","postuler","postuler").$gdf->endForm()."</td></tr>";
                                 
                                    }
                      
          
                            echo "</table><br/><br/>";
          
                            echo "Chercher des autres ".$gdf->form("f26","afficherToutesLesAnnonces.php","post").$gdf->hidden("id",$annonces->getId()).
                            $gdf->hidden("domaine",$annonces->getDomaine()).$gdf->hidden("idCandidat",$annonces->getIdCandidat()).$gdf->hidden("nature",$annonces->getNature()).
                            $gdf->submit("repeterAffichageAnnonces","repeterAffichageAnnonces","annonces").$gdf->endForm();
                  }
              
              
                  else if($listAnnonces1 = $annonces->afficherAnnonces("select * from annonces,recruteur where annonces.idAnnonces = ".$annonces->getIdAnnonces()." and annonces.idRecruteur = recruteur.idRecruteur")){
                                    
                           echo "<table border = 2>";
        
                            echo "<tr><td>Titre</td><td>Contenu</td><td>Date de publication</td><td>Domaine</td><td>Candidat/Recruteur</td></tr>";
                           
                           
                                    foreach($listAnnonces1 as $object){
                              
                                            echo "<tr><td>".$object->titre."</td><td>".$object->contenu."</td><td>".$object->datePublication."</td><td>".
                                            $object->domaine."</td><td>".$object->nature."</td><td>".$gdf->form("f25","formulaireDePostulation.php","post").$gdf->hidden("idAnnonces",$object->idAnnonces).
                                            $gdf->hidden("idCandidat",$annonces->getIdCandidat()).$gdf->hidden("id",$annonces->getId()).$gdf->hidden("domaine",$object->domaine).
                                            $gdf->hidden("nature",$annonces->getNature()).$gdf->submit("postuler","postuler","postuler").$gdf->endForm()."</td></tr>";
                      
                              }
                              
                          echo "</table><br/><br/>";
          
                            echo "Chercher des autres ".$gdf->form("f26","afficherToutesLesAnnonces.php","post").$gdf->hidden("id",$annonces->getId()).
                            $gdf->hidden("domaine",$annonces->getDomaine()).$gdf->hidden("idCandidat",$annonces->getIdCandidat()).$gdf->hidden("nature",$annonces->getNature()).
                            $gdf->submit("repeterAffichageAnnonces","repeterAffichageAnnonces","annonces").$gdf->endForm();
              
                 }
                  else{
              
                        echo "aucune annonce";
              
                 }
        }
         
        
        else if($annonces->getNature() == 'recruteur'){
        
        //La aussi J'ai utilise deux requetes avec jointure l'une parcourit les deux tables annonces et candidat et l'autre parcourit les tables annonces et recruteur
            //afain d'eviter le conflit entre les deux tables candidat et recruteur qui ont deux champs communs 'domaine' et 'nature'
    
                     if($listAnnonces = $annonces->afficherAnnonces("select * from annonces,candidat where annonces.idAnnonces = ".$annonces->getIdAnnonces()." and annonces.idCandidat = candidat.idCandidat")){
    
                                    echo "<table border = 2>";
        
                                    echo "<tr><td>Nom</td><td>Contenu</td><td>Date de publication</td><td>Domaine</td><td>Candidat/Recruteur</td></tr>";
                  
        
                                            foreach($listAnnonces as $object){
                            
                                                    echo "<tr><td>".$object->titre."</td><td>".$object->contenu."</td><td>".$object->datePublication."</td><td>".
                                                    $object->domaine."</td><td>".$object->nature."</td></tr>";
                              
                                            }
                            
                            
          
                                    echo "</table><br/><br/>";
          
                                    echo "Chercher des autres ".$gdf->form("f26","afficherToutesLesAnnonces.php","post").$gdf->hidden("id",$annonces->getId()).
                                    $gdf->hidden("domaine",$annonces->getDomaine()).$gdf->hidden("idCandidat",$null='null').$gdf->hidden("nature",$annonces->getNature()).
                                    $gdf->submit("repeterAffichageAnnonces","repeterAffichageAnnonces","annonces").$gdf->endForm();
                    }
                    
                    
                    else if($listAnnonces1 = $annonces->afficherAnnonces("select * from annonces,recruteur where annonces.idAnnonces = ".$annonces->getIdAnnonces()." and annonces.idRecruteur = recruteur.idRecruteur")){
              
                                  echo "<table border = 2>";
        
                                    echo "<tr><td>Nom</td><td>Contenu</td><td>Date de publication</td><td>Domaine</td><td>Candidat/Recruteur</td></tr>";
                                    
                                    
                                            foreach($listAnnonces1 as $object){
                            
                                                     echo "<tr><td>".$object->titre."</td><td>".$object->contenu."</td><td>".$object->datePublication."</td><td>".
                                                      $object->domaine."</td><td>".$object->nature."</td></tr>";
                              
                                            }
                                            
                                 echo "</table><br/><br/>";
          
                                  echo "Chercher des autres ".$gdf->form("f26","afficherToutesLesAnnonces.php","post").$gdf->hidden("id",$annonces->getId()).
                                    $gdf->hidden("domaine",$annonces->getDomaine()).$gdf->hidden("idCandidat",$null='null').$gdf->hidden("nature",$annonces->getNature()).
                                    $gdf->submit("repeterAffichageAnnonces","repeterAffichageAnnonces","annonces").$gdf->endForm();
              
                    }
                    else{
              
                              echo "aucune annonce";
              
                    }
        
        }

?>