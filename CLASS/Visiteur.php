<?php

  abstract class Visiteur{
  
    protected $nom;
    protected $prenom;
    protected $dateNaiss;
    protected $login;
    protected $password;
    protected $specialite;
    protected $domaine;
    protected $niveau;
    protected $nature;
    protected $pays;
    protected $region;
    protected $ville;
    protected $numeroTelephone;
    protected $pdo;
    
    
    public function __construct($new_nature){
    
      $this->nature = $new_nature;
    
    }
    
    abstract function getPDO();
    
    abstract function insererDonnees($requet);
    
    abstract function getNom();
    
    abstract function getPrenom();
    
    abstract function getDateNaiss();
    
    abstract function getLogin();
    
    abstract function getPassword();
    
    protected function getSpecialite(){ return $this->specialite; }
    
    protected function getNiveau(){ return $this->niveau; } 
    
    abstract function getDomaine();
    
    abstract function getNature();
    
    abstract function getPays();
    
    abstract function getRegion();
    
    abstract function getVille();
    
    abstract function getNumeroTelephone();

  }



?>