<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login_model extends CI_Model 
{
	public function __construct() {
		parent::__construct();
	}
	function validate()
	{
		$arr['USER_ID'] =$this->input->post('user_id');
		$arr['USER_PASS'] =$this->input->post('user_pass');
		return $this->db->get_where('SV_MEMBER',$arr)->row();
	}
}