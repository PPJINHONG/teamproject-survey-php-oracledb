<input type="button" value="이미지 업로드">
<form method="post">
    <table border="1">
        <tr>
            <td>설문 조사명</td>
            <td colspan="2">
                <input type="text" name="doc_title" id="doc_title">
            </td>
        </tr>
        <tr>
            <td>설문 설명</td>
            <td colspan="2">
                <input type="text" name="doc_comment" id="doc_comment">
            </td>
        </tr>
        <tr>
            <td>기간설정</td>
            <td>
                시작일시 <input type="date">
            </td>
            <td>
                종료일시 <input type="date">
            </td>
        </tr>
    </table>
    <table>
        <tr>
            <td colspan="4">
                <input type="button" value="새 설문 항목 추가">
            </td>
        </tr>
        <tr>
            <td>질문 내용</td>
            <td>질문 타입</td>
            <td>질문 메타</td>
            <td>수정/삭제</td>
        </tr>
    </table>
</form>