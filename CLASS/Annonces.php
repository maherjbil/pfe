<?php

  class Annonces{
  
    private $id;
    private $idCandidat;
    private $idAnnonces;
    private $nomAnnonce;
    private $contenuAnnonce;
    private $datePublication;
    private $domaine;
    private $contenu;
    private $nature;
    private $niveau;
    private $specialite;
    private $pays;
    private $region;
    private $ville;
    private $numeroTelephone;
    private $pdo;
  
  
  
    public function __construct($id,$domaine,$nature){
    
          $this->domaine = $domaine;
          $this->id = $id;
          $this->nature  = $nature;
          
    }
    
    
    
    //les mutateurs
    
    public function setIdAnnonces($new_id){ $this->idAnnonces = $new_id; }
    
    public function setIdCandidat($new_id){ $this->idCandidat = $new_id; }
    
    public function setNomAnnonce($new_nomAnnonce){ $this->nomAnnonce = $new_nomAnnonce; }
    
    public function setContenuAnnonce($new_contenuAnnonce){ $this->contenuAnnonce = $new_contenuAnnonce; }
    
    public function setDatePublication($new_date){ $this->datePublication = $new_date; }
    
    public function setSpecialite($new_specialite){ $this->specialite = $new_specialite; }
    
    public function setPays($new_pays){ $this->pays = $new_pays; }
    
    public function setRegion($new_region){ $this->region = $new_region; }
    
    public function setVille($new_ville){ $this->ville = $new_ville; }
    
    public function setNiveau($new_niveau){ $this->niveau = $new_niveau; }
    
    public function setNumeroTelephone($new_numerTelephone){ $this->numeroTelephone = $new_numeroTelephone; }
    
    
    
    
    //les accesseurs
    
    public function getId(){ return $this->id; }
    
    public function getIdAnnonces(){ return $this->idAnnonces; }
    
    public function getIdCandidat(){ return $this->idCandidat; }
    
    public function getNomAnnonce(){ return $this->nomAnnonce; }
    
    public function getContenuAnnonce(){ return $this->contenuAnnonce; }
    
    public function getDatePublication(){ return $this->datePublication; }
    
    public function getDomaine(){ return $this->domaine; }
    
    public function getSpecialite(){ return $this->specialite; }
    
    public function getNiveau(){  return $this->niveau; }
    
    public function getPays(){ return $this->pays; }
    
    public function getRegion(){ return $this->region; }
    
    public function getVille(){ return $this->ville; }
    
    public function getNumeroTelephone(){ return $this->NumeroTelephone; }
   
    public function getNature(){ return $this->nature; }
   
   
   
   
    public function getPDO(){
    
          $pdo = new PDO("mysql:dbname=offreEmploi;host=localhost","root","");
          $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
          $this->pdo = $pdo;
          return $this->pdo;
      
    }
    
    
    public function afficherAnnonces($requet){
    
          if($res = $this->getPDO()->query($requet)){
            
            $annonces = $res->fetchAll(PDO::FETCH_OBJ); 
            
            return $annonces;
            
          }
    
    }
    
    
    public function ajouterOuModifierOuSupprimerAnnonces($requet){
    
            if($this->getPDO()->exec($requet)){
            
              return true;
            
            }
            else{
            
              return false;
            
            }
    
    }
  
  }

?>