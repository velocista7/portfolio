<?
	$_dep = array(2,1);
	$_tit = array('WORKS','카카오맵 매장찾기 (마커)');
	//$_txt = array('작업소스 정리');
	include_once "../../../inc/common.php";
	include_once PATH."/inc/top.sub.php";
?>
<script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=836d4df5712969b7f258f079cb1c2903"></script> 
<!-- developers.kakao.com / JavaScript 키 삽입 -->

<div class="worksTitle">
	<h4><?=$_tit[1]?></h4>
</div>


<style>
/**************************************************
	지점찾기(네트워크병원찾기)  > 지역명으로 찾기
**************************************************/
#area .search-bar {width: 1300px;margin: 0 auto;}
#area .search-bar legend {width: 0;height: 0;overflow: hidden;text-indent: -999px;}
#area .search-bar fieldset {font-family: empty;font-size: 0;text-align: center;padding: 45px 0;}
#area .search-bar fieldset dl {display: inline-block;zoom: 1;*display: inline;vertical-align: middle;font-family: empty;font-size: 0;margin: 0 40px;}
#area .search-bar fieldset dl > * {display: inline-block;zoom: 1;*display: inline;vertical-align: middle;}
#area .search-bar fieldset dl dt {margin-right: 20px;font-size: 18px;color: #fff;font-weight: normal;letter-spacing: -0.1em;line-height: 40px;}
#area .search-bar fieldset dl dd:after {display: block;clear: both;content: '';}
#area .search-bar fieldset dl dd > * {float: left;}
#area .search-bar fieldset dl dd input[type=text] {margin-right: 10px;font-size: 14px;color: #555555;letter-spacing: -0.1em;height: 40px;border: 1px solid #ddd;box-sizing: border-box;padding: 0 10px;}
#area .search-bar fieldset dl dd select {margin-right: 10px;font-size: 14px;color: #555555;letter-spacing: -0.1em;height: 40px;border: 1px solid #ddd;box-sizing: border-box;padding: 0 10px;}
#area .search-bar fieldset dl dd input[type=submit] {width: 80px;height: 40px;font-size: 16px;color: #fff;background: #3a3a3a;text-align: center;border: 0;}
#area .mapsWrap {position: relative;}
#area .mapsWrap .listWrap {position: absolute;top: 40px;left: 50%;z-index: 99;margin-left: -650px;background: #fff;border: 5px solid #333;padding: 0 25px;}
#area .mapsWrap .listWrap .total {font-size: 15px;color: #333333;letter-spacing: -0.1em;padding: 25px 0;border-bottom: 1px solid #333;}
#area .mapsWrap .listWrap .total b {color: #333;}
#area .mapsWrap .listWrap .txt {width: 320px;height:540px;overflow-y:auto;overflow-x:hidden;}
#area .mapsWrap .listWrap .txt p .modify {position:absolute;left:0;top:0;border:none;padding:5px 10px;background:red;color:#fff;letter-spacing::13px;}
#area .mapsWrap .listWrap .txt .box {
	display:block;
	padding: 15px 18px;
	background:#f9f9f9 url(../images/map-off.png) no-repeat 29px 50%;
	border-top:1px solid #ddd;
	position:relative;
	cursor:pointer;
	text-decoration: none;
}
#area .mapsWrap .listWrap .txt .box:first-child {border-top:none;}
#area .mapsWrap .listWrap .txt .box strong,
#area .mapsWrap .listWrap .txt .box span {display:block;}
#area .mapsWrap .listWrap .txt .box strong {font-size:17px;color:#444;font-weight:600;}
#area .mapsWrap .listWrap .txt .box strong em {font-style: normal;}
#area .mapsWrap .listWrap .txt .box span {font-size:15px;line-height:1.5em;padding-top:5px;}
#area .mapsWrap .listWrap .txt .box:hover,
#area .mapsWrap .listWrap .txt .box.active {background: #333;}
#area .mapsWrap .listWrap .txt .box:hover span,
#area .mapsWrap .listWrap .txt .box:hover strong,
#area .mapsWrap .listWrap .txt .box.active span,
#area .mapsWrap .listWrap .txt .box.active strong {color:#fff;}
#area .mapsWrap .area {width: 100%;height:700px;background:#f3f3f3;}
#area .mapsWrap .info {position:relative;z-index:100;}
#area .mapsWrap .layer {
	background:#fff;
	font-size:14px;
	width:300px;
	border:1px solid #333;
	word-break:break-all;
	border-radius:3px;
	position:absolute;
	bottom:70px;
	left:-115px;
	/* 50%  좌우패딩값 - (ex:-30px) */
	margin-bottom:20px;
	box-sizing:border-box;
	display:none;
}
#area .mapsWrap .layer dt {padding: 10px 15px;font-weight:600;color:#444;border-bottom:1px solid #333;}
#area .mapsWrap .layer dt strong {color: #444;font-weight: 600;font-size: 16px;}
#area .mapsWrap .layer dd {white-space:normal;padding: 10px 15px;font-size: 14px;color: #666;}
#area .mapsWrap .layer .btnWrap{padding: 0 15px 10px;text-align: center;}
#area .mapsWrap .layer .btnWrap .btn{display: inline-block;vertical-align: top;width: 120px;height: 30px;line-height: 30px;border-radius:5px;background: #333;color: #fff;}
#area .mapsWrap .layer .close {position:absolute;right:20px;top:20px;display:block;cursor:pointer;}
#area .mapsWrap .layer .edge {
	position:absolute;left:50%;margin-left:-12px;top:100%;
	border-top: 10px solid #333;
	border-right: 10px solid transparent;
	border-bottom: 10px solid transparent;
	border-left: 10px solid transparent;

	z-index:5;
}
#area .mapsWrap .layer .edge2 {
	position:absolute;left:50%;margin-left:-14px;top:100%;
	z-index:2;
	border-top: 12px solid #444;
	border-right: 12px solid transparent;
	border-bottom: 12px solid transparent;
	border-left: 12px solid transparent;
}
#area .mapsWrap .marker {
	display:block;
	width:63px;
	height:80px;
	background:url(/images/map-marker.png) no-repeat 50% 50%;
	/* background-size:80% 80%; */
	text-indent:-9999px;
	position:relative;
	margin:0 auto;
	cursor:pointer;
}
#area .mapsWrap .info.active {z-index:200;}
#area .mapsWrap .info.active .layer {display:block;}


