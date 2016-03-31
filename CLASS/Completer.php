<?php

  class Completer{
  
    public $pdo;
  
  
    public function getPDO(){
   
      $pdo = new PDO("mysql:dbname=offre_emploi;host=localhost","root","");
      $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
      $this->pdo = $pdo;
      return $pdo;
      
    }
  
  
  
    public function updateCondidat($requet){
    
    
      if($this->getPDO()->exec($requet)){
      
        return true;
      
      }
      else{
      
        return false;
      
      }
    
   
    }
    
    public function updateRecruteur($requet){
    
    
      if($this->getPDO()->exec($requet)){
      
        return true;
      
      }
      else{
      
        return false;
      
      }
    
    
    }
  
  }

?>