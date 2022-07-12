<script>

    let doc_num = "";
    $(function(){
        $("#add_question_btn").click(function(){
            if (doc_num == "") {
                $.ajaxSettings.async=false;
                $.post("/PJH/sulmun/sv_doc_add_result", {
                    "doc_title": $("#doc_title").val(),
                    "doc_comment": $("#doc_comment").val(),
                    "doc_sdate": $("#doc_startdate").val() + " " + $("#doc_starttime").val() + ":00",
                    "doc_edate": $("#doc_enddate").val() + " " + $("#doc_endtime").val() + ":00"
                }, function (data) {
                    doc_num = data;
                    console.log(data);
                }, "text");
            }
            var pop = window.open("/PJH/sulmun/sulmun_add/doc_num/" + doc_num, "sv_pop", "width=1000px, height=800px");
            $.ajaxSettings.async=true;
        });
    });

</script>
<style>
    .aaa{
        margin: auto;
        width: 60%;
    }
    .aaa td{
        height: 100px;
        border: 1px solid black;
    }
</style>

<div>
    <table>
        <tr>
            <th>설문조사 명</th>
            <td><input type="text" name="doc_title" id="doc_title"></td>
        </tr>
        <tr>
            <th>설문조사 설명</th>
            <td><textarea name="doc_comment" id="doc_comment" ></textarea></td>
        </tr>
        <tr>
            <th>기간 설정</th>
            <td>
                시작 일시 <input type="date" name="doc_startdate" id="doc_startdate"> <input type="time" name="doc_starttime" id="doc_starttime">
                종료 일시 <input type="date" name="doc_enddate" id="doc_enddate"> <input type="time" name="doc_endttime" id="doc_endtime">
            </td>
        </tr>
    </table>

        <input type="button" id="add_question_btn" value="새 설문항목 추가를 하시려면 클릭하십시오" >

</div>

<div>


</div>
<table class="aaa">
    <tr>

    </tr>
    <tr>
        <td>질문내용</td>
        <td>질문타입</td>
        <td>질문메타</td>
        <td>수정삭제</td>
    </tr>

    <tr>
        <td>a</td>
        <td>a</td>
        <td>a</td>
        <td>a</td>
    </tr>

</table>
<div>
    <input type="button" name="save" id="save" value="저장">
    <input type="button" name="ex" id="ex" value="취소">

</div>
