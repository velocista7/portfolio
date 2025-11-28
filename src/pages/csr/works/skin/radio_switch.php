<?php
	$_dep = array(2,2,3);
	$_tit = array('WORKS','스킨 목록','INPUT & FORM','라디오 Switch Ver. (Only CSS)');
	$_txt = array('자주 사용하는 디자인 스킨 정리');
	include_once "../../../inc/common.php";
	include_once PATH."/inc/top.sub.php";
?>

<div class="worksTitle">
	<h4><?=$_tit[3]?></h4>
</div>

<style>
.textCont{padding:30px;text-align:center;}
input[type=checkbox]{
	height: 0;
	width: 0;
	visibility: hidden;
}

label {
	cursor: pointer;
	text-indent: -9999px;
	width: 200px;
	height: 100px;
	background: grey;
	display: inline-block;
	border-radius: 100px;
	position: relative;
}

label:after {
	content: '';
	position: absolute;
	top: 5px;
	left: 5px;
	width: 90px;
	height: 90px;
	background: #fff;
	border-radius: 90px;
	transition: 0.3s;
}

input:checked + label {
	background: #F65077;
}

input:checked + label:after {
	left: calc(100% - 5px);
	transform: translateX(-100%);
}

label:active:after {
	width: 130px;
}

// centering
body {
	display: flex;
	justify-content: center;
	align-items: center;
	height: 100vh;
}
</style>

<div class="textCont">
  <input type="checkbox" id="switch" /><label for="switch">Toggle</label>
</div>



<?php
	include_once PATH."/inc/tail.sub.php";
?>
