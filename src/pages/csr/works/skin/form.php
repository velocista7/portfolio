<?php
	$_dep = array(2,2,3);
	$_tit = array('WORKS','스킨 목록','INPUT & BOARD');
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
			<a href="./radio_switch.php" class="link"></a>
			<div class="tmb" style="background: url(<?=DIR?>/images/skin/radio_switch.jpg) no-repeat 50% 50%;">
				<img src="/images/thumb500x300.gif" class="vvh" />
			</div>
			<div class="infobox">
				<span class="sbj">라디오 Switch Ver. (Only CSS)</span>
			</div>
		</div>
	</li>	

	<li>
		<div class="box">
			<a href="./radio_custom.php" class="link"></a>
			<div class="tmb" style="background: url(<?=DIR?>/images/skin/radio_custom.jpg) no-repeat 50% 50%;">
				<img src="/images/thumb500x300.gif" class="vvh" />
			</div>
			<div class="infobox">
				<span class="sbj">라디오 & 체크박스 커스텀</span>
			</div>
		</div>
	</li>	
	
	<li>
		<div class="box">
			<a href="./board_top_skin1.php" class="link"></a>
			<div class="tmb" style="background: url(<?=DIR?>/images/skin/board_top_skin1.jpg) no-repeat 50% 50%;">
				<img src="/images/thumb500x300.gif" class="vvh" />
			</div>
			<div class="infobox">
				<span class="sbj">게시판 상단 Type 1</span>
			</div>
		</div>
	</li>	

	<li>
		<div class="box">
			<a href="./paging_type2.php" class="link"></a>
			<div class="tmb" style="background: url(<?=DIR?>/images/skin/paging-type2.jpg) no-repeat 50% 50%;">
				<img src="/images/thumb500x300.gif" class="vvh" />
			</div>
			<div class="infobox">
				<span class="sbj">페이징 Type 2</span>
			</div>
		</div>
	</li>	
	<li>
		<div class="box">
			<a href="./paging_type1.php" class="link"></a>
			<div class="tmb" style="background: url(<?=DIR?>/images/skin/paging-type1.jpg) no-repeat 50% 50%;">
				<img src="/images/thumb500x300.gif" class="vvh" />
			</div>
			<div class="infobox">
				<span class="sbj">페이징 Type 1</span>
			</div>
		</div>
	</li>	
	<li>
		<div class="box">
			<a href="./agree_type1.php" class="link"></a>
			<div class="tmb" style="background: url(<?=DIR?>/images/skin/agree-type1.jpg) no-repeat 50% 50%;">
				<img src="/images/thumb500x300.gif" class="vvh" />
			</div>
			<div class="infobox">
				<span class="sbj">동의 스킨 Type 1</span>
			</div>
		</div>
	</li>	
</ul>




<?php
	include_once PATH."/inc/tail.sub.php";
?>
