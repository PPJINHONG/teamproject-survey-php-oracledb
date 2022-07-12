<h1>리스트입니다.</h1>
<? foreach($memberList as $item) { ?>
<h3><?= $item["USER_ID"];?> <?=$item["USER_NAME"];?></h3>
<? } ?>
