<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Create_model extends CI_Model
{
  public function __construct()
  {
    parent::__construct();
  }

  // 델리베이션 체크
  function create_validate()
  {
    $main_survey = array(
      'title'  => $this->input->post('survey_title'),
      'descrption'     => $this->input->post('survey_desc'),
      'start_date' => $this->input->post('start_date'),
      'end_date' => $this->input->post('end_date'),
      'use_check' => $this->input->post('use_check'),
      'people' => $this->input->post('people')
    );

    // 설문항목
    $main_survey_item = array();

    return $main_survey;
  }

  // DOCLIST 입력
  function sv_DocList_Insert($DOC_NUM, $DOC_EMPNO, $DOC_DEPT, $DOC_TITLE, $DOC_COMMENT, $DOC_INPUTDATE, $DOC_INPUTIP, $DOC_STARTDATE, $DOC_ENDDATE, $DOC_ENDYN, $DOC_USEYN, $DOC_PEOPLEMAX, $DOC_SURVEYDEPT)
  {
    $query = "insert into sv_doclist values('$DOC_NUM', '$DOC_EMPNO', '$DOC_DEPT', '$DOC_TITLE', '$DOC_COMMENT', TO_TIMESTAMP('$DOC_INPUTDATE', 'YYYY-MM-DD'), '$DOC_INPUTIP', TO_TIMESTAMP('$DOC_STARTDATE', 'YYYY-MM-DD'), TO_TIMESTAMP('$DOC_ENDDATE', 'YYYY-MM-DD'), '$DOC_ENDYN', '$DOC_USEYN', '$DOC_PEOPLEMAX', '$DOC_SURVEYDEPT')";
    $this->db->query($query);
  }

  // 고유번호 얻기
  function sv_DocList_GetDocNum()
  {
    $query = $this->db->query("SELECT TO_CHAR(MAX(TO_NUMBER(SUBSTR(DOC_NUM, 3)))+1) as getnum FROM sv_doclist");
    foreach ($query->result() as $row) {
      return $row->GETNUM;
    }
  }
}