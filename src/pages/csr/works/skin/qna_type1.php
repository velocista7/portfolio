<?
	$_dep = array(2,2);
	$_tit = array('WORKS','Q&A Type1');
	$_txt = array('자주 사용하는 디자인 스킨 정리');
	include_once "../../../inc/common.php";
	include_once PATH."/inc/top.sub.php";
?>


<style>
.qnaType1{}
.qnaType1 .qnaList{border-top: 2px solid #545c73;}
.qnaType1 .qnaList li{border-bottom: 1px solid #ddd;}
.qnaType1 .qnaList li a{text-decoration: none;}
.qnaType1 .qnaList li .ques{position: relative;padding: 20px 40px 20px 40px;background: url(/images/skin/sb_ico_faq_q.png) no-repeat 20px center;font-size: 17px;cursor: pointer;}
.qnaType1 .qnaList li .ques:after{content: '';display: block;background: url(/images/skin/sb_ico_faq_spr.png) no-repeat center center;background-size: contain;display: block;width: 15px;height: 100%;position: absolute;top: 0;right: 20px;}
.qnaType1 .qnaList li.active .ques:after{transform: rotate(-180deg);}
.qnaType1 .qnaList li .ques a.sbj{display: block;font-size: 16px;line-height:22px;color: #333333;}
.qnaType1 .qnaList li .ans{position: relative;padding: 20px 40px 20px 40px;background: #f3f4f7;border-top: 1px solid #ddd;display: none;font-size: 15px;line-height: 28px;}

@media screen and (max-width: 750px) {
	.qnaType1 .qnaList li .ques{padding: 15px 30px 15px 35px;background-size: 20px auto;background-position: 5px center;}
	.qnaType1 .qnaList li .ques:after{width: 10px;height: 100%;right: 5px;}
	.qnaType1 .qnaList li .ques a.sbj{font-size: 12px;line-height:16px;}
	.qnaType1 .qnaList li .ans{padding: 15px 30px 15px 35px;background-size: 20px auto;background-position: 5px center;font-size: 12px;line-height: 16px;}
}
</style>

<div class="qnaType1">
	<ul class="qnaList">
		<li class="">
			<div class="ques">
				<a href="#" class="sbj">노출 순위와 광고비 산정방법은 어떻게 되나요?</a>
			</div>
			<div class="ans nostyle">
				<p>상품 단위로 적용한 '입찰가'와 이용자가 검색한 키워드와 상품의 '연관도'에 의해 광고 순위가 결정되며&nbsp;</p>
				<p>클릭이 일어난 횟수에 따라 비용을 지불하는 CPC 과금 방식으로 산정됩니다.&nbsp;</p>
			</div>
		</li>
		<li>
			<div class="ques">
				<a href="#" class="sbj">광고비 외에 추가 수수료가 있나요?</a>
			</div>
			<div class="ans nostyle">
				<p>미담기획은 네이버에 등록되어 있는 공식 대대행사로 추가 수수료 없이 실제 광고 비용 이외에 금액은 발생하지 않습니다.&nbsp;</p>
			</div>
		</li>
	</ul>
</div>

<script>
qnaType1 = {
	'init' : function(){
		this.action();
	},
	'action' : function(){
		var $ele = {
			'ques' : $('.qnaType1 .ques')
		}
		var togglebox = function($this){
			var $ans = $this.parents('li').find('.ans');
			var vis = $ans.is(':visible');
			if(!vis){
				$ans.stop().slideDown()
				.parents('li').addClass('active')
				.siblings().removeClass('active')
				.find('.ans').slideUp();
			}else{
				$ans.stop().slideUp()
				.parents('li').removeClass('active');
			}
		}
		$ele.ques.on({
			'click' : function(e){
				e.preventDefault();
				togglebox($(this));
			}
		})
	}
}
$(function(){ qnaType1.init(); })
</script>

<?php
	include_once PATH."/inc/tail.sub.php";
?>
