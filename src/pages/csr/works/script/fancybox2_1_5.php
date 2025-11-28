<?
	$_dep = array(2,1);
	$_tit = array('WORKS','Fancybox 2.1.5');
	$_txt = array('작업에 용이한 플러그인 및 스크립트 정리');
	include_once "../../../inc/common.php";
	include_once PATH."/inc/top.sub.php";
?>
<!-- (jquery.min.js 경로에 fancybox media 있다면 삭제) -->
<link rel="stylesheet" type="text/css" href="<?=DIR?>/css/fancybox2.1.5.css?<?php echo date('Ymd'); ?>" />
<script type="text/javascript" src="<?=DIR?>/js/fancybox2.1.5.min.js?<?php echo date('Ymd'); ?>"></script>


<div class="worksTitle">
	<h4><?=$_tit[1]?></h4>
</div>


<a href="/images/thumb500x500.gif" class="fancybox"><img src="/images/thumb500x500.gif"></a>
<a href="/images/thumb500x500.gif" class="fancybox"><img src="/images/thumb500x500.gif"></a>


<script>
$(function(){
	$('.fancybox').fancybox();
});
</script>
<?php
	include_once PATH."/inc/tail.sub.php";
?>
