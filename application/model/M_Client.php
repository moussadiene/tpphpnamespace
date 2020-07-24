<?php
	namespace application\model;

	use application\entities\Client;

    class M_Client extends Client{

        public function __construct(){
			parent::__construct();
		}


		function searchClientbyCNI(){
			$sql = $this->db->prepare("SELECT * FROM personne where cni LIKE ?");
			if($this->db != null)
			{
				$sql->execute(array($this->getCni().'%'));
				return $sql->fetchAll();
			}else{
				return 1;
			}
		}
		function getMat(){
			$sql = $this->db->prepare("SELECT matricule FROM personne where cni = ?");
			if($this->db != null)
			{
				$sql->execute(array($this->getCni()));
				return $sql->fetchColumn();
			}else{
				return 1;
			}
		}


		public function addClient(){
			$sql = $this->db->prepare("INSERT INTO personne(matricule,cni,nom,prenom,sexe,telephone,dateNaiss,adresse,email,raison_sociale,salaire,nom_employeur,adr_employeur,logi,pass)
                    								VALUES (:matricule,:cni,:nom,:prenom,:sexe,:telephone,:dateNaiss,:adresse,:email,:raison_sociale,:salaire,:nom_employeur,:adr_employeur,:logi,:pass)
				");
				$sql->bindValue(':matricule', $this->getMatricule());
				$sql->bindValue(':cni', $this->getCni());
				$sql->bindValue(':nom', $this->getNom());
				$sql->bindValue(':prenom', $this->getPrenom());
				$sql->bindValue(':sexe', $this->getSexe());
				$sql->bindValue(':telephone', $this->getTelephone());
				$sql->bindValue(':dateNaiss', $this->getDateNaiss());
				$sql->bindValue(':adresse', $this->getAdresse());
				$sql->bindValue(':email', $this->getEmail());
				$sql->bindValue(':raison_sociale', $this->getRaisonSociale());
				$sql->bindValue(':salaire', $this->getSalaire());
				$sql->bindValue(':nom_employeur', $this->getNomEmployeur());
				$sql->bindValue(':adr_employeur', $this->getAdrEmployeur());
				$sql->bindValue(':logi', $this->getLogin());
				$sql->bindValue(':pass', $this->getPassword());

				if($this->db != null)
				{
					return $sql->execute();
				}else{
					return null;
				}
		}

		public function getList(){
			$sql = $this->db->prepare("SELECT * FROM personne");

			if($this->db != null)
			{
				return $sql->execute();
			}else{
				return null;
			}
		}
		// public function searchClientbyMat($mat){
		// 	$sql = "SELECT * FROM personne WHERE cni LIKE ?'%".$mat."%'";
		// 	if($this->db != null)
		// 	{
		// 		return $sql->execute();
		// 	}else{
		// 		return null;
		// 	}
		// }

	}