#area .areaBtn{text-align: center;font-size: 0;padding: 30px 0;}
#area .areaBtn .btn{display: inline-block;vertical-align: top;height: 30px;padding: 0 30px;border-radius:5px;background: #333;color: #fff;border:0;margin: 0 5px;}
</style>

<body>


<div id="area">

	<!-- s:map -->
	<div class="mapsWrap">
		<div class="listWrap">
			<div class="total"><b>0개</b>의 지점이 검색 되었습니다.</div>
			<div class="txt">
				<a href="#" class="box">
					<strong>하이빙수 가산디지털단지점</strong>
					<span class="add">서울 금천구 서부샛길 606  대성디폴리스지식산업센터 406,407,408호</span>
					<span class="tel">02-000-0000</span>
				</a>

				<a href="#" class="box">
					<strong>하이빙수 노원점</strong>
					<span class="add">경기도 용인시 처인구 모현면 오산로 132-1</span>
					<span class="tel">02-544-2080</span>
				</a>

				<a href="#" class="box">
					<strong>하이빙수 부산점 테스트1</strong>
					<span class="add">부산광역시 테스트1</span>
				</a>

				<a href="#" class="box">
					<strong>하이빙수 부산점 테스트2</strong>
					<span class="add">부산광역시 테스트2</span>
				</a>
			
			</div>
		</div>


		<div id="map" class="area"></div>
	</div>
	<!-- e:map -->
</div>


<script type="text/javascript">

 mapContainer = document.getElementById('map'), // 지도를 표시할 div
mapOption = {
	center: new kakao.maps.LatLng(37.481510, 126.881393), // 지도의 중심좌표
	level: 8, // 지도의 확대 레벨
	// scrollwheel: false
};

