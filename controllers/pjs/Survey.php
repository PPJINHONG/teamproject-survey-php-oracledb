<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Survey extends CI_Controller{

    public function __construct(){
        parent:: __construct();
        $this -> load -> model("/PJS/Survey_m");
    }

    public function index(){
        $data['title'] = "설문조사";
        $this->masterpage->setMasterPage("PJS/LOGIN/MasterPage");
        $this->masterpage->addContentPage("PJS/SURVEY/survey",'content',$data);
        $this->masterpage->show();
    }


    public function sv_list(){
        $data['title'] = "설문조사 목록";
        $data['memberList'] = $this -> Survey_m -> getMember();

        $this->masterpage->setMasterPage("PJS/LOGIN/MasterPage");
        $this->masterpage->addContentPage("PJS/SURVEY/sv_list",'content',$data);
        $this->masterpage->show();
    }

    public function sv_doc_add_result(){
        $doc_titie = $this->input->post("doc_title");
        $doc_comment = $this->input->post("doc_comment");
        $doc_sdate = $this->input->post("doc_sdate");
        $doc_edate = $this->input->post("doc_edate");

        $sv_doc_num =

            $doc_num = $this->survey_m->saveDoc($sv_doc_num, $doc_titie, $doc_comment, $doc_sdate, $doc_edate);
    }





    public function survey_list()
    {
        $survey_arr = array(
            'dept' => $this->input->post("input_dept"),
            'comment' => $this->input->post("input_title"),
            'enddate' => $this->input->post("input_enddate")
        );

        $data['svList'] = $this->Survey_m->survey_list_chk($survey_arr);

        $this->masterpage->setMasterPage("PJS/LOGIN/MasterPage");
        $this->masterpage->addContentPage("PJS/SURVEY/survey_list",'content',$data);
        $this->masterpage->show();

        //print_r($survey_arr);
        //print_r($survey_arr['dept']);

        //$survey_arr_ok = $this->Survey_m->survey_list_chk($survey_arr);
    }
    public function survey_new()
    {

    }
}
?>
