<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sulmun extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model("/PJH/login_m");
        $this->load->model("/PJH/sulmun_m");
    }

    public function sulmun_list()
    {
        $data['title'] = '설문목록';

        $id = $this->session->userdata('user_id');
        $data['name'] = $this->login_m->login_check($id)[0]["USER_NAME"];


        $this->masterpage->setMasterPage("PJH/MasterPage1");
        $this->masterpage->addContentPage("PJH/sulmun", 'content', $data);
        $this->masterpage->show();


    }

    /* public function fuck()
     {

         $sv_add=array(
             'doc_title'=>$this->input->post("doc_title"),
             'doc_comment'=>$this->input->post("doc_comment"),
             'doc_startdate'=>$this->input->post("doc_startdate"),
             'doc_enddate'=>$this->input->post("doc_enddate"),
             'doc_inputdate' = date("Y-m-d"),
             'inputip' = $this->input->ip_address()
         );


         $this->sulmun_m->svdoc_add($sv_add);

         echo "<script>";
         echo "alert('데이터들어감');";
         echo "</script>";

         $data['title']='설문목록';

         $id=$this->session->userdata('user_id');
         $data['name']=$this->login_m->login_check($id)[0]["USER_NAME"];

         $this->masterpage->setMasterPage("PJH/MasterPage1");
         $this->masterpage->addContentPage("PJH/sulmun_add",'content',$data);
         $this->masterpage->show();


     }
 */

    public function sv_doc_add_result()
    {
        $doc_title = $this->input->post("doc_title");
        $doc_comment = $this->input->post("doc_comment");
        $doc_sdate = $this->input->post("doc_sdate");
        $doc_edate = $this->input->post("doc_edate");
        $inputdate = date("Y-m-d");
        $inputip = $this->input->ip_address();

        $max_doc_num = $this->sulmun_m->getMaxNum();

        if (!empty($max_doc_num)) {
            $max_doc_num = substr($max_doc_num[0]["DOC_NUM"], -3, 3);
            $max_doc_num = (int)$max_doc_num + 1;
            $max_doc_num = sprintf("%03d", $max_doc_num);
        } else {
            $max_doc_num = "001";
        }

        $sv_doc_num = "SV" . date("Y") . $max_doc_num;

        $id = $this->session->userdata('user_id');
        $user_dept = $this->sulmun_m->getDept($id)[0]["USER_DEPT"];

        $this->sulmun_m->saveDoc($sv_doc_num, $id, $user_dept, $doc_title, $doc_comment, $inputdate, $inputip, $doc_sdate, $doc_edate);
        echo $sv_doc_num;
    }


    public function sulmun_add()
    {
        $data['title'] = '항목추가';

        $params = func_get_args();
        $data["sv_doc_num"] = $this->args_utils->get_prop($params, "doc_num");

        $id = $this->session->userdata('user_id');
        $data['name'] = $this->login_m->login_check($id)[0]["USER_NAME"];

        $this->masterpage->setMasterPage("PJH/MasterPage1");
        $this->masterpage->addContentPage("PJH/sulmun_add", 'content', $data);
        $this->masterpage->show();

    }

    public function sulmun_create()
    {
        $data['title'] = '설문생성';
        $id = $this->session->userdata('user_id');

        $data['name'] = $this->login_m->login_check($id)[0]["USER_NAME"];


        $this->masterpage->setMasterPage("PJH/MasterPage1");
        $this->masterpage->addContentPage("PJH/sulmun_create", 'content', $data);
        $this->masterpage->show();

    }

    public function sulmun_add_result()
    {
        $doc_num = $this->input->post("sv_doc_num");
        $qt_title = $this->input->post("title");
        $qt_comment = $this->input->post("dis");
        $qt_chyn = $this->input->post("check");
        $qt_type = $this->input->post("qt_type");
        $qt_data = $this->input->post("qt_data");

        //설문 번호 체크
        $max_qt_num = $this->sulmun_m->getquestionNum($doc_num);


        //설문조사 항목 등록

        if (!empty($max_qt_num)) {
            $max_qt_num = substr($max_qt_num[0]["QUEST_NUM"], -2, 2);
            $max_qt_num = (int)$max_qt_num + 1;
            $max_qt_num = sprintf("%02d", $max_qt_num);
        } else {
            $max_qt_num = "01";
        }
        $max_qt_num = $doc_num.$max_qt_num;

        $this->sulmun_m->addQu($doc_num,$max_qt_num,$qt_title,$qt_comment,$qt_chyn,$qt_type);

        //설문조사 문항 등록

        if ($qt_type != 3) {
            $max_obj_num = $this->sulmun_m->getObjnum($max_qt_num);

            if (!empty($max_obj_num)) {
                $max_obj_num = substr($max_obj_num[0]["OBJ_NUM"], -2, 2);
            } else {
                $max_obj_num = "00";
            }

            $this->sulmun_m->addObj($doc_num, $max_qt_num, $max_obj_num, $qt_data, $qt_type);
        }


    }


}