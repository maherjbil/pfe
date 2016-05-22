<?php

  class Recruteur extends Visiteur{
    
    private $id;
    protected $nom;
    protected $prenom;
    protected $dateNaiss;
    protected $email;
    protected $password;
    protected $domaine;
    protected $nature;
    protected $pays;
    protected $region;
    protected $ville;
    protected $numeroTelephone;
    protected $pdo;
    protected $photo;
    
    public function __construct($new_nature){
    
      $this->nature = $new_nature;
    
    }


    //les mutateurs

    public function setId($new_id){ $this->id = $new_id; }

    public function setNom($new_nom){ $this->nom = $new_nom; }
    
    public function setPrenom($new_prenom){ $this->prenom = $new_prenom; }
    
    public function setDateNaiss($new_dateNaiss){ $this->dateNaiss = $new_dateNaiss; }
    
    public function setLogin($new_email){ $this->email = $new_email; }    
   
    public function setPassword($new_password){ $this->password = $new_password; }
   
    public function setDomaine($new_domaine){ $this->domaine = $new_domaine; }
   
    public function setPays($new_pays){ $this->pays = $new_pays; }
    
    public function setRegion($new_region){ $this->region = $new_region; }
    
    public function setVille($new_ville){ $this->ville = $new_ville; }
    
    public function setNumeroTelephone($new_numTel){ $this->numeroTelephone = $new_numTel; }

    public function setPhoto($new_photo){ $this->photo = $new_photo; }
    
    
    
    //les accesseurs

    public function getId(){ return $this->id; }
    
    public function getNom(){ return $this->nom; }
    
    public function getPrenom(){ return $this->prenom; }
    
    public function getDateNaiss(){ return $this->dateNaiss; }
    
    public function getLogin(){ return $this->email; }    
   
    public function getPassword(){ return $this->password; }
   
    public function getDomaine(){ return $this->domaine; }
   
    public function getNature(){ return $this->nature; }
   
    public function getPays(){ return $this->pays; }
    
    public function getRegion(){ return $this->region; }
    
    public function getVille(){ return $this->ville; }
    
    public function getNumeroTelephone(){ return $this->numeroTelephone; }

    public function getPhoto(){ return $this->photo; }
    
    
    
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

    public function afficherRecruteur($requet){

        if($res = $this->getPDO()->query($requet)){

                $listRecruteur = $res->fetchAll(PDO::FETCH_OBJ);

                return $listRecruteur;

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