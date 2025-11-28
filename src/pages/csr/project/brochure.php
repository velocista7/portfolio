<?php
	include_once "../../../inc/common.sub.php";

	$_dep = array(1,3,0);
	$_tit = array('회사소개','브로슈어','');
	$_txt = array('저희 회사를 소개합니다.','','');

	include_once "../../../inc/common.php";
	include_once PATH."/inc/top.sub.php";
?>


<?php
$pdf_options = array(
    'file' => '/files/webmaker21_company_introduction.pdf', //PDF파일
    'page' => 1 //시작페이지
)
?>
<div class="youtube">
    <iframe src="/superboard/plugin/pdfjs/es5/web/viewer.html?file=<?php echo $pdf_options['file']; ?>#pagemode=thumbs&page=<?php echo $pdf_options['page']; ?>" frameborder="0"></iframe>
</div>




<?php
	include_once PATH."/inc/tail.sub.php";
?>
