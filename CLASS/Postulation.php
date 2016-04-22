<?php

    class Postulation{
      
      private $idPostulation;
      private $idAnnonces;
      private $idCandidat;
      private $idRecruteur;
      private $domaine;
      private $nature;
      private $lettreDeMotivation;
      private $reponseRecruteur;
      private $pdo;
      
      
      public function __construct($new_nature){
      
          $this->nature = $new_nature;
      
      }
      
      
      
      //les mutateurs
      
      public function setIdPostulation($new_id){ $this->idPostulation = $new_id; }
      
      public function setIdAnnonces($new_id){ $this->idAnnonces = $new_id; }
      
      public function setIdCandidat($new_id){ $this->idCandidat = $new_id; }
      
      public function setDomaine($new_domaine){ $this->domaine = $new_domaine; }
      
      public function setLettreDeMotivation($new_lettre){ $this->lettreDeMotivation = $new_lettre; }
      
      public function setReponseRecruteur($new_reponse){ $this->reponseRecruteur = $new_reponse; }
      
      public function setIdRecruteur($new_id){ $this->idRecruteur = $new_id; }
      
      
      
      //les accesseurs
      
      public function getIdPostulation(){ return $this->idPostulation; }
      
      public function getIdAnnonces(){ return $this->idAnnonces; }
      
      public function getIdCandidat(){ return $this->idCandidat; }
      
      public function getIdRecruteur(){ return $this->idRecruteur; }
      
      public function getDomaine(){ return $this->domaine; }
      
      public function getNature(){ return $this->nature; }
      
      public function getLettreDeMotivation(){ return $this->lettreDeMotivation; }
      
      public function getReponseRecruteur(){ return $this->reponseRecruteur; }
      
      
      
      
      public function getPDO(){
      
            $pdo = new PDO("mysql:dbname=offreEmploi;host=localhost","root","");
            $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $this->pdo = $pdo;
            return $this->pdo;
      
      }
      
      public function postuler($requet){
      
            if($this->getPDO()->exec($requet)){
          
                return true;
          
            }
            else{
          
                return false;
          
            }
      
      }
      
      public function afficherCandidatures($requet){
      
          if($res = $this->getPDO()->query($requet)){
              
              $candidatures = $res->fetchAll(PDO::FETCH_OBJ);
            
              return $candidatures;
          
          }
      
      }
    
    }

?>