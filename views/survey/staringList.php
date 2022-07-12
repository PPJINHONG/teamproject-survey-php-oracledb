<!-- 설문조사 응시목록 -->
<!DOCTYPE html>
<html>
<head>
	<title>설문조사 응시목록</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>/assets/css/staringList.css">
</head>
<body>
	<div class="staringList">
		<div class="search_list">
			<div class="dept_search">
				<label><span>설문 조사 부서</span><input type="text" name="dept" class="search_text" size="35"></label>
			</div>
			<div class="sname_search">
				<label><span>설문 명</span><input type="text" name="sname" class="search_text" size="40"></label>
			</div>
			<div class="edate_search">
				<lable><span>설문 마감일</span><input type="text" name="edate" class="search_text" size="20"></label>
			</div>
			<div class="search_btn">
				<input type="button" name="sbtn" class="sbtn" value="조회">
			</div>
		</div>

		<hr>
		<div class="staring_table">
	        <div class="table_row">
	            <div class="table_title">
	                <p>설문명</p>
	            </div>
	            <div class="table_title ">
	                <p>설문 조사부서</p>
	            </div>
	            <div class="table_title ">
	                <p>참여인원</p>
	            </div>
	            <div class="table_title ">
	                <p>응시일</p>
	            </div>
	            <div class="table_title ">
	                <p>마감일</p>
	            </div>
	            <div class="table_title ">
	                <p>응시여부</p>
	            </div>
	        </div>
	        <div class="table_row">
	            <div class="table_cell ">
	                <p>2020-1 강의평가</p>
	            </div>
	            <div class="table_cell">
	                <p>교학처</p>
	            </div>
	            <div class="table_cell">
	                <p>100</p>
	            </div>
	            <div class="table_cell ">
	                <p>20/06/17</p>
	            </div>
	            <div class="table_cell ">
	                <p>20/06/24</p>
	            </div>
	            <div class="table_cell ">
	                <p><a href="#" class="atmos">응시</a></p>
	            </div>
	        </div>
	        <div class="table_row">
	            <div class="table_cell ">
	                <p>2020-2 강의평가</p>
	            </div>
	            <div class="table_cell">
	                <p>교학처</p>
	            </div>
	            <div class="table_cell">
	                <p>50</p>
	            </div>
	            <div class="table_cell ">
	                <p>19/06/17</p>
	            </div>
	            <div class="table_cell ">
	                <p>19/06/24</p>
	            </div>
	            <div class="table_cell ">
	                <p><b>응시완료</b></p>
	            </div>
	        </div>
    	</div>
	</div>
	<script src="//code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="<?php echo base_url();?>/assets/js/staringList.js"></script>
</body>
</html>