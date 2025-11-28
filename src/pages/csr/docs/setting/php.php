<?php
	$_dep = array(3,1,2);
	$_tit = array('DOCS','세팅 가이드');
  $_docs = true;
	include_once "../../../inc/common.php";
	include_once PATH."/inc/top.sub.php";
?>


<div class="groupWrap setting">

  <section class="group">
    <div class="title">
      <h5>CSR GitHub 디렉토리</h5>
    </div>
    <div class="codeBox">
      <code id="myGit">git clone https://github.com/velocista7/php_setting.git</code>
      <button class="button" onclick="textCopy('myGit');return false;">copy</button>
    </div>
  </section>

  <section class="group">
    <div class="title">
      <h5>CSR php Setting TREE</h5>
    </div>
    <div class="treeBox">
      <ul class="tree">
        <li>
          <input type="checkbox" checked="checked" id="c1" />
          <label class="tree_label" for="c1">php_setting</label>
          <ul>
            <li>
              <input type="checkbox" checked="checked" id="c2" />
              <label for="c2" class="tree_label">assets</label>
              <ul>
                <li>
                  <input type="checkbox" checked="checked" id="c3" />
                  <label for="c3" class="tree_label">css</label>
                  <ul>
                    <li>
                      <input type="checkbox" checked="checked" id="c4" />
                      <label for="c3" class="tree_label">lib<em>라이브러리에 필요한 css</em></label>
                      <ul>
                        <li><span class="tree_label">library.css</span></li>
                      </ul>
                    </li>
                    <li><span class="tree_label">common.css<em>초기화</em></span></li>
                    <li><span class="tree_label">style.css<em>전반적인 모든 css</em></span></li>
                    <li><span class="tree_label">respond.css<em>반응형</em></span></li>
                    <li><span class="tree_label">fonts.css<em>웹폰트</em></span></li>
                  </ul>
                </li>
                <li><span class="tree_label">favicon</span></li>
                <li><span class="tree_label">fonts</span></li>
                <li><span class="tree_label">images</span></li>
              </ul>
            </li>
            <li>
              <input type="checkbox" checked="checked"  id="c5" />
              <label for="c5" class="tree_label">guide<em>작업 현황 코딩 리스트</em></label>
              <ul>
                <li><span class="tree_label">condingList.css</span></li>
                <li><span class="tree_label">condingList.html</span></li>
                <li><span class="tree_label">condingList.js</span></li>
                <li><span class="tree_label">condingList.json</span></li>
                <li><span class="tree_label">component.html</span></li>
                <li><span class="tree_label">foundation.html</span></li>
                <li><span class="tree_label">guide.css</span></li>                
              </ul>
            </li>
            <li>
              <input type="checkbox" checked="checked"  id="c6" />
              <label for="c6" class="tree_label">js</label>
              <ul>
                <li>
                  <input type="checkbox" checked="checked" id="c7" />
                  <label for="c7" class="tree_label">lib<em>라이브러리</em></label>
                  <ul>
                  <li><span class="tree_label">jquery-3.6.4.min.js</span></li>
                  </ul>
                </li>
                <li><span class="tree_label">layout.js <em>공통 레이아웃 구조 (header, lnb, footer 등)</em></span></li>
                <li><span class="tree_label">component.js <em>컴포넌트 (input, button, popup 등)</em></span></li>
                <li><span class="tree_label">pages.js <em>메인 제외 페이지별 스크립트</em></span></li>
                <li><span class="tree_label">main.js <em>메인페이지 스크립트</em></span></li>                
              </ul>
            </li>
            <li>
              <input type="checkbox" checked="checked"  id="c8" />
              <label for="c8" class="tree_label">pages</label>
              <ul>
                <li><span class="tree_label">PAGES_0000.php <em>코딩 리스트와 링크 연동을 위해 id 일치시켜야 함 ex)WBS_ID 'PAGES_0000'</em></span></li>
              </ul>
            </li>
            <li><span class="tree_label">index.php <em>메인페이지</em></span></li>
          </ul>          
        </li>
      </ul>
    </div>
  </section>
  
</div>


<?php
	include_once PATH."/inc/tail.sub.php";
?>