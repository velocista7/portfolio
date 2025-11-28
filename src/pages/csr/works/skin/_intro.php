<?php
	$_dep = array(2,2);
	$_tit = array('WORKS','스킨 목록');
	$_txt = array('자주 사용하는 디자인 스킨 정리');
	include_once "../../../inc/common.php";
	include_once PATH."/inc/top.sub.php";
?>

<div class="worksTitle">
	<h4><?=$_tit[1]?></h4>
</div>

<?include_once "./_tab.php";?>


<?php
	include_once PATH."/inc/tail.sub.php";
?>
