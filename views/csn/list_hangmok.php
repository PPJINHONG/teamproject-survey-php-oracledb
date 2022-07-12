<script>
	$(function(){
		$("#cancle_btn").click(function(){
			window.history.back();
		});
	});
</script>
<h1>설문조사 항목 만들기</h1>
문항제목
문항설명
필수항목여부
문항종류
<input type="button" id="cancle_btn" value="취소">
<input type="button" id="save_btn" value="저장">
