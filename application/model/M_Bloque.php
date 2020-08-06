<?php
    namespace application\model;

	use application\entities\Bloque;
	
    class M_Bloque extends Bloque{

        public function __construct(){
			parent::__construct();
		}
		function addCompte(){
			$sql = $this->db->prepare("INSERT INTO compte(numero, mat, rib, solde, dateOuverture, fraisOuverture, remuneration, dateDebut, dateFin, typeCompte)
                    VALUES (:numero, :mat, :rib, :solde, :dateOuverture, :fraisOuverture, :remuneration,:dateDebut, :dateFin :typeCompte)
				");
			$sql->bindValue(':numero', $this->getNumero());
			$sql->bindValue(':mat', $this->getClient());
			$sql->bindValue(':rib', $this->getRib());
			$sql->bindValue(':solde', $this->getSolde());
			$sql->bindValue(':dateOuverture', $this->getDateOuverture());
			$sql->bindValue(':fraisOuverture', $this->getFraisOuverture());
			$sql->bindValue(':remuneration', $this->getRemuneration());
			$sql->bindValue(':dateDebut', $this->getDateDebut());
			$sql->bindValue(':dateFin', $this->getDateFin());
			$sql->bindValue(':typeCompte', $this->getTypeCompte());
			if($this->db != null)
			{
				return $sql->execute();
			}else{
				return null;
			}
		}

	}
