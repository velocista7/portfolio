  <?php
	$_dep = array(2,2,1);
	$_tit = array('WORKS','스킨 목록','연혁','연혁 TYPE1');
	$_txt = array('자주 사용하는 디자인 스킨 정리');
	include_once "../../../inc/common.php";
	include_once PATH."/inc/top.sub.php";
?>

<div class="worksTitle">
	<h4><?=$_tit[3]?></h4>
</div>

<style>
/* 연혁 */
.titType2{margin-bottom: 55px;}
.titType2 h2{text-align:center;font-weight:600;font-size:30px;line-height: 1.1em;color:#222222;letter-spacing: -0.05em;}
.titType2 h3{font-size: 24px;margin-top:10px;text-align:center;font-weight:normal;line-height: 1.1em;font-weight: 100;color:#666666}
.his-wrap .info{position:relative;}
.his-wrap .info:before{content:'';position:absolute;top:0;left:50%;width:1px;height:100%;background:#ddd;}
.his-wrap .info > div{margin:45px 0;}
.his-wrap .info > div:after{content:'';display:block;clear:both;}
.his-wrap dl{position:relative;width:50%;}
.his-wrap dl.last{padding-bottom:0px;}
.his-wrap dt{position:absolute;top:-10px;font-weight:bold;font-family:mn;font-size:30px;line-height:1em;color:#222222;}
.his-wrap dd{position:relative;margin-bottom:20px;}
.his-wrap dd p{position: relative;font-size: 15px;line-height: 24px;margin-top: 10px;padding-left: 18px;}
.his-wrap dd p:before{display: block;content: '';width: 4px;height: 4px;-webkit-border-radius: 50%;-moz-border-radius: 50%;border-radius: 50%;background: #ccc;position: absolute;top: 10px;left:0;}
.his-wrap dd p:first-child{margin-top: 0;}
.his-wrap dl:before{content:'';position:absolute;top:0;width:17px;height:17px;background: #fff;border-radius: 50%;border:4px solid #23b0e6;-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;}
.his-wrap .img{width:50%;margin-top:75px;box-sizing:border-box;}
.his-wrap .img img{max-width:100%;}
.his-wrap .odd dl{float:right}
.his-wrap .odd dt{left:-115px;}
.his-wrap .odd dd{padding-left:50px;}
.his-wrap .odd dl:before{left:-8px;}
.his-wrap .odd .img{float:left;padding-right:45px;text-align:right;}
.his-wrap .even dl{float:left;}
.his-wrap .even dt{right:-115px;}
.his-wrap .even dd{padding-right:50px;text-align:right;}
.his-wrap .even dd p{padding-left: 0;padding-right: 18px;}
.his-wrap .even dd p:before{left:auto;right:0;}
.his-wrap .even dl:before{right:-9px;}
.his-wrap .even .img{float:right;padding-left:45px;}


@media all and (max-width: 1200px){
	.his-wrap{margin:30px 0px;}		
	.his-wrap h2{font-size:22px;}
	.his-wrap h3{margin-top:5px;font-size:15px;}
	.his-wrap .info>div{margin:20px 0;}
	.his-wrap dl{width: 75%;}
	.his-wrap dt{top:0px;font-size:20px;}
	.his-wrap dd p{font-size: 13px;line-height: 18px;}
	.his-wrap  .img{margin-top:30px;}
	.his-wrap  .img img{max-width:330px;}	
	.his-wrap .odd dt{left:-80px;}
	.his-wrap .odd dd{padding-left:30px;}
	.his-wrap .odd .img{display: none;}
	.his-wrap .even dl{float: right;}
	.his-wrap .even dl:before{right:auto;left:-8px;}
	.his-wrap .even dt{left:-80px;right:auto}
	.his-wrap .even dd{padding-right:0;padding-left: 30px;text-align: left;}
	.his-wrap .even dd p{padding-right: 0;padding-left: 18px;}
	.his-wrap dd p:before{right:auto !important;left:0 !important;top:8px !important;}
	.his-wrap .even .img{display: none;}
	.his-wrap .info:before{left:25%;}
}

</style>


<section class="his-wrap">
	<hgroup class="titType2">
		<h2>아라 사회적협동조합의 발자취</h2>
		<h3> 아라 사회적협동조합이 여러분과 함께했던 발자취를 소개합니다.</h3>
	</hgroup>

	
	<div class="info">
		<div class="year-2020 odd">
			<dl class="2020">
				<dt>2020</dt>
				<dd>
					<p>용인 새빛초 외 7개교 방과후학교 위탁운영</p>
					<p>군포진로체험처(꿈이지 군포시교육협력지원센타)</p>
					<p>군포의왕교육청 다함께 꿈의학교 업무협약</p>
					<p>민주시민 활동가들의 배워서 남주기 운영(군포시 민주시민교육)</p>
					<p>자유학기제 및 취약계층 교육기부 다수</p>
					<p>아라별클라쓰 체험교실 운영</p>
				</dd>			
			</dl>
		</div>
		<div class="year-2019 even">
			<dl class="2019">
				<dt>2019</dt>
				<dd>
					<p>화성 한울초(54학급) 방과후학교 위탁운영</p>
					<p>과학컨텐츠 개발</p>
					<p>크리에이터 컨텐츠 개발</p>
					<p>더-사랑다문화교육연구원 업무협약</p>
					<p>한국멘토링운동 협동조합 업무협약</p>
					<p>흥진초 2,4,5학년 찾아오는 체험학습 프로그램 진행</p>
					<p>상록초 1~6학년 사제멘토링 프로그램 진행</p>
					<p>독정초 전교생 외 경기도내 학교 교육 기부(진로, 메이커, 체험) 다수 진행</p>
					<p>진로직업체험처(꿈이지 군포시교육협력지원센타)</p>
					<p>교육기부 진로체험기관 인증(교육부장관)</p>
					<p>군포시 착한 나눔 기업(군포시 사회적경제 마을공동체지원센타)</p>
				</dd>			
			</dl>
		</div>
		<div class="year-2018 odd">
			<dl class="2018">
				<dt>2018</dt>
				<dd>
					<p>아라 사회적협동조합 설립(교육부 240호 인가)</p>
					<p>과학 컨텐츠 개발 및 제작에 관한 업무 협약</p>
					<p>방과후학교 위탁 운영 및 활성화에 관한 업무 협약</p>
					<p>입북초 6학년 전체 진로체험 진행</p>
					<p>흥진초 2,4,6학년 찾아오는 체험학습 프로그램 진행</p>
				</dd>			
			</dl>
		</div>
	</div>
</section>


<?php
	include_once PATH."/inc/tail.sub.php";
?>
