<style>
	.search_table {
		height: 70px;
		border-collapse: separate;
		border-spacing: 50px;
		margin: auto;
	}

	#query_btn {
		width: 100px;
		height: 25px;
	}

	#add_btn {
		width: 100px;
		height: 25px;
		margin-left: 72.2%;
	}

	table {
		height: 70px;
		border-collapse: separate;
		border-spacing: 20px;
		margin: auto;
	}
</style>
<script>
	$(function(){
		$("#add_btn").click(function(){
			 window.open("/csn/survey/list_add", "pop", "width=900px, height=500px");
		});
	});
</script>

<table class="search_table">
	<tr>
		<td>
			설문조사 부서 <input type="text">
		</td>
		<td>
			설문 명 <input type="text">
		</td>
		<td>
			설문 마감일 <input type="text">
		</td>
		<td>
			<input type="button" id="query_btn" value="조회">
		</td>
	</tr>
</table>
<input type="button" id="add_btn" value="새 설문 추가(+)">
<table border="1">

	<tr>
		<th>설문명</th>
		<th>설문 조사부서</th>
		<th>참여인원</th>
		<th>마감일</th>
		<th>설문조사자</th>
		<th>관리기능</th>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
</table>
