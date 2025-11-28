<?
	$_dep = array(2,1);
	$_tit = array('WORKS','Swiper 기본');
	//$_txt = array('작업소스 정리');
	include_once "../../../inc/common.php";
	include_once PATH."/inc/top.sub.php";
?>
<script type="text/javascript" src="<?=DIR?>/vendor/swiper@8-bundle.min.js?<?php echo date('Ymd'); ?>"></script>
<link rel="stylesheet" type="text/css" href="<?=DIR?>/vendor/swiper@8-bundle.min.css?<?php echo date('Ymd'); ?>" />

<div class="worksTitle">
	<h4><?=$_tit[1]?></h4>
</div>

<style>
.visual .swiper-slide {
    background-position: 50%;
    background-repeat: no-repeat;
    background-size: cover;
    opacity: 1!important
}

.visual .swiper-pagination {
    bottom: 7rem
}

.visual .swiper-pagination .swiper-pagination-bullet {
    background: hsla(0,0%,100%,.5);
    height: 1.6rem;
    margin: 0 1.2rem;
    opacity: 1;
    width: 1.6rem
}

.visual .swiper-pagination .swiper-pagination-bullet.swiper-pagination-bullet-active {
    background-color: #fff
}

</style>

<div class="visual swiper-container">
  <div class="swiper-wrapper">
    <div class="swiper-slide"><img src="<?=DIR?>/images/thumb1200x600.gif" alt=""></div>
    <div class="swiper-slide"><img src="<?=DIR?>/images/thumb1200x600.gif" alt=""></div>
    <div class="swiper-slide"><img src="<?=DIR?>/images/thumb1200x600.gif" alt=""></div>
    <div class="swiper-slide"><img src="<?=DIR?>/images/thumb1200x600.gif" alt=""></div>
    <div class="swiper-slide"><img src="<?=DIR?>/images/thumb1200x600.gif" alt=""></div>
  </div>

    <div class="pagination"></div>

    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
</div>

<script>
var slider = null;
if (slider !== null) slider.destroy();
slider = new Swiper(".visual", {
// Optional parameters
	slidesPerView : 'auto',
	spaceBetween : 50,
	slidesPerGroup : 1,
    centeredSlides: true,    //센터모드
	threshold:100, //마우스 스와이프 민감도
    loop: true, //무한루프
	autoplay:{
		delay: 2500, // 시간 설정
        disableOnInteraction: false, // false-스와이프 후 자동 재생
    
  
	},
	navigation: {
         nextEl: ".swiper-button-next",
         prevEl: ".swiper-button-prev",
	},
    pagination : {   // 페이저 버튼 사용자 설정
        el : '.pagination',  // 페이저 버튼을 담을 태그 설정
        clickable : true,  // 버튼 클릭 여부
        type : 'fraction', // 버튼 모양 결정 "bullets", "fraction" 
        renderBullet : function (index, className) {  // className이 기본값이 들어가게 필수 설정
            return '<a href="#" class="' + className + '">' + (index + 1) + '</a>'
        },
        renderFraction: function (currentClass, totalClass) { // type이 fraction일 때 사용
            return '<span class="' + currentClass + '"></span>' + '<span class="' + totalClass + '"></span>';
        }
    },
	scrollbar:{
		el : false,
        draggable: false, 
		dragSize: 1,
    },
   	a11y: { // 웹접근성 
		enabled: true,
		prevSlideMessage: '이전 슬라이드',
		nextSlideMessage: '다음 슬라이드',   
		slideLabelMessage: '총 {{slidesLength}}장의 슬라이드 중 {{index}}번 슬라이드 입니다.',
	},
    breakpoints:{
    	280: {
           //280px 이하의 크기에서 옵션 값 
        },
        768 : {
        	//768px 이하의 크기에서 옵션 값 
        },
        1024 : {
           //1024px 이하의 크기에서 옵션 값 
        }
    }


});
</script>

<?php
	include_once PATH."/inc/tail.sub.php";
?>
