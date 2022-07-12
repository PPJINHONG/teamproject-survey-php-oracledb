<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main_model extends CI_Model 
{
	public function __construct() {
		parent::__construct();
	}

	public function gets() {
		return $this->db->query('SELECT DOC_TITLE,DOC_SURVEYDEPT,DOC_PEOPLENUM,DOC_ENDDATE,DOC_EMPNO,DOC_ENDYN FROM SV_DOCLIST')->result();
	}
}