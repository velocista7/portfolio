<?php
	$_dep = array(2,1);
	$_tit = array('WORKS','플러그인 및 스크립트');
	$_txt = array('작업에 용이한 플러그인 및 스크립트 정리');
	include_once "../../../inc/common.php";
	include_once PATH."/inc/top.sub.php";
?>

<div class="worksTitle">
	<h4><?=$_tit[1]?></h4>
</div>

<ul class="linkList">
<li><a href="./html_include.php">HTML Include (라이브서버에서만 가능)</a></li>
  <li><a href="./aos_animate.php">AOS Animate</a></li>
  <li><a href="./cursor_custom_js.php">마우스커서 커스텀</a></li>
  <li><a href="./GSAP_ScrollTrigger.php">GSAP ScrollTrigger</a></li>
  <li><a href="./parallax.php">Parallax</a></li>
  <li><a href="./mcustom_scrollbar.php">스크롤바 커스텀</a></li>
	<!-- <li><a href="./fullcalendar.php">풀캘린더</a></li> -->
	<li><a href="./textmore.php">높이값으로 텍스트 더보기 생성</a></li>
	<li><a href="./kakaomap_coord.php">카카오맵 좌표구하기</a></li>
	<li><a href="./kakaomap_bounds.php">카카오맵 매장찾기 (마커 지도 범위 재설정)</a></li>
	<li><a href="./kakaomap_store.php">카카오맵 매장찾기 (마커)</a></li>
	<li><a href="./offset_navi.php">Offset Active</a></li>
	<li><a href="./masonry.php">Masonry</a></li>
	<li><a href="./fullpage_2_9_7.php">풀페이지 2.9.7</a></li>
	<li><a href="./ajax_rolltab.php">AJAX 롤링(탭)</a></li>
	<li><a href="./ajax_core.php">AJAX 기본</a></li>
	<li><a href="./24popup.php">팝업 기본 (하루동안 열지 않기)</a></li>
	<li><a href="./counting1.php">숫자 카운팅 타입1</a></li>
	<li><a href="./escrow.php">에스크로 가입사실 확인</a></li>
	<li><a href="./swiper.php">Swiper</a></li>
	<li><a href="./slick_slider.php">Slick 기본</a></li>
	<li><a href="./gnb_prevnext.php">GNB로 이전 다음 링크 적용</a></li>
	<li><a href="./fancybox2_1_5.php">Fancy Box 2.1.5</a></li>
	<li><a href="./fancybox3_5_7.php">Fancy Box 3.5.7</a></li>
</ul>


<?php
	include_once PATH."/inc/tail.sub.php";
?>
