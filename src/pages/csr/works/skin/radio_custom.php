  <?php
	$_dep = array(2,2,3);
	$_tit = array('WORKS','스킨 목록','INPUT & FORM','라디오 커스텀');
	//$_txt = array('작업소스 정리');
	include_once "../../../inc/common.php";
	include_once PATH."/inc/top.sub.php";
?>

<div class="worksTitle">
	<h4><?=$_tit[3]?></h4>
</div>

<style>
/* 라디오/체크박스 디자인 */
.labelType1{font-size: 0;margin: -15px;}
.labelType1 .custom{display: inline-block;background: url(/images/skin/radio-icon-noncheck.jpg) no-repeat 0 0; padding-left: 23px;margin: 15px;}
.labelType1 .custom.active{background: url(/images/skin/radio-icon-checked.jpg) no-repeat 0 0;color: #000;}
.labelType1 .custom .txt{font-size: 18px;}
</style>

<div style="padding: 50px;text-align: center;">
	<fieldset class="labelType1">
		<label class="custom"><input type="radio" name="name1" class="rdcus" /><span class="txt">테스트</span></label>
		<label class="custom"><input type="radio" name="name1" class="rdcus" /><span class="txt">테스트</span></label>
		<label class="custom"><input type="radio" name="name1" class="rdcus" /><span class="txt">테스트</span></label>
		<label class="custom"><input type="radio" name="name1" class="rdcus" /><span class="txt">테스트</span></label>
		<label class="custom"><input type="radio" name="name1" class="rdcus" /><span class="txt">테스트</span></label>
	</fieldset>
</div>

<script>
radioCustom = {
	'init' : function(){
		this.action();
	},
	'action' : function(){
		
		//디자인될 인풋들을 모두 숨김
		var hiddenInputs = function(){
			$('.labelType1 .custom .rdcus').hide();
		}
		hiddenInputs();
		
		//인풋이 :checked 상태인 경우 active 클래스 부여, 아닌경우 제거
		var getChange = function(){
			$('.labelType1 .custom').each(function(){
				var $this = $(this);
				var $inp = $this.find('input');
				if($inp.is(':checked')){
					$this.addClass('active');
				}else{
					$this.removeClass('active');
				}
			});
		}
		getChange();
		
		//라디오 혹은 체크박스의 checked 값이 바뀐 경우
		$('.labelType1 .custom .rdcus').change(function(){
			getChange();
		});
	}
}
radioCustom.init();
</script>

<?php
	include_once PATH."/inc/tail.sub.php";
?>
