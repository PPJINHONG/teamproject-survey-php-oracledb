<?php
//CONTROLLER
defined('BASEPATH') or exit('No direct script access allowed');

class Survey extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("/csn/Survey_m");
	}

	public function sv_list() {
		$data['title'] = "설문조사 목록";

		$data['admin_id'] = $this->session->userdata('admin_id');
		$data['memberList'] = $this->Survey_m->getMember();
		$data['admin_level'] = $this->session->userdata('admin_level');
		$data['admin_name'] = $this->Survey_m->adminGetName()[0]['USER_NAME'];

		$this->masterpage->setMasterPage("csn/MasterPage1");
		$this->masterpage->addContentPage("csn/list", 'content', $data);
		$this->masterpage->show();
	}

}

?>
