<script>
    function surradd(){
        location.href="new_list.php";
    }
</script>
<form action="/LJH/list" method="post">
    <p>설문조사 목록</p>
    설문 조사 부서<input type="text" name="doc_dept" id="doc_dept">
    설문 명 <input type="text" name="doc_title" id="doc_title">
    설문 마감일<input type="text" name="doc_enddate" id="doc_enddate">
    <input type="button" type="searbtn" value="조회">
</form>

    <p><input type="button" name="suradd" onclick="surradd()" value="새 설문 추가"></p>

<div>
    <table border="1">
        <tr>
            <td>설문명</td>
            <td>설문 조사부서</td>
            <td>참여인원</td>
            <td>마감일</td>
            <td>설문조사자</td>
            <td>관리가능</td>
        </tr>
        <tr></tr>
    </table>
</div>