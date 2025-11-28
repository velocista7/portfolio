<?
	$_dep = array(2,1);
	$_tit = array('WORKS','Offset Active');
	//$_txt = array('작업소스 정리');
	include_once "../../../inc/common.php";
	include_once PATH."/inc/top.sub.php";
?>
<style>
.offsetNavi{position: fixed;font-size: 0;z-index:100;width: 100%;font-size: 0;left:0;}
.offsetNavi li{display: inline-block;vertical-align: top;width: 33.33%;box-sizing:border-box;}
.offsetNavi li a{display: block;height: 50px;line-height: 50px;font-size: 18px;color: #333;font-weight: 300;text-align: center;background: #fff;}
.offsetNavi li.active a{background: #333;color: #fff;}
.section{height:1000px;}
.section1{background: #444;}
.section2{background: #ccc;}
.section3{background: #b49466;}
</style>

<ul class="offsetNavi">
	<li><a href="#">섹션1</a></li>
	<li><a href="#">섹션2</a></li>
	<li><a href="#">섹션3</a></li>
</ul>

<div class="offsetWrap">
	<section class="section section1">
		
	</section>
	<section class="section section2">
		
	</section>
	<section class="section section3">
		
	</section>
</div>



<script>
$(window).load(function(){

	var win = $(window);
	var sec = $('.offsetWrap .section');
	var btnActive = $('.offsetNavi li');
	var btnSlide = $('.offsetNavi li');
	var wh = [];
	var secNum = 0;
	var spd = 600;

	sec.each(function(i){
		wh[i] = sec.eq(i).offset().top;
	});

	btnSlide.on({
		'click' : function(){
			var i = $(this).index();
			var pos = $('.section').eq(i).offset().top-50;
			
			$('html,body').animate({
				'scrollTop' : pos
			},600,'easeInOutQuart');

			return false;
		}
	});

	function acc(){
		btnActive.eq(secNum).addClass('active').siblings().removeClass('active');
	}
	acc();

	win.on({
		'scroll' : function(){
			var sh = $(this).scrollTop();
			
			for (i=0;i<sec.length;i++){ // �꾩튂媛� �뺤씤
				if(sh >= parseInt(wh[i]) - (win.height()/2)){
					secNum = i;
					acc();
				}
			}

		}
	});
});

</script>
<?php
	include_once PATH."/inc/tail.sub.php";
?>
