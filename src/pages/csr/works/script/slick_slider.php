<?
	$_dep = array(2,1);
	$_tit = array('WORKS','Slick 기본');
	//$_txt = array('작업소스 정리');
	include_once "../../../inc/common.php";
	include_once PATH."/inc/top.sub.php";
?>

<div class="worksTitle">
	<h4><?=$_tit[1]?></h4>
</div>


<div class="visual slickSkin1">
	<div class="roll">
		<div class="item"><img src="<?=DIR?>/images/thumb1200x600.gif" alt=""></div>
		<div class="item"><img src="<?=DIR?>/images/thumb1200x600.gif" alt=""></div>
		<div class="item"><img src="<?=DIR?>/images/thumb1200x600.gif" alt=""></div>
	</div>
</div>

<script>
//visual
visual = {
	'init' : function(){
		this.action();
	},
	'action' : function(){
		var $ele = {
			'roll' : $('.visual .roll')
		}
		var rolling = function(){
			$ele.roll.slick({
                'fade' : false, //Fade 롤링 효과
                'dots' : true, //하단 pager
                'arrows' : false, //next,prev 버튼
                'infinite' : true, //무한반복
                'slidesToShow' : 1, //슬라이드 갯수
                'slidesToScroll' : 1, //롤링시 슬라이드 갯수
                'autoplay' : true, //자동롤링
                'autoplaySpeed' : 4000, //자동롤링 딜레이
                'swipe' : false, //모바일 스와프 여부
                'centerMode' : false, //Center모드. 가운데 slide에 'slick-active' 클래스 부여.
                'centerPadding' : 0, //Center모드인 경우 좌/우 여백 설정
                'vertical' : false, //vertical 모드
                'zIndex' : 80, //z-index
                'responsive' : [
                    //tablet
                    {
                        'breakpoint' : 1300,
                        'settings' : {
                            'swipe' : true
                        }
                    },
                    //mobile
                    {
                        'breakpoint' : 750,
                        'settings' : {
                            'swipe' : true
                        }
                    }
                ]
			});
		}
		rolling();
	}
}

visual.init();
</script>

<?php
	include_once PATH."/inc/tail.sub.php";
?>
