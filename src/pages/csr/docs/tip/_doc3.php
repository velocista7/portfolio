<?php
	$_dep = array(3,3,3);
	$_tit = array('DOCS','TIP','JSON(JavaScript Object Notation) 이란?');
	$_docs = true;
  $_hijs = true;
	include_once "../../../inc/common.php";
	include_once PATH."/inc/top.sub.php";
?>

<div class="topimgType1">
  <img src="./images/json-to-string.jpg" />
</div>

<div class="descType1">
  <div class="group pt0">
    <div class="tit">
      <h6>개념</h6>
    </div>

    <div class="desc">

      <ul class="textList">
        <li><strong>JavaScript Object Notation</strong>라는 의미의 축약어로 데이터를 저장하거나 전송할 때 많이 사용되는 <strong>경량의 DATA 교환 형식</strong></li>
        <li>Javascript에서 객체를 만들 때 사용하는 표현식을 의미한다.</li>
        <li>JSON 표현식은 사람과 기계 모두 이해하기 쉬우며 용량이 작아서, 최근에는 JSON이 XML을 대체해서 데이터 전송 등에 많이 사용한다.</li>
        <li>JSON은 데이터 포맷일 뿐이며 어떠한 통신 방법도, 프로그래밍 문법도 아닌 단순히 데이터를 표시하는 표현 방법일 뿐이다.</li>
      </ul>

      
      
    </div>
  </div>

  <div class="group">
    <div class="tit">
      <h6>특징</h6>
    </div>
    <div class="desc">
      <ul class="textList">
        <li>서버와 클라이언트 간의 교류에서 일반적으로 많이 사용된다.</li>
        <li>자바스크립트 객체 표기법과 아주 유사하다.</li>
        <li>자바스크립트를 이용하여 JSON 형식의 문서를 쉽게 자바스크립트 객체로 변환할 수 있는 이점이 있다.</li>
        <li><strong>JSON 문서 형식은 자바스크립트 객체의 형식을 기반으로 만들어졌다.</strong></li>
        <li>자바스크립트의 문법과 굉장히 유사하지만 <strong>텍스트 형식일 뿐</strong>이다.</li>
        <li>다른 프로그래밍 언어를 이용해서도 쉽게 만들 수 있다.</li>
        <li>특정 언어에 종속되지 않으며, 대부분의 프로그래밍 언어에서 JSON 포맷의 데이터를 핸들링 할 수 있는 라이브러리를 제공한다.</li>
      </ul>      

      
    </div>
  </div>

  <div class="group">
    <div class="tit">
      <h6>XML vs JSON</h6>
    </div>
    <div class="desc">
      <p class="text">
        데이터를 나타낼 수 있는 방식은 여러가지가 있지만, 대표적인 것이 XML이고, 이후 가장 많이 사용되는 것이 아마도 JSON일 것이다.
      </p>

      <h6 class="stit mt30 mb10">XML</h6>
      <p class="text">
      데이터 값 양쪽으로 태그가 있다.<br />
      (HTML을 근본으로 했기에 태그라는 것이 없을 수가 없는데, 그 태그를 줄인다 해도 최소한 표현하려면 양쪽에 몇글자씩이 있어야 한다.)
      </p>

      <h6 class="stit mt30 mb10">JSON</h6>
      <p class="text">
      태그로 표현하기 보다는 중괄호({}) 같은 형식으로 하고, 값을 ','로 나열하기에 그 표현이 간단하다.
      </p>

      <p class="text mt20">
        <strong>JSON</strong>은 자바스크립트의 객체를 만들때 <strong>리터럴(Literal)</strong>과 <strong>프로퍼티(Property)</strong>를 표현한다.
      </p>
    </div>
  </div>

  <div class="group">
    <div class="tit">
      <h6>리터럴(literal) 개념</h6>
    </div>

    <div class="desc">
      <p class="text mb10">
      리터럴(Literal)은 <strong>데이터(값) 그 자체를</strong> 뜻한다.
      변수에 넣는 변하지 않는 데이터를 의미.
      </p>

      <pre><code>30     // 숫자 리터럴
"JSON이란" // 문자열 리터럴
true   // 불리언 리터럴</code></pre>

      <p class="text mt25 mb10"><strong>리터럴 표기법</strong>이란, 변수를 선언함과 동시에 그 값을 지정해주는 표기법</p>
      <pre><code>// 객체리터럴
const a = 1;

// 객체리터럴 방식으로 만든 객체
const obj = { name: 'Sungrae', age: 34 };</code></pre>
      <p class="text mt25">
      const a 에서 a는 상수이고 1은 리터럴이다.<br />
      즉, <strong>상수</strong>는 <strong>메모리 공간</strong>이며 메모리 값을 변경할 수 없다.<br />
      <strong>리터럴</strong>은 메모리 안에 <strong>저장되는 값</strong>이다.
      </p>
  </div>

  <div class="group">
    <div class="tit">
      <h6>프로퍼티(Property) 개념</h6>
    </div>

    <div class="desc">
      <p class="text mb10">
      (사전적 의미) 어떤 사물의 속성, 특성<br />
      (JS에서 의미) 객체 내부의 속성, 특성
      </p>

<pre><code class="language-javascript">//객체를 생성한다.
const obj = { a: 1 };

// Property 접근
obj.a;	// 1

// Property 수정
obj.a = 0;
obj.a;	// 0

// Property 추가
obj.b = 2;
obj.b;	// 2
obj	// {a: 1, b: 2}
</code></pre>
    </div>
  </div>

  <div class="group">
    <div class="tit">
      <h6>문법 - key : value 형식</h6>
    </div>

    <div class="desc">

    <pre><code>{
  "people": [
    {
      "name": "Sungrae",
      "lastName": "Cho"
    },
    {
      "name": "Fernando",
      "lastName": "Morientes"
    },
    {
      "name": "Rocky",
      "lastName": "Balboa"
    } 
  ]
}</code></pre>
      <ul class="textList">
        <li>자바스크립트 객체와 마찬가지로 key : value가 존재할 수 있으며 key값이나 문자열은 항상 쌍따옴표("...")로 표기.</li>
        <li>객체, 배열 등의 표기를 사용 가능.</li>
        <li>자바스크립트 객체처럼 원하는 만큼 중첩시켜 사용 가능.</li>
        <li>JSON형식에서는 null, number, string, array, object, boolean도 사용 가능.</li>
      </ul>
    </div>
  </div>

  <div class="group">
    <div class="tit">
      <h6>JSON 함수를 이용해서 변환하기</h6>
    </div>

    <div class="desc">

    <pre><code class="language-javascript">const myInfo = '{"name":"Sungrae", "lastName":"Cho"}';

// Object로 변환하기
const obj = JSON.parse(myInfo);
console.log(obj);
// {name: 'Sungrae', lastName: 'Cho'} // object 형식

// String 값으로 변환하기
const str = JSON.stringify(obj);
console.log(str);
// {"name":"Sungrae","lastName":"Cho"} // 단순한 text 형식</code></pre>
    </div>
  </div>

</div>

<?php
	include_once PATH."/inc/tail.sub.php";
?>