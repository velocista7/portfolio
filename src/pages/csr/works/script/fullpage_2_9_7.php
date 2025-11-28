<?
	$_dep = array(2,1);
	$_tit = array('WORKS','풀페이지 2.9.7');
	$_txt = array('작업에 용이한 플러그인 및 스크립트 정리');
	include_once "../../../inc/common.php";
	include_once PATH."/inc/top.main.php";
?>
<script type="text/javascript" src="<?=DIR?>/js/fullpage.js?<?php echo date('Ymd'); ?>"></script>

<style>
#fullpage .section .fp-tableCell{padding-top: 90px;box-sizing:border-box;}
#fullpage .section.foot .fp-tableCell{padding-top: 0;}
#fullpage .foot,
#fullpage .foot .fp-tableCell{height: auto !important;}
#fullpage .section1{height: 1000px;background: #ebebeb;}	
#fullpage .section2{height: 1000px;}
#fullpage .section3{height: 1000px;background: orange;}
</style>
<div id="fullpage">
	<div class="section section1">		
	</div>
	
	<div class="section section2">
	</div>
	
	<div class="section section3">		
	</div>

	<section class="section foot">	
		<!-- s:footer -->
		<?php include_once PATH."/inc/foot.php"; ?>
		<!-- e:footer -->
	</section>

</div>

<script>
 $(document).ready(function() {
       $('#fullpage').fullpage({
		anchors: ['sec1', 'sec2', 'sec3', 'foot'],
		//menu: '#fullpageMenu',
		navigation: false,
		verticalCentered: true,
		autoScrolling:true,
		scrollBar: true,
		easing: 'easeInOutCubic',
		easingcss3: 'ease',
		responsiveWidth: 1100,
		afterLoad: function(anchorLink, index){
			if($('body').hasClass('fp-viewing-sec3')){
				alert('섹션3')
			}
		}
    });
});
</script>
</body>
</html>