<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Survey extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("/pgh/survey_m");
    }

    public function sv_list() {
        $data['title'] = "설문조사 목록";

        $data["memberList"] = $this->survey_m->getMemeber();

        $this->masterpage->setMasterPage("pgh/MasterPage");
        $this->masterpage->addContentPage("pgh/survey/sv_list", 'content', $data);
        $this->masterpage->show();
    }
}

?>