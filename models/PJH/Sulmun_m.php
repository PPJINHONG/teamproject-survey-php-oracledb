<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sulmun_m extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }


    public function who_chk($id)
    {

        $sql = "SELECT * FROM ADMIN_PJH WHERE USER_ID= '" . $id . "'";

        $query = $this->db->query($sql);

        return $query->result_array();
    }

    public function getMaxNum()
    {
        $sql = "SELECT * FROM (SELECT DOC_NUM FROM SVDOCLIST_PJH ORDER BY DOC_NUM DESC) WHERE ROWNUM = 1";
        $query = $this->db->query($sql);

        return $query->result_array();
    }

    public function saveDoc($sv_doc_num, $id, $user_dept, $doc_title, $doc_comment, $inputdate, $inputip, $doc_sdate, $doc_edate)
    {
        $sql = "INSERT INTO SVDOCLIST_PJH (
			DOC_NUM,
			DOC_EMPNO,
			DOC_DEPT,
			DOC_TITLE,
			DOC_COMMENT,
			DOC_INPUTDATE,
			DOC_INPUTIP,
			DOC_STARTDATE,
			DOC_ENDDATE
		) VALUES (
			'" . $sv_doc_num . "',
			'" . $id . "',
			'" . $user_dept . "',
			'" . $doc_title . "',
			'" . $doc_comment . "',
			'" . $inputdate . "',
			'" . $inputip . "',
			'" . $doc_sdate . "',
			'" . $doc_edate . "'
		)";
        $this->db->query($sql);
    }

    public function getDept($id)
    {
        $sql = "SELECT USER_DEPT FROM MEMBER_PJH1 WHERE USER_ID = '" . $id . "'";
        $query = $this->db->query($sql);

        return $query->result_array();
    }

    public function getquestionNum($doc_num)
    {
        $sql = "SELECT MAX(QUEST_NUM) AS QUEST_NUM FROM SVQUESTION_PJH WHERE DOC_NUM='" . $doc_num . "'";
        $query = $this->db->query($sql);

        return $query->result_array();
    }

    public function addQu($doc_num, $max_qt_num, $qt_title, $qt_comment, $qt_chyn, $qt_type)
    {
        $sql = "
        INSERT INTO SVQUESTION_PJH
        VALUES (
            '" .$doc_num. "',
			'" .$max_qt_num. "',
			'" .$qt_title. "',
			'" .$qt_comment. "',
			'" .$qt_chyn. "',
			'" .$qt_type. "'
			)";
        $this->db->query($sql);
    }

    public function getObjnum($doc_num)
    {
        $sql = "SELECT MAX(OBJ_NUM) AS OBJ_NUM FROM SVOBJITEM_PJH WHERE QUEST_NUM='".$doc_num."'";
        $query = $this->db->query($sql);

        return $query->result_array();
    }

    public function addObj($doc_num, $max_qt_num, $max_obj_num, $qt_data, $qt_type)
    {
        $vSql = "";
        $num = $max_obj_num;
        foreach ($qt_data as $row) {
            $num++;
            $obj_num = sprintf("%02d", $num);
            $obj_num = $max_qt_num . $obj_num;

            $vSql .= "
            INTO SVOBJITEM_PJH
            VALUES ('" . $doc_num . "','" . $max_qt_num . "','" . $obj_num . "','" . $row . "','" . $qt_type . "')
            ";
        }
        $sql = "INSERT ALL " . $vSql;
        $sql .= "
            SELECT * FROM DUAL
        ";
        $this->db->query($sql);
    }


}

?>