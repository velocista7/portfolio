<?
	$_dep = array(2,1);
	$_tit = array('WORKS','카카오맵 매장찾기 (마커 지도 범위 재설정)');
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
.opa0{opacity: 0;}
@keyframes markerBounce {
    0%{
        transform: translateY(0);
    }
    30%{
        transform: translateY(-50px);
    }
    40%{
        transform: translateY(5px);
    }
    50%{
        transform: translateY(-15px);
    }
    60%{
        transform: translateY(3px);
    }
    70%{
        transform: translateY(-5px);
    }
    80%{
        transform: translateY(0);
    }
}

.markerBounce {
opacity: 1;
  -webkit-animation-name: markerBounce;
  animation-name: markerBounce;
    -webkit-animation-duration: 0.8s;
  animation-duration:0.8s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
}

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
#area .mapsWrap .active {z-index:200 !important;}
#area .mapsWrap .info.active .layer {display:block;}
#area .areaBtn{text-align: center;font-size: 0;padding: 30px 0;}
#area .areaBtn .btn{display: inline-block;vertical-align: top;height: 30px;padding: 0 30px;border-radius:5px;background: #333;color: #fff;border:0;margin: 0 5px;}
</style>

<div id="area">
	<div class="mapsWrap">
		<div id="map" style="width:100%;height:400px;"></div>
	</div>
	<div class="areaBtn">
		<button onclick="clickEvent(0)" class="btn">전체</button>
		<button onclick="clickEvent(1)" class="btn">서울</button>
		<button onclick="clickEvent(2)" class="btn">부산</button>
	</div>
</div>

<script>
var mapContainer = document.getElementById('map'), // 지도를 표시할 div 

mapOption = {
	center: new kakao.maps.LatLng(37.5139082, 126.8945475), // 지도의 중심좌표
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
		txt : '하이빙수 부산점 테스트1 텍스트',
		url : '#',
		latlng: new kakao.maps.LatLng(35.2104585, 129.0685937),
		pos : [35.2104585, 129.0685937]
	},

	{
		title: '<strong>하이빙수 부산점 테스트2</strong>',
		txt : '하이빙수 부산점 테스트2 텍스트',
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


function clickEvent(area){
	$('.info').addClass('opa0');
	$('.info').removeClass('markerBounce');
		
		if (area == 0)	{
			//전체
			var areaLat = [
				new kakao.maps.LatLng(37.5139082, 126.8945475),
				new kakao.maps.LatLng(37.6597659, 127.0749645),
				new kakao.maps.LatLng(35.2104585, 129.0685937),
				new kakao.maps.LatLng(35.2100142, 129.0688702),
			];

		}else if (area == 1)	{
			//서울
			var areaLat = [
				new kakao.maps.LatLng(37.5139082, 126.8945475),
				new kakao.maps.LatLng(37.6597659, 127.0749645),	
			];

		}else if (area = 2){
			//부산
			var areaLat = [
				new kakao.maps.LatLng(35.2104585, 129.0685937),
				new kakao.maps.LatLng(35.1065056, 128.965626),
			];
		}
		
        // 검색된 장소 위치를 기준으로 지도 범위를 재설정하기위해
        // LatLngBounds 객체에 좌표를 추가합니다
        var bounds = new kakao.maps.LatLngBounds();

        for (var i=0; i<areaLat.length; i++) {
            bounds.extend(areaLat[i]);        }

        // 검색된 장소 위치를 기준으로 지도 범위를 재설정합니다
        map.setBounds(bounds);
		setTimeout(function(){
			$('.info').removeClass('opa0');
			$('.info').addClass('markerBounce');
		},300)
		
};


function mapScript(){
	var mapNum = 0;
	var areatxt = $('.areaWrap .btn');
	var info = $('.mapsWrap .info');

   function mapOpen(callback){
                var moveLatLon = positions[mapNum].latlng;
                map.panTo(moveLatLon);
                setTimeout(function(){
                    callback();
                },300)
            }



	$('.mapsWrap').on('click','.info .marker',function(){
		

		if($(this).next('.layer').is(':hidden')){
			$('.layer').hide();
			$('.info').parent().removeClass('active');
			$(this).parents('.info').parent().addClass('active');
			$(this).next('.layer').show();
		}else{
			$('.layer').hide();
		}
		//mapOpen();
		return false;
	});


	$('.mapsWrap').on('click','.close',function(){
		$('.layer').hide();
		return false;
	});

	

}
mapScript();


$('.areaBtn .btn').eq(0).click();
</script>

<?php
	include_once PATH."/inc/tail.sub.php";
?>
