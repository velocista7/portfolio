(function ($) {
	$.myFormCheck = {
		// ----------------------------------------------------------------------------------------------------
		// 기본세팅
		// ----------------------------------------------------------------------------------------------------
		regExPassword: /^(?=.*[a-zA-z])(?=.*[0-9])(?=.*[$`~!@$!%*#^?&\\(\\)\-_=+])(?!.*[^a-zA-z0-9$`~!@$!%*#^?&\\(\\)\-_=+]).{4,20}$/, // 비밀번호
		regExNumber: /^[0-9]+$/, // 숫자
		regExEnglish: /^[a-z|A-Z]+$/, // 영어
		regExKorea: /^[ㄱ-ㅎ|ㅏ-ㅣ|가-힣]+$/, // 한글
		regExPhone: /^\d{2,3}-\d{3,4}-\d{4}$/, // 일반번호, 휴대폰번호
		regExEmail: /^[0-9a-zA-Z]([-_\.]?[0-9a-zA-Z])*@[0-9a-zA-Z]([-_\.]?[0-9a-zA-Z])*\.[a-zA-Z]{2,6}$/i, // 이메일
		regExImage: /\.(gif|jpg|jpeg|png)$/, // 이미지 확장자
		regExMovie: /\.(wmv|asf|mp4)$/, // 동영상 확장자
		regExWord: /\.(ppt|pptx|xls|xlsx|csv|hwp|hwpx|doc|txt|pdf)$/, // 문서 확장자

		savePhone1: "", // 번호 앞 부분
		savePhone2: "", // 번호 중간 부분

		saveEmail1: "", // 이메일 앞 부분

		// 리셋
		reset: function() {
			this.savePhone1 = "";
			this.savePhone2 = "";

			this.saveEmail1 = "";
		},

		// ----------------------------------------------------------------------------------------------------
		// 구분자 추가, 변경 구간
		// ----------------------------------------------------------------------------------------------------
		// 폼 체크 시작전 실행
		setFormCheck: function(form) {
			// object가 있을경우에만 처리
			if (empty(form.elements)) { return false; }

			for (let i=0; i<form.elements.length; i++) {
				// 객체
				element = form.elements[i];

				// 구분자
				if (element.hasAttribute("required")) { element.setAttribute("myRequired", element.getAttribute("required")); element.removeAttribute("required"); }
				if (element.hasAttribute("password")) { element.setAttribute("myPassword", element.getAttribute("password")); element.removeAttribute("password"); }
				if (element.hasAttribute("number")) { element.setAttribute("myNumber", element.getAttribute("number")); element.removeAttribute("number"); }
				if (element.hasAttribute("english")) { element.setAttribute("myEnglish", element.getAttribute("english")); element.removeAttribute("english"); }
				if (element.hasAttribute("korea")) { element.setAttribute("myKorea", element.getAttribute("korea")); element.removeAttribute("korea"); }
				if (element.hasAttribute("phone")) { element.setAttribute("myPhone", element.getAttribute("phone")); element.removeAttribute("phone"); }
				if (element.hasAttribute("phone1")) { element.setAttribute("myPhone1", element.getAttribute("phone1")); element.removeAttribute("phone1"); }
				if (element.hasAttribute("phone2")) { element.setAttribute("myPhone2", element.getAttribute("phone2")); element.removeAttribute("phone2"); }
				if (element.hasAttribute("phone3")) { element.setAttribute("myPhone3", element.getAttribute("phone3")); element.removeAttribute("phone3"); }
				if (element.hasAttribute("email")) { element.setAttribute("myEmail", element.getAttribute("email")); element.removeAttribute("email"); }
				if (element.hasAttribute("email1")) { element.setAttribute("myEmail1", element.getAttribute("email1")); element.removeAttribute("email1"); }
				if (element.hasAttribute("email2")) { element.setAttribute("myEmail2", element.getAttribute("email2")); element.removeAttribute("email2"); }
				if (element.hasAttribute("image")) { element.setAttribute("myImage", element.getAttribute("image")); element.removeAttribute("image"); }
				if (element.hasAttribute("movie")) { element.setAttribute("myMovie", element.getAttribute("movie")); element.removeAttribute("movie"); }
				if (element.hasAttribute("word")) { element.setAttribute("myWord", element.getAttribute("word")); element.removeAttribute("word"); }
			}
		},

		// 객체 속성
		getElementAttribute: function(formName, element) {
			if (this.checkObject(element) == false) {
				alert("object does not exist");
				return false;
			}

			// 여러개인지 판별
			element = (element.length > 1 && this.checkObject(element.options) == false) ? element[0] : element;

			// 객체 반환
			return {
				formName: formName, // 폼 이름

				this: element, // 객체
				name: element.name, // 이름
				type: element.type, // 타입
				tagName: element.tagName.toLowerCase(), // 태그
				value: element.value, // 값

				// 구분자, has구분자
				required: element.getAttribute("myRequired"), hasRequired: element.hasAttribute("myRequired"),
				password: element.getAttribute("myPassword"), hasPassword: element.hasAttribute("myPassword"),
				number: element.getAttribute("myNumber"), hasNumber: element.hasAttribute("myNumber"),
				english: element.getAttribute("myEnglish"), hasEnglish: element.hasAttribute("myEnglish"),
				korea: element.getAttribute("myKorea"), hasKorea: element.hasAttribute("myKorea"),
				phone: element.getAttribute("myPhone"), hasPhone: element.hasAttribute("myPhone"),
				phone1: element.getAttribute("myPhone1"), hasPhone1: element.hasAttribute("myPhone1"),
				phone2: element.getAttribute("myPhone2"), hasPhone2: element.hasAttribute("myPhone2"),
				phone3: element.getAttribute("myPhone3"), hasPhone3: element.hasAttribute("myPhone3"),
				email: element.getAttribute("myEmail"), hasEmail: element.hasAttribute("myEmail"),
				email1: element.getAttribute("myEmail1"), hasEmail1: element.hasAttribute("myEmail1"),
				email2: element.getAttribute("myEmail2"), hasEmail2: element.hasAttribute("myEmail2"),
				image: element.getAttribute("myImage"), hasImage: element.hasAttribute("myImage"),
				movie: element.getAttribute("myMovie"), hasMovie: element.hasAttribute("myMovie"),
				word: element.getAttribute("myWord"), hasWord: element.hasAttribute("myWord"),
			}
		},


		// 객체 검사
		formFieldCheck: function(element, kind, msg) {
			if (kind) { // 서브일 경우
				(kind == "required") ? required = 'y' : required = ''; msgRequired = msg;
				(kind == "password") ? password = 'y' : password = ''; msgPassword = msg;
				(kind == "number") ? number = 'y' : number = ''; msgNumber = msg;
				(kind == "english") ? english = 'y' : english = ''; msgEnglish = msg;
				(kind == "korea") ? korea = 'y' : korea = ''; msgKorea = msg;
				(kind == "phone") ? phone = 'y' : phone = ''; msgPhone = msg;
				(kind == "phone1") ? phone1 = 'y' : phone1 = ''; msgPhone1 = msg;
				(kind == "phone2") ? phone2 = 'y' : phone2 = ''; msgPhone2 = msg;
				(kind == "phone3") ? phone3 = 'y' : phone3 = ''; msgPhone3 = msg;
				(kind == "email") ? email = 'y' : email = ''; msgEmail = msg;
				(kind == "email1") ? email1 = 'y' : email1 = ''; msgEmail1 = msg;
				(kind == "email2") ? email2 = 'y' : email2 = ''; msgEmail2 = msg;
				(kind == "image") ? image = 'y' : image = ''; msgImage = msg;
				(kind == "movie") ? movie = 'y' : movie = ''; msgMovie = msg;
				(kind == "word") ? word = 'y' : word = ''; msgWord = msg;
			} else { // 전체일 경우
				(element.hasRequired === true) ? required = 'y' : required = ''; msgRequired = element.required;
				(element.hasPassword === true) ? password = 'y' : password = ''; msgPassword = element.password;
				(element.hasNumber === true) ? number = 'y' : number = ''; msgNumber = element.number;
				(element.hasEnglish === true) ? english = 'y' : english = ''; msgEnglish = element.english;
				(element.hasKorea === true) ? korea = 'y' : korea = ''; msgKorea = element.korea;
				(element.hasPhone === true) ? phone = 'y' : phone = ''; msgPhone = element.phone;
				(element.hasPhone1 === true) ? phone1 = 'y' : phone1 = ''; msgPhone1 = element.phone1;
				(element.hasPhone2 === true) ? phone2 = 'y' : phone2 = ''; msgPhone2 = element.phone2;
				(element.hasPhone3 === true) ? phone3 = 'y' : phone3 = ''; msgPhone3 = element.phone3;
				(element.hasEmail === true) ? email = 'y' : email = ''; msgEmail = element.email;
				(element.hasEmail1 === true) ? email1 = 'y' : email1 = ''; msgEmail1 = element.email1;
				(element.hasEmail2 === true) ? email2 = 'y' : email2 = ''; msgEmail2 = element.email2;
				(element.hasImage === true) ? image = 'y' : image = ''; msgImage = element.image;
				(element.hasMovie === true) ? movie = 'y' : movie = ''; msgMovie = element.movie;
				(element.hasWord === true) ? word = 'y' : word = ''; msgWord = element.word;
			}

			// check
			if (required == 'y') { if (this.checkRequired(element, msgRequired) == false) { return false; } }
			if (password == 'y') { if (this.checkPassword(element, msgPassword) == false) { return false; } }
			if (number == 'y') { if (this.checkNumber(element, msgNumber) == false) { return false; } }
			if (english == 'y') { if (this.checkEnglish(element, msgEnglish) == false) { return false; } }
			if (korea == 'y') { if (this.checkKorea(element, msgKorea) == false) { return false; } }
			if (phone == 'y') { if (this.checkPhone(element, msgPhone) == false) { return false; } }
			if (phone1 == 'y') { if (this.checkPhone1(element, msgPhone1) == false) { return false; } }
			if (phone2 == 'y') { if (this.checkPhone2(element, msgPhone2) == false) { return false; } }
			if (phone3 == 'y') { if (this.checkPhone3(element, msgPhone3) == false) { return false; } }
			if (email == 'y') { if (this.checkEmail(element, msgEmail) == false) { return false; } }
			if (email1 == 'y') { if (this.checkEmail1(element, msgEmail1) == false) { return false; } }
			if (email2 == 'y') { if (this.checkEmail2(element, msgEmail2) == false) { return false; } }
			if (image == 'y') { if (this.checkImage(element, msgImage) == false) { return false; } }
			if (movie == 'y') { if (this.checkMovie(element, msgMovie) == false) { return false; } }
			if (word == 'y') { if (this.checkWord(element, msgWord) == false) { return false; } }
		},

		// ----------------------------------------------------------------------------------------------------
		// 폼 체크
		// ----------------------------------------------------------------------------------------------------
		// 폼 체크
		formCheck: function(form) {
			// 리셋
			this.reset();

			// 폼 이름
			formName = form.name;

			// 객체 담기
			for (let i=0; i<form.elements.length; i++) {
				// 객체 속성
				element = this.getElementAttribute(formName, form.elements[i]);

				// 객체 검사
				if (this.formFieldCheck(element) === false) {
					return false;
				}
			}

			return true;
		},

		// 폼 체크
		formCheckSub: function(obj) {
			// 리셋
			this.reset();

			// 배열이 아니라면
			if (Array.isArray(obj) == false) {
				alert("not an array");
				return false;
			}

			// 2차 배열이 2차 배열로 재정의
			if (Array.isArray(obj[0]) == false) {
				obj = new Array(obj);
			}

			// 배열 생성
			for (let i=0; i<obj.length; i++) {
				formName = obj[i][0]; // 폼 이름
				name = obj[i][1]; // 해당 객체 이름
				kind = obj[i][2]; // 구분자
				msg = obj[i][3]; // 메세지

				// 해당 객체 (폼 안의 객체)
				checkElement = document.forms[formName].elements[name];

				// 객체 속성
				element = this.getElementAttribute(formName, checkElement);

				// 객체 검사
				if (this.formFieldCheck(element, kind, msg) == false) {
					return false;
				}
			}

			return true;
		},

		// 폼 체크 print
		formCheckPrint: function(form) {
			// 폼 이름
			formName = form.name;

			elementDiv = document.createElement("div");

			// 객체 담기
			elementDiv.innerHTML += '<br><br><br>';

			for (let i=0; i<form.elements.length; i++) {
				// 객체 속성
				element = this.getElementAttribute(formName, form.elements[i]);

				elementDiv.innerHTML += 'if ($.myFormCheck.formCheckSub(["'+ formName +'", "'+ element.name +'", "required", "'+ element.required +'"]) == false){ return false; }<br>';
			}

			document.body.appendChild(elementDiv);
		},

		// 폼 체크 print
		formCheckPrintArray: function(form) {
			// 폼 이름
			formName = form.name;

			elementDiv = document.createElement("div");

			// 객체 담기
			elementDiv.innerHTML += '<br><br><br>';
			elementDiv.innerHTML += 'let formResult = $.myFormCheck.formCheckSub([<br>';

			for (let i=0; i<form.elements.length; i++) {
				// 객체 속성
				element = this.getElementAttribute(formName, form.elements[i]);

				elementDiv.innerHTML += '["'+ formName +'", "'+ element.name +'", "required", "'+ element.required +'"],<br>';
			}

			elementDiv.innerHTML += ']);';

			document.body.appendChild(elementDiv);
		},

		// ----------------------------------------------------------------------------------------------------
		// 상세함수
		// ----------------------------------------------------------------------------------------------------
		// 공백제거
		trim: function(Field) {
			Field = Field.replace(/(^\s*)|(\s*$)/g, "")
		//	Field = Field.replace("<P>&nbsp;</P>", "")
			return Field;
		},

		// 객체 체크
		checkObject: function(obj) {
			if (typeof(obj) != "undefined" && obj != "" && obj != null) {
				return true;
			} else {
				return false;
			}
		},

		// required
		checkRequired: function(element, msg) {
			if (element.type != "checkbox" && element.type != "radio") {
				if (this.trim(element.value) == "") {
					alert(msg);
					element.this.focus();
					return false;
				}
			} else {
				checkElement = document.forms[element.formName].elements[element.name];
				checkSuccess = "";
				checkArray = new Array();

				// check box 1개 일때 에러방지
				(empty(checkElement.length)) ? checkArray[0] = checkElement : checkArray = checkElement;

				for (let i=0; i<checkArray.length; i++) {
					if (checkArray[i].checked == true) {
						checkSuccess = "y";
					}
				}

				if (checkSuccess == "") {
					alert(msg);
					element.this.focus();
					return false;
				}
			}
		},

		// password
		checkPassword: function(element, msg) {
			if (element.type != "checkbox" && element.type != "radio") {
				if (this.trim(element.value) != "") {
					if (this.regExPassword.test(element.value) == false) {
						alert(msg);
						element.this.focus();
						return false;
					}
				}
			}
		},

		// number
		checkNumber: function(element, msg) {
			if (element.type != "checkbox" && element.type != "radio") {
				if (this.trim(element.value) != "") {
					if (this.regExNumber.test(element.value) == false) {
						alert(msg);
						element.this.focus();
						return false;
					}
				}
			}
		},

		// english
		checkEnglish: function(element, msg) {
			if (element.type != "checkbox" && element.type != "radio") {
				if (this.trim(element.value) != "") {
					if (this.regExEnglish.test(element.value) == false) {
						alert(msg);
						element.this.focus();
						return false;
					}
				}
			}
		},

		// korea
		checkKorea: function(element, msg) {
			if (element.type != "checkbox" && element.type != "radio") {
				if (this.trim(element.value) != "") {
					if (this.regExKorea.test(element.value) == false) {
						alert(msg);
						element.this.focus();
						return false;
					}
				}
			}
		},

		// phone
		checkPhone: function(element, msg) {
			if (element.type != "checkbox" && element.type != "radio") {
				if (this.trim(element.value) != "") {
					if (this.regExPhone.test(element.value) == false) {
						alert(msg);
						element.this.focus();
						return false;
					}
				}
			}
		},

		// phone1 (저장)
		checkPhone1: function(element, msg) {
			if (element.type != "checkbox" && element.type != "radio") {
				this.savePhone1 = element.value;
			}
		},

		// phone2 (저장)
		checkPhone2: function(element, msg) {
			if (element.type != "checkbox" && element.type != "radio") {
				this.savePhone2 = element.value;
			}
		},

		// phone3 (후 처리)
		checkPhone3: function(element, msg) {
			if (element.type != "checkbox" && element.type != "radio") {
				if (this.trim(element.value) != "") {
					if (this.regExPhone.test(this.savePhone1 +"-"+ this.savePhone2 +"-"+ element.value) == false) {
						alert(msg);
						element.this.focus();
						return false;
					}
				}
			}
		},

		// email
		checkEmail: function(element, msg) {
			if (element.type != "checkbox" && element.type != "radio") {
				if (this.trim(element.value) != "") {
					if (this.regExEmail.test(element.value) == false) {
						alert(msg);
						element.this.focus();
						return false;
					}
				}
			}
		},

		// email1 (저장)
		checkEmail1: function(element, msg) {
			if (element.type != "checkbox" && element.type != "radio") {
				this.saveEmail1 = element.value;
			}
		},

		// email2 (후 처리)
		checkEmail2: function(element, msg) {
			if (element.type != "checkbox" && element.type != "radio") {
				if (this.trim(element.value) != "") {
					if (this.regExEmail.test(this.saveEmail1 +"@"+ element.value) == false) {
						alert(msg);
						element.this.focus();
						return false;
					}
				}
			}
		},

		// image
		checkImage: function(element, msg) {
			if (element.type != "checkbox" && element.type != "radio") {
				if (this.trim(element.value) != "") {
					if (this.regExImage.test(element.value.toLowerCase()) == false) {
						alert(msg);
						element.this.focus();
						return false;
					}
				}
			}
		},

		// movie
		checkMovie: function(element, msg) {
			if (element.type != "checkbox" && element.type != "radio") {
				if (this.trim(element.value) != "") {
					if (this.regExMovie.test(element.value.toLowerCase()) == false) {
						alert(msg);
						element.this.focus();
						return false;
					}
				}
			}
		},

		// word
		checkWord: function(element, msg) {
			if (element.type != "checkbox" && element.type != "radio") {
				if (this.trim(element.value) != "") {
					if (this.regExWord.test(element.value.toLowerCase()) == false) {
						alert(msg);
						element.this.focus();
						return false;
					}
				}
			}
		},
	}
})(jQuery);

// php 에서는 echo (!empty("값")) ? "참" : "거짓"; // 참
// php 문법대로 하기위해 false 리턴
function empty(obj) {
	if (typeof(obj) != "undefined" && obj != "" && obj != null && obj != "pageundefined") {
		return false; // 값이 있는곳
	} else {
		return true; // 값이 없는곳
	}
}