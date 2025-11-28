<?php
	$_dep = array(3,3,10);
	$_tit = array('DOCS','TIP','웹서버와 WAS 차이점');
	$_docs = true;
  $_hijs = true;
	include_once "../../../inc/common.php";
	include_once PATH."/inc/top.sub.php";
?>

<div class="topimgType1 mb40">
  <img src="./images/ws-was-img.jpg" />
</div>

<div class="descType1">
  <div class="group pt0">
    <div class="tit">
      <h6>Web 서버와 WAS의 차이점</h6>
    </div>

    <div class="desc">

      <p class="text">
      간단하게 정리하면 <strong>Web 서버는 정적 리소스를 제공, WAS는 애플리케이션 로직까지 실행</strong>할 수 있다라고 정리할 수 있습니다.<br />
      하지만 Web 서버도 프로그램을 실행하는 기능을 포함하고 Was도 웹 서버의 기능을 제공하기 때문에 <strong>이 둘의 차이가 애매</strong>합니다.<br />
      명백한 차이가 있다고 하면 <strong>서블릿 컨테이너가 있다, 없다의 차이</strong>라고 할 수 있고 <strong>WAS는 애플리케이션 코드를 실행하는데 더 특화</strong>되있다고 할 수 있습니다.
      </p>
    </div>
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