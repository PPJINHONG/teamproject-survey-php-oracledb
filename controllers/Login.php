<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
	public function __construnct()
	{
		parent::__construnct();
		$this->load->helper('form');
	}
	public function index()
	{
		if ($this->session->userdata('userid')) redirect('/survey');
		$this->load->view('static/header');
		$this->load->view('login');
	}
	public function verify()
	{
		$this->load->model('Login_model');
		$check = $this->Login_model->validate();
		if ($check) {
			$this->session->set_userdata('userid', $check->USER_ID);
			$this->session->set_userdata('username', $check->USER_NAME);
			redirect('/survey');
		} else {
			redirect('login');
		}
	}
	function logout()
	{
		$this->session->unset_userdata('userid');
		$this->session->unset_userdata('username');
		redirect('login');
	}
}