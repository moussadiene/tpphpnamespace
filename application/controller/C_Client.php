<?php
namespace application\controller;

use application\model\M_Client;
use core\Controller;


class C_Client extends Controller{

        public function __construct(){
            parent::__construct();
            require_once 'bootstrap.php';
        }

        public function index(){
            
            $this->view->load("client/V_add");
        }

        public function addClient() {

            extract($_POST);
            exit();
            $clientdao = new M_Client();

            $data['liste']  = $clientdao->getList();
           $this->view->load("client/V_add",$data );

        }
        public function addEntreprise() {

            extract($_POST);
            exit();
            $clientdao = new M_Client();
            $list = $clientdao->getList();

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
