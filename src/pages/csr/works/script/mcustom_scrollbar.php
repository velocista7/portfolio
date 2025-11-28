<?
	$_dep = array(2,1);
	$_tit = array('WORKS','스크롤바 커스텀');
	//$_txt = array('작업소스 정리');
	include_once "../../../inc/common.php";
	include_once PATH."/inc/top.sub.php";
?>
<link rel="stylesheet" type="text/css" href="/css/jquery.mCustomScrollbar.css" />
<script type="text/javascript" src="/js/jquery.mCustomScrollbar.js"></script>

<style>
.scrollCustom{height: 200px;overflow: hidden;}
.scrollCustom{font-size: 18px;line-height: 28px;}
.mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar{width: 5px;background: #ccc;}
.mCSB_scrollTools .mCSB_draggerRail{width: 3px;background: #eee;}
.mCSB_scrollTools .mCSB_dragger:active .mCSB_dragger_bar, .mCSB_scrollTools .mCSB_dragger.mCSB_dragger_onDrag .mCSB_dragger_bar{background: rgba(220,220,220,0.75);}
</style>

<div class="scrollCustom">
테스트<br />
테스트<br />
테스트<br />
테스트<br />
테스트<br />
테스트<br />
테스트<br />
테스트<br />
테스트<br />
테스트<br />
테스트<br />
테스트<br />
</div>

<script>
$(window).on("load",function(){
	$(".scrollCustom").mCustomScrollbar({
		mouseWheelPixels : 300, // 마우스휠 속도
		scrollInertia : 400 // 부드러운 스크롤 효과 적용
	});
});
</script>

<?php
	include_once PATH."/inc/tail.sub.php";
?>
