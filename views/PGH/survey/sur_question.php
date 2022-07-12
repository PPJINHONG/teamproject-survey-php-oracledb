<script type="text/javascript">
    var quest_list = $('#list_type option:selected').val();

    if(quest_list == '1')
    {

    }
</script>
<input type="button" value="이미지 업로드">
<form>
    <table>
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
                <div>
                    
                </div>
            </td>
        </tr>
    </table>
</form>