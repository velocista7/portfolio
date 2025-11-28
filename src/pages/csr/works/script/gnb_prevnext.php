<?
	$_dep = array(2,1);
	$_tit = array('WORKS','GNB로 이전 다음 링크 적용');
	$_txt = array('작업에 용이한 플러그인 및 스크립트 정리');
	include_once "../../../inc/common.php";
	include_once PATH."/inc/top.sub.php";
?>

<style>
#naviArrow{background: #ddd;text-align:center;}
#naviArrow .inner:after{display:block;content:'';clear:both;}
#naviArrow .prev{height:40px;padding:0 10px;font-size:18px;font-weight:600;background:#fff;color:#333;float:left;}
#naviArrow .next{height:40px;padding:0 10px;font-size:18px;font-weight:600;background:#fff;color:#333;float:right;}
</style>

<div class="worksTitle">
	<h4><?=$_tit[1]?></h4>
</div>


<div id="naviArrow" class="_script">
	<div class="inner">
		<a href="#" class="prev">이전</a>
		<a href="#" class="next">다음</a>
	</div>
</div>

<script>
//네비게이션
var naviArrows = {
	init : function(){
		if($('#naviArrow').length > 0 && $('#naviArrow').hasClass('_script')){
			this.action();
		}
	},
	action : function(){
			var snb = $('#gnb > li li.active');
			var prev = $('#naviArrow .prev');
			var next = $('#naviArrow .next');
			var snbNum = snb.index();
			var snbPar = snb.closest('ul');
			var snbParLi = snbPar.children('li');
			var snbLeng = snbParLi.length - 1;
			var nSnb = $('#gnb > li li');
			var nSnbLeng = nSnb.length;
			var nSnbtxt = [];
			var nSnbLink = [];
			var nSnbNum;

			nSnb.each(function(i){
				var $this = $(this);
				nSnbtxt[i] = $this.find('a').text();
				nSnbLink[i] = $this.find('a').attr('href');
				if($this.hasClass('active')){
					nSnbNum = i;
				}
			});

			if(nSnbNum == 0){
				prev.attr('href',nSnbLink[nSnbLeng-1]).text(nSnbtxt[nSnbLeng-1]);
			}else{
				prev.attr('href',nSnbLink[nSnbNum-1]).text(nSnbtxt[nSnbNum-1]);
			}


			if(nSnbNum == nSnbLeng - 1){
				next.attr('href',nSnbLink[0]).text(nSnbtxt[0]);
			}else{
				next.attr('href',nSnbLink[nSnbNum+1]).text(nSnbtxt[nSnbNum+1]);
			
			}
		
	}
}
naviArrows.init();



$('#naviArrow a').click(function(e){
	e.preventDefault();
	alert($(this).attr('href'));

});











// 네비게이션
/* chatGPT 활용한 네이티브 자바스크립트 ver
var naviArrows = {
    init() {
        const naviArrow = document.getElementById('naviArrow');
        if (naviArrow?.classList.contains('_script')) this.action();
    },
    action() {
        const activeItem = document.querySelector('#gnb > li li.active');
        const prev = document.querySelector('#naviArrow .prev');
        const next = document.querySelector('#naviArrow .next');
        const items = [...document.querySelectorAll('#gnb > li li')];

        const activeIndex = items.findIndex(item => item.classList.contains('active'));
        const total = items.length;

        const getTextAndLink = index => {
            const link = items[index].querySelector('a');
            return { text: link.textContent, href: link.getAttribute('href') };
        };

        // 이전 링크 설정
        const prevIndex = (activeIndex - 1 + total) % total;
        const { text: prevText, href: prevHref } = getTextAndLink(prevIndex);
        prev.setAttribute('href', prevHref);
        prev.textContent = prevText;

        // 다음 링크 설정
        const nextIndex = (activeIndex + 1) % total;
        const { text: nextText, href: nextHref } = getTextAndLink(nextIndex);
        next.setAttribute('href', nextHref);
        next.textContent = nextText;
    }
};

naviArrows.init();

// 이벤트 리스너 추가
document.querySelectorAll('#naviArrow a').forEach(link =>
    link.addEventListener('click', e => {
        e.preventDefault();
        alert(link.getAttribute('href'));
    })
);



*/
</script>

<?php
	include_once PATH."/inc/tail.sub.php";
?>
