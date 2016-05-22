<?php

  class Candidat extends Visiteur{
    
    private $id;
    protected $nom;
    protected $prenom;
    protected $dateNaiss;
    protected $email;
    protected $password;
    protected $specialite;
    protected $domaine;
    protected $niveau;
    protected $nature;
    protected $pays;
    protected $region;
    protected $ville;
    protected $numTel;
    protected $pdo;
    protected $photo;
    private $cv;
    
    
    
    public function __construct($new_nature){ $this->nature = $new_nature; }
    
    //Les mutateurs
    public function setId($new_id){ $this->id = $new_id; }

    public function setNom($new_nom){ $this->nom = $new_nom; }
    
    public function setPrenom($new_prenom){ $this->prenom = $new_prenom; }

    public function setDateNaiss($new_dateNaiss){ $this->dateNaiss = $new_dateNaiss; }
    
    public function setLogin($new_Email){ $this->email = $new_Email; }
    
    public function setPassword($new_password){ $this->password = $new_password; }
    
    public function setSpecialite($new_specialite){ $this->specialite = $new_specialite; }
    
    public function setDomaine($new_domaine){ $this->domaine = $new_domaine; }
    
    public function setNiveau($new_niveau){ $this->niveau = $new_niveau; }

    public function setNature($new_nature){ $this->nature = $new_nature; }
    
    public function setPays($new_pays){ $this->pays = $new_pays; }
    
    public function setRegion($new_region){ $this->region = $new_region; }
    
    public function setVille($new_ville){ $this->ville = $new_ville; }
    
    public function setNumeroTelephone($new_numTel){ $this->numTel = $new_numTel; }

    public function setPhoto($new_photo){ $this->photo = $new_photo; }

    public function setCV($new_cv){ $this->cv = $new_cv; }
    
    
    //les accesseurs

    public function getId(){ return $this->id; }
    
    public function getNom(){ return $this->nom; }
    
    public function getPrenom(){ return $this->prenom; }

    public function getDateNaiss(){ return $this->dateNaiss; }
    
    public function getLogin(){ return $this->email; }
    
    public function getPassword(){ return $this->password; }
    
    public function getSpecialite(){ return $this->specialite; }
    
    public function getDomaine(){ return $this->domaine; }
    
    public function getNiveau(){ return $this->niveau; }
    
    public function getNature(){ return $this->nature; }
    
    public function getPays(){ return $this->pays; }
    
    public function getRegion(){ return $this->region; }
    
    public function getVille(){ return $this->ville; }
    
    public function getNumeroTelephone(){ return $this->numTel; }

    public function getPhoto(){ return $this->photo; }

    public function getCV(){ return $this->cv; }
    
    
    
    
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

    public function afficherCandidat($requet){

        if($res = $this->getPDO()->query($requet)){

                $listCandidats = $res->fetchAll(PDO::FETCH_OBJ);

                return $listCandidats;

        }

    }

    public function updateCandidat($requet){
    
    
            if($this->getPDO()->exec($requet)){
            
                    return true;
            
            }
            else{
            
                    return false;
            
            }
    
   
    }
  
  }

?>