<!DOCTYPE html>
<html>
<head>
	<title>설문조사 참여목록</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>/assets/css/list.css">
</head>
<body>
	<div class="survey_table">
        <div class="survey_table_row">
            <div class="table_title">
                <p>학번 및 사번</p>
            </div>
            <div class="table_title ">
                <p>이름</p>
            </div>
            <div class="table_title ">
                <p>사용자 유형</p>
            </div>
            <div class="table_title ">
                <p>상태</p>
            </div>
            <div class="table_title ">
                <p>답변일자</p>
            </div>
        </div>
        <div class="survey_table_row">
            <div class="table_cell ">
                <p>201587022</p>
            </div>
            <div class="table_cell">
                <p><a href="javascript:" onclick="answer_btn_click()">임정진</a></p>
            </div>
            <div class="table_cell">
                <p>학생</p>
            </div>
            <div class="table_cell ">
                <p>답변완료</p>
            </div>
            <div class="table_cell ">
                <p>2020-06-22</p>
            </div>
        </div>
        <div class="survey_table_row">
            <div class="table_cell user_click">
                <p>201587024</p>
            </div>
            <div class="table_cell user_click">
                <p><a href="javascript:" onclick="answer_btn_click()">박서윤</a></p>
            </div>
            <div class="table_cell ">
                <p>학생</p>
            </div>
            <div class="table_cell ">
                <p>답변완료</p>
            </div>
            <div class="table_cell ">
                <p>2020-06-22</p>
            </div>
        </div>
    </div>
    <div class="shift_table_btn">
    	<a href="#" class="previous_btn">◀</a>
    	<a href="#" class="next_btn">▶</a>
    </div>
    <!-- Modal -->
    <div id="myModal" class="modal">
    	<div class="modal_content">
    		<span class="close">&times;</span>
    		<div class="modal_table">
    			<div class="survey_table_row">
            		<div class="table_title ">
                		<p>번호</p>
            		</div>
            		<div class="table_title ">
                		<p>질문</p>
            		</div>
            		<div class="table_title ">
                		<p>답변</p>
            		</div>
        		</div>
        		<div class="survey_table_row">
            		<div class="table_cell num_title">
                		<p>1</p>
            		</div>
            		<div class="table_cell question_title">
                		<p>2020-1학기 해당과목 수업난이도는 어떻습니까?</p>
            		</div>
            		<div class="table_cell answer_title">
                		<p>보통이다.</p>
            		</div>
        		</div>
        		<div class="survey_table_row">
            		<div class="table_cell num_title">
                		<p>2</p>
            		</div>
            		<div class="table_cell question_title">
                		<p>해당과목의 피드백은 어떠한 방식으로 진행됩니까?</p>
            		</div>
            		<div class="table_cell answer_title">
                		<p>전화,문자</p>
            		</div>
        		</div>
        	</div>
    </div>
    <script src="//code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="<?php echo base_url();?>/assets/js/list.js"></script>
</body>
</html>