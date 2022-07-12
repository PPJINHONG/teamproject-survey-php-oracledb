<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Survey_m extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getMember() {
        $sql = "SELECT * FROM MEMBER_KMS";
        $query = $this->db->query($sql);

        return $query->result_array();
    }
}