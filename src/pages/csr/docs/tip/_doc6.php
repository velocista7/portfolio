<?php
	$_dep = array(3,3,6);
	$_tit = array('DOCS','TIP','폼(form)의 이해 / 데이터 처리 과정');
	$_docs = true;
  $_hijs = true;
	include_once "../../../inc/common.php";
	include_once PATH."/inc/top.sub.php";
?>

<div class="topimgType1">
  <img src="./images/form-img.jpg" />
</div>

<div class="descType1">
  <div class="group pt0">
    <div class="tit">
      <h6>개념</h6>
    </div>

    <div class="desc">

      <p class="text">
      폼(form) 요소는 알게 모르게 웹에서 많이 사용한다. <strong>사용자의 정보를 알기 위한 입력할 틀로 사용되기 때문</strong>이다.<br />
      form 요소를 사용하여 사용자로부터 입력을 받을 수 있고 사용자가 입력한 데이터를 서버로 보낼 때도 form 요소를 사용한다.
      </p>
      <pre class="mt25 mb25"><code>&lt;form action="처리할 페이지 주소" method="get|post"&gt;</code></pre>
      <p class="text">
      <strong>action 속성</strong>은 입력받은 데이터를 처리할 서버 상의 스크립트 파일의 주소를 명시한다.<br />
      이렇게 전달받은 데이터를 처리하는 스크립트 파일을 폼 핸들러(form-handler)라고 한다.<br />
      <strong>method 속성</strong>은 입력받은 데이터를 서버에 전달할 방식을 명시한다.<br /><br />
      
      즉, 사용자가 form 요소를 통해 입력한 데이터는 action 속성에 명시된 위치로 method 속성의 방식으로 전달된다.
      </p>
    </div>
  </div>

  <div class="group">

   <div class="tit">
      <h6>1. 폼 태그 동작방법</h6>
    </div>

    <div class="desc">
    <ul class="textList noneFront">
        <li>1. 폼이 있는 웹 페이지를 방문한다.</li>
        <li>2. 폼 내용을 입력한다.</li>
        <li>3. 폼 안에 있는 모든 데이터를 웹 서버로 보낸다.</li>
        <li>4. 웹 서버는 받은 폼 데이터를 처리하기 위해 웹 프로그램으로 넘긴다.</li>
        <li>5. 웹 프로그램은 폼 데이터를 처리한다.</li>
        <li>6. 처리결과에 따른 새로운 html 페이지를 웹 서버에 보낸다.</li>
        <li>7. 웹 서버는 받은 html 페이지를 브라우저에 보낸다.</li>
        <li>8. 브라우저는 받은 html 페이지를 보여준다.</li>
      </ul>
      <div class="img mt25">
        <img src="./images/form-img2.png" alt="">
      </div>
      <p class="text mt10">폼 태그 동작 과정 이미지</p>
    </div>
  </div>

  <div class="group">
    <div class="tit">
      <h6>2. 폼 태그 속성</h6>
    </div>

    <div class="desc">
      <ul class="textList">
        <li><strong>action :</strong> 폼 내부에 데이터를 보내는 목적지 url을 지정한다.</li>
        <li><strong>actocomplete :</strong> HTML5에 추가되었으며 양식의 자동완성을 지정한다.</li>
        <li><strong>enctype :</strong> 넘기는 content 타입을 지정하는데 주로 파일을 넘길 때 많이 사용. entype="multipart/form-data"로 지정해서 사용한다.</li>
        <li><strong>method :</strong> 폼을 서버로 전송하는 http 방식을 지정. POST와 GET이 있다.</li>
        <li><strong>name :</strong> 폼을 식별하기 위한 이름을 지정한다.</li>
        <li><strong>target :</strong> action에서 지정한 스크립트 파일이 현재나 다른 위치에서 열리도록 지적한다.</li>
        <li><strong>accept-charset :</strong> 폼 전송에 사용될 문자 인코딩을 지정한다.</li>
      </ul>

      <h6 class="stit mt50 mb10">action - 데이터를 보내는 목적지 url</h6>
      <p class="text">
      action은 form 내부에 전송(submit) 했을 때 <strong>데이터를 보내는 곳의 url을 지정</strong>하게 된다.<br />
      보통 input 태그의 type="submit"으로 설정해서 클릭했을 때 데이터를 서버로 보내게 된다.
      </p>

      <pre><code>&lt;form action="action.jsp" method="get"&gt;
    &lt;div&gt;아이디 :</br>&lt;input type="text" name="id" value=""&lt;/div&gt;
    &lt;div&gt;비밀번호:</br>&lt;input type="text" name="pwd" value=""&lt;/div&gt;
    &lt;div&gt;&lt;input type="submit" value="Submit"&gt;&lt;/div&gt;
