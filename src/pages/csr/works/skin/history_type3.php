  <?php
	$_dep = array(2,2,1);
	$_tit = array('WORKS','스킨 목록','연혁','연혁 TYPE3');
	$_txt = array('자주 사용하는 디자인 스킨 정리');
	include_once "../../../inc/common.php";
	include_once PATH."/inc/top.sub.php";
?>

<div class="worksTitle">
	<h4><?=$_tit[3]?></h4>
</div>


<style>
/* 연혁 */
.his-wrap .info{position:relative;margin-top: 80px;}
.his-wrap .info:before{content:'';position:absolute;top:20px;left:50%;width:1px;height:90%;background:#ddd;}
.his-wrap .info>div{margin:70px 0;}
.his-wrap .info>div:first-child{margin-top: 0;}
.his-wrap .info>div:last-child{margin-bottom: 0;}
.his-wrap .info>div:after{content:'';display:block;clear:both;}
.his-wrap dl{position:relative;width:50%;}
.his-wrap dl:before{content:'';position:absolute;top:0;width:26px;height:26px;border-radius: 50%;z-index:1;box-sizing:border-box;background: #685de5;/* background: url(bullet 이미지 경로); */}
.his-wrap dl.last{padding-bottom:0px;}
.his-wrap dt{position: relative;font-weight:600;font-size:34px;line-height: 40px;color:#222222;margin-top: -7px;margin-bottom: 25px;}
.his-wrap dt:before{display: block;content: '';width: 42px;height: 1px;background: #685de5;position: absolute;top:50%;}
.his-wrap dd{position:relative;margin-bottom:8px;}
.his-wrap dd strong{position:absolute;top:0;width:50px;font-size:18px;line-height: 24px;color:#222;}
.his-wrap dd .text{font-size:17px;line-height:24px;color:#666666;}
.his-wrap .odd dl{float:right}
.his-wrap .odd dt{padding-left: 60px;}
.his-wrap .odd dt:before{left:0}
.his-wrap .odd dd{padding-left:135px;}
.his-wrap .odd dd strong{left:60px;}
.his-wrap .odd dl:before{left:-13px;}
.his-wrap .odd .img{float:left;padding-right:45px;text-align:right;}
.his-wrap .even dl{float:left;}
.his-wrap .even dt{padding-right: 60px;text-align: right;}
.his-wrap .even dt:before{right:0}
.his-wrap .even dd{padding-right:135px;text-align:right;}
.his-wrap .even dd strong{right:60px;}
.his-wrap .even dl:after{right:0;}
.his-wrap .even dl:before{right:-14px;}
.his-wrap .even .img{float:right;padding-left:45px;}
.his-wrap dl.last:after{display:none;}

@media all and (max-width:1300px){
	.his-wrap .info{margin-top: 50px;}
	.his-wrap .info>div{margin:35px 0;}
	.his-wrap dl:before{width: 16px;height: 16px;top:14px;}
	.his-wrap .odd dl:before{left:-8px;}
	.his-wrap .even dl:before{right:-8px;}
	.his-wrap dt{top:0px;font-size:20px;margin-top: 1px;}
	.his-wrap dd strong{font-size:14px;line-height: 21px;}
	.his-wrap dd .text{font-size:14px;line-height:21px;}
	.his-wrap .odd dt{padding-left: 55px;}
	.his-wrap .odd dd{padding-left:110px;}
	.his-wrap .odd dd strong{left:55px}
	.his-wrap .odd .img{padding-right:30px;}
	.his-wrap .even dt{padding-right: 55px;}
	.his-wrap .even dd{padding-right:110px;}
	.location .info{padding:20px;}
	.location .info h1{position:relative;top:0;left:0;width:auto;margin-bottom:20px;font-size:20px;}
	.location .info ul{margin:-10px;}
	.location .info li{display:block;font-size:13px;margin:10px;}
	.location .info li b img{width:30px;margin-right:10px;}
}

@media all and (max-width: 750px){
	.his-wrap .info:before{left:20px}
	.his-wrap .info{padding-left:20px;}
	.his-wrap dl{width:auto ;min-height:auto;}
	.his-wrap dt:before{width: 35px;}
	.his-wrap .img{width:auto;margin-top:10px;}
	.his-wrap .odd dl{float:inherit;}
	.his-wrap .odd dt{padding-left: 45px;}
	.his-wrap .odd dd{padding-left:100px;}
	.his-wrap .odd dd strong{left:45px;}
	.his-wrap .odd .img{float:inherit;padding-right:0px;padding-left:20px;text-align:left;}
	.his-wrap .even dl{float:inherit;}
	.his-wrap .even dt{text-align: left;padding-left: 45px;}
	.his-wrap .even dd{padding-right:0px;padding-left:100px;text-align:left;}
	.his-wrap .even dd strong{right:auto;left:45px;}
	.his-wrap .even dl:after{right:auto;left:0}
	.his-wrap .even dl:before{right:auto;left:-8px;}
	.his-wrap .even dt:before{right:auto;left:0;}
	.his-wrap .even dd:before{right:auto;left:-4px;}
	.his-wrap .even .img{float:inherit;padding-left:20px;}
}
</style>


<div id="history">
	<section class="his-wrap">
	
		<div class="info">

			<div class="odd">
				<dl>
					<dt>2022</dt>
					<dd>
						<strong>11.11</strong>
						<p class="text">테스트</p>
					</dd>
					<dd>
						<strong>11.11</strong>
						<p class="text">테스트</p>
					</dd>
					<dd>
						<strong>11.11</strong>
						<p class="text">테스트</p>
					</dd>
				</dl>
			</div>

			<div class="even">
				<dl>
					<dt>2022</dt>
					<dd>
						<strong>11.11</strong>
						<p class="text">테스트1</p>
					</dd>
				</dl>
			</div>

		</div>
		<!--info-->
	</section>
</div>


<?php
	include_once PATH."/inc/tail.sub.php";
?>
