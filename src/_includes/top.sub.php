
<body class="sub">
    <?if($_hijs){?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/styles/atom-one-dark.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/highlight.min.js"></script>
    <?}?>
    <?if($cursorCustom){?>
    <div class="cursor cursorCustom pointed">
      <div class="inbox"></div>
    </div>
    <?}?>
  <div id="wrap">
      <?php include_once PATH."/inc/head.php"; ?>

      <section id="sub">

        <?if($_docs){?>
        <div id="docsWrap">
          <aside id="aside">
            <div class="title">
              <h3><?=$_tit[0]?></h3>
            </div>
            <ul class="list">
              <li class="<?if($_dep[1]=="1"){?>active<?}?>">
                <a href="<?=DIR?>/_csr/docs/setting/html.php">세팅 Guide</a>
                <ul>
                  <li class="<?if($_dep[1]=="1"&&$_dep[2]=="1"){?>active<?}?>"><a href="<?=DIR?>/_csr/docs/setting/html.php">HTML</a></li>
                  <li class="<?if($_dep[1]=="1"&&$_dep[2]=="2"){?>active<?}?>"><a href="<?=DIR?>/_csr/docs/setting/php.php">PHP</a></li>
                  <li class="<?if($_dep[1]=="1"&&$_dep[2]=="3"){?>active<?}?>"><a href="<?=DIR?>/_csr/docs/setting/vue.php">VUE</a></li>
                </ul>
              </li>
              <li class="<?if($_dep[1]=="2"){?>active<?}?>">
                <a href="<?=DIR?>/_csr/docs/coding_guide/basic.php">코딩 Guide</a>
                <ul>
                  <li class="<?if($_dep[1]=="2"&&$_dep[2]=="1"){?>active<?}?>"><a href="<?=DIR?>/_csr/docs/coding_guide/basic.php">기본 Guide</a></li>
                  <li class="<?if($_dep[1]=="2"&&$_dep[2]=="2"){?>active<?}?>"><a href="<?=DIR?>/_csr/docs/coding_guide/php.php">PHP(변수 설명 등)</a></li>
                  <li class="<?if($_dep[1]=="2"&&$_dep[2]=="3"){?>active<?}?>"><a href="#">VUE(준비중)</a></li>
                </ul>
              </li>
              <li class="<?if($_dep[1]=="3"){?>active<?}?>">
                <a href="<?=DIR?>/_csr/docs/tip/vscode.php">TIP</a>
                <ul>
                  <li class="<?if($_dep[1]=="3"&&$_dep[2]=="99"){?>active<?}?>"><a href="<?=DIR?>/_csr/docs/tip/vscode.php">VScode 단축키</a></li>
                  <li class="<?if($_dep[1]=="3"&&$_dep[2]=="9"){?>active<?}?>"><a href="<?=DIR?>/_csr/docs/tip/_doc9.php">웹서비스 개요</a></li>
                  <li class="<?if($_dep[1]=="3"&&$_dep[2]=="10"){?>active<?}?>"><a href="<?=DIR?>/_csr/docs/tip/_doc10.php">웹서버와 WAS 차이점</a></li>
                  <li class="<?if($_dep[1]=="3"&&$_dep[2]=="1"){?>active<?}?>"><a href="<?=DIR?>/_csr/docs/tip/_doc1.php">클라이언트 사이드와 <br class="__pc" /> 서버 사이드의 개념과 차이점</a></li>
                  <li class="<?if($_dep[1]=="3"&&$_dep[2]=="2"){?>active<?}?>"><a href="<?=DIR?>/_csr/docs/tip/_doc2.php">Git 사용법 A to Z</a></li>
                  <li class="<?if($_dep[1]=="3"&&$_dep[2]=="3"){?>active<?}?>"><a href="<?=DIR?>/_csr/docs/tip/_doc3.php">JSON(JavaScript Object Notation) 개념</a></li>
                  <li class="<?if($_dep[1]=="3"&&$_dep[2]=="4"){?>active<?}?>"><a href="<?=DIR?>/_csr/docs/tip/_doc4.php">SSL [Secure Sockets Layer] - 정보 계층 보안</a></li>
                  <li class="<?if($_dep[1]=="3"&&$_dep[2]=="5"){?>active<?}?>"><a href="<?=DIR?>/_csr/docs/tip/_doc5.php">SVN 개념</a></li>
                  <li class="<?if($_dep[1]=="3"&&$_dep[2]=="6"){?>active<?}?>"><a href="<?=DIR?>/_csr/docs/tip/_doc6.php">폼(form)의 이해 / <br class="__pc"/>데이터 처리 과정</a></li>
                  <li class="<?if($_dep[1]=="3"&&$_dep[2]=="7"){?>active<?}?>"><a href="<?=DIR?>/_csr/docs/tip/_doc7.php">아파치(Apache) 개념</a></li>
                  <li class="<?if($_dep[1]=="3"&&$_dep[2]=="8"){?>active<?}?>"><a href="<?=DIR?>/_csr/docs/tip/_doc8.php">엔진엑스(Nginx) 개념</a></li>
                  <li class="<?if($_dep[1]=="3"&&$_dep[2]=="11"){?>active<?}?>"><a href="<?=DIR?>/_csr/docs/tip/_doc11.php">ChatGPT 코딩 활용</a></li>
                </ul>
              </li>
            </ul>
          </aside>
          <div id="view">
            <div class="docsTitle">
              <h4>
                <?if($_tit[2]){?>
                  <?=$_tit[2]?>
                <?}else{?>
                  <?=$_tit[1]?>
                <?}?>
              </h4>
            </div>
            <div id="content">
        <?}else{?>
          
        <div class="subVis">
          <div class="text">
            <h2><?=$_tit[0]?></h2>
            <?if($_txt[0]){?>
            <p><?=$_txt[0]?></p>
            <?}?>
          </div>
        </div>

        <div class="lnbWrap">
            <ul id="lnb"></ul>
        </div>					 

        <!-- navigator -->
        <?php include_once PATH."/inc/navigator.inc.php"; ?>

              <!-- start content -->
        <div id="content" <?if($full){?>full<?}?>>
        <?}?>