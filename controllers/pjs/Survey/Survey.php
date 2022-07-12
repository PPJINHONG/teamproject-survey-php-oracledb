<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Survey extends CI_Controller{

    public function __construck(){
        parent:: __construck();
        $this -> load -> model("/PJS/Survey_m");
    }

    public function index(){
        $data['title'] = "설문조사";
        $this->masterpage->setMasterPage("PJS/MasterPage");
        $this->masterpage->addContentPage("PJS/survey",'content',$data);
        $this->masterpage->show();
    }
}
?>

