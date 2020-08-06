<?php
	namespace application\model;
	use application\entities\Courant;

    class M_Courant extends Courant{

        public function __construct(){
			parent::__construct();
		}
		function addCompte(){
			$sql = $this->db->prepare("INSERT INTO compte(numero, mat, rib, solde, dateOuverture, agios, typeCompte)
                    VALUES (:numero, :mat, :rib, :solde, :dateOuverture, :agios, :typeCompte)
				");
			$sql->bindValue(':numero', $this->getNumero());
			$sql->bindValue(':mat', $this->getClient());
			$sql->bindValue(':rib', $this->getRib());
			$sql->bindValue(':solde', $this->getSolde());
			$sql->bindValue(':dateOuverture', $this->getDateOuverture());
			$sql->bindValue(':agios', $this->getAgios());
			$sql->bindValue(':typeCompte', $this->getTypeCompte());

			if($this->db != null)
			{
				return $sql->execute();
			}else{
				return null;
			}
		}

	}
