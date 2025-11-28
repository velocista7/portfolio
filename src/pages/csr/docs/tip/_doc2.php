<?php
	$_dep = array(3,3,2);
	$_tit = array('DOCS','TIP','Git 사용법 A to Z');
	$_docs = true;
	include_once "../../../inc/common.php";
	include_once PATH."/inc/top.sub.php";
?>

<div class="topimgType1">
  <img src="./images/git_atoz_img1.jfif" />
</div>

<div class="quickType1">  
  <div class="tit">
    <h5>[바로가기 버튼]</h5>
  </div>
  
  <ul class="linklist1">
    <li><a href="#first" rel="noopener">1. Git 초기화 설정으로 Git 버전관리하기</a></li>
    <li><a href="#second" rel="noopener">2. GitHub에서 저장소 만들어서 프로젝트 Git 연결하기</a></li>
    <li><a href="#third" rel="noopener">3. 작업한 프로젝트들을 버전으로 gitHub에 올리는 방법</a></li>
    <li><a href="#fourth" rel="noopener">4. 브랜치 만들기</a></li>
    <li><a href="#fifth" rel="noopener">5. 깃 저장소(Git Hub)에 업로드</a></li>
    <li><a href="#sixth" rel="noopener">6. 깃과 깃허브 이용해서 다른 컴퓨터에 작업했던 내역 불러오기</a></li>
    <li><a href="#seventh" rel="noopener">7. 원격 저장소의 다른 브랜치 들고오기</a></li>
    <li><a href="#eighth" rel="noopener">8. 다른곳에서 작업했던 영역을 다시 Pull로 변경된 부분만 가져오기</a></li>
    <li><a href="#ninth" rel="noopener">9. 다른 브랜치에 작업한것을 마스터에 병합하기(merge)</a></li>
    <li><a href="#tenth" rel="noopener">10. 버전관리 할 필요없는 파일이 작업폴더에 있을때</a></li>
  </ul>
</div>

