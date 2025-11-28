<?php
	$_dep = array(2,1);
	$_tit = array('WORKS','에스크로 가입사실 확인');
	$_txt = array('작업에 용이한 플러그인 및 스크립트 정리');
	include_once "../../../inc/common.php";
	include_once PATH."/inc/top.sub.php";
?>
<style>
.dummy{width: 290px;margin: 0 auto;}
</style>

<div class="worksTitle">
	<h4><?=$_tit[1]?></h4>
</div> 


<div class="dummy">

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=euc-kr" />

	<style type="text/css">
		body {margin-left: 0px;margin-top: 0px;margin-right: 0px;margin-bottom: 0px;}
	</style>
	<script language="JavaScript">
		function go_check2()
		{
			var status  = "width=500 height=450 menubar=no,scrollbars=no,resizable=no,status=no";
			var obj     = window.open('', 'kcp_pop2', status);

			document.shop_check.method = "post";
			document.shop_check.target = "kcp_pop2";
			document.shop_check.action = "http://admin.kcp.co.kr/Modules/escrow/kcp_pop.jsp";

			document.shop_check.submit();
		}
	</script>
	</head>

<body>
	<form name="shop_check" method="post" action="http://admin.kcp.co.kr/Modules/escrow/kcp_pop.jsp">
		<input type="hidden" name="site_cd" value="SR5EQ">
		<table border="0" cellspacing="0" cellpadding="0">
  		<tr>
    		<td><img src="/images/skin/es_foot.gif" width="290" height="92" border="0" usemap="#Map"></td>
  		</tr>
		</table>
		<map name="Map" id="Map">
  		<area shape="rect" coords="5,62,74,83" href="javascript:go_check2()"  onfocus="this.blur()"/>
		</map>
	</form>
</body>
</html>


</div>





<?php
	include_once PATH."/inc/tail.sub.php";
?>
