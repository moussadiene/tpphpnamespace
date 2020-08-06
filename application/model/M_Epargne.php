<?php
	namespace application\model;

	use application\entities\Epargne;

    class M_Epargne extends Epargne{

        public function __construct(){
			parent::__construct();
		}
		function addCompte(){
			$sql = $this->db->prepare("INSERT INTO compte(numero, mat, rib, solde, dateOuverture, fraisOuverture, remuneration, typeCompte)
                    VALUES (:numero, :mat, :rib, :solde, :dateOuverture, :fraisOuverture, :remuneration, :typeCompte)
				");
			$sql->bindValue(':numero', $this->getNumero());
			$sql->bindValue(':mat', $this->getClient());
			$sql->bindValue(':rib', $this->getRib());
			$sql->bindValue(':solde', $this->getSolde());
			$sql->bindValue(':dateOuverture', $this->getDateOuverture());
			$sql->bindValue(':fraisOuverture', $this->getFraisOuverture());
			$sql->bindValue(':remuneration', $this->getRemuneration());
			$sql->bindValue(':typeCompte', $this->getTypeCompte());

			if($this->db != null)
			{
				return $sql->execute();
			}else{
				return null;
			}
		}

	}
