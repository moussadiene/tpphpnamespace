<?php
	namespace application\model;
	
	use application\entities\Entreprise;

	class M_Entreprise extends Entreprise{

        public function __construct(){
			parent::__construct();
		}
		function add(){
			$sql = $this->db->prepare("INSERT INTO entreprise(id , nom, tel, adresse, email, logi, passwd,budget)
                    VALUES (:nom, :tel, :adresse, :email, :logi, :passwd, :budget)
				");
			$sql->bindValue(':id', $this->getId());
			$sql->bindValue(':nom', $this->getNomEntreprise());
			$sql->bindValue(':tel', $this->getTelephone());
			$sql->bindValue(':adresse', $this->getAdresse());
			$sql->bindValue(':email', $this->getEmail());
			$sql->bindValue(':logi', $this->getLogin());
			$sql->bindValue(':passwd', $this->getPassword());
			$sql->bindValue(':budget', $this->getBudget());
			if($this->db != null)
			{
				$sql->execute();
				return ;
			}else{
				return null;
			}
		}

	}
