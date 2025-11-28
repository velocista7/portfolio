<?
	$_dep = array(2,1);
	$_tit = array('WORKS','GSAP ScrollTrigger');
	$_txt = array('작업에 용이한 플러그인 및 스크립트 정리');
	include_once "../../../inc/common.php";
	include_once PATH."/inc/top.sub.php";
?>
<script type="text/javascript" src="<?=DIR?>/js/gsap.js?<?php echo date('Ymd'); ?>"></script>
<script type="text/javascript" src="<?=DIR?>/js/ScrollTrigger.js?<?php echo date('Ymd'); ?>"></script>

<style>
.section1{height: 1000px;background: #ebebeb;}	
.section2{padding: 50px;}
.section3{height: 1000px;background: orange;}	
.number{visibility: hidden;font-size: 70px;color: #111;}
.number.active{visibility: visible;}
.section2 .box2{width: 400px;height: 400px;background: #ddd;}
</style>

<script>

$(function(){

    gsap.to('.box2', {
        scrollTrigger:{
        trigger: '.box-3',//객체기준범위
        start: "30% 40%",//시작 지점
        end: "60% 50%",//끝 지점
        // end: "+=500"//시작 부분부터 500px까지 스크롤 한 후종료
        scrub: 1,//부드러운 스크러빙
        markers: true,//개발가이드선
    },
    y: -300,
    x: -100,
    rotate : 180
    });

});
</script>

<div class="section1">
	
</div>

<div class="section2">
	<div class="box2">

    </div>
</div>

<div class="section3">
	
</div>



<?php
	include_once PATH."/inc/tail.sub.php";
?>