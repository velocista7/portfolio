  <?php
	$_dep = array(2,2,1);
	$_tit = array('WORKS','스킨 목록','INPUT & FORM','AJAX 팝업 스킨 Type1');
	$_txt = array('자주 사용하는 디자인 스킨 정리');
	include_once "../../../inc/common.php";
	include_once PATH."/inc/top.sub.php";
?>

<div class="worksTitle">
	<h4><?=$_tit[3]?></h4>
</div>

<style>
.ajaxPop1 {position:fixed;z-index:5000;left:0;top:0;width:100%;height:100%;display:none;font-size:0;text-align:center;box-sizing:border-box;padding:10px;}
.ajaxPop1:before {content:"";display:inline-block;vertical-align:middle;width:0;height:100%;}
.ajaxPop1 .popBG {cursor:pointer;background:rgba(0,0,0,0.5);position:absolute;left:0;top:0;width:100%;height:100%;z-index:0;}
.ajaxPop1 .inner {
	vertical-align:middle;
	box-sizing:border-box;
	background:#fff;
	z-index:10;
	display:inline-block;
	border-radius:10px;
	overflow:hidden;
	position:relative;
	max-width:100%;
	width:500px;
	text-align:left;
}
.ajaxPop1 .title {padding:20px;position:relative;background:#333;}
.ajaxPop1 .title h3 {font-size:18px;font-weight:normal;letter-spacing:-0.075em;color:#fff;}
.ajaxPop1 .title .popClose {display:block;position:absolute;right:20px;top:50%;color:#fff;background:none;border:none;font-size:20px;width:20px;height:20px;margin-top:-10px;cursor: pointer;}
.ajaxPop1 .title .popClose i{display: inline-block;vertical-align: top;}
.ajaxPop1 .desc {padding:20px;font-size:13px;letter-spacing:-0.05em;line-height:1.6em;max-height:60vh;overflow:auto;}
</style>

<div class="tab1">
	<a href="./ajax_popup1.php" class="_ajaxBtn">팝업 버튼</a>
</div>

<script>
//AJAX POPUP
var ajaxbtn = {
	init : function(){
		if($('._ajaxBtn').length > 0){
			this.action();
		}
	},
	action : function(){
		var spd = 500;

		$(document).on('click','._ajaxBtn',function(){
			var href = $(this).attr('href');
			var idx = $(this).data('idx');
			var type = $(this).data('type');

			if(type == undefined){
				type = 'GET';
			}

			$.ajax({
				type: type,
				url: href,
				data : idx,
				success : function(data) {
					$('body').find('._popAjax').remove().end().append(data).find('._popAjax').fadeIn(spd);
				}
			});
			return false;
		});

		$(document).on('click','._popAjax ._bg, ._popAjax ._close',function(){
			$('._popAjax').fadeOut(spd,function(){$(this).remove()});
			return false;
		});

	}
}


$(document).ready(function(){
	ajaxbtn.init();
});
</script>


<?php
	include_once PATH."/inc/tail.sub.php";
?>
