<?php

  class Authentification{
    
    private $nom;
    private $prenom;
    private $login;
    private $password;
    private $nature;
    private $pdo;
    
    
    
    public function __construct($login,$password){
    
      $this->login = $login;
      $this->password = $password;
    
    }
    
    
    //les accesseurs
    
    public function getNom(){ return $this->nom; }
    
    public function getPrenom(){ return $this->prenom; }
    
    public function getLogin(){ return $this->login; }
    
    public function getPassword(){ return $this->password; }
    
    public function getComptes(){ return $this->comptes; }
    
    public function getNature(){ return $this->nature; }
    
    
    
    public function getPDO(){
    
            $pdo = new PDO("mysql:dbname=offreEmploi;host=localhost","root","");
            $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $this->pdo = $pdo;
              return $pdo;
    
    }
        
    public function verifCompte($requet){
      
            if($res = $this->getPDO()->query($requet)){
              
              $comptes = $res->fetchAll(PDO::FETCH_OBJ);
            
                return $comptes;
            
            }
    
    }
    
  }

?>