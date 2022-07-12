<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Topic extends CI_Controller
{
    public function __construct()
    {
        parent:: __construct();
    }

    public function index(){
        $this->load->view('PJS/PJSTEST/Topic');
    }

    public function get($id){
        $data = array('id'=>$id);
        $this->load->view('PJS/PJSTEST/get',$data);
    }
}


?>