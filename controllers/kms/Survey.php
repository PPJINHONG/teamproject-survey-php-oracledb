<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Survey extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("/KMS/survey_m");
    }

    public function index() {
        $data['title'] = "설문조사";
        //$data["memberList"] = $this->survey_m->getmember();

        $this->masterpage->setMasterPage("KMS/MasterPage");
        $this->masterpage->addContentPage("KMS/survey/Survey_list", 'content', $data);
        $this->masterpage->show();
    }

    public function sv_list() {
        $data['title'] = "설문조사 목록";

        $data["memberList"] = $this->survey_m->getmember();

        $this->masterpage->setMasterPage("KMS/MasterPage");
        $this->masterpage->addContentPage("KMS/survey/Survey_list", 'content', $data);
        $this->masterpage->show();
    }
}

?>