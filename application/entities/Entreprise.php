<?php

namespace application\entities;

use core\Model;
    class Entreprise extends Model{
        private $id = null;
        private $nomEntreprise;
        private $adresse ;
        private $telephone;
        private $email;
        private $login;
        private $password;
        private $budget;

        public function __construct(){parent::__construct(); }
        //Getters
        public function getId(){return $this->id;}
        public function getNomEntreprise(){return $this->nomEntreprise;}
        public function getTelephone(){return $this->telephone;}
        public function getAdresse(){return $this->adresse;}
        public function getEmail(){return $this->email;}
        public function getLogin(){return $this->login;}
        public function getPassword(){return $this->password;}
        public function getBudget(){return $this->budget;}

       //Setters
       public function setNomEntreprise($nomEntreprise){ $this->nomEntreprise = $nomEntreprise;}
       public function setTelephone($telephone){ $this->telephone = $telephone;}
       public function setAdresse($adresse){ $this->adresse = $adresse;}
       public function setEmail($email){ $this->email = $email;}
       public function setLogin($login = null){ $this->login = $login;}
       public function setPassword($password = null){ $this->password = $password;}
       public function setBudjet($budget){ $this->budget = $budget;}

    }

?>