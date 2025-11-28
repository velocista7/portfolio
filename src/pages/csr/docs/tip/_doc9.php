<?php
	$_dep = array(3,3,9);
	$_tit = array('DOCS','TIP','웹서비스 개요');
	$_docs = true;
  $_hijs = true;
	include_once "../../../inc/common.php";
	include_once PATH."/inc/top.sub.php";
?>


<div class="descType1">
  <div class="group pt0">
    <div class="tit">
      <h6>1. 클라이언트</h6>
    </div>

    <div class="desc">

      <p class="text">
      <strong>클라이언트(Client)</strong>란 <strong>서비스를 이용하기 위해 네트워크를 통해 요청을 보내는 주체</strong>를 말합니다. <br />
      예를 들어, 인터넷에서 웹 페이지를 보기 위해 웹 브라우저를 실행하면 웹 브라우저가 클라이언트가 됩니다. 또한, 이메일을 보내기 위해 이메일 클라이언트를 실행하면 이메일 클라이언트가 됩니다. <br />
      웹 개발 영역에서 클라이언트는 인터넷에 연결된 컴퓨터나 모바일 기기 등을 이용해 웹 서비스를 이용하는 컴퓨터 또는 이용자를 의미합니다.
      </p>
      <div class="img mt20">
        <img src="./images/ws-img1.png" alt="">
      </div>
    </div>
  </div>

  <div class="group">

    <div class="tit">
      <h6>2. 웹 서버</h6>
    </div>

    <div class="desc">
      <p class="text">
      <strong>웹 서버</strong>는 클라이언트의 요청에 따라 <strong>HTML, CSS, JS, 이미지 파일과 같은 정적 파일을 응답하여 제공하는 소프트웨어</strong>를 말합니다. <br />
      웹 서버는 HTTP 프로토콜을 사용하여 클라이언트와 통신합니다. 대표적인 웹 서버로는 Nginx, Apache 등이 있습니다. 이 외에도 Microsoft IIS, Lighttpd 등 다양한 웹 서버가 존재합니다.
      </p>
      <div class="img mt20">
        <img src="./images/ws-img2.png" alt="">
      </div>
    </div>
  </div>

  <div class="group">

    <div class="tit">
      <h6>3. WAS (Web Application Server)</h6>
    </div>

    <div class="desc">
      <p class="text">
      WAS는 클라이언트 요청에 대해 동적인 처리를 담당하는 영역입니다. 웹 서버와 달리 애플리케이션 로직을 실행할 수 있도록 구성되어 있습니다. 예를 들어 회원가입이나 로그인 등의 로직을 처리하는 영역이 WAS 입니다. <br class="__pc" />또한 데이터베이스 연동, 트랜잭션 관리, 보안, 로깅 등의 기능도 제공합니다. 이를 통해 웹 애플리케이션의 안정성과 성능을 향상시키며, 개발자들은 애플리케이션 개발에 집중할 수 있습니다. <br />
      <strong>대표적인 WAS</strong>로는 <strong>Tomcat, JBoss, WebLogic, WebSphere</strong>  등이 있습니다.<br /><br />

      웹 서버와 WAS는 역할의 차이가 있지만 현업에서는 웹 서버로 퉁(?)으로 얘기하고 있습니다. 참고로 Node.js는 웹서버 또는 WAS로도 사용할 수 있습니다.
      <div class="img mt20">
        <img src="./images/ws-img3.png" alt="">
      </div>
    </div>
  </div>

  <div class="group">

    <div class="tit">
      <h6>4. DB (데이터베이스)</h6>
    </div>

    <div class="desc">
      <p class="text">
      DB는 조직이나 개인이 필요한 정보를 체계적으로 저장, 관리하고 검색할 수 있는 시스템입니다. DB는 일반적으로 다수의 사용자가 공유할 수 있으며, 대규모 데이터의 저장과 검색을 처리할 수 있습니다. 가장 많이 사용되는 DB 유형으로는 관계형(RDBMS), NoSQL 등이 있습니다.<br /><br />

      관계형은 데이터를 테이블로 구성하고, 테이블 간의 관계를 정의하여 데이터를 저장하는 방식입니다. SQL과 같은 쿼리 언어를 사용하여 데이터를 검색, 추가, 수정, 삭제할 수 있습니다. 데이터베이스 관리 시스템(DBMS, Database Management System)은 이러한 쿼리 언어를 해석하고 실행하여 데이터를 처리합니다. <strong>PostgreSQL, MySQL, Microsoft SQL Server</strong> 등이 <strong>대표적인 관계형 데이터베이스</strong>입니다.<br /><br />

      NoSQL은 "Not only SQL" 또는 "Non-Relational"의 줄임말로, 관계형 데이터베이스의 한계를 극복하기 위해 만들어진 데이터베이스입니다. NoSQL은 스키마 자유로운 구조로 데이터를 저장하며, 분산 처리 및 고성능 처리를 위해 설계되었습니다. NoSQL은 관계형과는 다르게 데이터를 테이블이 아닌 컬렉션(collection)이나 도큐먼트(document) 단위로 저장합니다. 컬렉션은 테이블과 유사한 개념이며, 도큐먼트는 일반적으로 JSON 또는 BSON 형식으로 저장되는 일정한 구조를 가진 문서입니다. 이러한 구조는 데이터를 유연하게 처리할 수 있으며, 확장성이 높습니다. <strong>MongoDB, Redis, Firebase</strong> 등이 <strong>대표적인 NoSQL</strong> 입니다.
      </p>
      <div class="img mt20">
        <img src="./images/ws-img4.png" alt="">
      </div>
      
    </div>

  </div>

  <div class="group">

    <div class="desc">
      <p class="text">
        보통 웹 서비스는 <strong>클라이언트 -&gt; 웹 서버 -&gt; WAS -&gt; DB 순으로 요청</strong>이 되고 <strong>DB -&gt; WAS -&gt; 웹 서버 -&gt; 클라이언트 순으로 응답</strong>이 됩니다.
      </p>
      <div class="img mt20">
        <img src="./images/ws-img5.png" alt="">
      </div>
      
    </div>

  </div>

  <div class="group">

    <div class="tit">
      <h6>※ 웹 서버를 이용하는 이유</h6>
    </div>

    <div class="desc">
      <ul class="textList">
        <li><strong>WAS 부담을 줄여주기 위해 사용.</strong> <br /><br />
        WAS는 로그인, 회원가입, 개인정보 수정 등 동적 작업을 처리하는 것만으로도 작업량이 많다. <br />이에 HTML, CSS, JS, 이미지 등 정적인 파일을 클라이언트에게 전달하는 역할을 웹 서버에게 위임함으로써 WAS 작업 부담을 줄일 수 있다.<br /><br /> </li>
        <li><strong>보안 기능을 제공.</strong> <br /><br />
        웹 서버는 보안 기능을 제공하여 웹 페이지에 대한 접근을 제어할 수 있다. 예를 들어, 웹 서버는 SSL/TLS 프로토콜을 사용하여 데이터를 암호화하고, 액세스 제어, 웹 방화벽 등의 보안 기능을 제공하여 웹 사이트를 보호할 수 있다.<br /><br /></li>
        <li><strong>높은 성능을 제공.</strong> <br /><br />
        웹 서버는 대부분 비동기 처리 방식을 사용하여 높은 성능을 제공한다. 예를 들어, Nginx, Apache 등의 웹 서버는 이벤트 기반, 멀티 프로세싱, 스레드 풀 등의 기술을 사용하여 수천 대의 클라이언트 요청을 동시에 처리할 수 있다.<br /><br /></li>
      </ul>
    </div>
  </div>

</div>

<?php
	include_once PATH."/inc/tail.sub.php";
?>