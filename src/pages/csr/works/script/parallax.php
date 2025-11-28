<?
	$_dep = array(2,1);
	$_tit = array('WORKS','Parallax');
	//$_txt = array('작업소스 정리');
	include_once "../../../inc/common.php";
	include_once PATH."/inc/top.sub.php";
?>
<script type="text/javascript" src="<?=DIR?>/js/parallax.min.js?<?php echo date('Ymd'); ?>"></script>

<div class="worksTitle">
	<h4><?=$_tit[1]?></h4>
</div>

<div class="parallax-container" data-parallax="scroll" data-position="top" data-bleed="10" data-image-src="/images/sub/stellar-spire-eagle-nebula-1400x900.jpg" data-natural-width="1400" data-natural-height="900" style="height: 643px;">
</div>


<?php
	include_once PATH."/inc/tail.sub.php";
?>
