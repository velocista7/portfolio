  <?php
	$_dep = array(2,2,1);
	$_tit = array('WORKS','스킨 목록','연혁','연혁 TYPE2');
	$_txt = array('자주 사용하는 디자인 스킨 정리');
	include_once "../../../inc/common.php";
	include_once PATH."/inc/top.sub.php";
?>

<div class="worksTitle">
	<h4><?=$_tit[3]?></h4>
</div>

<div class="tab1">
	<a href="http://fmvice.webmaker21.kr/company/history" target="_blank">탭 O Ver.</a>
	<a href="http://njwebbing.webmaker21.kr/company/history" target="_blank">탭 X Ver.</a>
</div>



<style>
.his-wrap {margin:80px 100px;}
.his-wrap h1{text-align:center;font-weight:normal;font-family:mn,noto;font-size:36px;color:#222222}
.his-wrap h2{margin-top:10px;text-align:center;font-weight:normal;font-size:18px;color:#666666}
.his-wrap .info{position:relative;}
.his-wrap .info>div{margin:50px 0;}
.his-wrap .info>div:after{content:'';display:block;clear:both;}
.his-wrap dl{position:relative;width:50%;}
.his-wrap dl.last{padding-bottom:0px;}
.his-wrap dt{position:absolute;top:0px;font-weight:bold;font-family:noto;font-size:33px;line-height:1em;color:#222222;}
.his-wrap dd{position:relative;margin-bottom:20px;}
.his-wrap dd strong{position:absolute;top:0px;width:90px;font-family:noto;font-size:19px;color:#222;}
.his-wrap dd .txt{position:relative;top:5px;}
.his-wrap dd em{display:block;margin-bottom:5px;font-style:normal;font-weight:bold;font-size:17px;color:#222222;}
.his-wrap dd pre{position:relative;top:-2px;font-size:16px;line-height:24px;color:#666666;}
.his-wrap .img{width:50%;margin-top:75px;box-sizing:border-box;}
.his-wrap .img img{max-width:100%;}
.his-wrap .odd dl{float:right}
.his-wrap .odd dt{left:-115px;}
.his-wrap .odd dd{padding-left:90px;}
.his-wrap .odd dd strong{left:40px;}
.his-wrap .odd .img{float:left;padding-right:45px;text-align:right;}
.his-wrap .even dl{float:left;}
.his-wrap .even dt{right:-115px;}
.his-wrap .even dd{padding-right:90px;text-align:right;}
.his-wrap .even dd strong{right:40px;}
.his-wrap .even .img{float:right;padding-left:45px;}
.his-wrap dl.last:after{display:none;}
.his-wrap .info:before{content:'';position:absolute;top:10px;left:50%;width:1px;height:100%;background:#ddd;}
.his-wrap dd strong:before{content:'';opacity:0;position:absolute;top:10px;width:9px;height:9px;border-radius: 50%;background: #fff;border:4px solid #02569f;}
.his-wrap dl dt + dd strong:before{opacity:1}
.his-wrap .odd dl:after{left:0;}
.his-wrap .odd dl strong:before{left:-48px;}
.his-wrap .even dl:after{right:0;}
.his-wrap .even dl strong:before{right:-49px;}
.his-wrap .tab{margin-bottom: 40px;text-align: center;}
.his-wrap .tab li{display: inline-block;margin-right: 5px;}
.his-wrap .tab li a{display: block;line-height: 45px;height: 45px;text-align: center;width: 90px;font-size: 16px;background: #f7f7f7;border: 1px solid #f7f7f7;}
.his-wrap .tab li.active a{background: #fff;border: 1px solid #333;}


@media screen and (max-width: 1300px){
	.his-wrap{margin:30px 0px;}
	.his-wrap h1{font-size:22px;}
	.his-wrap h2{margin-top:5px;font-size:15px;}
	.his-wrap .info>div{margin:30px 0;}
	.his-wrap dt{top:0px;font-size:20px;}
	.his-wrap dd strong{font-size:15px;width:75px;}
	.his-wrap dd .txt{top:2px;}
	.his-wrap dd em{font-size:14px;}
	.his-wrap dd pre{font-size:14px;line-height:21px;}
	.his-wrap  .img{margin-top:30px;}
	.his-wrap  .img img{max-width:330px;}
	.his-wrap .odd dt{left:-80px;}
	.his-wrap .odd dd{padding-left:90px;}
	.his-wrap .odd .img{padding-right:30px;}
	.his-wrap .even dt{right:-80px;}
	.his-wrap .even dd{padding-right:90px;}
	.his-wrap .even .img{padding-left:30px;}
	.his-wrap dd strong:before{top:5px;}
	.his-wrap dd strong:after{top:8px;}
	.his-wrap .tab{margin-bottom: 20px;}
	.his-wrap .tab li{margin-right: 2px;}
	.his-wrap .tab li a{line-height: 35px;height: 35px;text-align: center;width: auto;padding: 0 20px;font-size: 14px;}

}


@media screen and (max-width: 750px){

	.his-wrap .info:before{left:70px}
	.his-wrap .info{padding-left:70px;}
	.his-wrap dl{width:auto ;min-height:auto;}
	.his-wrap dd{margin-bottom:10px;}
	.his-wrap dd strong{width:55px;}
	.his-wrap .img{width:auto;margin-top:10px;}
	.his-wrap .odd dl{float:inherit;}
	.his-wrap .odd dt{left:-70px}
	.his-wrap .odd dd{padding-left:100px;}
	.his-wrap .odd .img{float:inherit;padding-right:0px;padding-left:20px;text-align:left;}
	.his-wrap .even dl{float:inherit;}
	.his-wrap .even dt{right:auto;left:-70px;}
	.his-wrap .even dd{padding-right:0px;padding-left:100px;text-align:left;}
	.his-wrap .even dd strong{right:auto;left:40px;}
	.his-wrap .even .img{float:inherit;padding-left:20px;}
	.his-wrap .even dl:after{right:auto;left:0}
	.his-wrap .even dd strong:before{right:auto;left:-46px;}
	.his-wrap .even dd strong:after{right:auto;left:-43px;}
}

</style>

<div class="his-wrap">

	<!--s:info-->
	<div class="info">

		<div class="odd">
			<dl class="">
				<dt>2021</dt>
				<dd>
					<strong>01</strong>
					<div class="txt">
						<pre>'분식창고' 홈플러스 대구상인점 오픈</pre>
					</div>
				</dd>
			</dl>
		</div>

		<div class="even">
			<dl class="">
				<dt>2020</dt>
				<dd>
					<strong>12</strong>
					<div class="txt">
						<pre>'분식창고' 홈플러스 대구 내당점 오픈</pre>
					</div>
				</dd>
				<dd>
					<strong>11</strong>
					<div class="txt">
						<pre>'분식창고' 홈플러스 잠실점 오픈
						'분식창고' 홈플러스 보령점 오픈
						'분식창고' 홈플러스 동수원점 오픈</pre>
					</div>
				</dd>
			</dl>
		</div>
			
	</div>
	<!--e:info-->

</div>


<?php
	include_once PATH."/inc/tail.sub.php";
?>
