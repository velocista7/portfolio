<?php
	$_dep = array(2,2,4);
	$_tit = array('WORKS','스킨 목록','LIST');
	$_txt = array('자주 사용하는 디자인 스킨 정리');
	include_once "../../../inc/common.php";
	include_once PATH."/inc/top.sub.php";
?>

<div class="worksTitle">
	<h4><?=$_tit[1]?></h4>
</div>

<?include_once "./_tab.php";?>

<ul class="skinList">
	<li>
		<div class="box">
			<a href="./list_type1.php" class="link"></a>
			<div class="tmb" style="background: url(<?=DIR?>/images/skin/product-type1.jpg) no-repeat 50% 50%;">
				<img src="/images/thumb500x300.gif" class="vvh" />
			</div>
			<div class="infobox">
				<span class="sbj">LIST Type 1 (쇼핑몰)</span>
			</div>
		</div>
	</li>
</ul>




<?php
	include_once PATH."/inc/tail.sub.php";
?>
