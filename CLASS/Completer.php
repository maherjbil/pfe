<?php

  class Completer{
    
    private $prenom;
    private $specialite = "";
    private $domaine;
    private $niveau = "";
    private $pays;
    private $region;
    private $ville;
    private $numeroTelephone;
    private $pdo;
  
    public function __construct($new_prenom,$new_specialite,$new_domaine,$new_niveau,$new_pays,$new_region,$new_ville,$new_numeroTelephone){
    
      $this->prenom = $new_prenom;
      $this->specialite = $new_specialite;
      $this->domaine = $new_domaine;
      $this->niveau = $new_niveau;
      $this->pays = $new_pays;
      $this->region = $new_region;
      $this->ville = $new_ville;
      $this->numeroTelephone = $new_numeroTelephone;
    
    } 
  
    public function getPDO(){
   
            $pdo = new PDO("mysql:dbname=offreEmploi;host=localhost","root","");
            $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $this->pdo = $pdo;
            return $pdo;
      
    }
  
  
  
    public function updateCandidat($requet){
    
    
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
    
    public function getPrenom(){ return $this->prenom; }
    
    public function getSpecialite(){ return $this->specialite; }
    
    public function getDomaine(){ return $this->domaine; }
    
    public function getNiveau(){ return $this->niveau; }
    
    public function getPays(){ return $this->pays; }
    
    public function getRegion(){ return $this->region; }
    
    public function getVille(){ return $this->ville; }
    
    public function getNumeroTelephone(){ return $this->numeroTelephone; }
  
  }

?>