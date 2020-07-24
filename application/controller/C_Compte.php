<?php
namespace application\controller;

use application\model\M_Bloque;
use application\model\M_Client;
use application\model\M_Courant;
use application\model\M_Entreprise;
use application\model\M_Epargne;
use application\service\Service;
use core\Controller;

    class C_Compte extends Controller{

        public function __construct(){
            parent::__construct();
        }

        public function index(){
            $this->view->load("client/V_add");
        }

        public function add() {

            extract($_POST);

            $client = new M_Client();
            if(isset($valider)){
                if($choix_client == "nouveau"){
                    if($choix_type_client == "physique"){
                        $client->setMatricule(Service::codeAleatoire());
                        $client->setCni($cni);
                        $client->setNom($nom);
                        $client->setPrenom($prenom);
                        $client->setSexe($sexe);
                        $client->setDateNaiss($datenaiss);
                        $client->setTelephone($tel);
                        $client->setAdresse($adr);
                        $client->setEmail($email);

                        if($choixcompte == "simple"){
                            $req = $client->addClient();
                            if($req==1){
                                $e = new M_Epargne();
                                $e->setNumero(Service::codeAleatoire());
                                $e->setClient($client->getMatricule());
                                $e->setRib(Service::cleRip());
                                $e->setSolde(0);
                                $e->setDateOuverture($this->getDateNow());
                                $e->setFraisOuverture(20000);
                                $e->setRemuneration(10000);
                                $e->setTypeCompte(2);
                                $data['res']  = $e->addCompte();
                            }
                        }elseif($choixcompte == "courant"){
                            $client->setRaisonSociale($raison_sociale);
                            $client->setSalaire($salaire);
                            $client->setNomEmployeur($nom_employeur);
                            $client->setAdrEmployeur($adr_employeur);

                            $req = $client->addClient();
                            $courant = new M_Courant();
                                $courant->setNumero(Service::codeAleatoire());
                                $courant->setClient($client->getMatricule());
                                $courant->setRib(Service::cleRip());
                                $courant->setSolde(0);
                                $courant->setDateOuverture($this->getDateNow());
                                $courant->setAgios(10000);
                                $e->setTypeCompte(1);
                                $data['res']  = $courant->addCompte();
                        }else{
                            $e = new M_Bloque();
                                $e->setNumero(Service::codeAleatoire());
                                $e->setClient($client->getMatricule());
                                $e->setRib(Service::cleRip());
                                $e->setSolde(0);
                                $e->setDateOuverture($this->getDateNow());
                                $e->setFraisOuverture(20000);
                                $e->setRemuneration(10000);
                                $e->setDateDebut($date_debut);
                                $e->setDateFin($date_fin);
                                $e->setTypeCompte(3);
                                $data['res']  = $e->addCompte();
                        }
                    }else{
                        $ense = new M_Entreprise();
                        $ense->setNomEntreprise($nom_entreprise);
                        $ense->setTelephone($tel_entreprise);
                        $ense->setAdresse($adr_entreprise);
                        $ense->setEmail($email_entreprise);
                        $ense->setBudjet($budget_entreprise);

                        $id = $ense->add();
                        if($choixcompte == "simple"){
                            $req = $client->addClient();
                            if($req==1){
                                $e = new M_Epargne();
                                $e->setNumero(Service::codeAleatoire());
                                //$e->setClient($client->getMatricule());
                                $e->setEntreprise($id);
                                $e->setRib(Service::cleRip());
                                $e->setSolde(0);
                                $e->setDateOuverture($this->getDateNow());
                                $e->setFraisOuverture(20000);
                                $e->setRemuneration(10000);
                                $e->setTypeCompte(2);
                                $data['res']  = $e->addCompte();
                            }
                        }else{
                            $e = new M_Bloque();
                                $e->setNumero(Service::codeAleatoire());
                                $e->setClient($client->getMatricule());
                                $e->setRib(Service::cleRip());
                                $e->setSolde(0);
                                $e->setDateOuverture($this->getDateNow());
                                $e->setFraisOuverture(20000);
                                $e->setRemuneration(10000);
                                $e->setDateDebut($date_debut);
                                $e->setDateFin($date_fin);
                                $e->setTypeCompte(3);
                                $data['res']  = $e->addCompte();
                        }
                    }
                }else{
                    $client->setCni($search);
                    $mat = $client->getMat();
                    if($choixcompte == "simple"){

                        $e = new M_Epargne();
                        $e->setNumero(Service::codeAleatoire());
                        $e->setClient($mat);
                        $e->setRib(Service::cleRip());
                        $e->setSolde(0);
                        $e->setDateOuverture($this->getDateNow());
                        $e->setFraisOuverture(20000);
                        $e->setRemuneration(10000);
                        $e->setTypeCompte(2);
                        $data['res'] = $e->addCompte();

                    }else{
                        $e = new M_Bloque();
                        $e->setNumero(Service::codeAleatoire());
                        $e->setClient($mat);
                        $e->setRib(Service::cleRip());
                        $e->setSolde(0);
                        $e->setDateOuverture($this->getDateNow());
                        $e->setFraisOuverture(20000);
                        $e->setRemuneration(10000);
                        $e->setDateDebut($date_debut);
                        $e->setDateFin($date_fin);
                        $e->setTypeCompte(3);
                        $data['res']  = $e->addCompte();
                    }
                }
            }
           $this->view->load("client/V_add",$data['res'] );

        }

        public function getDateNow(){
            $tz_object = new \DateTimeZone('UTC');
            $datetime = new \DateTime();
            $datetime->setTimezone($tz_object);
            return $datetime->format('Y\-m\-d');
        }
    }

?>
