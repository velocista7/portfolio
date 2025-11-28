<?php
	$_dep = array(3,3,8);
	$_tit = array('DOCS','TIP','엔진엑스(Nginx) 개념');
	$_docs = true;
  $_hijs = true;
	include_once "../../../inc/common.php";
	include_once PATH."/inc/top.sub.php";
?>

<div class="topimgType1">
  <img src="./images/nginx-img.png" />
</div>

<div class="descType1">
  <div class="group pt0">
    <div class="tit">
      <h6>개념</h6>
    </div>

    <div class="desc">

      <p class="text"><strong>엔진엑스(Nginx)</strong>는 트래픽이 많은 웹사이트와 확장성을 위해 설계한 비동기 Event-Driven 구조의 웹서버입니다.<br />
      OSI7 Layer 중 application level 아래의 level에서 Nginx 같은 웹서버가 HTTP 통신을 담당합니다.<br /><br />


      Nginx는 단순히 <strong>정적 파일을 호스팅</strong> 해주는 웹서버입니다.<br />
      그리고 일명, "<strong>더 적은 자원으로 더 빠르게 서비스를 제공</strong>"의 컨셉을 갖고 있습니다.
      </p>
    </div>
  </div>

  <div class="group">

    <div class="tit">
      <h6>Apache vs Nginx</h6>
    </div>

    <div class="desc">
      <h6 class="stit">* Apache의 동작 방식과 한계</h6>
      <ul class="textList mt20">
        <li>Apache는 <strong>클라이언트 접속마다 Process 혹은 Thread를 생성</strong>하는 구조입니다.</li>
        <li>1만 클라이언트로부터 동시접속 요청이 들어온다면 CPU와 메모리 사용이 증가하고, 추가적인 Process나 Thread 생성비용이 드는 등 <strong>대용량 처리에서 한계</strong>를 보입니다.</li>
        <li>또한, Apache서버의 프로세스가 blocking 될 때 요청을 처리하지 못하고 처리가 완료될 때까지 대기상태에 있습니다. 이는 Keep Alive(접속 대기)로 해결이 가능하지만, 효율이 떨어집니다.</li>
      </ul>

      <span class="bspan mt20">결론적으로, Apache는 "1개의 Thread : 1개의 Client" 라는 구조로 보면 됩니다.</span>
      <p class="text mt30">* Thread 방식</p>

      <div class="img mt0">
        <img src="./images/nginx-img2.png" alt="">
      </div>


      <h6 class="stit mt50">* Nginx의 동작 방식</h6>
      <p class="text mt30">* Event-driven 방식</p>
      <div class="img mt0">
        <img src="./images/nginx-img3.png" alt="">
      </div>
      <p class="text mt20">
      앞서 Nginx는 <strong>적은 자원</strong>으로 서비스를 <strong>빠르게 제공</strong>한다고 했는데, 이는 바로 "<strong>이벤트 처리 방식</strong>"으로 가능합니다.<br />
      Apache의 Thread 기반은 매 요청당 하나의 Thread를 생성하기 때문에, 많은 요청 시 CPU의 부하를 걱정해야 하지만
      </p>
      <ul class="textList mt20">
        <li>Event-driven 방식은 여러 요청을 모두 다 Event Handler를 통해 비동기 방식으로 처리해 먼저 처리되는 것부터 로직이 진행되게끔 합니다.</li>
        <li>이는 요청을 하나의 Event라 보고 Event Handler로 관리를 하기 때문에 <strong>메모리의 낭비가 적습니다.</strong></li>
      </ul>

      <p class="text mt20">
      결국, 많은 요청에서 다른 웹서버보다 성능적 우위를 점할 수 있기 때문에 더 빠른 서비스를 적은 자원으로 이용할 수 있습니다.
      </p>
    </div>
  </div>

  <div class="group">

    <div class="tit">
      <h6>Nginx로 할 수 있는 장점들</h6>
    </div>

    <div class="desc">
      <ul class="textList mt20">
        <li>
          <strong>리버스 프록시(Reverse Proxy)로 사용 가능</strong><br />
          이 리버스 프록시 기능을 이용하여 로드밸런싱을 할 수 있습니다.<br />
          (로드 밸런싱: 여러 대의 서버를 두고 서비스를 제공하는 분산 처리 시스템으로, 서버 정보와 포트를 이용해서 어떤 서버가 어떤 작업을 처리할 것인지를 지정해서 부하 분산을 할 수 있습니다.)      
        </li>
        <li>SSL 지원</li>
        <li>웹페이지 접근 인증</li>
        <li>압축</li>
        <li>비동기 처리</li>
        <li>Sub Domain 처리<br />
        (가상 호스팅과 관련된 내용으로 하나의 웹서버에서 여러 서비스를 호스팅할 수 있는 기능을 제공합니다.)
        </li>
        <li>Keep Alive 설정<br />(Http 설정으로 Http 연결 소켓이 얼마나 지속되어 연결될 지를 설정합니다.)</li>
        <li>Cache 처리<br />(특정 자원이나 이미지, CSS, JS와 같은 정적 데이터를 저장해서 웹 서비스의 응답 속도를 빠르게 처리할 수 있게 한다)</li>
      </ul>
    </div>
  </div>

</div>

<?php
	include_once PATH."/inc/tail.sub.php";
?>