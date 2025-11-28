<?php
	$_dep = array(3,3,11);
	$_tit = array('DOCS','TIP','ChatGPT 코딩 활용');
	$_docs = true;
  $_hijs = true;
	include_once "../../../inc/common.php";
	include_once PATH."/inc/top.sub.php";
?>

<!-- <div class="topimgType1 mb40">
  <img src="./images/ws-was-img.jpg" />
</div> -->

<div class="descType1">
  <div class="group pt0">
    <div class="tit">
      <h6>* JQuery 기반 소스를 네이티브 JavaScript로 변환 가능</h6>
    </div>

    <div class="desc">
      <p class="text mb10">
      <strong>오더 :</strong> 
      하단 JQuery 소스 코드를 네이티브 자바스크립트로 변환하고 축약해줘
      </p>

    <pre><code class="language-javascript">// 오더 : 하단 JQuery 소스 코드를 네이티브 자바스크립트로 변환하고 축약해줘

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
</code></pre>
    </div>

    <p class="text mt30 mb10">
      <strong>결과 : </strong>아래는 제공된 JQuery 코드를 네이티브 자바스크립트로 변환하고 축약한 결과입니다.
    </p>

    <pre><code class="language-javascript">// 결과 : 아래는 제공된 JQuery 코드를 네이티브 자바스크립트로 변환하고 축약한 결과입니다.

// 네비게이션
const naviArrows = {
  init: function () {
    const naviArrow = document.getElementById('naviArrow');
    if (naviArrow && naviArrow.classList.contains('_script')) {
      this.action();
    }
  },
  action: function () {
    const snb = document.querySelector('#gnb > li li.active');
    const prev = document.querySelector('#naviArrow .prev');
    const next = document.querySelector('#naviArrow .next');
    const nSnb = Array.from(document.querySelectorAll('#gnb > li li'));

    if (!snb || !prev || !next || nSnb.length === 0) return;

    const nSnbData = nSnb.map((item, i) => ({
      text: item.querySelector('a')?.textContent || '',
      link: item.querySelector('a')?.getAttribute('href') || '',
      isActive: item.classList.contains('active'),
    }));

    const nSnbNum = nSnbData.findIndex((item) => item.isActive);
    const nSnbLeng = nSnbData.length;

    if (nSnbNum > -1) {
      const prevIndex = (nSnbNum === 0 ? nSnbLeng : nSnbNum) - 1;
      const nextIndex = (nSnbNum + 1) % nSnbLeng;

      prev.href = nSnbData[prevIndex].link;
      prev.textContent = nSnbData[prevIndex].text;

      next.href = nSnbData[nextIndex].link;
      next.textContent = nSnbData[nextIndex].text;
    }
  },
};
naviArrows.init();

document.querySelectorAll('#naviArrow a').forEach((link) =>
  link.addEventListener('click', (e) => {
    e.preventDefault();
    alert(link.getAttribute('href'));
  })
);
</code></pre>

    <div class="img mt20">
      <img src="./images/gpt-img1.jpg" />
    </div>

    <p class="bspan mt20">위와 같이 소스 코드 변환 설명도 상세하게 기재되어 답변</p>
  
  </div>

  <div class="group">

    <div class="tit">
      <h6>Web server와 WAS를 분리하는 이유</h6>
    </div>

    <div class="desc">
      <p class="text">
      모든 웹 브라우저들에는 정적 컨텐츠와 동적 컨텐츠가 공존할 수 밖에 없습니다.<br />
      클라이언트에게 브라우저 로그인에 대한 요청을 받았다고 가정해봅시다.<br />
      <strong>웹서버에서 로그인 페이지를 구성하는 모든 폰트, 이미지, 디자인 값(css)들을 유지하면서도 로그인을 위한 DB 조회와 로직을 전부 처리하게 하면 어떻게 될까요?</strong><br />
      당연히 응답 시간도 오래 걸릴 뿐더러 클라이언트가 많아질 수록 서버 부하에 취약해지게 됩니다.<br />
      이 둘을 분리함으로써 웹서버에선 정적인 컨텐츠를 계속 띄워주고, WAS가 그 뒷단에서 빠르게 로직을 처리하여 결과값을 가져와 웹서버에 띄울 수 있도록 합니다.<br />
      또 데이터를 분리함으로써 보안을 강화할 수 있다는 장점도 있죠. 따라서 웹서버, WAS 어느 하나만 쓴다기보다 둘을 같이 두고 기능을 분리 시키는 것이 서버 부하 방지는 물론 요청 처리의 효율을 개선하는 것이 좋습니다.<br /><br />
      
      <strong>WAS는 프론트엔드와 백엔드의 중간에서 값을 처리하고 전달하기때문에, 미들웨어</strong>라고 불립니다.<br />
      보통 미들웨어에서는 데이터 관리, 메세징, 인증 및 API 관리들을 담당하고 있어 클라우드 네이티브 아키텍처의 기반이 되는 중요한 요소입니다.
      </p>
    </div>
  </div>

</div>

<?php
	include_once PATH."/inc/tail.sub.php";
?>