<style>
	.tb1 {
		height: 70px;
		border-collapse: separate;
		border-spacing: 20px;
		margin: auto;
	}

	.add_tb {
		height: 70px;
		width: 500px;
		margin: auto;
	}


	.add_td {
		text-align: right;
	}

</style>
<script>
	$(function(){
		$.post("sv_doc_add_result", {
			"doc_title": $("#doc_title").val(),
			"doc_comment": $("#doc_comment").val(),
			"doc_sdate": $("#doc_startdate").val();
			"doc_edate": $("#doc_enddate")
		}, function(data){

		}, "text");

		$("#add_question_btn").click(function(){
			window.open("/csn/survey/sv_question_add", "sv_pop", "width=900px, height=500px");
		});
	});
</script>
<h2>설문 추가</h2>
<table class="tb1">
	<tr>
		<td>
		설문조사 명
		</td>
		<td>
			<input type="text" name="doc_title">
		</td>
	</tr>
	<tr>
		<td>
		설문조사 설명
		</td>
		<td>
			<textarea cols="40" rows="5" name="doc_comment"></textarea>
		</td>
	</tr>
	<tr>
		<td>
		기간설정
		</td>
		<td>
			시작일시<input type="datetime-local" name="doc_startdate" id="doc_startdate">
			종료일시<input type="datetime-local" name="doc_enddate" id="doc_enddate">
		</td>
	</tr>
</table>
<table  class="add_tb" border="1">
	<tr>
		<td colspan="4" class="add_td">
		<input type="button" id="add_question_btn" value="새 설문항목 추가(+)">
		</td>
	</tr>
	<tr>
		<th>질문내용</th>
		<th>질문타입</th>
		<th>질문메타</th>
		<th>수정/삭제</th>
	</tr>
	<tr>
		<td>1</td>
		<td>2</td>
		<td>3</td>
		<td>4</td>
	</tr>
	<tr>
		<td>1</td>
		<td>2</td>
		<td>3</td>
		<td>4</td>
	</tr>
</table>
