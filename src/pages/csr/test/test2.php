<?php
	$_dep = array(2,1);
	$_tit = array('WORKS','테스트');
	//$_txt = array('작업소스 정리');
	include_once "../../inc/common.php";
	include_once PATH."/inc/top.sub.php";
?>
<div id="_device_pc"></div>
<div id="_device_ta"></div>
<div id="_device_mo"></div>

<style>
div{dba_insert}
</style>

<div class="worksTitle">
	<h4><?=$_tit[1]?></h4>
</div>

<svg xmlns="http://www.w3.org/2000/svg" width="91" height="63" viewBox="0 0 91 63" fill="none">
  <g clip-path="url(#clip0_744_6269)">
    <path d="M90.0185 63H0.981449C0.439199 63 0 62.5651 0 62.0281V0.971922C0 0.434935 0.439199 0 0.981449 0H90.0185C90.5608 0 91 0.434935 91 0.971922V62.0281C91 62.5651 90.5608 63 90.0185 63ZM1.9629 61.0562H89.0371V1.94384H1.9629V61.0562Z" fill="#484848"/>
    <path d="M84.4047 56.9936H0.98145C0.439199 56.9936 0 56.5587 0 56.0217C0 55.4847 0.439199 55.0498 0.98145 55.0498H84.4047C84.9469 55.0498 85.3861 55.4847 85.3861 56.0217C85.3861 56.5587 84.9469 56.9936 84.4047 56.9936Z" fill="#484848"/>
    <path d="M67.3449 44.8151C59.8074 44.8151 53.6758 38.743 53.6758 31.2786C53.6758 29.3518 54.0757 27.4906 54.8658 25.746C55.04 25.362 55.4939 25.192 55.8791 25.3645C56.2668 25.537 56.4386 25.9865 56.2644 26.368C55.5626 27.9158 55.2093 29.568 55.2093 31.2786C55.2093 37.9047 60.6539 43.2964 67.3449 43.2964C74.036 43.2964 79.4805 37.9047 79.4805 31.2786C79.4805 24.6525 74.4482 19.6787 68.1129 19.2851V31.5265C68.1129 31.9468 67.7694 32.287 67.3449 32.287C66.9204 32.287 66.5769 31.9468 66.5769 31.5265V18.5003C66.5769 18.0799 66.9204 17.7397 67.3449 17.7397C74.8825 17.7397 81.0141 23.8118 81.0141 31.2762C81.0141 38.7406 74.8825 44.8126 67.3449 44.8126V44.8151Z" fill="#7C43F4"/>
    <path d="M64.0083 27.5831C63.8758 27.5831 63.7433 27.5491 63.6256 27.4811L52.4493 21.0931C52.2726 20.9935 52.1451 20.8258 52.0911 20.6314C52.0371 20.4371 52.0665 20.2281 52.1671 20.0556C54.606 15.8812 59.1428 13.2886 64.0083 13.2886C64.4328 13.2886 64.7763 13.6287 64.7763 14.0491V26.8275C64.7763 27.0996 64.6291 27.3499 64.3935 27.4859C64.2758 27.554 64.1433 27.588 64.0108 27.588L64.0083 27.5831ZM53.9019 20.1674L63.2403 25.5056V14.8266C59.4691 15.0648 55.9997 17.0499 53.9019 20.1649V20.1674Z" fill="#7C43F4"/>
    <path d="M76.6271 40.9132C76.4357 40.9132 76.2444 40.8427 76.0947 40.6993L67.2641 32.2582L57.1723 39.1783C56.8239 39.4164 56.3455 39.3313 56.105 38.9863C55.8646 38.6413 55.9504 38.1675 56.2988 37.9294L66.9083 30.6545C67.2101 30.448 67.615 30.482 67.8775 30.7323L77.162 39.6059C77.4663 39.8975 77.4761 40.3786 77.1816 40.6799C77.032 40.8354 76.8308 40.9132 76.6296 40.9132H76.6271Z" fill="#7C43F4"/>
    <path d="M9.84527 41.1679C9.46005 41.1679 9.14844 40.8593 9.14844 40.4779V30.3942C9.14844 30.0127 9.46005 29.7041 9.84527 29.7041C10.2305 29.7041 10.5421 30.0127 10.5421 30.3942V40.4779C10.5421 40.8593 10.2305 41.1679 9.84527 41.1679Z" fill="#7C43F4"/>
    <path d="M15.7613 41.1681C15.3761 41.1681 15.0645 40.8595 15.0645 40.478V30.7394C15.0645 30.3579 15.3761 30.0493 15.7613 30.0493C16.1465 30.0493 16.4581 30.3579 16.4581 30.7394V40.478C16.4581 40.8595 16.1465 41.1681 15.7613 41.1681Z" fill="#7C43F4"/>
    <path d="M21.6597 41.168C21.2745 41.168 20.9629 40.8594 20.9629 40.478V25.7096C20.9629 25.3281 21.2745 25.0195 21.6597 25.0195C22.0449 25.0195 22.3565 25.3281 22.3565 25.7096V40.478C22.3565 40.8594 22.0449 41.168 21.6597 41.168Z" fill="#7C43F4"/>
    <path d="M27.5757 41.1682C27.1905 41.1682 26.8789 40.8596 26.8789 40.4781V31.3737C26.8789 30.9922 27.1905 30.6836 27.5757 30.6836C27.961 30.6836 28.2726 30.9922 28.2726 31.3737V40.4781C28.2726 40.8596 27.961 41.1682 27.5757 41.1682Z" fill="#7C43F4"/>
    <path d="M33.4918 41.1679C33.1065 41.1679 32.7949 40.8593 32.7949 40.4778V25.8893C32.7949 25.5078 33.1065 25.1992 33.4918 25.1992C33.877 25.1992 34.1886 25.5078 34.1886 25.8893V40.4778C34.1886 40.8593 33.877 41.1679 33.4918 41.1679Z" fill="#7C43F4"/>
    <path d="M39.3921 41.168C39.0069 41.168 38.6953 40.8594 38.6953 40.4779V22.9469C38.6953 22.5654 39.0069 22.2568 39.3921 22.2568C39.7774 22.2568 40.089 22.5654 40.089 22.9469V40.4779C40.089 40.8594 39.7774 41.168 39.3921 41.168Z" fill="#7C43F4"/>
    <path d="M45.3043 41.1682C44.919 41.1682 44.6074 40.8596 44.6074 40.4781V27.2721C44.6074 26.8906 44.919 26.582 45.3043 26.582C45.6895 26.582 46.0011 26.8906 46.0011 27.2721V40.4781C46.0011 40.8596 45.6895 41.1682 45.3043 41.1682Z" fill="#7C43F4"/>
    <path d="M27.5746 25.3354C27.4004 25.3354 27.2238 25.2698 27.0888 25.141L21.632 19.9145L16.2144 24.5311C16.077 24.6478 15.8978 24.7085 15.7163 24.6964L9.80059 24.3367C9.41537 24.3125 9.12339 23.9869 9.14792 23.6054C9.17246 23.2239 9.50615 22.9372 9.88647 22.959L15.5175 23.3017L21.2026 18.4566C21.4749 18.2234 21.8822 18.2355 22.1423 18.4833L27.5795 23.6904L33.0094 18.6559C33.0585 18.6097 33.1125 18.5732 33.1714 18.5441L39.0723 15.6016C39.3079 15.485 39.5876 15.5093 39.801 15.6623L45.7167 19.9874C46.0259 20.2134 46.0921 20.6459 45.864 20.9545C45.6358 21.2606 45.199 21.3262 44.8874 21.1002L39.3177 17.0279L33.8903 19.7347L28.0482 25.1507C27.9132 25.2747 27.7415 25.3378 27.5722 25.3378L27.5746 25.3354Z" fill="#7C43F4"/>
  </g>
  <defs>
    <clipPath id="clip0_744_6269">
      <rect width="91" height="63" fill="white"/>
    </clipPath>
  </defs>
