<?
	$_dep = array(1,1);
	$_tit = array('PROJECT','리스트');
	$_txt = array('작업했던 전체 프로젝트가 아닌 일부입니다.');
	include_once "../../inc/common.php";
	include_once PATH."/inc/top.sub.php";
?>

<style>
.test {
    position: relative;
    width: 440px;
    height: 440px;
    color: #574538;
    font-size: 40px;
    font-weight: bold;
}
.circle {
    position: relative;
    overflow: hidden;
    height: 50%;
}

.circle:after {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 440px;
    height: 440px;
    box-sizing: border-box;
    border-radius: 50%;
    border: 4px solid transparent;
}

.scene3.move .circle:nth-child(1):after {
    border-top-color: #574538;
    border-left-color: #574538;
    animation: spin-top 1s 1s 1 linear both;
}


.scene3.move .circle:nth-child(2):after {
    border-top-color: #574538;
    border-left-color: #574538;
    top: -220px;
    animation: spin-bottom 1s 2s 1 linear both;
}

.scene3 .process .process_content .mo div:nth-child(3) {
    position: relative;
    width: 230px;
    height: 230px;
    color: #574538;
    font-weight: bold;
}

@keyframes spin-top {
    from {
        transform: rotate(-135deg);
    }
    to {
        transform: rotate(45deg);
    }
}

@keyframes spin-bottom {
    from {
        transform: rotate(45deg);
    }
    to {
        transform: rotate(225deg);
    }
}

@keyframes right-circle {
    from {
        transform: rotate(-45deg);
    }
    to {
        transform: rotate(135deg);
    }
}

@keyframes left-circle {
    from {
        transform: rotate(135deg);
    }
    to {
        transform: rotate(315deg);
    }
}

</style>

<div class="test">
	<div class="circle"></div>
	<div class="circle"></div>
	<p data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="3000" class="aos-init aos-animate">
		HWADAM <br>
		WEB SITE
	</p>
</div>


<script>
var portfolioList = {
	init : function(){
		this.action();
	},
	action : function(){

		$grid = $('.portfolioList').masonry({
			itemSelector: '.portfolioList li',
			columnWidth: '.portfolioList li',
			percentPosition: true
		});

		$('.portfolioList').imagesLoaded(function(){
			$grid.masonry('layout');
		});
	}
};


portfolioList.init();
</script>


<?php
	include_once PATH."/inc/tail.sub.php";
?>
