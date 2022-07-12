<h1>리스트 입니다.</h1>

<pre>
    <?=print_r($memberList);?>
</pre>


<? foreach($memberList as $item) { ?>
<h3><?=$item["USER_ID"];?> <?=$item["USER_NAME"];?></h3>
<? } ?>
