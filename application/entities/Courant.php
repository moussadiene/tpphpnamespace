<?php

    namespace application\entities;

    class Courant extends Compte{
        private $agios;

        public function __construct(){ parent::__construct(); }

        public function getAgios(){return $this->agios;}

        public function setAgios($agios){ $this->agios = $agios;}


    }

?>