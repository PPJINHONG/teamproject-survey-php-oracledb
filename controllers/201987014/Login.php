<?php
    defined('BASEPATH') or exit('No direct script access allowed');

    class Login extends CI_Controller
    {
        public function __construnct()
        {
            parent::__construnct();
            //#this->load->model("login_m");
        }

        public function index()
        {
            $data['TT'] ='';
            $this->load->view('/201987014/login',$data);
        }
    }
?>