<div class="descType1">
  <div id="first" class="group">
    <div class="tit">
      <h6>1. Git 초기화 설정으로 Git 버전관리하기</h6>
    </div>

    <div class="desc">

      <span class="bspan">1) 관리하려는 폴더를 git 초기화 설정으로 git 버전관리 상태로 만들기.</span>
      <p data-ke-size="size16">- 사용자(본인)가 버전관리 하려는 폴더를 git으로 관리하겠다는 의미.</p>
      <br />
      <p data-ke-size="size16"><b><span style="color: #8a3db6;">git init</span></b></p>
      <br />
      <div class="img">
        <img src="./images/git_atoz_img2.png" />
      </div>
      <p></p>
      <p data-ke-size="size16">터미널에 명령어를 입력하면 내가 지정한 폴더내에 반투명한 git 폴더가 생긴다.</p>
      <p data-ke-size="size16">이 폴더를 git으로 관리 하겠다고 설정하는 것이다.</p>
      <br />
      <br />
      <br />
      <span class="bspan">2) 현재 프로젝트가 어떻게 관리되고 있는지 확인하는 방법. </span>
      <p data-ke-size="size16"><span style="color: #8a3db6;"><b>git status</b></span></p>
      <br />
      <p></p>
      <div class="img">
        <img src="./images/git_atoz_img3.png" />
      </div>
      <p></p>
      <br />
      <p data-ke-size="size16"><span style="background-color: #f6e199;"><b>* Untracked Files </b></span></p>
      <p data-ke-size="size16">- git status 명령어 입력하면 파일은 만들어놨는데 git이 추적할 수 없다는 의미.</p>
      <br />
      <br />
      <br />
      <span class="bspan">3) 스테이징 - 폴더&amp;파일들을 git이 추적할 수 있게 올리는 것을 의미.</span>
      <p data-ke-size="size16"><span style="color: #8a3db6;"><b>git add .</b></span></p>
      <p data-ke-size="size16"><span style="background-color: #f6e199;">* git add .</span> 에서 '<span style="background-color: #f6e199;"> .</span> '이 모든 파일을 의미한다.</p>
      <br />
      <br />
      <br />
      <span class="bspan">4) 스테이징 후, 현재 파일 상태들이 어떤지 확인가능하다.</span>
      <p data-ke-size="size16"><span style="color: #8a3db6;"><b>git status </b></span></p>
      <br />
      <p></p>
      <div class="img">
        <img src="./images/git_atoz_img4.png" />
      </div>
      <p></p>
      <p data-ke-size="size16">아까와 다르게 보인다. 스테이징을 했기때문이다.</p>
      <br />
      <p data-ke-size="size16"><span style="background-color: #f6e199;">* Changes to be committed</span></p>
      <p data-ke-size="size16">- 파일들이 모두 스테이징에 올라가서 커밋할 준비가 되었다는 의미.</p>


    </div>
  </div>

  <div id="second" class="group">
    <div class="tit">
      <h6>2. GitHub에서 저장소 만들어서 프로젝트 Git 연결하기</h6>
    </div>

    <div class="desc">
      <span class="bspan"> 1) 깃허브에서 뉴 레포지토리를 생성해 새로운 깃 저장소를 만든다.</span>
      <br />
      <p></p>
      <div class="img">
        <img src="./images/git_atoz_img5.jfif" />
      </div>
      <p></p>
      <br />
      <br />
      <br />
      <span class="bspan">2) 로컬폴더(VScode)와 GitHub 저장소를 연결시키기 전에 ID랑 Mail 등록하기.</span>
      <br /><br />
      <p data-ke-size="size16">우선, VScode로 돌아와서 터미널에 gitHub 계정이랑 이메일 주소를 등록시킨다.</p>
      <p data-ke-size="size16">- 이것을 전역에 등록한다고 한다.</p>
      <br />
      <p data-ke-size="size16">* 깃허브 ID 값</p>
      <p data-ke-size="size16"><span style="color: #8a3db6;"><b>git config --global user.name ID값</b></span></p>
      <br />
      <p data-ke-size="size16">* 깃허브 이메일 값</p>
      <p data-ke-size="size16"><span style="color: #8a3db6;"><b>git config --global user.email email@gmail.com</b></span></p>
      <br />
      <p data-ke-size="size16"><span style="background-color: #f6e199;">** --global이란?</span></p>
      <p data-ke-size="size16">- <span style="color: #8a3db6;"><b>시스템 전역</b></span>에 id나 이메일값을 등록하겠다는 의미</p>
      <br />
      <br />
      <br />
      <p></p>
      <div class="img">
        <img src="./images/git_atoz_img6.jfif" />
      </div>
      <p></p>
      <br />
      <span class="bspan">3) 깃 저장소를 VScode에 연결한다.</span>
      <p data-ke-size="size16"><span style="color: #8a3db6;"><b>git remote add origin 깃저장소</b></span></p>
      <p data-ke-size="size16">- 빨간박스로 표시된 걸 눌러서 복사한 경로를 깃저장소에 넣기</p>
    </div>
  </div>

  <div id="third" class="group">
    <div class="tit">
      <h6>3. 작업한 프로젝트들을 버전으로 gitHub에 올리는 방법</h6>
    </div>

    <div class="desc">
      <span class="bspan">1) commit 하기</span>
      <p data-ke-size="size16"><b><span style="color: #8a3db6;">git commit -m "메세지 내용"</span></b></p>
      <br />
      <p data-ke-size="size16">* -m : 메세지를 남기겠다는 의미</p>
      <p data-ke-size="size16">작업내역은 구체적으로 누구나 알아보기 쉽게 남겨놓는다.</p>
      <br />
      <br />
      <br />
      <span class="bspan">2) commit 잘 작동했나 확인하기</span>
      <p data-ke-size="size16"><b><span style="color: #8a3db6;">git log</span></b></p>
      <br />
      <p></p>
      <div class="img">
        <img src="./images/git_atoz_img7.png" />
      </div>
      <p></p>
      <p data-ke-size="size16">commit 다음 글자는 커밋한 ID 값이다.</p>
      <p data-ke-size="size16">과거에 작업했던 작업으로 돌아가고싶을때 이 ID값을 사용해서 버전 이동이 가능하다.</p>
      <p data-ke-size="size16">아쿠아박스 생성은 커밋한 메세지 내용</p>
      <br />
      <br />
      <br />
      <h6 class="stit">3-1. git 시공간(작업내역) 여행하는 방법</h6>
      <div class="moreless-content">
      <br />
      <p data-ke-size="size16"><span style="background-color: #f6e199;">● 예전에 작업했던 commit으로 되돌아가고싶을때</span></p>
      <p data-ke-size="size16"><b>git checkout 커밋ID 붙여넣기</b></p>
      <br />
      <br />
      <br />
      <p data-ke-size="size16"><span style="background-color: #f6e199;"><span style="background-color: #f6e199;">● </span>과거로 왔는데 다시 미래(최신버전)으로 가고싶다. 근데 최신버전은 커밋 ID값이 없다. 이 경우 어떻게 최신버전으로 가는가?</span></p>
      <p data-ke-size="size16"><b>git checkout master</b></p>
    
      <br />
      <p data-ke-size="size16">Commit 상태에서 과거로 돌아가면 과거 커밋에서는 수정을 못한다. </p>
      <p data-ke-size="size16">만약 수정하고싶으면 새 브랜치(branch)를 만들어서 작업 가능하다. 그럼, 브랜치를 만들어보자.</p>

    </div>
  </div>

  <div id="fouth" class="group">
    <div class="tit">
      <h6>4. 브랜치 만들기</h6>
    </div>

    <div class="desc">
      <span class="bspan">1) 수정하고 싶은 과거 커밋으로 돌아가자. </span>
      <p data-ke-size="size16"><b><span style="color: #8a3db6;">git checkout 커밋ID</span></b></p>
      <br />
      <br />
      <br />
      <span class="bspan">2) 과거에서 복사본을 만든다</span>
      <p data-ke-size="size16"><b><span style="color: #8a3db6;">git branch 뉴 브랜치 명</span></b></p>
      <br />
      <br />
      <br />
      <p data-ke-size="size16">* 브랜치 잘 작동했는지 확인하려면</p>
      <p data-ke-size="size16"><span style="color: #8a3db6;"><b>git branch -v</b></span></p>
      <br />
      <p></p>
      <div class="img">
        <img src="./images/git_atoz_img8.png" />
      </div>
      <br /><br />
      <p data-ke-size="size16">위에 이미지 처럼 aqua(new branch)랑 master, 2개의 브랜치 생성</p>
      <p data-ke-size="size16"><b><span style="color: #409d00;">* 초록색</span></b>으로 ' <b><span style="color: #409d00;">*</span></b> '표시와 있는 부분은 <span style="color: #409d00;">현재 위치하고 있는 파일</span>을 가르키는것.</p>
      <br />
      <br />
      <br />
      <p data-ke-size="size16"><span style="background-color: #f6e199;">현재 위치가 아쿠아 / 마스터가 아닌이유</span>는 main 브랜치가 master이고, 현재는 실제로 마스터에 있지만 해당 브랜치에서 아쿠아 브랜치 시점으로 이동한것. 즉, <span style="background-color: #f6e199;"><b>현재 마스터 브랜친데 아쿠아 브랜치 시점이다.</b></span></p>
      <p data-ke-size="size16">그래서 해당 브랜치로 직접 이동해야지 포인터가 아쿠아 브랜치로 이동된다.</p>
      <br />
      <br />
      <br />
      <span class="bspan">3) 아쿠아 브랜치로 완전 이동하고싶을때?</span>
      <p data-ke-size="size16"><b><span style="color: #8a3db6;">git checkout aqua(이동하고픈 브랜치명)</span></b></p><br />
      <p></p>
      <div class="img">
        <img src="./images/git_atoz_img9.png" />
      </div>
      <br /><br />
      <p data-ke-size="size16">아쿠아 브랜치로 이동했다고 git  branch -v 통해서 확인가능하다.</p>
    </div>
  </div>

  <div id="fifth" class="group">
    <div class="tit">
      <h6>5. 깃 저장소(Git Hub)에 업로드</h6>
    </div>

    <div class="desc">
      <p data-ke-size="size16">위에 메모한것들 처럼 브랜치를 2개 만들었다치자. 그러면 branch가 아쿠아와 마스터 두개가 있다.</p>
      <br />
      <br />
      <br />
      <span class="bspan">1) origin 에 master을 올리고 싶을때</span>
      <p data-ke-size="size16"><b><span style="color: #8a3db6;">git push origin master</span></b></p>
      <p data-ke-size="size16"><span style="background-color: #f6e199;">* origin (원격 저장소라는 의미)</span></p>
      <p data-ke-size="size16">이렇게 push하고나서 본인이 만든 깃허브 저장소를 새로고침 하면 작업한 프로젝트가 올라간다.</p>
      <br />
      <br />
      <br />
      <span class="bspan">2) 아쿠아 브랜치를 올리고 싶을때</span>
      <p data-ke-size="size16"><b><span style="color: #8a3db6;">git push origin aqua</span></b></p>
      <br />
      <br />
      <br />
      <span class="bspan">3) 브랜치가 다양할때 한꺼번에 올리고 싶을때</span>
      <p data-ke-size="size16"><b><span style="color: #8a3db6;">git push origin --all</span></b></p>
      <p data-ke-size="size16"><span style="background-color: #f6e199;">* -all </span></p>
      <p data-ke-size="size16">- 현재 내 로컬작업에 등록된 모든 브랜치를 한꺼번에 다 올린다는 의미.</p>
    </div>
  </div>

  <div id="sixth" class="group">
    <div class="tit">
      <h6>6. 깃과 깃허브 이용해서 다른 컴퓨터에 작업했던 내역 불러오기</h6>
    </div>

    <div class="desc">
      <p data-ke-size="size16">1)  작업할 폴더 만들기.</p>
      <br />
      <p data-ke-size="size16">2) 깃 저장소 git Hub에 간다.</p>
      <p></p>
      <div class="img">
        <img src="./images/git_atoz_img10.png" />
      </div>
      <p></p>
      <br />
      <p data-ke-size="size16">코드 버튼을 눌러 아래 clone 주소 넘버를 복사한다.</p>
      <br />
      <br />
      <p data-ke-size="size16">3) 터미널에서 git clone 복사한 주소 넣기</p>
      <br />
      <p data-ke-size="size16">4) 만들어 놓은 1번 폴더에 git Hub에 올려져있던 프로젝트가 불러와졌다.</p>
      <br />
      <br />
      <p data-ke-size="size16">** clone을 하면 master 브랜치만 불러와서 다른 브랜치를 볼수가 없다.</p>
      <p data-ke-size="size16">다른 브랜치 모든 파일을 보고싶다면</p>
      <p data-ke-size="size16">git branch -a 입력 후</p>
      <p data-ke-size="size16">원격 저장소에 있는 모든 브랜치를 확인할 수 있다.</p>
      <p></p>
      <div class="img">
        <img src="./images/git_atoz_img11.png" />
      </div>
    </div>
  </div>


  <div id="seventh" class="group">
    <div class="tit">
      <h6>7. 원격 저장소의 다른 브랜치 들고오기</h6>
    </div>

    <div class="desc">
      <p data-ke-size="size16">1. 아쿠아 브랜치 활성화 시키기</p>
      <p data-ke-size="size16">git checkout origin/aqua</p>
      <br />
      <p data-ke-size="size16">2. 아쿠아로 이동하기</p>
      <p data-ke-size="size16">git branch aqua</p>
      <br />
      <p data-ke-size="size16">3. git branch -v로 </p>
      <p></p>
      <div class="img">
        <img src="./images/git_atoz_img12.png" />
      </div>
      <p></p>
      <br />
      <p data-ke-size="size16">아직 아쿠아 브랜치로 이동된것은 아니다.</p>
      <br />
      <br />
      <p data-ke-size="size16">4. 체크아웃으로 원하는 브랜치로 이동해야한다.</p>
      <br />
      <p data-ke-size="size16">git checkout aqua</p>
      <p></p>
      <div class="img">
        <img src="./images/git_atoz_img13.png" />
      </div>
      <p></p>
      <p data-ke-size="size16">브랜치로 이동 확인 가능</p>
      <br />
      <br />
      <p data-ke-size="size16">5. 다시 master로 이동하고싶을때</p>
      <p data-ke-size="size16">git checkout master</p>
    </div>
  </div>

  <div id="eighth" class="group">
    <div class="tit">
      <h6>8. 다른곳에서 작업했던 영역을 다시 Pull로 변경된 부분만 가져오기</h6>
    </div>

    <div class="desc">
      <p data-ke-size="size16">1. 다른 작업자가 수정하거나 merge (병합)했던 내용을 다시 가져올때</p>
      <p data-ke-size="size16">git pull origin</p>
      <br />
      <p data-ke-size="size16">2. git log로 확인하면 수정된 변경 사항들을 확인 할 수 있다.</p>
    </div>
  </div>


  <div id="ninth" class="group">
    <div class="tit">
      <h6>9. 다른 브랜치에 작업한것을 마스터에 병합하기(merge)</h6>
    </div>

    <div class="desc">
      <p data-ke-size="size16">현재 마스터 브랜치에 있을때 </p>
      <br />
      <p data-ke-size="size16">1. git merge sub</p>
      <p data-ke-size="size16">: sub 브랜치를 마스터 브랜치에 병합하기</p>
      <br />
      <p data-ke-size="size16">* 같은 영역에 수정사항 있을때는 충돌이 일어난다.</p>
      <p></p>
      <div class="img">
        <img src="./images/git_atoz_img14.png" />
      </div>
      <p></p>
      <p data-ke-size="size16">이럴땐 필요없는 부분은 지우기</p>
      <br />
      <p data-ke-size="size16">2. commit 하고 push하기</p>
    </div>
  </div>

  <div id="tenth" class="group">
    <div class="tit">
      <h6>10. 버전관리 할 필요없는 파일이 작업폴더에 있을때</h6>
    </div>

    <div class="desc">
      <p data-ke-size="size16">1) .gitignore 파일을 만든다.</p>
      <br />
      <p data-ke-size="size16">2) 파일 내에 필요없는 폴더이름 넣기</p>
      <p data-ke-size="size16">ex) </p>
      <p data-ke-size="size16">일반 확장명 파일 경우 : useless.txt</p>
      <p data-ke-size="size16">폴더일 경우: /text</p>
    </div>
  </div>

</div>

<?php
	include_once PATH."/inc/tail.sub.php";
?>