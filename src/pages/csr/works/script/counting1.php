<?
	$_dep = array(2,1);
	$_tit = array('WORKS','카운팅 1');
	$_txt = array('작업에 용이한 플러그인 및 스크립트 정리');
	include_once "../../../inc/common.php";
	include_once PATH."/inc/top.sub.php";
?>
<script type="text/javascript" src="<?=DIR?>/js/counterup.js?<?php echo date('Ymd'); ?>"></script>

<style>
.section1{height: 1000px;background: #ebebeb;}	
.section2{padding: 50px;}
.section3{height: 1000px;background: orange;}	
.number{visibility: hidden;font-size: 70px;color: #111;}
.number.active{visibility: visible;}
</style>
<div class="section1">
	
</div>

<div class="section2">
	<strong><span class="number"  data-counter-time="2000"  data-counter-delay="10">7567 </span> 건</strong>
</div>

<div class="section3">
	
</div>

<script>
$(function(){

	var started = false;
	$(window).on('scroll',function () {
		if (!started) {
			handleScroll();
		}
	});

	function handleScroll() {
		scrollTimer = true;
		var thisScroll = $(document).scrollTop();
		var coScroll = $('.section2').offset().top;

		if(thisScroll < coScroll){
			$('.number').addClass('active');
			$('.number').counterUp({
				delay: 40,
				time: 1000,
				beginAt: 100,
			});
		}

		started = true;
	}

});
</script>

<?php
	include_once PATH."/inc/tail.sub.php";
?>