<?
	$_dep = array(2,1);
	$_tit = array('WORKS','카카오맵 중심 좌표값 구하기');
	//$_txt = array('작업소스 정리');
	include_once "../../../inc/common.php";
	include_once PATH."/inc/top.sub.php";
?>
<script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=836d4df5712969b7f258f079cb1c2903&libraries=services"></script> 
<!-- developers.kakao.com / JavaScript 키 삽입 (경우에 따라 apikey 뒤 &libraries=services 삽입해야하는 경우 있음) -->

<div class="worksTitle">
	<h4><?=$_tit[1]?></h4>
</div>

<style>
.coordText{width: 100%;border:0;text-align: center;margin-bottom: 20px;height: 50px;font-size: 22px;color: #333;}
</style>

<div id="area">
	<input type="text" class="coordText" value="" placeholder="지도 클릭시 마커 생성 후 마커 기준 좌표값을 나타냅니다. (지오코더 올바른 주소 기준 해당란에 직접 입력 가능)" />
	<div id="clickLatlng"></div>
	<div class="mapsWrap">
		<div id="map" style="width:100%;height:500px;"></div>
	</div>
	
</div>

<script>
var mapContainer = document.getElementById('map'), // 지도를 표시할 div 
    mapOption = {
        center: new kakao.maps.LatLng(37.72792330323158, 127.04261480998366), // 지도의 중심좌표
        level: 3 // 지도의 확대 레벨
    };  

// 지도를 생성합니다    
var map = new kakao.maps.Map(mapContainer, mapOption); 

// 주소-좌표 변환 객체를 생성합니다
var geocoder = new kakao.maps.services.Geocoder();




$('.coordText').on('change',function(){
	
	var addr = $('.coordText').val();
	// 주소로 좌표를 검색합니다
	geocoder.addressSearch(addr, function(result, status) {

		// 정상적으로 검색이 완료됐으면 
		 if (status === kakao.maps.services.Status.OK) {

			var coords = new kakao.maps.LatLng(result[0].y, result[0].x);

			// 결과값으로 받은 위치를 마커로 표시합니다
			var marker = new kakao.maps.Marker({
				map: map,
				position: coords
			});

			// 지도의 중심을 결과값으로 받은 위치로 이동시킵니다
			map.setCenter(coords);
		} 
	});    


});


// 지도를 클릭한 위치에 표출할 마커입니다
var marker = new kakao.maps.Marker({ 
    // 지도 중심좌표에 마커를 생성합니다 
    position: map.getCenter() 
}); 
// 지도에 마커를 표시합니다
marker.setMap(map);

// 지도에 클릭 이벤트를 등록합니다
// 지도를 클릭하면 마지막 파라미터로 넘어온 함수를 호출합니다
kakao.maps.event.addListener(map, 'click', function(mouseEvent) {        
    
    // 클릭한 위도, 경도 정보를 가져옵니다 
    var latlng = mouseEvent.latLng; 
    
    // 마커 위치를 클릭한 위치로 옮깁니다
    marker.setPosition(latlng);

	$('.coordText').val(latlng);
    

function searchAddrFromCoords(coords, callback) {
    // 좌표로 행정동 주소 정보를 요청합니다
    geocoder.coord2RegionCode(coords.getLng(), coords.getLat(), callback);         
}

function searchDetailAddrFromCoords(coords, callback) {
    // 좌표로 법정동 상세 주소 정보를 요청합니다
    geocoder.coord2Address(coords.getLng(), coords.getLat(), callback);
}

// 지도 좌측상단에 지도 중심좌표에 대한 주소정보를 표출하는 함수입니다
function displayCenterInfo(result, status) {
    if (status === kakao.maps.services.Status.OK) {
        var infoDiv = document.getElementById('clickLatlng');

        for(var i = 0; i < result.length; i++) {
            // 행정동의 region_type 값은 'H' 이므로
            if (result[i].region_type === 'H') {
                infoDiv.innerHTML = result[i].address_name;
                break;
            }
        }
    }    
}
    
});
</script>

<?php
	include_once PATH."/inc/tail.sub.php";
?>