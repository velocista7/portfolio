<?
	$_dep = array(2,1);
	$_tit = array('WORKS','카운팅 1');
	//$_txt = array('작업소스 정리');
	include_once "../../../inc/common.php";
	include_once PATH."/inc/top.sub.php";
?>
<script>
function emailCheck(email_address){     
	email_regex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i;
	if(!email_regex.test(email_address)){ 
		return false; 
	}else{
		return true;
	}
}
function validateEmail() {
	const emailInput = document.getElementById('email');
	const resultDiv = document.getElementById('result');

	const email = emailInput.value;

	if (emailCheck(email)) {
		resultDiv.innerHTML = '유효한 이메일 주소입니다.';
	} else {
		resultDiv.innerHTML = '유효하지 않은 이메일 주소입니다.';
	}
}
</script>

<form>
  <label htmlFor="name">
    <div>Name</div>
    <input type="text" id="name" name="user_name" placeholder="성함을 입력해주세요." required />
    <div className="validation-note">성함이 입력되지 않았습니다.</div>
  </label>
  <label htmlFor="email">
    <div>Email</div>
    <input type="email" id="email" placeholder="본인의 메일 주소를 정확히 입력해주세요." name="user_email" required />
    <div className="validation-note">메일이 입력되지 않았습니다.</div>
  </label>
  <input type="submit" value="Send" onClick={ validateForm }/>
</form>

<input type="text" id="email" maxlength="50" placeholder="your@email.com" >
<button onclick="validateEmail()">확인</button>
<div id="result"></div>
<div class="test"></div>


<script>
for (let i=0;i<3;i++){
        //$('.test').append('<ul>li*</ul>')
    alert(i);
}

let testArray = ['xabi','alonso','liverpool','coutinho']
testArray[1] = 'mourinho';
alert(testArray[1]);

</script>

<?php
	include_once PATH."/inc/tail.sub.php";
?>