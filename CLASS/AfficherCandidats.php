<?php

  class afficherCandidats{
  
    private $id;
    private $domaine;
    private $nature;
    private $listCondidats;
  
    public function __construct($new_id,$new_domaine,$new_nature){
      
      $this->id = $new_id;
      $this->domaine = $new_domaine;
      $this->nature = $new_nature;
 
    }
    
    
    //les accesseurs
    
    public function getId(){ return $this->id; }
  
    public function getDomaine(){ return $this->domaine; }
  
    public function getNature(){ return $this->nature; }
    
    //fin des accesseurs
  
  
    public function getPDO(){
  
      $pdo = new PDO("mysql:dbname=offreEmploi;host=localhost","root","");
      $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
      $this->pdo = $pdo;
      return $this->pdo;
    
    }
  
    public function afficherCandidats($requet){
  
      if($res = $this->getPDO()->query($requet)){
    
        $listCondidats = $res->fetchAll(PDO::FETCH_OBJ);
        $this->listCondidats = $listCondidats;
        return $this->listCondidats;
      
      }
      else{
    
        return false;
    
      }
  
    }
  
  }

?>