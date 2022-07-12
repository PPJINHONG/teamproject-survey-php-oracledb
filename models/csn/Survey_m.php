<?php
//MODEL
defined('BASEPATH') or exit('No direct script access allowed');

class Survey_m extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		//$this->load->model("login_m");
	}

	public function getMember()
	{
		$sql = "SELECT * FROM MEMBER_CSN";
		$query = $this->db->query($sql);

		return $query->result_array();
	}

	public function adminGetName()
	{
		$admin_id = $this->session->userdata('admin_id');
		$sql = "SELECT USER_NAME FROM MEMBER_CSN WHERE USER_ID = '".$admin_id."'";
		$query = $this->db->query($sql);

		return $query->result_array();
	}
}

?>
