<?php
    namespace application\entities;

    use core\Model;

    class Client extends Model{
        private $matricule;
        private $cni;
        private $nom;
        private $prenom;
        private $sexe;
        private $dateNaiss;
        private $telephone;
        private $adresse;
        private $email;
        private $raisonSociale;
        private $salaire;
        private $nomEmployeur;
        private $adrEmployeur;
        private $login;
        private $password;

        public function __construct(){ parent::__construct(); }

        //Getters
        public function getMatricule(){return $this->matricule;}
        public function getCni(){return $this->cni;}
        public function getPrenom(){return $this->prenom;}
        public function getNom(){return $this->nom;}
        public function getSexe(){return $this->sexe;}
        public function getDateNaiss(){return $this->dateNaiss;}
        public function getTelephone(){return $this->telephone;}
        public function getAdresse(){return $this->adresse;}
        public function getEmail(){return $this->email;}
        public function getRaisonSociale(){return $this->raisonSociale;}
        public function getSalaire(){return $this->salaire;}
        public function getNomEmployeur(){return $this->nomEmployeur;}
        public function getAdrEmployeur(){return $this->adrEmployeur;}
        public function getLogin(){return $this->login;}
        public function getPassword(){return $this->password;}

        //Setters

        public function setMatricule($matricule){$this->matricule = $matricule; }
        public function setCni($cni){ $this->cni = $cni;}
        public function setNom($nom){ $this->nom = $nom;}
        public function setPrenom($prenom){ $this->prenom = $prenom;}
        public function setSexe($sexe){ $this->sexe = $sexe;}
        public function setDateNaiss($dateNaiss){ $this->dateNaiss = $dateNaiss;}
        public function setTelephone($telephone){ $this->telephone = $telephone;}
        public function setAdresse($adresse){ $this->adresse = $adresse;}
        public function setEmail($email = null){ $this->email = $email;}
        public function setRaisonSociale($raisonSociale= null){ $this->raisonSociale = $raisonSociale;}
        public function setSalaire($salaire = null){ $this->salaire = $salaire;}
        public function setNomEmployeur($nomEmployeur = null){ $this->nomEmployeur = $nomEmployeur;}
        public function setAdrEmployeur($adrEmployeur = null){ $this->adrEmployeur = $adrEmployeur;}
        public function setLogin($login = null){ $this->login = $login;}
        public function setPassword($password = null){ $this->password = $password;}


    }
?>