<?php
	$_dep = array(3,3,7);
	$_tit = array('DOCS','TIP','아파치(Apache) 개념');
	$_docs = true;
  $_hijs = true;
	include_once "../../../inc/common.php";
	include_once PATH."/inc/top.sub.php";
?>

<div class="topimgType1">
  <img src="./images/apache-img.png" />
</div>

<div class="descType1">
  <div class="group pt0">
    <div class="tit">
      <h6>개념</h6>
    </div>

    <div class="desc">

      <p class="text">
      아파치(Apache)는 <strong>아파치 소프트웨어 재단에서 만드는 웹서버 프로그램</strong>이다. 아파치는 유닉스 기반으로 만들어져 있으며 따라서 리눅스 기반의 OS에서 대부분 아파치를 지원한다.<br />
      또한 아파치는 비교적 구축이 쉽다는 장점과 오픈 소스이기 때문에 무료로 활용할 수 있어 대부분의 중소기업이 아파치를 활용하고 있다.<br />
      아파치는 고성능의 HTTP 서버이며, 정식 이름은 <strong>아파치 HTTP 서버(Apache HTTP Server)</strong>지만 아파치 서버로 많이 알려져 있다.<br />
      안정성과 확장성, 호환성이 매우좋고, 개선된 패치파일을 꾸준하게 제공하고 있기 때문에 웹 서버용 소프트웨어로 전 세계에서 가장 높은 점유율을 가지고 있다.
      </p>
    </div>
  </div>

  <div class="group">

   <div class="tit">
      <h6>특징</h6>
    </div>

    <div class="desc">
      <ul class="textList">
        <li>아파치 웹서버는 무료 오픈소스이다.</li>
        <li>확장성, 호환성, 이식성, 안정성이 높아서 웹 서버에서 많이 사용한다.</li>
        <li>모듈이라는 개념으로 수많은 기능을 덧붙일 수 있다. (모듈을 통해 다른 프로그램과의 연동도 가능하다.)</li>
        <li>APM(Apache+PHP+MySQL)이 웹 서버를 돌리기 위한 기본 조합으로 여겨진다.</li>
        <li>근래에는 경량화 서버인 엔진엑스(Nginx)의 부상으로 점유율이 점차 낮아지고 있다.</li>
      </ul>
    </div>
  </div>

</div>

<?php
	include_once PATH."/inc/tail.sub.php";
?>