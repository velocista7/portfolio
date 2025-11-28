(function ($) {
	$.myAjax = {
		objPage: "",

		listPageObj: {}, // 더보기 페이징 변수

		functionIndex: 0, // BeforeSend, Success 함수에 대한 인덱스

		modelBeforeSend: {}, // model 함수 실행전 함수
		modelSuccess: {}, // model 함수 실행후 함수

		viewBeforeSend: {},  // view 함수 실행전 함수
		viewSuccess: {}, // view 함수 실행후 함수

		/* model */
		// ★ modelUrl: model url
		// viewUrl: view url
		// targetId: html 들어갈 id
		// modelDataType: json, data: default json
		// modelMsg: model ajax 실행후 메세지
		// viewMethod: html, append {html: 덮어씌우기, append: 추가하기}
		// viewMsg: view ajax 실행후 메세지
		// pageId: 더보기 페이징
		// debug: y, '' {y: 디버그 띄우기, '': 아무동작안함}

		// modelBeforeSend: model 실행전 함수
		// modelSuccess: model 실행후 함수
		// viewBeforeSend: view 실행전 함수
		// viewSuccess: view 실행후 함수
		ajaxModel: function(obj, objPlus) {
			//  ajax 함수 안에서 this를 쓰면 ajax를 지칭하여 에러
			let myThis = this;

			// function 설정
			this.setFunctionList(obj);

			// 페이지 고유값
			this.setPageId(obj);

			// modelDataType 기본값
			this.setModelDataType(obj);

			// modelStart 기본값
			this.setModelStart(obj);

			// 기본값
			(empty(objPlus)) ? objPlus={} : "";

			// 객체 병합
			var objExtend = obj;
			objExtend = $.extend({}, objExtend, objPlus);
			objExtend = $.extend({}, objExtend, this.objPage);

			// debug
			this.setDebug("modelStart", obj, objExtend);

			// ajax 호출
			$.ajax({
				url: obj.modelUrl,
				method: "post",
				dataType: obj.modelDataType,
//				contentType: "application/json; charset=utf-8;",
				data: objExtend,
				error: function(request, status, error) {
					alert("에러발생");

					// debug
					myThis.setDebug("modelError", obj, " code: "+ request.status +"\n message: "+ request.responseText +"\n error: "+ error);
				},
				beforeSend: function() {
					(!empty(myThis.modelBeforeSend[obj.functionIndex])) ? myThis.modelBeforeSend[obj.functionIndex]() : "";
				},
				success: function(data) {
					// debug
					myThis.setDebug("modelSuccess", obj, data);

					// msg
					(!empty(obj.modelMsg)) ? alert(obj.modelMsg) : "";

					// function
					(!empty(myThis.modelSuccess[obj.functionIndex])) ? myThis.modelSuccess[obj.functionIndex](data, obj) : "";

					// view 페이지 호출
					(!empty(data) && !empty(obj.viewUrl)) ? myThis.ajaxView(objExtend, data) : "";
				}
			})
		},

		/* view */
		// ★ viewUrl: view url
		// ★ targetId: html 들어갈 id
		// viewMethod: html, append {html: 덮어씌우기, append: 추가하기}
		// viewMsg: view ajax 실행후 메세지
		// debug: y, '' {y: 디버그 띄우기, '': 아무동작안함}

		// viewBeforeSend: view 실행전 함수
		// viewSuccess: view 실행후 함수
		ajaxView: function(obj, objPlus) {
			//  ajax 함수 안에서 this를 쓰면 ajax를 지칭하여 에러
			let myThis = this;

			// function 설정
			this.setFunctionList(obj);

			// viewMethod 기본값
			this.setViewMethod(obj);

			// 기본값
			(empty(objPlus)) ? objPlus={} : "";

			// 객체 병합
			var objExtend = obj;
			objExtend = $.extend({}, objExtend, objPlus);

			// debug
			this.setDebug("viewStart", obj, objExtend);

			// ajax 호출
			$.ajax({
				url: obj.viewUrl,
				method: "post",
//				contentType: "application/json; charset=utf-8;",
				data: objExtend,
				error: function(request, status, error) {
					alert("에러발생");

					// debug
					myThis.setDebug("viewError", obj, " code: "+ request.status +"\n message: "+ request.responseText +"\n error: "+ error);
				},
				beforeSend: function() {
					(!empty(myThis.viewBeforeSend[obj.functionIndex])) ? myThis.viewBeforeSend[obj.functionIndex]() : "";
				},
				success:function(data) {
					// debug
					myThis.setDebug("viewSuccess", obj, data);

					// 데이터있으면
					if (!empty(data)) {
						// 덮어씌우기
						(!empty(obj.targetId) && obj.viewMethod == "html") ? $("#"+ obj.targetId).html(data) : "";

						// 추가
						(!empty(obj.targetId) && obj.viewMethod == "append") ? $("#"+ obj.targetId).append(data) : "";

						// msg
						(!empty(obj.viewMsg)) ? alert(obj.viewMsg) : "";

						// function
						(!empty(myThis.viewSuccess[obj.functionIndex])) ? myThis.viewSuccess[obj.functionIndex](data, obj) : "";

						// page
						(!empty(obj.pageVarOnly)) ? myThis.listPageObj[obj.pageVarOnly]++ : "";
					}
				}
			})
		},

		/* function 설정 */
		setFunctionList: function(obj) {
			this.setFunctionIndex(obj);

			this.setModelBeforeSend(obj);
			this.setModelSuccess(obj);

			this.setViewBeforeSend(obj);
			this.setViewSuccess(obj);
		},

		// 함수 인덱스 설정
		setFunctionIndex: function(obj) {
			if (empty(obj.modelStart)) { // model에서 시작했다면 view에선 실행안하도록.
				obj.functionIndex = this.functionIndex++;
			}
		},

		// model 함수 실행전 함수
		setModelBeforeSend: function(obj) {
			if (!empty(obj.modelBeforeSend)) {
				this.modelBeforeSend[obj.functionIndex] = obj.modelBeforeSend;

				delete obj.modelBeforeSend;
			}
		},

		// model 함수 실행후 함수
		setModelSuccess: function(obj) {
			if (!empty(obj.modelSuccess)) {
				this.modelSuccess[obj.functionIndex] = obj.modelSuccess;

				delete obj.modelSuccess;
			}
		},

		// view 함수 실행전 함수
		setViewBeforeSend: function(obj) {
			if (!empty(obj.viewBeforeSend)) {
				this.viewBeforeSend[obj.functionIndex] = obj.viewBeforeSend;

				delete obj.viewBeforeSend;
			}
		},

		// view 함수 실행후 함수
		setViewSuccess: function(obj) {
			if (!empty(obj.viewSuccess)) {
				this.viewSuccess[obj.functionIndex] = obj.viewSuccess;

				delete obj.viewSuccess;
			}
		},

		/* 페이지 고유값 */
		setPageId: function(obj) {
			if (!empty(obj.pageId)) {
				let pageVarOnly = "page"+ obj.pageId;

				// 페이지 변수 초기값
				(this.listPageObj[pageVarOnly] > 1) ? "" : this.listPageObj[pageVarOnly] = 1;

				// 페이지 객체
				this.objPage = { page: this.listPageObj[pageVarOnly], pageVarOnly: pageVarOnly };
			} else {
				this.objPage = {};
			}
		},

		/* modelDataType 기본값 */
		setModelDataType: function(obj) {
			if (empty(obj.modelDataType)) {
				obj.modelDataType = "json";
			}
		},

		/* modelStart 기본값 */
		setModelStart: function(obj) {
			if (empty(obj.modelStart)) {
				obj.modelStart = "y";
			}
		},

		/* viewMethod 기본값 */
		setViewMethod: function(obj) {
			if (empty(obj.viewMethod)) {
				obj.viewMethod = "html";
			}
		},

		/* debug */
		setDebug: function(kind, obj, msg) {
			if (!empty(obj.debug)) {
				console.log(kind);

				console.log(msg);
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

// 배열이 있을경우 배열로 재정의 해줌
function setSerializeOverriding(formData, formDataObj) {
	// 초기화
	if (empty(formDataObj)) {
		var formDataObj = {};
	}

	// 데이터 추가
	$.each(formDataObj, function() {
		formData[this.name] = this.value;
	});

	// 배열로 된 데이터 찾아서 배열로 변환
	$.each(formData, function() {
		name = this.name +'';

		if (name.indexOf("[]") > 0) {
			name = name.replace(/\[\]/gi, '');

			formDataObj[name] = [];
		}
	});

	// 실제값 대입
	$.each(formData, function() {
		name = this.name +'';

		if (name.indexOf("[]") > 0) {
			name = name.replace(/\[\]/gi, '');
			length = formDataObj[name].length;

			formDataObj[name][length] = this.value;
		} else {
			formDataObj[name] = this.value;
		}
	});

	return formDataObj;
}