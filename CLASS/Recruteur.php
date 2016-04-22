<?php

  class Recruteur extends Visiteur{
  
    protected $nom;
    protected $prenom1;
    protected $dateNaiss;
    protected $login;
    protected $password;
    protected $domaine;
    protected $nature;
    protected $pays;
    protected $region;
    protected $ville;
    protected $numeroTelephone;
    protected $pdo;
    
    
    public function __construct($new_nom,$new_prenom,$new_DateNaiss,$new_login,$new_password,$new_domaine,$new_nature,$new_pays,$new_region,$new_ville,$new_numeroTelephone){
    
      $this->nom = $new_nom;
      $this->prenom1 = $new_prenom;
      $this->dateNaiss = $new_DateNaiss;
      $this->login = $new_login;
      $this->password = $new_password;
      $this->prenom = $new_domaine;
      $this->nature = $new_nature;
      $this->pays = $new_pays;
      $this->region = $new_region;
      $this->ville = $new_ville;
      $this->numeroTelephone = $new_numeroTelephone;
    
    }
    
    
    
    //les accesseurs
    
    public function getNom(){ return $this->nom; }
    
    public function getPrenom(){ return $this->prenom1; }
    
    public function getDateNaiss(){ return $this->dateNaiss; }
    
    public function getLogin(){ return $this->login; }    
   
    public function getPassword(){ return $this->password; }
   
    public function getDomaine(){ return $this->domaine; }
   
    public function getNature(){ return $this->nature; }
   
    public function getPays(){ return $this-pays; }
    
    public function getRegion(){ return $this->region; }
    
    public function getVille(){ return $this->ville; }
    
    public function getNumeroTelephone(){ return $this->numeroTelephone; }
    
    
    
    public function getPDO(){
    
            $pdo = new PDO("mysql:dbname=offreEmploi;host=localhost","root","");
            $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $this->pdo = $pdo;
            return $pdo;
      
    }
    
    public function insererDonnees($requet){
    
            if($this->getPDO()->exec($requet)){
              return true;
            }
            else{
              return false;
            }
    
    }
    
  }

?>