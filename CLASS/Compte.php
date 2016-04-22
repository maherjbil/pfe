<?php

    class Compte{
    
        private $id;
        private $nom;
        private $prenom;
        private $dateNaiss;
        private $login;
        private $password;
        private $domaine;
        private $nature;
        private $pdo;
        
        
        public function __construct($new_nature){
        
            $this->nature = $new_nature;
        
        }
        
        
        //les mutateurs
        
        public function setId($new_id){ $this->id = $new_id; }
        
        public function setNom($new_nom){ $this->nom = $new_nom; }
        
        public function setPrenom($new_prenom){ $this->prenom = $new_prenom; }
        
        public function setDateNaiss($new_dateNaiss){ $this->dateNaiss = $new_dateNaiss; }
        
        public function setLogin($new_login){ $this->login = $new_login; }
        
        public function setPassword($new_password){ $this->password = $new_password; }
        
        public function setDomaine($new_domaine){ $this->domaine = $new_domaine; }
        
        
        
        //les accesseurs
        
        public function getId(){ return $this->id; }
        
        public function getNom(){ return $this->nom; }
        
        public function getPrenom(){ return $this->prenom; }
        
        public function getDateNaiss(){ return $this->dateNaiss; }
        
        public function getLogin(){ return $this->login; }
        
        public function getPassword(){ return $this->password; }
        
        public function getDomaine(){ return $this->domaine; }
        
        public function getNature(){ return $this->nature; }
        
        
        
        
        
        public function getPDO(){
        
            $pdo = new PDO("mysql:dbname=offreEmploi;host=localhost","root","");
            $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $this->pdo = $pdo;
            return $this->pdo;
        
        }
    
        public function afficherCompte($requet){
        
             if($res = $this->getPDO()->query($requet)){
             
                $comptes = $res->fetchAll(PDO::FETCH_OBJ);
                return $comptes;
             
             }
        
        }
        
        public function modifierOuSupprimerCompte($requet){
        
              if($this->getPDO()->exec($requet)){
              
                    return true;
              
              }
              else{
              
                    return false;
              
              }
        
        }
    
    }

?>