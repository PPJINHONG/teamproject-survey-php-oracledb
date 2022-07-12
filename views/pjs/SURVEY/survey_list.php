<table>
    <tr>
        <td>설문명</td><td>설문 조사 부서</td><td>참여인원</td><td>마감일</td><td>설문조사자</td><td>관리기능</td>
    </tr>
</table>
    <? foreach($svList as $item) { ?>
        <h3>
        <?= $item["DOC_NUM"];?> <?=$item["DOC_TITLE"];?>
        </h3>
    <? } ?>

