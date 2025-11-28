<?
	$_dep = array(2,1);
	$_tit = array('WORKS','AOS Animate');
	$_txt = array('작업에 용이한 플러그인 및 스크립트 정리');
	include_once "../../../inc/common.php";
	include_once PATH."/inc/top.sub.php";
?>
<link rel="stylesheet" href="<?=DIR?>/css/aos.css">
<script type="text/javascript" src="<?=DIR?>/js/aos.js?<?php echo date('Ymd'); ?>"></script>

<style>
.section--code{}
.section--code div{height: 300px;line-height: 300px;font-size: 40px;color: #fff;background: #000;margin-bottom: 130px;text-align: center;}
</style>
    <section class="section section--code">
        <div data-aos="fade-up">fade-up</div>
        <div data-aos="fade-down">fade-down</div>
        <div data-aos="fade-right">fade-right</div>
        <div data-aos="fade-left">fade-left</div>
        <div data-aos="fade-up-right">fade-up-right</div>
        <div data-aos="fade-up-left">fade-up-left</div>
        <div data-aos="fade-down-right">fade-down-right</div>
        <div data-aos="fade-down-left">fade-down-left</div>
        <div data-aos="flip-left">flip-left</div>
        <div data-aos="flip-right">flip-right</div>
        <div data-aos="flip-up">flip-up</div>
        <div data-aos="flip-down">flip-down</div>
        <div data-aos="zoom-in">zoom-in</div>
        <div data-aos="zoom-in-up">zoom-in-up</div>
        <div data-aos="zoom-in-down">zoom-in-down</div>
        <div data-aos="zoom-in-left">zoom-in-left</div>
        <div data-aos="zoom-in-right">zoom-in-right</div>
        <div data-aos="zoom-out">zoom-out</div>
        <div data-aos="zoom-out-up">zoom-out-up</div>
        <div data-aos="zoom-out-down">zoom-out-down</div>
        <div data-aos="zoom-out-right">zoom-out-right</div>
        <div data-aos="zoom-out-left">zoom-out-left</div>
        <div data-aos="fade-up" data-aos-duration="3000"></div>
        <div data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500"></div>
        <div data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine"></div>
        <div data-aos="fade-left" data-aos-anchor="#example-anchor" data-aos-offset="500" data-aos-duration="500"></div>
        <div data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="300" data-aos-offset="0"></div>
        <div data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000"></div>
        <div data-aos="fade-up" data-aos-anchor-placement="top-bottom"></div>
        <div data-aos="fade-up" data-aos-anchor-placement="center-bottom"></div>
        <div data-aos="fade-up" data-aos-anchor-placement="bottom-bottom"></div>
        <div data-aos="fade-up" data-aos-anchor-placement="top-center"></div>
        <div data-aos="fade-up" data-aos-anchor-placement="center-center"></div>
        <div data-aos="fade-up" data-aos-anchor-placement="bottom-center"></div>
        
	</section>

<script>
AOS.init();
</script>

<?php
	include_once PATH."/inc/tail.sub.php";
?>