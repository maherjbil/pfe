<?php

	class Favoris{

		private $idUser;
		private $nature;
		private $pdo;
		private $idAnnonces;


		public function __construct($new_nature){

			$this->nature = $new_nature;

		}



		public function setIdUser($new_idUser){

			$this->idUser = $new_idUser;

		}


		public function setIdAnnonces($new_idAnnonces){

			$this->idAnnonces = $new_idAnnonces;

		}



		public function getIdUser(){

			return $this->idUser;

		}


		public function getNature(){

			return $this->nature;

		}


		public function getIdAnnonces(){

			return $this->idAnnonces;

		}



		public function getPDO(){

			$pdo = new PDO("mysql:dbname=offreEmploi;host=localhost","root","");
			$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			$this->pdo = $pdo;
			return $this->pdo;

		}



		public function afficherFavoris($requet){

			if($res = $this->getPDO()->query($requet)){

				$listFavoris = $res->fetchAll(PDO::FETCH_OBJ);

				return $listFavoris;

			}

		}


		public function updateFavoris($requet){

			if($this->getPDO()->exec($requet)){

				return true;

			}
			else{

				return false;

			}


		}

	}





?>