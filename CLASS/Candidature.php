<?php

	class Candidature{

		private $id;
		private $idCandidat;
		private $domaine;
		private $nature;
		private $pdo;



		public function __construct($new_nature){ $this->nature = $new_nature; }


		//les mutateurs

		public function setId($new_id){ $this->id = $new_id; }

		public function setIdCandidat($new_id){ $this->idCandidat = $new_id; }

		public function setDomaine($new_domaine){ $this->domaine = $new_domaine; }


		//les accesseurs

		public function getId(){ return $this->id; }

		public function getIdCandidat(){ return $this->idCandidat; }

		public function getDomaine(){ return $this->domaine; }

		public function getNature(){ return $this->nature; }



		public function getPDO(){

			$pdo = new PDO("mysql:dbname=offreEmploi;host=localhost","root","");
			$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			$this->pdo = $pdo;
			return $this->pdo;

		}

		public function afficherCandidature($requet){

			if($res = $this->getPDO()->query($requet)){

				$candidatures = $res->fetchAll(PDO::FETCH_OBJ);
				return $candidatures;

			}

		}

	}






?>