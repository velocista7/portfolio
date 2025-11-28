<?php
	$_dep = array(3,3,4);
	$_tit = array('DOCS','TIP','SSL [Secure Sockets Layer] - 정보 계층 보안이란?');
	$_docs = true;
	include_once "../../../inc/common.php";
	include_once PATH."/inc/top.sub.php";
?>

<div class="topimgType1">
  <img src="./images/ssl-img.jpg" />
</div>

<div class="descType1">
  <div class="group pt0">
    <div class="tit">
      <h6>개념</h6>
    </div>

    <div class="desc">

      <p class="text">
      <strong>암호화 기반의 인터넷 보안 프로토콜</strong>로 개인정보 보호, 인증, <strong>데이터 무결성</strong>을 보장하기 위해 개발되었다.<br />
      <span class="bspan mt10">※ <strong>무결성</strong>이란 데이터의 정보가 변경되거나 오염되지 않도록 하는 원칙. 네트워크에서 데이터 전송 시 비인가 접속자가 데이터를 변경하거나 위조하지 않았다는 것을 나타냄.</span><br /><br />

      SSL은 SSL 인증서(공식적으로 <strong>TLS 인증서</strong>)가 있는 웹사이트만 실행할 수 있는데 <strong>SSL 인증서</strong>는 신원을 확인하는 신분증이라 생각하면 된다. SSL 인증서는 사이트 or 애플리케이션 서버가 웹에 저장하고 표시한다.<br />
      SSL/TLS를 사용하는 웹사이트 URL에는 HTTP 대신 <strong>HTTPS</strong> 가 있다.
      </p>
      
    </div>
  </div>

  <div class="group pt0">

    <div class="desc">
      <div class="img">
        <img src="./images/httpvshttps.jpg" alt="">
      </div>
      <p class="text">
      디지털 인증서는 인터넷 보안에서 중요한 부분인데 SSL은 <strong>사용자와 서버 사이에 암호화된 연결을 수립하는 데 사용. <br class="__pc" />
      SSL 연결은 인증되지 않은 사용자의 방해로부터 중요한 데이터(ex_신용카드 정보)를 보호</strong>한다.
      </p>
    </div>
  </div>

  <div class="group">
    <div class="tit">
      <h6>SSL/TLS의 중요성</h6>
    </div>

    <div class="desc">
      <p class="text">
      원래 웹에서의 데이터는 누구나 읽을 수 있는 일반 텍스트 형태로 전송됐다. 예를들면 쇼핑몰에서 고객이 주문하고 신용카드 번호를 입력하면 중요한 카드 번호가 숨겨지지 않은 채 정보가 이동하게 된다. 이런 개인 정보를 보호하기 위해서 SSL이 만들어졌으며 SSL은 사용자와 서버 사이 이동하는 모든 데이터를 암호화하여 그 누가 데이터를 가로채더라도 무작위한 문자만 볼 수 있게 된다. 이렇게 고객의 정보는 안전해졌으며, 고객이 번호를 입력한 쇼핑 웹사이트만 이를 볼 수 있게된다.<br />
      SSL은 이외에도, 사이버 공격이나 데이터를 훔치는 가짜 웹사이트로부터 데이터를 함부로 조작하지 못하게 막기도 한다.
      </p>
    </div>
  </div>

  <div class="group">
    <div class="tit">
      <h6>SSL 장점</h6>
    </div>

    <div class="desc">
      <ul class="textList">
        <li>전달되는 내용이 다른 사람에게 노출되는 것을 막을 수 있다.</li>
        <li>클라이언트가 접속하려는 서버가 신뢰할 수 있는 서버 인지 알 수 있다.</li>
        <li>전달되는 내용이 악의적으로 변경되는 것을 막을 수 있다.</li>
      </ul>
    </div>
  </div>

</div>

<?php
	include_once PATH."/inc/tail.sub.php";
?>