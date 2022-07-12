<!-- 미리보기 -->
<!DOCTYPE html>
<html>
<head>
	<title>응시 설문 미리보기</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>/assets/css/preview.css">
</head>
<body>
	<div class="preview">
		<!-- 설문조사 제목 -->
		<div class="preview_title">
			<h2 class="main_title">2020-1 강의평가 미리보기</h2>
		</div>
		<!-- 설문조사 설명 -->
		<div class="preview_desc">
			<p class="desc_content">
				2020학년도 1학기 강의평가를 시행합니다.
				정보는 저장되지 않으니 성실한 답변 부탁드립니다.
			</p>
			
			<span><b>설문기간 :</b></span>
			<span class="desc_date">
				20/06/18 ~ 20/06/19
			</span>
		</div>
		<div class="preview_btn">
			<input type="button" value="해당설문 바로가기" class="right_now_btn">
		</div>
		<hr>
		<!-- 단일선택 -->
		<div class="preview_table">
			<div class="table_row">
				<div class="table_title">
					<p class="num_text">1</p>
				</div>
				<div class="table_cell">
					<p class="title_text">2020-1학기 해당과목 수업난이도는 어떻습니까?</p>
				</div>
			</div>
			<div class="table_row">
				<div class="table_title">
					<p class="answer_title">답변</p>
				</div>
				<div class="table_cell">
					<label><input type="radio" name="type" value="1" class="radio" ><span class="answer_text">매우 만족</span></label>
					<label><input type="radio" name="type" value="2" class="radio" ><span class="answer_text">만족</span></label>
					<label><input type="radio" name="type" value="3" class="radio" ><span class="answer_text">보통</span></label>
					<label><input type="radio" name="type" value="4" class="radio" ><span class="answer_text">불만족</span></label>
					<label><input type="radio" name="type" value="5" class="radio" ><span class="answer_text">매우 불만족</span></label>
				</div>
			</div>
			<div class="table_row">
				<div class="table_title">
					<p class="num_text">2</p>
				</div>
				<div class="table_cell">
					<p class="title_text">해당과목의 피드백은 어떠한 방식으로 진행됩니까?</p>
				</div>
			</div>
			<div class="table_row">
				<div class="table_title">
					<p class="answer_title">답변</p>
				</div>
				<div class="table_cell">
					<label><input type="checkbox" name="type" value="1" class="checkbox"><span class="answer_text">대면 피드백</span></label>
					<label><input type="checkbox" name="type" value="2" class="checkbox"><span class="answer_text">SNS</span></label>
					<label><input type="checkbox" name="type" value="3" class="checkbox"><span class="answer_text">전화</span></label>
					<label><input type="checkbox" name="type" value="4" class="checkbox"><span class="answer_text">문자</span></label>
					<label><input type="checkbox" name="type" value="5" class="checkbox"><span class="answer_text">화상 상담</span></label>
				</div>
			</div>						
		</div>

	</div>
</body>
</html>