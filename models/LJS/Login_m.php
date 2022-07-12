<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login_m extends CI_Model
{
    public function __construnct()
    {
        parent::__construnct();
    }

    public function id_check($id)
    {
        $sql = " SELECT * FROM MEMBER_LJS WHERE USER_ID = '" . $id . "'";
        $query = $this->db->query($sql);

        return $query->result_array();
    }



    public function register($arr)
    {
        $sql = "
                INSERT INTO MEMBER_LJS
                VALUES (
                '" . $arr['id'] . "',
                '" . $arr['pw'] . "',
                '" . $arr['name'] . "',
                '" . $arr['gender'] . "',
                '" . $arr['phone'] . "',
                '" . $arr['birth'] . "'
                
                )";
        $this->db->query($sql);
    }

}

?>