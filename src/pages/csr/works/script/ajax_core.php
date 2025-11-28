<?
	$_dep = array(2,1);
	$_tit = array('WORKS','AJAX 기본');
	$_txt = array('작업에 용이한 플러그인 및 스크립트 정리');
	include_once "../../../inc/common.php";
	include_once PATH."/inc/top.sub.php";
?>

<style>
.tab{margin-bottom: 20px;text-align:center;}
.tab .btn{padding: 10px;border:1px solid #333;text-decoration: none;}
.tab .btn.active{background: #333;color: #fff;}
.tab .btn span{font-size: 17px;font-weight: 500;color: #333;}
.tab .btn.active span{color: #fff;}
.testText{font-size:25px;text-align:center;color:#333;margin-top:20px;font-weight: 500;}
</style>

<div class="worksTitle">
	<h4><?=$_tit[1]?></h4>
</div>


<div class="ajaxWrap">
	<div class="tab">
		<a href="./ajax_basic.php" data-name="test1" class="btn"><span>AJAX 테스트1</span></a>
		<a href="./ajax_basic.php" data-name="test2" class="btn"><span>AJAX 테스트2</span></a>
	</div>
	<div class="content">
		
	</div>
</div>



<script>
//AJAX basic
var ajaxBasic = {
	init : function(){
		this.action();
	},
	action : function(){			
				
		var btn = $('.ajaxWrap .tab .btn');

		btn.on('click',function(){

			$(this).addClass('active').siblings().removeClass('active');
			var wrap = $(this).parents('.ajaxWrap')
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
					wrap.find('.content').html(data);
				}
			});
			return false;
		});

	}
}
ajaxBasic.init();

$(window).load(function(){
	$('.ajaxWrap .tab .btn:first-child').click();
});
</script>

<?php
	include_once PATH."/inc/tail.sub.php";
?>
