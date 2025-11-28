  <?php
	$_dep = array(2,2,1);
	$_tit = array('WORKS','스킨 목록','INPUT & FORM','페이징 스킨 Type1');
	$_txt = array('자주 사용하는 디자인 스킨 정리');
	include_once "../../../inc/common.php";
	include_once PATH."/inc/top.sub.php";
?>

<div class="worksTitle">
	<h4><?=$_tit[3]?></h4>
</div>

<style>
.pagingType1{margin-top: 50px;font-size: 0;text-align: center;}
.pagingType1 a{display: inline-block;vertical-align: top;width: 33px;height: 33px;line-height: 33px;text-align: center;border:1px solid #ddd;margin: 0 2px;text-decoration: none;}
.pagingType1 a img{max-width:100%;}
.pagingType1 a.prev{margin-right:15px;}
.pagingType1 a.next{margin-left:15px;}
.pagingType1 a.num{font-size: 15px;color: #555;}
.pagingType1 a.num.active,
.pagingType1 a.num:hover{background: #464646;border-color: #464646;color: #fff;transition:0.2s;}

@media all and (max-width: 750px){
	.pagingType1 a{display: inline-block;vertical-align: top;width: 28px;height: 28px;line-height: 28px;text-align: center;border:1px solid #ddd;margin: 0 2px;}
	.pagingType1 a.prev{margin-right:10px;}
	.pagingType1 a.next{margin-left:10px;}
	.pagingType1 a.num{font-size: 13px;color: #555;}
}
</style>
<div class="pagingType1">
	<a href="#" class="arrow first"><img src="/images/paging-first.jpg" alt="맨처음"></a>
	<a href="#" class="arrow prev"><img src="/images/paging-prev.jpg" alt="이전"></a>
	<a href="#" class="num active">1</a>	
	<a href="#" class="num">2</a>	
	<a href="#" class="num">3</a>	
	<a href="#" class="num">4</a>
	<a href="#" class="num">5</a>	
	<a href="#" class="arrow next"><img src="/images/paging-next.jpg" alt="다음"></a>
	<a href="#" class="arrow last"><img src="/images/paging-last.jpg" alt="맨끝"></a>
</div>


<?php
	include_once PATH."/inc/tail.sub.php";
?>
