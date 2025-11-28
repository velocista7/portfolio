<?
	$_dep = array(1,2);
	$_tit = array('PROJECT','Outsourcing');
	$_txt = array('회사 <strong>외부 파견지</strong>에서 작업했던 프로젝트 입니다.');
	include_once "../../inc/common.php";
	include_once PATH."/inc/top.sub.php";
?>

<ul class="portfolioList">

  <li>
    <a href="#" onclick="javascript:alert('보안상 별도 url은 없습니다.'); return false;" class="link">
			<div class="thumb">
				<img src="./images/samsung_sds.jpg" alt="">
			</div>
			<div class="textBox">
				<dl>
					<dt>삼성SDS</dt>
					<dd>
						<div class="txt dev"><strong>디바이스</strong> : PC</div>
						<div class="txt type"><strong>작업</strong> : 삼성 SDS Nexprime SCM 개선</div>
						<div class="txt date"><strong>파견지</strong> : 삼성 SDS 본사(잠실)</div>
						<div class="txt date"><strong>파견기간</strong> : 2024.11 ~ 2024.12</div>
						<div class="txt type"><strong>특이사항</strong> : -</div>
					</dd>
				</dl>
			</div>
		</a>
	</li>

  <li>
		<a href="#" onclick="javascript:alert('보안상 별도 url은 없습니다.'); return false;" class="link">
			<div class="thumb">
				<img src="./images/hanwha.jpg" alt="">
			</div>
			<div class="textBox">
				<dl>
					<dt>한화생명</dt>
					<dd>
						<div class="txt dev"><strong>디바이스</strong> : PC & Mobile</div>
						<div class="txt type"><strong>작업</strong> : 통합구매시스템 재구축</div>
						<div class="txt date"><strong>파견지</strong> : 여의도 63스퀘어</div>
						<div class="txt date"><strong>파견기간</strong> : 2024.08 ~ 2024.10</div>
						<div class="txt type"><strong>특이사항</strong> : -</div>
					</dd>
				</dl>
			</div>
		</a>
	</li>

  <li>
    <a href="#" onclick="javascript:alert('보안상 별도 url은 없습니다.'); return false;" class="link">
			<div class="thumb">
				<img src="./images/samsung_sds.jpg" alt="">
			</div>
			<div class="textBox">
				<dl>
					<dt>삼성SDS</dt>
					<dd>
						<div class="txt dev"><strong>디바이스</strong> : PC & Mobile</div>
						<div class="txt type"><strong>작업</strong> : 온실가스 관리시스템 구축</div>
						<div class="txt date"><strong>파견지</strong> : 삼성 SDS 본사(잠실)</div>
						<div class="txt date"><strong>파견기간</strong> : 2024.06 ~ 2024.08</div>
						<div class="txt type"><strong>특이사항</strong> : -</div>
					</dd>
				</dl>
			</div>
		</a>
	</li>
</ul>

<script>
var portfolioList = {
	init : function(){
		this.action();
	},
	action : function(){

		$grid = $('.portfolioList').masonry({
			itemSelector: '.portfolioList li',
			columnWidth: '.portfolioList li',
			percentPosition: true
		});

		$('.portfolioList').imagesLoaded(function(){
			$grid.masonry('layout');
		});
	}
};


portfolioList.init();
</script>


<?php
	include_once PATH."/inc/tail.sub.php";
?>