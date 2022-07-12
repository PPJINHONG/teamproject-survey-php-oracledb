<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sulmun extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("/LJS/login_m");
        $this->load->model("/LJS/sulmun_m");
    }

    public function sulmun_list()
    {
        $data['title'] = "설문목록";
        $id = $this->session->userdata('user_id');

        $data['name'] = $this->login_m->id_check($id)[0]["USER_NAME"];


        $this->masterpage->setMasterPage("LJS/MasterPage1");
        $this->masterpage->addContentPage("LJS/sulmun", 'content', $data);
        $this->masterpage->show();
    }

   public function list_sulmun_add()
    {
        $data['title'] = "설문추가";

        $this->masterpage->setMasterPage("LJS/MasterPage1");
        $this->masterpage->addContentPage("LJS/sulmun", 'content', $data);
        $this->masterpage->show();
    }
    public function sulmun_add()
    {
        $data['title'] = "설문추가";

        $id = $this->session->userdata('user_id');
        $data['name'] = $this->login_m->id_check($id)[0]["USER_NAME"];

        $this->masterpage->setMasterPage("LJS/MasterPage1");
        $this->masterpage->addContentPage("LJS/sulmun_add", 'content', $data);
        $this->masterpage->show();
    }



}

?>

