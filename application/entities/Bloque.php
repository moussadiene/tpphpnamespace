<?php
    namespace application\entities;

    class Bloque extends Epargne{
        private $dateDebut;
        private $dateFin;

        public function __construct(){
            parent::__construct();
        }

        public function getDateDebut(){return $this->dateDebut;}
        public function getDateFin(){return $this->dateFin;}

        public function setDateDebut($dateDebut){ $this->dateDebut = $dateDebut;}
        public function setDateFin($dateFin){ $this->dateFin = $dateFin;}

    }

?>