  <?php
	$_dep = array(2,2,1);
	$_tit = array('WORKS','스킨 목록','연혁','연혁 TYPE1');
	$_txt = array('자주 사용하는 디자인 스킨 정리');
	include_once "../../../inc/common.php";
	include_once PATH."/inc/top.sub.php";
?>

<div class="worksTitle">
	<h4><?=$_tit[3]?></h4>
</div>

<style>
.searchType1{position: relative;padding: 12px 30px;margin-bottom: 50px;border:1px solid #ddd;}
.searchType1 .total{font-size: 14px;color: #333333;line-height: 40px;}
.searchType1 .total strong{color: #de1b22;}
.searchType1 .tit{font-size: 16px;letter-spacing: -1px;color: #333;font-weight: bold;line-height: 40px;}
.searchType1 .tit i{margin-right: 5px;}
.searchType1 fieldset{position: absolute;top: 12px;right: 30px;font-family: empty;font-size: 0;}
.searchType1 fieldset.no-abs{position: static;text-align: center;padding: 10px 0;}
.searchType1 fieldset > *{display: inline-block;*display: inline;*zoom: 1;vertical-align: middle;height: 40px;box-sizing: border-box;}
.searchType1 legend{display: none;}
.searchType1 .where{border: 1px solid #ddd;width: 130px;overflow: hidden;background: url(/images/skin/sb_slt_spr.jpg) no-repeat 92% center;margin-left: 5px;}
.searchType1 .where select{width: 130%;height: 40px;border: none;background: none;padding-left: 10px;font-size: 14px;color: #333333;}
.searchType1 .inp{position: relative;border: 1px solid #ddd;padding-right: 40px;margin-left: 5px;}
.searchType1 .inp .keyword{width: 100%;border: none;background: none;height: 40px;font-size: 14px;padding-left: 15px;}
.searchType1 .inp .sbm{position: absolute;top: 0;right: 0;width: 40px;height: 40px;background: url(/images/skin/sb_search_sbm.jpg) no-repeat center center;border: none;text-indent: -999em;}

@media screen and (max-width: 750px) {
    .searchType1{height: auto;}
    .searchType1 .total{font-size: 12px;line-height: auto;}
    .searchType1 fieldset{position: relative;top: auto;right: auto;margin: -0.5% !important;}
    .searchType1 fieldset > *{height: 35px;margin: 0.5% !important;}
    .searchType1 .where{width: 35%;}
    .searchType1 .where select{height: 35px;padding-left: 5px;font-size: 13px;letter-spacing: -1px;}
    .searchType1 .category{width: 99%;background-position: 97% center;}
    .searchType1 .inp{padding-right: 35px;width: 63%;}
    .searchType1 .inp .keyword{width: 100%;height: 35px;font-size: 13px;padding-left: 10px;}
    .searchType1 .inp .sbm{width: 35px;height: 35px;}
}

</style>


<div class="searchType1">
	<span class="total">전체 <strong>77</strong>건</span>
	<form action="" method="get">
		<fieldset>
			<legend>게시판 검색</legend>

			<div class="where">
				<select name="selSearch" id="selSearch">
					<option value="all">전체</option>
					<option value="title">제목</option>
					<option value="name">작성자</option>
					<option value="content">내용</option>
				</select>
			</div>

			<div class="inp">
				<input type="text" name="txtSearch" id="txtSearch" class="keyword" placeholder="검색어를 입력해주세요." value="" />
				<input type="submit" value="검색" class="sbm">
			</div>
		</fieldset>
	</form>
</div>


<?php
	include_once PATH."/inc/tail.sub.php";
?>
