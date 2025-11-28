<?php
	$_dep = array(3,3,5);
	$_tit = array('DOCS','TIP','SVN 개념');
	$_docs = true;
	include_once "../../../inc/common.php";
	include_once PATH."/inc/top.sub.php";
?>

<div class="topimgType1">
  <img src="./images/svn-img.jpg" />
</div>

<div class="descType1">
  <div class="group pt0">
    <div class="tit">
      <h6>SVN 개념 및 사용 목적</h6>
    </div>

    <div class="desc">

      <p class="text">
      SVN이란 소프트웨어 버전 관리 툴로 소스를 버전별로 관리할 수 있어 개발자가 실수로 소스를 삭제하거나, 수정하기 이전으로 되돌아가야하는 경우 유용하게 사용되는 <strong>형상관리/소스 관리 툴</strong>이다.<br />
      또한, 팀 프로젝트에서 누가 무엇을 어떻게 수정했는지 이력관리가 되기 때문에 코드를 병합하거나 수정된 소스를 추적할 수 있다.
      </p>
      <ul class="textList">
        <li>Revision 별로 파일 백업이 가능합니다. 파일 복원이 가능해지고, 실수가 발생해도 수정이 빨리 이루어 질 수 있습니다.</li>
        <li>개발 버전과 배포 버전을 섞이지 않고 쉽게 관리가 가능합니다. (소스코드 버전관리)</li>
        <li>파일 이름 변경, 이동, 디렉토리 버전 관리도 지원이 가능합니다.</li>
        <li>여러 사용자가 동시에 커밋을 하더라도 충돌이 발생하지 않습니다. (프로젝트 협업 지원)</li>
        <li>한번 커밋이 발생 할때 마다 revision이 올라갑니다. (어느 revision이 어떤 파일을 commit했는지 확인 용이)</li>
        <li>commit시에 자동 로그 기능이 있습니다. (작업 이력 관리)</li>
        <li>서버와 클라이언트 양방향 데이터 전송으로 네트워크 소통량이 최소화됩니다.</li>
        <li>접근이 가능한 개발자는 누구든 쉽게 수정이 가능합니다.</li>
      </ul>
    </div>
  </div>

  <div class="group">

   <div class="tit">
      <h6>SVN의 구조</h6>
    </div>

    <div class="desc">
      <div class="img">
        <img src="./images/svn-img2.png" alt="">
      </div>
      <p class="text">
      형상관리 방식에는 크게 중앙 집중식과 분산 관리식이 있다.<br />
      대표적으로 중앙 집중 관리식이 SVN, 분산 관리식이 Git 이다.<br />
      중앙 집중 관리식인 SVN은 그림과 같이 각 개인의 로컬 PC에서 Commit을 하면 바로 중앙의 원격 저장소에 반영된다.<br />
      모든 사람이 중앙 서버(원격 저장소)에 있는 같은 자료를 받아오고(Update) 가장 최신화된 상태로 아주 직관적으로 관리를 할 수 있다.<br />
      다만, 하나의 파일을 동시에 수정하고 Commit을 하는 경우, 충돌이 되거나 덮어 씌워지는 등의 문제가 생기기 좋은 형태이므로
      실무에서는 사용하는 파일을 단체 메신저 등에서 사용 유무를 언급하고 수정.
      또한, 다른 사람이 그 파일을 추가적으로 수정하게 되면, 해당 파일을 Update 후 갱신 완료시킨 다음 수정을 하게 되는 Process를 가진다.<br />
      중앙 집중 관리식이므로, 중앙의 원격 저장소가 에러가 생기거나 문제가 발생할 시에는 모든 작업이 마비가 되어 버리는 것이 SVN이다.<br />
      이러한 부분을 감안하고도 무료 및 직관적인 부분이 장점이라는 점에서 실무에서는 현재 널리 사용되고 있다.
      
      </p>
    </div>
  </div>

  <div class="group">
    <div class="tit">
      <h6>SVN vs GIT 비교</h6>
    </div>

    <div class="desc">
      <h6 class="stit">SVN</h6>
      <ul class="textList mt15 mb30">
        <li>SVN은 보통 대부분의 기능을 완성해 놓고 소스를 중앙 저장소에 commit</li>
        <li>commit은 중앙 저장소에 해당 기능을 공개한다는 의미</li>
        <li>(GIT 과 가장 큰 차이점) 개발자가 자신만의 version history를 가질 수 없다. 그렇기 때문에 local History를 이용하긴 하지만 일시적이며, <br class="__pc"/>본인이 몇 일 전 까지 작업했던 내역을 확인할 수 있지만 버전 관리가 되진 않음.</li>
        <li>commit한 내용에 실수가 있을 시에 다른 개발자에게 바로 영향을 미치게 되는 단점이 있음.</li>
      </ul>

      <h6 class="stit">GIT</h6>
      <ul class="textList mt15">
        <li>(SVN 과 가장 큰 차이점) 반면, git은 개발자가 자신만의 commit history를 가질 수 있고, 개발자와 서버의 저장소는 독립적으로 관리가 가능</li>
        <li>commit한 내용에 실수가 있더라도 바로 서버에 영향을 미치지 않음.</li>
        <li>개발자는 마음대로 commit(push)하다가 자신이 원하는 순간에 서버에 변경 내역(commit history)을 보낼 수 있으며,  <br class="__pc"/>서버의 통합 관리자는 관리자가 원하는 순간에 각 개발자의 commit history를 가져올 수 있음.</li>
      </ul>

      <span class="bspan mt15">이렇게 git은 서버 저장소와 개발자 저장소가 독립적으로 commit history를 가져갈 수 있기 때문에 매우 유연한 방식으로 소스를 운영할 수 있으며, 이러한 유연성이 git의 가장 큰 장점. </span>

    </div>
  </div>

</div>

<?php
	include_once PATH."/inc/tail.sub.php";
?>