<?php
	$_dep = array(2,1);
	$_tit = array('WORKS','팝업 기본 (하루동안 열지 않기 설정)');
	$_txt = array('작업에 용이한 플러그인 및 스크립트 정리');
	include_once "../../../inc/common.php";
	include_once PATH."/inc/top.sub.php";
?>
<script src="/js/jquery.cookie.js"></script>

<div class="worksTitle">
	<h4><?=$_tit[1]?></h4>
</div>

<script type="text/javascript">
function setCookie( name, value, expirehours ) {
	var todayDate = new Date();
	todayDate.setHours( todayDate.getHours() + expirehours );
	document.cookie = name + "=" + escape( value ) + "; path=/; expires=" + todayDate.toGMTString() + ";"
}
function getCookie( name ){
	var nameOfCookie = name + "=";
	var x = 0;
	while ( x <= document.cookie.length ){
		var y = (x+nameOfCookie.length);
		if ( document.cookie.substring( x, y ) == nameOfCookie ){
			if ( (endOfCookie=document.cookie.indexOf( ";", y )) == -1 )
				endOfCookie = document.cookie.length;
			return unescape( document.cookie.substring( y, endOfCookie ) );
		}
		x = document.cookie.indexOf( " ", x ) + 1;
		if ( x == 0 )
			break;
	}
	return "";
}
</script>


<script type="text/javascript">
function emailPop(val) {
	if(val==1){
		if ( document.getElementById('ePopClose').onclick ){
			setCookie( "ncookie", "done" , 24 );
		}
	}
	document.getElementById("emailPop").style.display = "none";
}
</script>

<div id="emailPop" style="position:fixed;top:100px;left:100px;width:auto;height:auto;z-index:9999;">
	<div>
		<table border="0" cellpadding="0" cellspacing="0">
			<tr bgcolor="ffffff">
				<td style="border:1px solid #ddd;">
					<!-- 팝업 이미지 -->
					<img src="<?=DIR?>/images/thumb500x500.gif" alt="">
				</td>
			</tr>
			<form name="emailPop_form">
			<tr>
				<td align="right" valign="middle" bgcolor="#000000">
					<table width="100%" border="0" cellpadding="0" cellspacing="0">
						<tr>
							<td height="20" align="left">&nbsp;<a href="#close" id="ePopClose" onclick="javascript:emailPop(1);" style="color:#ffffff">오늘 하루동안 열지 않기</a></td>
							<td height="20" align="right">&nbsp;<a href="#close" id="ePopClose" onclick="javascript:emailPop(0);" style="color:#ffffff">창닫기</a></td>
						</tr>
					</table>
				</td>
			</tr>
			</form>
		</table>
	</div>
</div>

<script type="text/javascript">
cookiedata = document.cookie;
if ( cookiedata.indexOf("ncookie=done") < 0 ){
	document.getElementById("emailPop").style.display = "block";
} else {
	document.getElementById("emailPop").style.display = "none";
}
</script>         


<?php
	include_once PATH."/inc/tail.sub.php";
?>
