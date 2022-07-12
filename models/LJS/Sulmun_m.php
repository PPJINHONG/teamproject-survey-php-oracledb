<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sulmun_m extends CI_Model
{
    public function __construnct()
    {
        parent::__construnct();
    }


    public function level_check($id){
        $sql = " SELECT * FROM ADMIN_LJS WHERE USER_ID = '" . $id . "'";
        $query = $this->db->query($sql);

        return $query->result_array();
    }


    public function getMember(){
        $sql = "SELECT * FROM MEMBER_LJS";
        $query = $this->db->query($sql);

        return $query->result_array();
    }

    public function getMaxNum(){

    }
}
?>