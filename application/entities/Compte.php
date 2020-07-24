<?php
    namespace application\entities;

    use core\Model;
    
    abstract class Compte extends Model{
        private $numero;
        private $dateOuverture;
        private $rib;
        private $solde;
        private $client ;
        private $entreprse;
        private $typeCompte;
        public function __construct(){parent::__construct(); }

        public function getNumero(){return $this->numero;}
        public function getDateOuverture(){return $this->dateOuverture;}
        public function getRib(){return $this->rib;}
        public function getSolde(){return $this->solde;}
        public function getClient(){return $this->client;}
        public function getEntreprise(){return $this->entreprse;}
        public function getTypeCompte(){return $this->typeCompte;}

        public function setNumero($numero){ $this->numero = $numero;}
        public function setDateOuverture($dateOuverture){ $this->dateOuverture = $dateOuverture;}
        public function setRib($rib){ $this->rib = $rib;}
        public function setSolde($solde = null){ $this->solde = $solde;}
        public function setClient($client){ $this->client= $client;}
        public function setEntreprise($entreprse){ $this->entreprse = $entreprse;}
        public function setTypeCompte($typeCompte){ $this->typeCompte = $typeCompte;}

    }

?>