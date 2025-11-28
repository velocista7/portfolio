<?
	$_dep = array(2,1);
	$_tit = array('WORKS','AJAX 롤링(탭)');
	$_txt = array('작업에 용이한 플러그인 및 스크립트 정리');
	include_once "../../../inc/common.php";
	include_once PATH."/inc/top.sub.php";
?>

<style>
.tab{margin: 30px 0;text-align: center;}
.tab .btn{padding: 10px;border:1px solid #333;}
.tab .btn.active{background: #333;color: #fff;}
.tab .btn span{font-size: 20px;font-weight: 600;color: #333;}
.tab .btn.active span{color: #fff;}
</style>

<div class="worksTitle">
	<h4><?=$_tit[1]?></h4>
</div>


<div class="ajaxWrap">
	<div class="tab">
		<a href="./ajax_rolltab_list" data-name="tab1" class="btn"><span>테스트1 롤링</span></a>
		<a href="./ajax_rolltab_list" data-name="tab2" class="btn"><span>테스트2 롤링</span></a>
		<a href="./ajax_rolltab_list" data-name="tab3" class="btn"><span>테스트3 롤링</span></a>
	</div>
	<div class="content slickSkin1">
		
	</div>
</div>

<script>
basicRoll = {
	'init' : function(){
		this.action();
	},
	'action' : function(){
		var $ele = {
			'roll' : $('.roll')
		}
		var rolling = function(){
			$ele.roll.slick({
                'arrows' : true, //next,prev 버튼
                'infinite' : true, //무한반복
                'slidesToShow' : 3 //슬라이드 갯수
			});
		}
		rolling();
	}
}


//AJAX Rolling Tab
var rollingTab = {
	init : function(){
		this.action();
	},
	action : function(){
			
		function slider(){
			$('.roll').bxSlider({
				auto: false,
				pager: true,
				speed: 800,
				slideWidth: 400,
				moveSlides: 1,
				minSlides: 3,
				maxSlides: 3
			});
		}

		var btn = $('.ajaxWrap .tab .btn');

		btn.on('click',function(){

			$(this).addClass('active').siblings().removeClass('active');

			var href = $(this).attr('href');
			var type = $(this).data('type');
			var name = $(this).data('name');

			if(type == undefined){
				type = 'GET';
			}
			$.ajax({
				type: type,
				url: href,
				data: {
					'name' : name
				},
				success : function(data) {
					$('.ajaxWrap .content').html(data);
					basicRoll.init();
				}
			});
			return false;
		});

	}
}
rollingTab.init();

$(window).load(function(){
	$('.ajaxWrap .tab .btn').eq(0).click();
});
</script>

<?php
	include_once PATH."/inc/tail.sub.php";
?>
