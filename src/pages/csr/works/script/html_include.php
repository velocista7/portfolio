<?
	$_dep = array(2,1);
	$_tit = array('WORKS','HTML Include (라이브서버에서만 가능)');
	$_txt = array('작업에 용이한 플러그인 및 스크립트 정리');
	include_once "../../../inc/common.php";
	include_once PATH."/inc/top.sub.php";
?>
<script src="../../../js/includeHTML.js"></script>

<style>
header{text-align:center;font-size:30px;font-family:nfg;color: #111}
.section{background: #ebebeb;height:500px;}
</style>
<header include-html="/_csr/works/script/include_nav.html"></header>

<div class="section"></div>

<script>
includeHTML();
</script>
<?php
	include_once PATH."/inc/tail.sub.php";
?>