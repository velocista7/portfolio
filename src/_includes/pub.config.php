<?php
define('DIR','');
define('PATH',$_SERVER['DOCUMENT_ROOT'].DIR);
define('LANG_TYPE','SESSION'); // 언어변경 기능 타입 ( COOKIE or SESSION )

//메뉴 Active 처리
function gnbOn($str){
	global $_dep;

	if(!isset($_dep)){
		return;
	}

	$str = (string)$str;
	$exp = explode(',',$str);
	$exp_count = count($exp);
	$act = 0;
	for($i=0;$i<count($exp);$i++){
		if($_dep[$i] == $exp[$i]){
			$act ++;
		}
	}
	if($act==$exp_count){
		echo 'active';
	}
}

//Language Cookie ( Client Cookie 를 사용. 브라우저 닫아도 선택 언어 계속 유지 )
if(LANG_TYPE=='COOKIE'){
    $language = $_GET['language'];
    $language_chk = $_COOKIE['language_chk'];

    if(isset($language) && $language!="") {
    	$now_language = $language;
    	setcookie('language_chk',$now_language,time() + 86400 * 30,'/');
    }else if(!isset($language_chk)){
    	$now_language = 'kor';
    }else{
    	$now_language = $language_chk;
    }

}

//Language Cookie ( Session Cookie 를 사용. 브라우저 닫으면 언어 kor로 초기화 )
if(LANG_TYPE=='SESSION'){
    $language = $_GET['language'];
    $language_chk = $_SESSION['language_chk'];

    if(isset($language) && $language!="") {
    	$now_language = $language;
    	$_SESSION['language_chk'] = $now_language;
    }else if($language_chk==''){
    	$now_language = 'kor';
    }else{
    	$now_language = $language_chk;
    }
}

// XSS/CSRF 변경
$paramArray = array(
	"language" => $language,
	"now_language" => $now_language,
);

$paramArray = setXSSDefense($paramArray);

@extract($paramArray);
// // XSS/CSRF 변경 

//Language Pack ( 언어팩 적용 )
$file = $_SERVER['DOCUMENT_ROOT']."/lan-pack/".$now_language.".php";
if(file_exists($file)){
	include $file;
}else{
	include $_SERVER['DOCUMENT_ROOT']."/lan-pack/kor.php";
}

//subpage 경로
if(defined('MOBILE')){
	$modir = MOBILE;
}

if($now_language!="kor"){
	$subpage = $modir.DIR."/".$now_language;
}else{
	$subpage = $modir.DIR;
}
define('SUBPAGE',$subpage);
?>
