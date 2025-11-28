<?
	$_dep = array(2,2);
	$_tit = array('WORKS','높이값으로 텍스트 더보기 생성');
	//$_txt = array('작업소스 정리');
	include_once "../../../inc/common.php";
	include_once PATH."/inc/top.sub.php";
?>


<style>
.journalList{padding: 40px 0;border-top:2px solid #111;}
.journalList .box{display: table;width: 100%;padding-top: 40px;margin-top: 40px;border-top:1px solid #ddd;}
.journalList .box:first-child{padding-top: 0;margin-top: 0;border-top:0;}
.journalList .box >*{display: table-cell;vertical-align: middle;}
.journalList .imgBox{width: 360px;}
.journalList .imgBox .img{-webkit-background-size: cover important;background-size: cover !important;border:1px solid #ddd;font-size: 0;}
.journalList .imgBox .vvh{visibility: hidden;}
.journalList .hiddenBox.on{overflow: hidden;height: 104px;}
.journalList .textBox{padding-left: 60px;}
.journalList .textBox .tit{margin-bottom: 30px;}
.journalList .textBox .tit dt{font-size: 25px;letter-spacing: -0.025em;color: #444;margin-bottom: 15px;}
.journalList .textBox .tit dd{font-size: 18px;color: #999;}
.journalList .textBox .text{font-size: 16px;line-height: 26px;}
.journalList .basicBtn2{margin-top: 50px;font-size: 0;text-align: left;margin-left: -10px;}
.journalList .basicBtn2 a{display: inline-block;vertical-align: top;width: 210px;text-align: center;background: #888;margin-left: 10px;}
.journalList .basicBtn2 a span{display: inline-block;height: 50px;line-height: 50px;color: #fff;font-size: 16px;}
.basicBtn2 .more.off{display: none;}
</style>

<div class="journalList">

	<div class="box">
		<div class="imgBox">
			<div class="img" style="background: url(/images/thumb500x300.gif) no-repeat 50% 50%;">
				<img src="<?=DIR?>/images/thumb500x300.gif" class="vvh" />
			</div>
		</div>
		<div class="textBox">
			<dl class="tit">
				<dt>2020 국립현대미술과 고양레지던시 입주 작가 비평 모음집</dt>
				<dd>2020 국립현대미술과 고양레지던시 입주 작가 비평모음집 </dd>
			</dl>

			<div class="hiddenBox">
				<p class="text">
					· 고양레지던시 2020년 입주작가 비평(국문)<br />
					· 고양레지던시 2020년 입주작가 비평(영문)<br />
					· 판권지<br />
					· 교류 및 협력기관<br />
					· 글자길이 테스트<br />
					· 글자길이 테스트<br />
					· 글자길이 테스트<br />
					· 글자길이 테스트<br />
				</p>
			</div>

			<div class="basicBtn2">
				<a href="#" class="more on"><span>더보기</span></a>
			</div>
		</div>
	</div>


	<div class="box">
		<div class="imgBox">
			<div class="img" style="background: url(/images/thumb500x300.gif) no-repeat 50% 50%;">
				<img src="<?=DIR?>/images/thumb500x300.gif" class="vvh" />
			</div>
		</div>
		<div class="textBox">
			<dl class="tit">
				<dt>2020 국립현대미술과 고양레지던시 입주 작가 비평 모음집</dt>
				<dd>2020 국립현대미술과 고양레지던시 입주 작가 비평모음집 </dd>
			</dl>

			<div class="hiddenBox">
				<p class="text">
					· 고양레지던시 2020년 입주작가 비평(국문)<br />
					· 고양레지던시 2020년 입주작가 비평(영문)<br />
					· 교류 및 협력기관
				</p>
			</div>

			<div class="basicBtn2">
				<a href="#" class="more on"><span>더보기</span></a>
			</div>
		</div>
	</div>

</div>

<script>
$(function(){

	var mobile = $('#_device_mo').is(':visible');

	if(mobile){
		var textH = 80;
	}else{
		var textH = 104;
	}

	$('.hiddenBox').each(function(){
		if ($(this).find('.text').height() > textH){
			$(this).addClass('on');
		}else{
			$(this).parents('.textBox').find('.basicBtn2 .more').addClass('off');
		}
	});
	
	$(document).on('click','.basicBtn2 .more',function(e){
		e.preventDefault();
		if ($(this).hasClass('on')){
			$(this).find('span').text('닫기');
			$(this).removeClass('on');
			$(this).parents('.textBox').find('.hiddenBox').removeClass('on');
		}else{	
			$(this).parents('.textBox').find('.hiddenBox').addClass('on');
			$(this).find('span').text('더보기');
			$(this).addClass('on');
		}		
	});


});
</script>

<?php
	include_once PATH."/inc/tail.sub.php";
?>
