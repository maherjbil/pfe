<?php

  class Authentification{
    
    private $nom;
    private $prenom;
    private $login;
    private $password;
    private $pdo;
    private $comptes;
    
    
    
    public function __construct($login,$password){
    
      $this->login = $login;
      $this->password = $password;
    
    }
    
    public function getPDO(){
    
      $pdo = new PDO("mysql:dbname=offre_emploi;host=localhost","root","");
      $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
      $this->pdo = $pdo;
      return $pdo;
    
    }
    
    
    
    
    public function query($requet){
    
      if($res = $this->getPDO()->query($requet)){
        $comptes = $res->fetchAll(PDO::FETCH_OBJ);
        return $comptes;
      
      }
    
    }
    
    public function verifCompte(){
    
      if($comptes = $this->query("select * from condidat where login = '".$this->login."' and password = '".$this->password."'")){
      
        $this->comptes = $comptes;
        $this->nom = $comptes[0]->nom;
        $this->prenom = $comptes[0]->prenom;
      
      }
      if($comptes = $this->query("select * from recruteur where login = '".$this->login."' and password = '".$this->password."'"){
      
        $this->comptes = $comptes;
        $this->nom = $comptes[0]->nom;
        $this->prenom = $comptes[0]->prenom;
        
      }
    
    }
    
    public function getNom(){
    
      return $this->nom;
      
    }
    public function getPrenom(){
    
      return $this->prenom;
      
    }
    public function getLogin(){
    
      return $this->login;
      
    }
    public function getPassword(){
    
      return $this->password;
      
    }
    public function getComptes(){
    
      return $this->comptes;
    
    }
    
  
  }

?>