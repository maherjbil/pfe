<?php

  class Recruteur extends Visiteur{
  
    public $nom;
    public $prenom;
    public $dateNaiss;
    public $login;
    public $password;
    public $domaine;
    public $nature;
    public $pdo;
    
    
    
    public function __construct($new_nom,$new_prenom,$new_DateNaiss,$new_login,$new_password,$new_domaine,$new_nature){
    
      $this->nom = $new_nom;
      $this->prenom = $new_prenom;
      $this->dateNaiss = $new_DateNaiss;
      $this->login = $new_login;
      $this->password = $new_password;
      $this->prenom = $new_domaine;
      $this->nature = $new_nature;
    
    }
    
    public function getPDO(){
    
    
      $pdo = new PDO("mysql:dbname=offre_emploi;host=localhost","root","");
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