(function ($) {
	$.myDynamic = {
		idArray: new Array(),
		min: 1, // 최소 개수
		max: 10, // 최대 개수 (0이면 무제한)
		tag: '', // 하위 태그 tr, ul, dl, div 등등 1개의 row 기준

		// 추가
		add: function(id, url, tag) {
			// 태그 설정
			this.setTag(tag);

			// max개 까지 있어야됨
			if (this.max > 0) {
				if ($('#'+ id +' '+ this.tag).length >= this.max) {
					return;
				}
			}

			// 인덱스 설정
			this.setIdArray(id);

			//  ajax 함수 안에서 this를 쓰면 ajax를 지칭하여 에러
			let myThis = this;

			// 기본 외 파라미터
			let obj = {
				seqId: this.idArray[id],
			};

			// 기본값
			(empty(this.param)) ? objPlus={} : objPlus=this.param;

			// 객체 병합
			var formDataObj = obj;
			formDataObj = $.extend({}, formDataObj, objPlus);
			console.log(formDataObj);

			// ajax
			$.myAjax.ajaxView({
				viewUrl: url,
				targetId: id,
				viewMethod: 'append',
//				debug: 'y',
				viewSuccess: function() {
					// list number 재정의
					myThis.setListNumber(id);
				},
			}, formDataObj);

			// 초기화
			this.setParam({});
		},

		// 특정 행 삭제
		del: function(id, seqId, tag) {
			// 태그 설정
			this.setTag(tag);

			// min개는 있어야됨
			if ($('#'+ id +' '+ this.tag).length <= this.min) {
				return;
			}

			// 특정 행 삭제
			$('#'+ seqId).remove();

			// list number 재정의
			this.setListNumber(id);
		},

		// 마지막 행 삭제
		lastDel: function(id, tag) {
			// 태그 설정
			this.setTag(tag);

			// min개는 있어야됨
			if ($('#'+ id +' '+ this.tag).length <= this.min) {
				return;
			}

			// 마지막 행 삭제
			$('#'+ id +' '+ this.tag +':last-child').remove();

			// list number 재정의
			this.setListNumber(id);
		},

		// list number 재정의
		setListNumber: function(id) {
			$("."+ id).each(function(i) {
				$(this).html((i+1));
			});
		},

		// 인덱스 설정
		setIdArray: function(id) {
			(this.idArray[id] >= 0) ? this.idArray[id]++ : this.idArray[id] = 0;
		},

		// 태그 설정
		setTag: function(tag) {
			this.tag = (empty(tag)) ? "tr" : tag;
		},

		// 파라미터 설정
		setParam: function(obj) {
			this.param = obj;
		},

		// min 설정
		setMin: function(num) {
			this.min = num;
		},

		// max 설정
		setMax: function(num) {
			this.max = num;
		},
	}
})(jQuery);