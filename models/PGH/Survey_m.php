<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Survey_m extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getMemeber() {
        $sql = "SELECT * FROM MEMBER_PKH";
        $query = $this->db->query($sql);

        return $query->result_array();
    }
}