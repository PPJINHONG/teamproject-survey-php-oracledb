<style>
    .select{
        width: 100%;
        height: 13%;
        background-color: #3498db;
    }
    .hta{
        width: 100%;
        height: 100%;
    }
    .hta input[type="text"]{
        width: 100%;
        height: 100%;
        font-size: 15pt;
    }
    .bb{
        width: 100%;
        height: 7%;
    }
    #add{
        width: 100%;
        height: 100%;
        font-size: 15pt;
    }
    .detail_list,td,th{
        border: 1px solid black;
    }
    .content{
        width: 100%;
        height: 50%;
        background-color: #003399;
    }
    .content table{
        margin: auto;
        width: 80%;
        height: 60%;
    }
    .content table th{
        height: 30%;
        width: 15%;
    }
</style>

<h2>설문조사</h2>

<div class="select">

<div>
    <table class="hta">
        <tr>
            <th>설문 조사 부서</th>
            <th>설문 명</th>
            <th>설문 마감일</th>
        </tr>
        <tr>
            <td>
                <input type="text">
            </td>
            <td>
                <input type="text">
            </td>
            <td>
                <input type="text">
            </td>
        </tr>
    </table>
</div>

</div>

<div>
    <div class="bb">
    <input type="button" id="add" value="설문추가를 하시려면 클릭하십시오" onClick="location.href='/PJH/Sulmun/sulmun_create'">
    </div>
</div>

<div class="content">

<table class="detail_list">
    <tr>
    <th>
        설문명
    </th>
    <th>
        설문 조사부서
    </th>
    <th>
        참여인원
    </th>
    <th>
        마감일
    </th>
    <th>
        설문조사자
    </th>
    <th>
        관리기능
    </th>
</tr>
    <tr>
        <td>a</td>
        <td>a</td>
        <td>a</td>
        <td>a</td>
        <td>a</td>
        <td>a</td>

    </tr>
</table>
<!--
    <? foreach ($memberList as $item){  ?>
    <?=$item["USER_ID"]; ?>
    <?=$item["USER_NAME"]; ?>
    <? }    ?>
-->

</div>

