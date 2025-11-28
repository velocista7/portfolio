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

.loc-tbl{background: #135eb2;text-align: center;padding: 40px 0;}
.loc-tbl > li{display: inline-block;vertical-align: top;margin: 0 20px;}
.loc-tbl > li > strong{display: inline-block;vertical-align: middle;margin-right: 10px;font-size: 18px;color: #fff;font-weight: 300;}
.loc-tbl > li > strong i{margin-right: 5px;font-size: 20px;vertical-align: middle;margin-top: -4px;display: inline-block;}
.loc-tbl > li > p{display: inline-block;font-size: 16px;color: #fff;vertical-align: middle;}

.loc-info{margin-top: 40px;border-top: 2px solid #1b357d;border-bottom: 1px solid #ddd;zoom: 1;}
.loc-info:after{display: block;content: '';clear: both;}
.loc-info > dd{position: relative;float: left;width: 50%;border-left: 1px solid #ddd;box-sizing: border-box;padding: 40px 20px 40px 230px;}
.loc-info > dd:first-child{border-left: none;}
.loc-info h5{position: absolute;top: 40px;left: 0;width: 230px;text-align: center;font-size: 20px;color: #333333;font-weight: 300;letter-spacing: -1px;}
.loc-info h5 img{display: block;margin: 0 auto;margin-bottom: 5px;}
.loc-info p{display: block;font-size: 16px;line-height: 25px;color: #666666;letter-spacing: -1px;min-height: 100px;}

@media screen and (max-width: 1200px) {

    .loc-tbl-tit{margin-bottom: 15px;font-size: 16px;}
    
    .loc-tbl{padding: 10px;}
    .loc-tbl > li{display: block;margin: 5px 0;}
    .loc-tbl > li > strong{margin-right: 5px;font-size: 13px;}
    .loc-tbl > li > strong i{font-size: 15px;margin-top: -2px;}
    .loc-tbl > li > p{font-size: 13px;}

    .loc-info{margin-top: 20px;}
    .loc-info > dd{float: none;width: auto;border: 1px solid #ddd;border-width: 0 0 1px 0;padding: 20px 0 20px 120px;}
    .loc-info h5{top: 20px;left: 0;width: 120px;font-size: 13px;}
    .loc-info h5 img{width: 30px;height: auto;}
    .loc-info p{font-size: 13px;line-height: 18px;min-height: 50px;word-break:keep-all !important; -ms-word-break: break-all; word-break: break-all; word-break: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto;}
    .loc-info p br{display: none;}

    #map{height: 200px !important;}

}

</style>


<h4 class="loc-tbl-tit">오시는길2</h4>

<div id="map" style="width:100%;height:350px;"></div>
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

 <ul class="loc-tbl">
	<li>
		<strong><i class="axi axi-map-marker"></i>ADD</strong>
		<p>
			경기도 의정부시 호동로 72
		</p>
	</li>
	<li>
		<strong><i class="axi axi-phone-in-talk"></i>TEL</strong>
		<p>
			010-6390-7673
		</p>
	</li>
	<li>
		<strong><i class="axi axi-print2"></i>FAX</strong>
		<p>
			010-0000-0000
		</p>
	</li>
</ul>

<dl class="loc-info">
    <dd>
        <h5><img src="/images/skin/loc-info-ico-car.jpg" />자가용 이용시</h5>
        <p>
            양촌지방산업 단지 진입  >  첫번째 신호에서 좌회전 > <br />
            1Km직진 후 우회전 > 좌측에 한양정밀
        </p>
    </dd>
    <dd>
        <h5><img src="/images/skin/loc-info-ico-navi.jpg" />네비게이션 검색</h5>
        <p>
            “한양정밀” 검색 > 등록되어있지 않은 경우 <br />
            “학운초등학교” 검색 후 자연&아파트에서 좌회전 ><br />
            700M직진 > 우측에 한양정밀
        </p>
    </dd>
</dl>



<?php
	include_once PATH."/inc/tail.sub.php";
?>
