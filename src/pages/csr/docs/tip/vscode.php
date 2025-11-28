<?php
	$_dep = array(3,3,99);
	$_tit = array('DOCS','TIP','VScode 단축키');
	$_docs = true;
  $_hijs = true;
	include_once "../../../inc/common.php";
	include_once PATH."/inc/top.sub.php";
?>

<table class="tableType1">
  <tbody>
    <tr>
      <td class="color">한 줄 주석</td>
      <td>Ctrl + /</td>
      <td></td>
    </tr>
    <tr>
      <td>부분 주석</td>
      <td>Alt + Shift + A</td>
      <td></td>
    </tr>
    <tr>
      <td class="color">터미널 열기</td>
      <td>Ctrl + Shift + `</td>
      <td></td>
    </tr>
    <tr>
      <td class="color">한 줄 아래 복사</td>
      <td>Alt + Shift + ↓</td>
      <td><strong>아주 유용함★</strong></td>
    </tr>
    <tr>
      <td class="color">한 줄 삭제</td>
      <td>Ctrl + Shift + K</td>
      <td></td>
    </tr>
    <tr>
      <td class="color">한 줄 아래 커서 이동(커서 끝에 없어도 됨)</td>
      <td>Ctrl + Enter</td>
      <td></td>
    </tr>
    <tr>
      <td class="color">현재 줄 위아래로 이동</td>
      <td>Alt + ↓</td>
      <td></td>
    </tr>
    <tr>
      <td>줄 위로 선택</td>
      <td>Ctrl + Shift + ↑</td>
      <td></td>
    </tr>
    <tr>
      <td>줄 아래로 선택</td>
      <td>Ctrl + Shift + ↓</td>
      <td></td>
    </tr>

    <tr>
      <td>부모 요소 감싸기</td>
      <td>Alt + W</td>
      <td>
      코드를 감싸고 Alt+W를 누르면 <br class="__pc" />
      감싼 코드의 부모영역으로 코드가 생성됨.<br />
        <strong>아주 유용함★</strong>
<pre class="tbl language=html"><code>&#x3C;p&#x3E;  //&#xC0C8;&#xB85C; &#xC0DD;&#xC131;&#xB41C; &#xBD80;&#xBAA8;&#xC601;&#xC5ED;
    &#x3C;div&#x3E;&#x3C;/div&#x3E; //&#xAC10;&#xC2FC;&#xC601;&#xC5ED;
&#x3C;/p&#x3E;
</code></pre>
        * 익스텐션에서 Htmltagwrap가 설치되어야 함
        
      </td>
    </tr>
    <tr>
      <td class="color">단어 선택</td>
      <td>Ctrl + D</td>
      <td></td>
    </tr>
    <tr>
      <td>다중 선택</td>
      <td>Alt + Drag</td>
      <td></td>
    </tr>
    <tr>
      <td>다중 라인 선택</td>
      <td>Alt + Shift + Drag</td>
      <td>여러 라인에 똑같은 텍스트 입력 시 유용함</td>
    </tr>
    <tr>
      <td>검색</td>
      <td>Ctrl + Shift + P</td>
      <td></td>
    </tr>
    <tr>
      <td class="color">라이브 서버 열기</td>
      <td>Alt + L, Alt + O</td>
      <td></td>
    </tr>
    <tr>
      <td>들여쓰기 정렬</td>
      <td>
      Shift + Alt + F<br />
      Ctrl + K, Ctrl + F
      </td>
      <td></td>
    </tr>
    <tr>
      <td>에디터 글씨 크게 / 작게</td>
      <td>Ctrl + '+' / Ctrl + '-'</td>
      <td></td>
    </tr>
    <tr>
      <td>코드 입력창 글씨만 크게/작게</td>
      <td>Ctrl + 마우스 휠</td>
      <td></td>
    </tr>
    <tr>
      <td>색테마 변경</td>
      <td>Ctrl+K, Ctrl+T</td>
      <td></td>
    </tr>
    <tr>
      <td>들여쓰기</td>
      <td>Tab</td>
      <td></td>
    </tr>
    <tr>
      <td>내어쓰기</td>
      <td>Shift + Tab</td>
      <td></td>
    </tr>
    <tr>
      <td>그룹 열기 / 닫기</td>
      <td>Ctrl + Shift [, ]</td>
      <td></td>
    </tr>
    <tr>
      <td class="color">괄호찾기</td>
      <td>Ctrl + Shift + \</td>
      <td></td>
    </tr>
    <tr>
      <td class="color">이전에 보고있던 파일위치로 이동</td>
      <td>Alt + 방향키(←,→)</td>
      <td></td>
    </tr>
    <tr>
      <td>파일비교</td>
      <td>파일 여러개 선택 후 마우스 우클릭-<br />Compare Selected</td>
      <td></td>
    </tr>
    <tr>
      <td>href=" " 경로표시</td>
      <td>Ctrl + Space</td>
      <td></td>
    </tr>
  </tbody>
</table>

<?php
	include_once PATH."/inc/tail.sub.php";
?>