  <?php
	$_dep = array(2,2,1);
	$_tit = array('WORKS','스킨 목록','INPUT & FORM','동의 스킨 Type1');
	$_txt = array('자주 사용하는 디자인 스킨 정리');
	include_once "../../../inc/common.php";
	include_once PATH."/inc/top.sub.php";
?>

<div class="worksTitle">
	<h4><?=$_tit[3]?></h4>
</div>

<style>
.agreeType1{position: relative;width: 100%;border:1px solid #ddd;padding: 20px 30px;}
.agreeType1 .more{position: absolute;top:50%;right:0;width: 90px;height: 30px;line-height: 30px;text-align: center;background: #999;color: #fff;font-size: 14px;position: absolute;top:50%;right:25px;margin-top: -15px;}
.chkCus{display:inline-block;background: url(/images/skin/chk-icon2.gif) no-repeat 0 0; padding-left: 30px;font-size: 18px;font-weight: 300;height: 24px;line-height: 24px;color: #333;}
.chkCus.active{background-image:url(/images/skin/chk-icon-active2.gif);color: #000;}
</style>
<style>

</style>
<div style="padding: 50px">
	<div class="agreeType1">
		<label class="clbl chkCus"><input type="checkbox" name="" value="" class="custom" />개인정보취급방침을 읽었으며 이에 동의합니다.</label>
		<a href="#" class="more">자세히 보기</a>
	</div>
</div>

<script>
/*	 라디오버튼/체크박스 디자인 */
clbl = {
	'init' : function(){
		this.action();
	},
	'action' : function(){

		//디자인될 인풋들을 모두 숨김
		var hiddenInputs = function(){
			$('.clbl .custom').hide();
		}
		hiddenInputs();
		
		//인풋이 :checked 상태인 경우 active 클래스 부여, 아닌경우 제거
		var getChange = function(){
			$('.clbl').each(function(){
				var $inp = $(this).find('input');
				if($inp.is(':checked')){
					$(this).addClass('active');
				}else{
					$(this).removeClass('active');
				}
			});
		}
		getChange();
		
		//라디오 혹은 체크박스의 checked 값이 바뀐 경우
		$('.clbl .custom').change(function(){
			getChange();
		});
	}
}

$(function(){
	clbl.init();
});
</script>


<?php
	include_once PATH."/inc/tail.sub.php";
?>
