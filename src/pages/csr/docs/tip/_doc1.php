<?php
	$_dep = array(3,3,1);
	$_tit = array('DOCS','TIP','클라이언트 사이드와 서버사이드의 개념과 차이점');
	$_docs = true;
	include_once "../../../inc/common.php";
	include_once PATH."/inc/top.sub.php";
?>


<div class="descType1">
  <div class="group pt0">

    <div class="imgmb">
      <img src="./images/clie-server-img1.png" />
    </div>

    <div class="desc">
      <p data-ke-size="size16">웹 프로그래밍에서 <b><span style="color: #ef5369;">서버 사이드</span></b> / <b><span style="color: #034EA2;">클라이언트 사이드</span></b>는 큰 의미를 가진다.</p>
      <p data-ke-size="size16">어느쪽에 중심을 두느냐에 따라 프로젝트의 방향이 완전히 다르기 때문이다.</p>
    </div>
  </div>

  <div class="group">

    <div class="tit">
      <h6>1. 클라이언트 사이드(Client-Side)</h6>
    </div>

    <div class="imgmb">
      <img src="./images/clie-server-img2.png" />
    </div>

    <div class="desc">
      <p data-ke-size="size16"><b  style="color: #034EA2;">- 클라이언트(사용자) 측에서 처리하는 것.</b></p>
      <p data-ke-size="size16">클라이언트가 입력한것을 수신해서 HTML로 크롬과 같은 어플리케이션에 해석하여 표시.</p>
      <p data-ke-size="size16">대표적으로 자바스크립트(Javascript)가 있다.</p>
    </div>
  </div>

  <div class="group">

    <div class="tit">
      <h6>2. 서버 사이드(Server-Side)</h6>
    </div>

    <div class="desc">
      <p data-ke-size="size16"><span style="color: #ef5369;">- <b><span style="color: #ef5369;">서버(제공자) 측에서 즉시 처리하는 것.</b></span></p>
      <div>서버 사이드는<span>&nbsp;</span>클라이언트로 보낼&nbsp;웹 페이지(HTML,&nbsp;JavaScript 등이 담긴)를&nbsp;만들며,</div>
      <div>정말 중요한 작업들(사용자 유효성, DB 관련 등)을 수행한다.</div>
      <p data-ke-size="size16">대표적인 언어는 Java, PHP, Ruby, Python, Node.js 등을 언급할 수 있다.</p>
    </div>
  </div>

  <div class="group">

    <div class="imgmb">
      <img src="./images/clie-server-img3.png" />
    </div>

    <div class="desc">
      <p data-ke-size="size16">즉,&nbsp;<b style="color: #ef5369;">서버</b>와&nbsp;<b style="color: #034EA2;">클라이언트</b>는 웹 페이지로 서로 커뮤니케이션을 한다고 볼 수 있다.<br>클라이언트 사이드 언어를 다루고 그에 관련된 개발자를 <b style="color: #034EA2">= 프론트 엔드</b> <br>서버 사이드 언어를 다루고 그에 관련된 개발자를 <b style="color:#ef5369">= 백 엔드</b>라 부른다.</p>
    </div>
  </div>
</div>

<?php
	include_once PATH."/inc/tail.sub.php";
?>