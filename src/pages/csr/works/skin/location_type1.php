  <?php
	$_dep = array(2,3,1);
	$_tit = array('WORKS','스킨 목록','INPUT & FORM','오시는길 스킨 Type1');
	$_txt = array('자주 사용하는 디자인 스킨 정리');
	include_once "../../../inc/common.php";
	include_once PATH."/inc/top.sub.php";
?>
<script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=836d4df5712969b7f258f079cb1c2903&libraries=services"></script> 
<!-- developers.kakao.com / JavaScript 키 삽입 (경우에 따라 apikey 뒤 &libraries=services 삽입해야하는 경우 있음) --> 

<div class="worksTitle">
	<h4><?=$_tit[3]?></h4>
</div>


<style>
.loc-tbl-tit{display: block;margin-bottom: 20px;font-size: 25px;color: #333;font-weight: 300;}

.loc-box{zoom: 1;}
.loc-box:after{display: block;content: '';clear: both;}
.loc-box > *{position: relative;float: left;min-height: 430px;}
.loc-box dt{width: 850px;}
.loc-box dd{width: 320px;margin-left: 30px;background: #f9f9f9;border-top: 2px solid #304b92;box-sizing: border-box;padding: 40px 25px;}
.loc-box dd h4{display: block;margin-bottom: 20px;font-size: 26px;font-weight: 300;color: #333333;letter-spacing: -1px;}
.loc-box dd .loc-tbl > li{position: relative;margin: 10px 0;padding-left: 75px;}
.loc-box dd .loc-tbl > li > strong{position: absolute;top: 0;left: 0;font-size: 16px;color: #333333;font-weight: 300;letter-spacing: -1px;}
.loc-box dd .loc-tbl > li > strong i{width: 25px;text-align: center;font-size: 21px;color: #304c93;display: inline-block;margin-right: 5px;vertical-align: middle;margin-top: -4px;}
.loc-box dd .loc-tbl > li > p{display: block;font-size: 15px;line-height: 23px;color: #505050;}
.loc-box dd .gomap{position: relative;margin-top: 60px;display: block;line-height: 45px;background: #304b92;font-size: 15px;color: #fff;text-decoration: none;padding: 0 30px;}
.loc-box dd .gomap:after{content: '+';display: block;position: absolute;top: 0;right: 30px;line-height: 45px;font-size: 19px;color: #fff;}

.loc-info{margin-top: 70px;border-top: 2px solid #afafaf;}
.loc-info > li{position: relative;display: block;padding: 40px 20px 40px 155px;box-sizing: border-box;border-bottom: 1px solid #ddd;min-height: 170px;}
.loc-info > li > img{position: absolute;top: 40px;left: 20px;}
.loc-info > li h5{font-size: 20px;color: #333333;letter-spacing: -1px;font-weight: 300;}
.loc-info > li h5 em{font-style: normal;font-size: 18px;}
.loc-info > li ul.detail{margin-top: 20px;}
.loc-info > li ul.detail li{position: relative;font-size: 15px;line-height: 18px;color: #666666;padding: 3px 0 3px 15px;letter-spacing: -1px;}
.loc-info > li ul.detail li:before{content: '';display: block;position: absolute;top: 10px;left: 4px;width: 2px;height: 2px;background: #999;border-radius: 50%;}

@media screen and (max-width: 1200px) {

    .loc-tbl-tit{margin-bottom: 15px;font-size: 16px;}

    .loc-box > *{float: none;min-height: 0;}
    .loc-box dt{width: auto;}
    .loc-box dd{width: auto;margin-left: 0;padding: 20px 15px;margin-top: 5px;}
    .loc-box dd h4{margin-bottom: 10px;font-size: 16px;}
    .loc-box dd .loc-tbl > li{margin: 5px 0;padding-left: 70px;}
    .loc-box dd .loc-tbl > li > strong{font-size: 13px;}
    .loc-box dd .loc-tbl > li > strong i{width: 20px;font-size: 18px;margin-top: -2px;}
    .loc-box dd .loc-tbl > li > p{font-size: 13px;line-height: 18px;}
    .loc-box dd .gomap{margin-top: 20px;line-height: 35px;font-size: 13px;padding: 0 25px;}
    .loc-box dd .gomap:after{right: 25px;line-height: 35px;font-size: 14px;}

    .loc-info{margin-top: 20px;}
    .loc-info > li{padding: 20px 10px 20px 65px;min-height: 70px;}
    .loc-info > li > img{top: 20px;left: 10px;width: 40px;height: auto;}
    .loc-info > li h5{font-size: 16px;}
    .loc-info > li h5 em{font-size: 13px;}
    .loc-info > li ul.detail{margin-top: 15px;}
    .loc-info > li ul.detail li{font-size: 13px;padding: 3px 0 3px 10px;}
    .loc-info > li ul.detail li:before{top: 12px;}

    #map{height: 200px !important;}

}
</style>



<h4 class="loc-tbl-tit">오시는길</h4>

<dl class="loc-box">
    <dt>
        <div id="map" style="width:100%;height:430px;"></div>
        <script>
        var mapContainer = document.getElementById('map'), // 지도를 표시할 div
            mapOption = {
                center: new daum.maps.LatLng(37.72790303035915, 127.04261763424886), // 지도의 중심좌표
                level: 3 // 지도의 확대 레벨
            };

        var map = new daum.maps.Map(mapContainer, mapOption);
        var geocoder = new daum.maps.services.Geocoder();
        geocoder.addressSearch('경기도 의정부시 호동로 72', function(result, status) {
             if (status === daum.maps.services.Status.OK) {
                var coords = new daum.maps.LatLng(result[0].y, result[0].x);
                var marker = new daum.maps.Marker({
                    map: map,
                    position: coords
                });
                // 인포윈도우로 장소에 대한 설명을 표시합니다
                // var infowindow = new daum.maps.InfoWindow({
                //     content: '<div style="width:150px;text-align:center;padding:6px 0;">우리회사</div>'
                // });
                // infowindow.open(map, marker);
                map.setCenter(coords);
            }
        });
        </script>
    </dt>
    <dd>
        <h4>오시는길 스킨1</h4>
        <ul class="loc-tbl">
            <li>
                <strong><i class="axi axi-map-marker"></i>주소</strong>
                <p>
                    경기도 의정부시 호동로 72
                </p>
            </li>
            <li>
                <strong><i class="axi axi-phone-in-talk"></i>전화</strong>
                <p>
                    010-6390-7673
                </p>
            </li>
            <li>
                <strong><i class="axi axi-print2"></i>팩스</strong>
                <p>
                    010-0000-0000
                </p>
            </li>
        </ul>
        <a href="https://map.kakao.com/?q=경기도 의정부시 호동로 72" target="_blank" class="gomap">지도 자세히 보기</a>
    </dd>
</dl>

<ul class="loc-info">
    <li>
        <img src="/images/skin/loc-info-ico-car.png" />
        <h5>차량 이용시</h5>
        <ul class="detail">
            <li>용인IC → 용인공용버스 터미널 → 평택/안성방면 남북대로 → 시미교차로(화산리방면) → 마니커 입구 삼거리 → 마니커에프앤지</li>
            <li>용인IC → 용인공용버스 터미널 → 평택/안성방면 남북대로 → 시미교차로(화산리방면) → 마니커 입구 삼거리 → 마니커에프앤지</li>
        </ul>
    </li>
    <li>
        <img src="/images/skin/loc-info-ico-bus.png" />
        <h5>버스 이용시 <em>(정류장 하차 : 미룡마을입구)</em></h5>
        <ul class="detail">
            <li>용인터미널 : 22-1번, 24번, 6번, 6-1번, 91번, 91-2번, 92번, 92-1번, 93-2번</li>
            <li>오산터미널 : 24번</li>
        </ul>
    </li>
</ul>


<?php
	include_once PATH."/inc/tail.sub.php";
?>
