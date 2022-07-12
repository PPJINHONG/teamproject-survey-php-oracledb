<script type="text/javascript">
    $(function() {
        $('#list_type').change(function () {
            var quest_list = $('#list_type option:selected').val();
            if (quest_list == '1')
            {
                $('#list_comment2').hide();
                $('#list_comment1').show();
            }
            else
            {
                $('#list_comment1').hide();
                $('#list_comment2').show();
            }
        });
    });

    function list_add(){
        var quest_list = $('#list_type option:selected').val();
        var list_arr = [null, "radio", "checkbox", "text", "file"];

        //console.log(quest_list);
        //console.log(list_arr[quest_list]);

        if (list_arr[quest_list] != null)
        {
            var list_comment_html = $("#list_comment" + quest_list).html();

            $("#list_comment" + quest_list).html(list_comment_html + "<p><input type=" + list_arr[quest_list] +"><input type=text></p>");
        }
    }
</script>
<input type="button" value="이미지 업로드">
<form>
    <table border="1">
        <tr>
            <td>문항 제목</td>
            <td>
                <input type="text" name="quest_title" id="quest_title">
            </td>
        </tr>
        <tr>
            <td>문항 설명</td>
            <td>
                <input type="text" name="quest_comment" id="quest_comment">
            </td>
        </tr>
        <tr>
            <td>필수항목 여부</td>
            <td>
                <input type="checkbox" name="quest_chyn" id="quest_chyn">
            </td>
        </tr>
        <tr>
            <td>문항 종류</td>
            <td>
                <select name="list_type" id="list_type">
                    <option>단일선택/다중선택/서술형/파일업로드</option>
                    <option value="1">단일선택</option>
                    <option value="2">다중선택</option>
                    <option value="3">서술형</option>
                    <option value="4">파일업로드</option>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <p><input type="button" value="답변 항목 생성" onclick="list_add()"></p>
                <div id="list_comment1" hidden>
                    <p><input type="radio" value="5"> 매우어렵다</p>
                    <p><input type="radio" value="4"> 어렵다</p>
                    <p><input type="radio" value="3"> 보통이다</p>
                </div>
                <div id="list_comment2" hidden>
                    <p><input type="checkbox" value="5"> 매우어렵다</p>
                    <p><input type="checkbox" value="4"> 어렵다</p>
                    <p><input type="checkbox" value="3"> 보통이다</p>
                </div>
                <div id="list_comment3" hidden>
                </div>
                <div id="list_comment4" hidden>
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="button" value="저장">
                <input type="button" value="취소">
            </td>
        </tr>
    </table>
</form>