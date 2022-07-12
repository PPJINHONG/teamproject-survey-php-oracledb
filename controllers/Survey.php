<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Survey extends CI_Controller
{
    public function __construnct()
    {
        parent::__construnct();
    }
    public function index()
    {
        if (!$this->session->userdata('userid')) redirect('login');
        $this->load->model('Main_model');
        $data = $this->Main_model->gets();
        $this->load->helper('common');
        $this->load->view('static/header');
        $this->load->view('survey/main', array('surveys' => $data));
    }

    public function create()
    {
        if (!$this->session->userdata('userid')) redirect('login');
        $this->load->helper('common');
        $this->load->view('static/header');
        $this->load->view('survey/create');
    }
    public function create_verify()
    {
        $nullcheck = false;
        $this->load->model('Create_model');
        $POST_SURVEY = $this->Create_model->create_validate();
        foreach ($POST_SURVEY as $result) {
            // use_check null check
            // if (in_array("use_check", $POST_SURVEY)) {
            if (empty($result)) {
                print_r("<script>alert('빈값이 있습니다.'); window.history.back();</script>");
                $nullcheck = true;
                break;
            }
            // } else {
            //     $POST_SURVEY['use_check'] = "N";
            // }
        }

        $str_now = strtotime($POST_SURVEY['start_date']);
        $str_target = strtotime($POST_SURVEY['end_date']);

        if ($str_now > $str_target) {
            print_r("<script>alert('종료날짜가 시작날짜보다 이전입니다.'); window.history.back();</script>");
        } else {
            if ($nullcheck === false) {

                $DOC_NUM = "SV" . $this->Create_model->sv_DocList_GetDocNum(); // 고유 번호 [O]
                $DOC_EMPNO = '001'; // 학번 
                $DOC_DEPT = '051';
                $DOC_TITLE = $POST_SURVEY['title']; // 제목 [O]
                $DOC_COMMENT = $POST_SURVEY['descrption']; // desc
                $DOC_INPUTDATE = date("Y-m-d"); // 설문조사 넣은 날짜 [O]
                $DOC_INPUTIP = $_SERVER["REMOTE_ADDR"]; // 작성자 IP [O]
                $DOC_STARTDATE = $POST_SURVEY['start_date']; // 시작 날짜 [O]
                $DOC_ENDDATE = $POST_SURVEY['end_date']; // 종료 날짜 [O]
                $DOC_ENDYN = 'N'; // 마감 여부
                $DOC_USEYN = $POST_SURVEY['use_check']; // 사용 여부
                $DOC_PEOPLEMAX = $POST_SURVEY['people']; // 참여 인원 [O]
                $DOC_SURVEYDEPT = '051'; // 설문조사 대상

                // $this->Create_model->sv_DocList_Insert($DOC_NUM, $DOC_EMPNO, $DOC_DEPT, $DOC_TITLE, $DOC_COMMENT, $DOC_INPUTDATE, $DOC_INPUTIP, $DOC_STARTDATE, $DOC_ENDDATE, $DOC_ENDYN, $DOC_USEYN, $DOC_PEOPLEMAX, $DOC_SURVEYDEPT);

                // print_r("<script>alert('설문조사를 생성하였습니다.'); window.history.back();</script>");
            }
        }
        print_r($POST_SURVEY);
    }

    public function create_item()
    {
        if (!$this->session->userdata('userid')) redirect('login');
        $this->load->helper('common');
        $this->load->view('static/header');
        $this->load->view('survey/create_item');
    }

    public function list()
    {
        $this->load->view('survey/list');
    }

    public function allList()
    {
        $this->load->view('survey/allList');
    }
    public function preview()
    {
        $this->load->view('static/header');
        $this->load->view('survey/preview');
    }
    public function staringList()
    {
        $this->load->view('static/header');
        $this->load->view('survey/staringList');
    }
}