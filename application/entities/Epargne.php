<?php

    namespace application\entities;

    class Epargne extends Compte{

        private $remuneration;
        private $fraisOuverture ;

        public function __construct(){ parent::__construct(); }

        public function getRemuneration(){return $this->remuneration;}
        public function getFraisOuverture(){return $this->fraisOuverture;}

        public function setRemuneration($remuneration){ $this->remuneration= $remuneration;}
        public function setFraisOuverture($fraisOuverture){ $this->fraisOuverture = $fraisOuverture;}

    }

?>