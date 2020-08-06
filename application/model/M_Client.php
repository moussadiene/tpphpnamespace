<?php
	namespace application\model;

	use application\entities\Client;
use core\Model;

class M_Client extends Model{

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
		
		}

		public function getList(){
			return $this->entityManager
						->createQuery('SELECT c FROM Client c')
						->getResult();
			
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