&lt;/form&gt;
</code></pre>

      <h6 class="stit mt50 mb10">actocomplete - 자동완성 기능 설정/해제하기</h6>
      <p class="text">
      자동완성 기능은 익스플로러나 크롬에서 검색을 위한 단어를 입력했을 때 <strong>추천 단어를 보여주는 것</strong>을 말한다.<br />
      actocomplete 에 설정하는 값을 <strong>"on" / "off"</strong> 두가지 입니다. (기본적으로는 "on")<br />
      form에 설정하면 포함되어 있는 모든 요소는 자동완성 기능을 막게 된다.
      </p>

      <pre class="language-html"><code>&#x3C;form action=&#x22;action.jsp&#x22; id=&#x22;frm&#x22; autocomplete=&#x22;off&#x22;&#x3E;</pre>

      <p class="text mt20">
      만약 전체말고 <strong>특정 요소에만 막고 싶다</strong>면 <strong>그 요소에만 입력</strong>해서 막아주면 된다.
      </p>

      <pre class="language-html"><code>&#x3C;input type=&#x22;button&#x22; id=&#x22;btn&#x22; value=&#x22;&#xC804;&#xC1A1;&#x22; autocomplete=&#x22;off&#x22;&#x3E;</code></pre>


      <h6 class="stit mt50 mb10">enctype - 컨텐츠 타입 지정하기</h6>
      <p class="text">
      폼 데이터는 서버로 전송되기 전에 url Encode가 된다. 여기에서 파일을 넘기고 싶다면 타입을 <strong>"multipart/form-data"</strong>로 변경해 줘야 한다. 그리고 <strong>form의 전송방식에서 method는 POST로 지정</strong>해 줘야 한다.
      </p>

      <pre class="language-html"><code>&#x3C;form action=&#x22;action.jsp&#x22; method=&#x22;post&#x22; name=&#x22;frm&#x22; entype=&#x22;multipart/form-data&#x22;&#x3E;
    &#x3C;input type=&#x22;file&#x22; name=&#x22;&#xD30C;&#xC77C;&#xB9C1;&#xD06C;&#x22;&#x3E;
&#x3C;/form&#x3E;</code></pre>

      <h6 class="stit mt50 mb10">method - 데이터 보내는 방식의 결정</h6>
      <p class="text">
      GET 방식은 url 뒤에 input 박스의 내용이 <strong>"key=value"</strong> 형태로 변환되어 전송이 된다.<br />
      "action.jsp?id="aaa&pwd=bbb" 와 같은 형태가 되며 값이 전부 노출되기에 보안이 취약하다.<br />
      그래서 <strong>노출되지 말아야 할 데이터들은 POST로 전송하게 된다.</strong>
      </p>

      <p class="text mt30">* method="get"</p>
      <pre class="language-html mt5"><code>&#x3C;form action=&#x22;action.jsp&#x22; id=&#x22;frm&#x22; method=&#x22;get&#x22;&#x3E;
    &#x3C;div&#x3E;&#xC544;&#xC774;&#xB514; :&#x3C;input type=&#x22;text&#x22; name=&#x22;id&#x22; value=&#x22;&#x22;&#x3C;/div&#x3E;
    &#x3C;div&#x3E;&#xBE44;&#xBC00;&#xBC88;&#xD638;:&#x3C;input type=&#x22;text&#x22; name=&#x22;pwd&#x22; value=&#x22;&#x22;&#x3C;/div&#x3E;
    &#x3C;div&#x3E;&#x3C;input type=&#x22;submit&#x22; value=&#x22;Submit&#x22;&#x3E;&#x3C;/div&#x3E;
&#x3C;/form&#x3E;</code></pre>

      <div class="img">
        <img src="./images/form-img3.png" alt="">
      </div>

      <p class="text mt8">보안에 취약한 method="get"</p>

      <p class="text mt35">* method="post"로 변경 후</p>
      <pre class="language-html mt5"><code>&#x3C;form action=&#x22;action.jsp&#x22; id=&#x22;frm&#x22; method=&#x22;post&#x22;&#x3E;
    &#x3C;div&#x3E;&#xC544;&#xC774;&#xB514; :&#x3C;input type=&#x22;text&#x22; name=&#x22;id&#x22; value=&#x22;&#x22;&#x3C;/div&#x3E;
    &#x3C;div&#x3E;&#xBE44;&#xBC00;&#xBC88;&#xD638;:&#x3C;input type=&#x22;text&#x22; name=&#x22;pwd&#x22; value=&#x22;&#x22;&#x3C;/div&#x3E;
    &#x3C;div&#x3E;&#x3C;input type=&#x22;submit&#x22; value=&#x22;Submit&#x22;&#x3E;&#x3C;/div&#x3E;
&#x3C;/form&#x3E;</code></pre>

      <div class="img">
        <img src="./images/form-img4.png" alt="">
      </div>

      <p class="text mt8">중요한 부분 노출 방지 method="post"</p>

      <h6 class="stit mt50 mb10">accept-charset - 속성으로 전송하는 데이터의 문자셋 변경하기</h6>
      <p class="text">
      폼을 전송할 때 <strong>문자셋을 지정</strong>할 수 있다. 만약 <strong>브라우저 문자셋과 서버의 문자셋이 다르면 글자가 깨지게 된다.</strong><br />
      기본적으로 웹 페이지 인코딩이 필요하다면 accept-charset에 값을 세팅해서 보내야 한다.<br />
      웹 페이지는 EUC-KR 이고 서버는 UTF-8이라 문제가 생긴다면 accept-charset으로 UTF-8을 세팅한 후 보내면 된다.
      </p>

      <pre class="language-html mt5"><code>&#x3C;form action=&#x22;action.jsp&#x22; id=&#x22;frm&#x22; accept-charset=&#x22;UTF-8&#x22;&#x3E;
    &#x3C;div&#x3E;&#xC544;&#xC774;&#xB514; :&#x3C;input type=&#x22;text&#x22; name=&#x22;id&#x22; value=&#x22;&#x22;&#x3C;/div&#x3E;
    &#x3C;div&#x3E;&#xBE44;&#xBC00;&#xBC88;&#xD638;:&#x3C;input type=&#x22;text&#x22; name=&#x22;pwd&#x22; value=&#x22;&#x22;&#x3C;/div&#x3E;
    &#x3C;div&#x3E;&#x3C;input type=&#x22;submit&#x22; value=&#x22;Submit&#x22;&#x3E;&#x3C;/div&#x3E;
&#x3C;/form&#x3E;</code></pre>

    </div>
  </div>

</div>

<?php
	include_once PATH."/inc/tail.sub.php";
?>