</svg>

<style>
.headerType1{}

.headerType1{position: relative;top:0;left:0;width: 100%;z-index: 10;background: #fff;}
.headerType1:after{display: block;content:'';position: absolute;top:90px;width: 100%;height: 1px;background: #e4e4e4;}
.headerType1 .inner{position: relative;width: 1200px;margin: 0 auto;}
.headerType1 .logo{position: absolute;top: 0;left: 0;height: 100%;line-height: 90px;z-index:10;}

.gnb{position: relative;z-index: 2;text-align: center;}
.gnb > li{position: relative;display: inline-block;vertical-align: top;}
.gnb > li > a{display: block;padding: 0 30px;line-height: 90px;font-size: 19px;color: #333333;text-decoration: none;}
.gnb > li > a:after{display:block;content:'';width:0;height: 3px;position: absolute;bottom:0;left:50%;background: #222;transition:all 0.25s;}
.gnb > li > ul{display: none;}
.gnb > li > ul li a{display: block;font-size: 15px;color: #000;line-height: 30px;text-align: center;}
.gnb > li > ul li.active a{font-weight: bold;}
.gnb > li:hover > ul{visibility: visible;opacity: 1;}
.gnb > li.hidden-gnb{display: none;}


#slide-btn{text-indent: -999em;width: 30px;height: 20px;position: absolute;top: 50%;right: 0;margin-top: -10px;z-index:10;}
#slide-btn button{position: absolute;top: 0;left: 0;width: 100%;height: 100%;border: none;background: none;cursor: pointer;outline: none;}
#slide-btn button span,
#slide-btn button:before,
#slide-btn button:after{border-radius: 2px;overflow: hidden;position: absolute;left: 0;width: 100%;height: 2px;background: #282828;}
#slide-btn button span{display: block;top: 50%;margin-top: -1px;opacity: 1;transition: all 0.3s;}
#slide-btn button:before{content: '';display: block;top: 0;transition: all 0.3s;}
#slide-btn button:after{content: '';display: block;bottom: 0;transition: all 0.3s;}
#slide-btn button.on span{opacity: 0;}
#slide-btn button.on:before{top: 50%;margin-top: -1px;transform: rotate(45deg);}
#slide-btn button.on:after{bottom: 50%;margin-bottom: -1px;transform: rotate(-45deg);}

</style>


<div class="headerType1">
    <div class="inner">

        <!-- logo -->
        <h1 class="logo"><a href="/"><img src="/images/layout/deep-logo.png" alt=""></a></h1>

        <!-- gnb -->
        <ul class="gnb">           
            <li class="deapth1">
                <a href="#">List 1</a>
                <ul class="depth2">
                    <li><a href="#">depth2-1</a></li>
                    <li><a href="#">depth2-2</a></li>
                    <li><a href="#">depth2-3</a></li>
                    <li><a href="#">depth2-4</a></li>
                </ul>
            </li>
            <li class="deapth1">
                <a href="#">List 2</a>
                <ul class="depth2">
                    <li><a href="#">depth2-1</a></li>
                    <li><a href="#">depth2-2</a></li>
                    <li><a href="#">depth2-3</a></li>
                    <li><a href="#">depth2-4</a></li>
                </ul>
            </li>
            <li class="deapth1">
                <a href="#">List 3</a>
                <ul class="depth2">
                    <li><a href="#">depth2-1</a></li>
                    <li><a href="#">depth2-2</a></li>
                    <li><a href="#">depth2-3</a></li>
                    <li><a href="#">depth2-4</a></li>
                </ul>
            </li>
            <li class="deapth1">
                <a href="#">List 4</a>
                <ul class="depth2">
                    <li><a href="#">depth2-1</a></li>
                    <li><a href="#">depth2-2</a></li>
                    <li><a href="#">depth2-3</a></li>
                    <li><a href="#">depth2-4</a></li>
                </ul>
            </li>
        </ul>

        <!-- slide button -->
        <div id="slide-btn">
            <button title="Open menu"><span></span></button>			
        </div>

    </div>

</div>

<!--
Mobile 햄버거메뉴
-->
<div id="slide-menu">
	<div class="tit">


		<!-- search -->
		<div id="hd-sch-mo">
			<button type="button" class="btn">Search</button>
			<form action="">
				<legend>Search</legend>
				<fieldset>
					<input type="text" class="inp" name="" id="" placeholder="<?=$_lan['검색어를 입력하세요.']?>" />
					<button type="submit" class="sbm">Submit</button>
				</fieldset>
			</form>
		</div>
		<a href="#" id="slide-close"></a>

	</div>

	<!-- tnb -->
	<ul id="tnb-mo">
		<?php if ((int)$mb_level > 1) { ?>
		<li class="login"><a href="<?php echo SP_PROCESS_URL?>/member/member_logout.php"><?=$_lan['로그아웃']?></a></li>
		<li class="join"><a href="<?=SUBPAGE?>/member/join?viewMode=modify"><?=$_lan['정보수정']?></a></li>
		<?php }else{ ?>
		<li><a href="<?=SUBPAGE?>/member/login"><?=$_lan['로그인']?></a></li>
		<li><a href="<?=SUBPAGE?>/member/join"><?=$_lan['회원가입']?></a></li>
		<?php } ?>
        <li><a href="#" data-ajaxpop="<?=SUBPAGE?>/popup/sitemap">SITEMAP</a></li>
	</ul>

	<!-- gnb -->
	<ul id="gnb-mo">
		<?php include PATH."/inc/gnb.config.php"; ?>
	</ul>
</div>
<div id="slide-bg"></div>


<script>
//slide menu
slideType1 = {
	'init' : function(){
		this.action();
	},
	'action' : function(){
		var $ele = {
			'sbtn' : $('#slide-btn button'),
			'dep2' : $('.headerType1 .depth2'),
			'slide' : $('#slide-menu'),
			'bg' : $('#slide-bg'),
			'close' : $('#slide-close')
		}
		//click
		$ele.sbtn.on({
			'click' : function(e){
				e.preventDefault();
				if(getdevice()=="pc"){
					var vis = $ele.sbtn.hasClass('on');
					if(!vis){
						$ele.dep2.stop().slideDown();
						$ele.sbtn.addClass('on');
					}else{
						$ele.dep2.stop().slideUp();
						$ele.sbtn.removeClass('on');
					}
				}else{
					var vis = $ele.slide.hasClass('on');
					if(!vis){
						$ele.bg.fadeIn();
						$ele.slide.addClass('on');
					}
				}
			}
		});
		$ele.close.on({
			'click' : function(e){
				e.preventDefault();
				var vis = $ele.slide.hasClass('on');
				if(vis){
					$ele.bg.fadeOut();
					$ele.slide.removeClass('on');
					$ele.schform.removeClass('on');
				}
			}
		})


        $(window).on({
            'resize load' : function(){
                $ele.dep2.stop().slideUp();
                $ele.sbtn.removeClass('on');
            }
        })
	}
}
$(function(){
        slideType1.init();
});
</script>


<style>

.page-sub .section .txt-wrap {
  width: 50%;
  margin-left: auto;
  padding-left: 6rem;
}
.page-sub .section .section-title-wrap {
  position: sticky;
  top: 20rem;
}
.page-sub .section .section__title {
  width: 100%;
  margin-bottom: 2.2rem;
  color: #ff4b40;
  font-weight: 700;
  font-size: 1.6rem;
}

.page-sub .section .section__description {
  width: 100%;
  color: #000;
  font-weight: 100;
  font-size: 6.4rem;
  line-height: 1.4;
  letter-spacing: -2.56px;
}
.page-sub .section .item__list-wrap {
  height: 60rem;
  padding-top: 9.2rem;
  background-color: #fff;
}
.page-sub .section .item__list {
  position: sticky;
  top: 24rem;
  padding: 3.6rem 0 6.9rem;
  background-color: #fff;
  border-top: 1px solid #111;
}

.page-sub .section .item__list:nth-child(2) {
  top: 33rem;
}
.page-sub .section .item__list .item__title {
  color: #111;
  font-weight: 700;
  font-size: 2.4rem;
  letter-spacing: -0.72px;
}

.page-sub .section .item__list .item__description {
  margin-top: 1.4rem;
  color: #666;
  font-weight: 300;
  font-size: 2rem;
  line-height: 1.6;
  letter-spacing: -0.6px;
}


.figmaText{
    width: 327px;
height: 209px;
flex-shrink: 0;
border-radius: 28px;
background: var(--KB_UI_11, #FFF);

}
</style>

<style>

.nbwrap{position: relative;display: inline-block;}
.naviBar li{display: flex;align-items: center;justify-content: left;height: 60px;width: 300px;background: #f1f1f1;font-size: 16px;padding-left: 30px;}
.nbwrap .bar{display: block;width: 2px;height: 60px;background: #000;position: absolute;top:0;right:0;}
</style>

<script>
$(function(){


     $('.naviBar li').on({
		'hover' : function(){
            let idx = $(this).index();      
            let pos = $(this).height()*idx;
            $('.nbwrap .bar').stop().animate({
				'top' :pos
			},600,'easeInOutQuart');

			return false;
		}
	});
	
});
</script>

<div class="nbwrap">
    <ul class="naviBar">
        <li class="active">test1</li>
        <li>test2</li>
        <li>test3</li>
        <li>test4</li>
        <li>test5</li>
    </ul>
    <span class="bar"></span>
</div>

<div class="page-sub">
    <div class="section">
    <div class="txt-wrap">
            <div class="section-title-wrap">
              <p class="section__title" style="opacity: 1;">SERVICE PORTAL</p>
              <p class="section__description" style="opacity: 1;">
                IT 서비스 관리에<br>필요한 모든 정보를 한 번에
              </p>
            </div>
            <div class="mobile-visual"></div>
            <ul class="item__list-wrap">
              <li class="item__list" style="opacity: 1;">
                <p class="item__title">처리 과정 간소화</p>
                <p class="item__description">
                  IT 서비스를 이용하는 고객도 제공하는 관리자도 요청/처리하는
                  과정이 간소화 되길 원합니다.<br>
                  ITSM 서비스 포탈은 관리 창구를 단일화 하여 더 효율적으로
                  업무를 처리할 수 있도록 도와드립니다.
                </p>
              </li>
              <li class="item__list" style="opacity: 1;">
                <p class="item__title">업무 처리 환경 개선</p>
                <p class="item__description">
                  IT 서비스 관리에 최적화 된 환경을 제공하여 이슈 해결 요청과
                  접수 처리 현황,결과 집계가 쉬워집니다.<br>원하는 데이터가
                  있다면 지금 당장 대시보드로 구성하여 모니터링 하세요.
                </p>
              </li>
            </ul>
          </div>
          </div>
</div>


<?php
	include_once PATH."/inc/tail.sub.php";
?>
