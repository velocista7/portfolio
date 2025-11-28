  <?php
	$_dep = array(2,3,1);
	$_tit = array('WORKS','스킨 목록','INPUT & FORM','페이징 스킨 Type2');
	$_txt = array('자주 사용하는 디자인 스킨 정리');
	include_once "../../../inc/common.php";
	include_once PATH."/inc/top.sub.php";
?>

<div class="worksTitle">
	<h4><?=$_tit[3]?></h4>
</div>

<style>
.pagingType2{text-align: center;margin-top: 30px;font-family: empty;font-size: 0;}
.pagingType2 a{display: inline-block;vertical-align: top;margin: 0;margin-right: -1px;position: relative;width: 35px;height: 35px;line-height: 35px;text-align: center;background: #f9f9f9;border: 1px solid #ddd;color: #999999;font-size: 12px;text-decoration: none;box-sizing: border-box;font-family: tahoma, arial, axicon;}
.pagingType2 a:first-child{border-radius: 5px 0 0 5px !important;}
.pagingType2 a:after{position: absolute;top: 0;left: 0;width: 100%;height: 100%;line-height: 35px;text-align: center;font-size: 15px;text-indent: 0;}
.pagingType2 a:last-child{border-radius: 0 5px 5px 0 !important;}
.pagingType2 a.active{background: #ffffff;color: #333333;font-weight: 600;}
.pagingType2 a.first,
.pagingType2 a.prev,
.pagingType2 a.next,
.pagingType2 a.last{background: none;font-size: 15px;color: #666666;text-indent: -999em;}
.pagingType2 a.first:after{content: '\f100';text-indent: 0;}
.pagingType2 a.prev:after{content: '\f104';}
.pagingType2 a.next:after{content: '\f105';}
.pagingType2 a.last:after{content: '\f101';}

</style>
<div class="pagingType2">
	<a href="#" class="first"></a>
	<a href="#" class="prev"></a>
	<a href="#" class="active">1</a>
	<a href="#">2</a>
	<a href="#">3</a>
	<a href="#">4</a>
	<a href="#">5</a>
	<a href="#" class="next"></a>
	<a href="#" class="last"></a>
</div>


<?php
	include_once PATH."/inc/tail.sub.php";
?>
