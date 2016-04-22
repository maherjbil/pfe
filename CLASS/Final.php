<?php

  class Final1{
  
  
  
  public function getPDO(){
  
  
    $pdo = new PDO("dbname=offreEmploi;host=localhost","root","");
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $this->pdo = $pdo;
    return $pdo;
  
  }
  
    public function condidat($requet){
    
    
      if($this->getPDO()->exec($requet)){
      
        return true;
      
      
      }
      else{
      
        return false;
      
      }
      
   
    }
  
  public function recruteur($requet){
  
  
    if($this->getPDO()->exec($requet)){
    
    
      return true;
    
    
    }
    else{
    
      return false;
    
    
    }
  
  }
  
  
  }

?>