var map = new kakao.maps.Map(mapContainer, mapOption); // 지도를 생성합니다


// 마커를 표시할 위치와 title 객체 배열입니다
var positions = [
	{
		title: '<strong>하이빙수 가산디지털단지점</strong>',
		txt : '서울 금천구 서부샛길 606  대성디폴리스지식산업센터 406,407,408호',
		url : '#',
		latlng: new kakao.maps.LatLng(37.5139082, 126.8945475),
		pos : [37.5139082, 126.8945475]
	},

	{
		title: '<strong>하이빙수 노원점</strong>',
		txt : '서울 노원구',
		url : '#',
		latlng: new kakao.maps.LatLng(37.6597659, 127.0749645),
		pos : [37.6597659, 127.0749645]
	},

	{
		title: '<strong>하이빙수 부산점 테스트1</strong>',
		txt : '부산광역시 테스트1',
		url : '#',
		latlng: new kakao.maps.LatLng(35.2104585, 129.0685937),
		pos : [35.2104585, 129.0685937]
	},

	{
		title: '<strong>하이빙수 부산점 테스트2</strong>',
		txt : '부산광역시 테스트2',
		url : '#',
		latlng: new kakao.maps.LatLng(35.1065056, 128.965626),
		pos : [35.1065056, 128.965626]
	},
];

// 마커 이미지의 이미지 주소입니다
var imageSrc = "/images/map-marker.png";

for (var i = 0; i < positions.length; i ++) {
	// 마커 이미지의 이미지 크기 입니다
	var overlay = [];
	var content ='<div class="info info'+i+'" data-index="'+i+'">' +
							'	<em class="marker"></em>' +
							'	<div class="layer">' +
							'			<span class="close" title="닫기"><img src="/images/map-close.png" alt=""></span>' +
							'			<em class="edge"></em>' +
							'			<dl>' +
							'				<dt><a href="'+positions[i].url+'" target="_blank">'+ positions[i].title +'</a></dt>' +
							'				<dd>'+ positions[i].txt +'</dd>' +
							'			</dl>' +
							'			<div class="btnWrap">' +
							'				<a href="'+positions[i].url+'" class="btn">' +
							'					자세히보기' +
							'				</a>' +
							'			</div>' +
							'	</div>' +
							'</div>';

	overlay[i] = new kakao.maps.CustomOverlay({
		content: content,
		map: map,
		position: positions[i].latlng
	});
}

function mapScript(){
	var mapNum = 0;
	var maptxt = $('.mapsWrap .txt .box');
	var areatxt = $('.areaWrap .btn');
	var info = $('.mapsWrap .info');

	function mapOpen(callback){
		var moveLatLon = positions[mapNum].latlng;
		map.panTo(moveLatLon);
		setTimeout(function(){
			callback();
		},300)
	}

	function mapActive(){
		if(!maptxt.eq(mapNum).hasClass('active')){
			maptxt.eq(mapNum).addClass('active').siblings().removeClass('active');
			$('.mapsWrap .info'+ mapNum +'').parent().css('zIndex','10').find('.layer').show();
			$('.mapsWrap .info'+ mapNum +'').parent().siblings().css('zIndex','0').find('.layer').hide();
		}else{
			maptxt.eq(mapNum).removeClass('active');
			$('.mapsWrap .info'+ mapNum +'').parent().css('zIndex','0').find('.layer').hide();
		}
	}

	maptxt.on('click',function(){
		mapNum = $(this).index();
		mapOpen(mapActive);
		return false;
	});


	$('.mapsWrap').on('click','.info .marker',function(){
		mapNum = $(this).closest('.info').data('index');
		$('.mapsWrap .info .layer').hide();
		mapOpen(mapActive);
		return false;
	});

	$('.mapsWrap').on('click','.close',function(){
		$('.layer').hide();
		return false;
	});
}
mapScript();

$('.mapsWrap .txt .box').eq(0).click();
</script>

<?php
	include_once PATH."/inc/tail.sub.php";
?>

