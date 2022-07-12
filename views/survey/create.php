<head>
  <title>설문조사 기초정보 생성</title>

  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/survey/create_php/create.css">
</head>

<body>
  <div class="file_upload">
    <input type="file" class="file_btn">
  </div>
  <form id="main_survey" name="main_survey" method="post" action="<?php echo site_url('survey/create_verify') ?>">
    <div class="survey_info_box">
      <div class="survey_content">
        <span class="title_text">설문조사 명</span>
        <input type="text" class="title_content" name="survey_title">
      </div>

      <div class="survey_content">
        <span class="title_text">설문조사 설명</span>
        <span class="content_content"><textarea name="survey_desc"></textarea></span>
      </div>

      <div class="survey_content">
        <span class="title_text">기간설정</span>
        <span class="sdate people_text">시작일시</span><input type="text" name="start_date" class="datepicker date"
          readonly>
        <span class="sdate people_text">종료일시</span><input type="text" name="end_date" class="datepicker date" readonly>
      </div>
      <div class="survey_content">
        <span class="title_text">사용여부</span>
        <span><input type="checkbox" class="use_check" name="use_check"></span>
      </div>
      <div class="survey_content">
        <span class="title_text">참여인원</span>
        <span class="people_text"><input class="people" type="textbox" style="width: 50px; text-align:right;"
            name="people">명</span>
      </div>
      <div class="survey_content">
        <span class="title_text">설문지 대상</span>
        <span>
          <select class="survey_target">
            <option value=" null">교학처</option>
            <option value="null">IT콘텐츠과</option>
            <option value="null">멀티미디어과</option>
            <option value="null">테스트</option>
          </select>
        </span>
      </div>
    </div>

    <div class="survey_create_table">
      <div class="survey_content">
        <span class="title_text">
          설문항목 관리
        </span>
        <a href="#" id="new_item">(+) 새 설문항목 추가</a>
        <div class="survey_table">
          <div class="survey_table_row">
            <div class="survey_table_cell">
              <p>질문내용</p>
            </div>
            <div class="survey_table_cell">
              <p>질문타입</p>
            </div>
            <div class="survey_table_cell">
              <p>질문 메타</p>
            </div>
            <div class="survey_table_cell">
              <p>수정/삭제</p>
            </div>
          </div>

          <div class="survey_table_row">
            <div class="survey_table_cell">
              <p>2020-1학기..</p>
            </div>
            <div class="survey_table_cell">
              <p>단일선택</p>
            </div>
            <div class="survey_table_cell">
              <p>항목1: 매우 어렵다 항목2: 어렵다..</p>
            </div>
            <div class="survey_table_cell">
              <p>수정/삭제</p>
            </div>
          </div>

          <div class="survey_table_button">
            <a href="#" class="button" id="create_save">저장</a>
            <a href="#" class="button">취소</a>
            <a href="#" class="button">미리보기</a>
          </div>
        </div>
      </div>
    </div>
  </form>
</body>
<script src="<?php echo base_url(); ?>assets/survey/create_php/create.js"></script>