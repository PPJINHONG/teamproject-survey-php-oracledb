<?php
    //MODEL
    defined('BASEPATH') or exit('No direct script access allowed');

    class Login_m extends CI_Model
    {
        public function __construct()
        {
            parent::__construct();
            //$this->load->model("login_m");
        }
        public function id_chk($id) {
            $sql = "SELECT * FROM MEMBER_CSN WHERE USER_ID = '".$id."'";
            $query = $this->db->query($sql);

            return $query->result_array();
        }

        public function adm_chk($id) {
        	$sql = "SELECT * FROM ADMIN_CSN WHERE USER_ID = '".$id."'";
        	$query = $this->db->query($sql);

        	return $query->result_array();
		}

        public function register($arr) {
            $sql = "
                INSERT INTO MEMBER_CSN
                VALUES (
                '".$arr['id']."',
                '".$arr['pw']."',
                '".$arr['name']."',
                '".$arr['gender']."',
                '".$arr['phone']."',
                '".$arr['birth']."',
                '".$arr['dept']."'
                )";
            $this->db->query($sql);
        }

    }
?>
