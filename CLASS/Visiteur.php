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
    protected $photo;
    
    
    public function __construct($new_nature){
    
      $this->nature = $new_nature;
    
    }

    //mutateurs

    abstract function setNom($new_nom);
    
    abstract function setPrenom($new_nature);
    
    abstract function setDateNaiss($new_dateNaiss);
    
    abstract function setLogin($new_login);
    
    abstract function setPassword($new_password);
    
    public function setSpecialite($new_speciaite){ $this->specialite = $new_specialite; }
    
    public function setNiveau($new_niveau){ $this->niveau = $new_niveau; }
    
    abstract function setDomaine($new_domaine);
    
    abstract function setPays($new_pays);
    
    abstract function setRegion($new_region);
    
    abstract function setVille($new_ville);
    
    abstract function setNumeroTelephone($new_numTel);

    abstract function setPhoto($new_photo);

    

    //accesseurs
    
    abstract function getPDO();

    abstract function insererDonnees($requet);
    
    abstract function getNom();
    
    abstract function getPrenom();
    
    abstract function getDateNaiss();
    
    abstract function getLogin();
    
    abstract function getPassword();
    
    public function getSpecialite(){ return $this->specialite; }
    
    public function getNiveau(){ return $this->niveau; }
    
    abstract function getDomaine();
    
    abstract function getNature();
    
    abstract function getPays();
    
    abstract function getRegion();
    
    abstract function getVille();
    
    abstract function getNumeroTelephone();

    abstract function getPhoto();

  }



?>