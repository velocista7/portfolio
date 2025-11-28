<?
	$_dep = array(2,1);
	$_tit = array('WORKS','풀캘린더');
  $_txt = array('작업에 용이한 플러그인 및 스크립트 정리');
	include_once "../../../inc/common.php";
	include_once PATH."/inc/top.sub.php";
?>
<script type="text/javascript" src="/js/moment.min.js?<?php echo date('Ymd'); ?>"></script>
<script type="text/javascript" src="<?=DIR?>/js/fullcalendar.js?<?php echo date('Ymd'); ?>"></script>
<script type="text/javascript" src="<?=DIR?>/js/lang-all.js?<?php echo date('Ymd'); ?>"></script>
<link rel="stylesheet" type="text/css" href="<?=DIR?>/css/fullcalendar.css?<?php echo date('Ymd'); ?>" />

<style>
#calendarType1 .fc-day-number.holiday{color: #c44b4b;}

body .tip-darkgray{display: block;padding:5px 10px;z-index:1000;border:1px solid #ddd;border-radius:5px;background: #fff;box-shadow:4px 4px 4px rgba(0,0,0,0.1)}

#calendarType1 .fc-head th,
#calendarType1 .fc-head td{border-top:2px solid #666;}
#calendarType1 th{text-align: left;font-size: 14px;color: #111;}
#calendarType1 thead th{background: #f7f7f7;text-align: center;font-family: Sandbox-Aggro;font-weight: normal;font-size: 22px;padding: 25px 0;border-left:1px solid #ddd;}
#calendarType1 .fc-head-container,
#calendarType1 .fc-widget-content{padding: 0;}
#calendarType1 .fc-basic-view .fc-body .fc-row{min-height:200px;}
#calendarType1 th,
#calendarType1 td{border-left:0;border-right:0;padding: 10px 15px;border-left:1px solid #ddd;}
#calendarType1 h2{font-size: 30px;color: #111;margin: 0 50px;}
#calendarType1 .fc-toolbar{font-size: 0;margin-bottom: 30px;}
#calendarType1 .fc-center{font-size: 0;}
#calendarType1 .fc-center:before{display: inline-block;vertical-align: middle;content: '';width: 0;height: 100%;}
#calendarType1 .fc-center >*{display: inline-block;vertical-align: middle;}
#calendarType1 .fc-center .fc-button{font-size: 20px;color: #111;}
#calendarType1 .fc-left,
#calendarType1 .fc-right{display: none;}
#calendarType1 .fc-sun{font-size: 22px;color: #c44b4b;}
#calendarType1 .fc-basic-view td.fc-week-number span, .fc-basic-view td.fc-day-number{text-align: left;}
#calendarType1 .fc-clear{display: none;}
#calendarType1 .fc-ltr .fc-basic-view .fc-day-number{text-align: left;padding: 0 15px;}
#calendarType1 .fc-event{height: 20px;line-height: normal;}
#calendarType1 .fc-event-container{padding: 2px 15px;}
#calendarType1 .fc-scroller{height: auto !important;}
#calendarType1 .fc-day-number{font-size: 20px;font-family: Sandbox-Aggro;font-weight: normal;color: #222;}
#calendarType1 .fc-day-number.fc-sun{color: #c44b4b;}
.eventBtn .fc-title{padding: 0 5px;font-weight: normal;color: #111;}
#calendarType1.calendar .eventBtn{position: relative;top:-10px;left:0px;border:0;background: none;margin-top: 3px;}
#calendarType1.calendar .eventBtn1{position: relative;/* bottom:-15px; */left:0px;border:0;background: none;top: -9px;}
#calendarType1.calendar .eventBtn a.btn{width: 22px;height: 22px;}
#calendarType1.calendar .eventBtn .text{font-size: 14px;line-height: 24px;margin-top: 10px;}
#calendarType1.calendar .eventBtn .fc-content{display: none;}
div.tip-darkgray div.tip-inner{}
</style>
<div id="calendarType1" class="calendar"></div>

<script>
$(function(){

	var targetDates = ['2023-07-15','2023-08-15', '2023-09-28', '2023-09-29', '2023-10-03', '2023-10-09', '2023-12-25'];
	$('#calendarType1').fullCalendar({
		header: {
			left: 'today',
			center: 'prev title next',
			right: 'month,basicWeek,basicDay',
		},
		lang: 'ko',
		defaultDate: "2023-09-14",
		editable: true,
		eventLimit: false,
		weekends: true,
		slotEventOverlap: true,
		showNonCurrentDates : false,
		eventOverlap: true,
		droppable: true,

		eventRender: function(event, element, callback) {
			$(element).poshytip({
				className : 'tip-darkgray',
				alignY : 'bottom',
				content : event.description,
				showTimeout : 0.2
			})
		},
		// dayRender 콜백 함수 정의
        dayRender: function(date, cell) {
			// 특정 날짜를 비교하여 클래스를 추가
			if (targetDates.includes(date.format('YYYY-MM-DD'))) {
				cell.addClass('holiday');
				//cell.css("color", "#ff5959");
			}

			$('.holiday').each(function(){
				var num = $(this).index();
				$(this).parents('.fc-bg').siblings('.fc-content-skeleton').find('thead td').eq(num).addClass('holiday');
			});
        },


		/*
		여기서부터 json 형태로 데이터를 입력하게 됩니다.
		*/
		events: [
		
			{
					title: "성신여대",
					description: "성신여대",
					start: '2023-09-13',
					end: "2023-09-13",
					color: "#fff227",
					className: "eventBtn",
					url: '/intranet/content1_view?w=u&wm_id=116'

				},
				{
					title: "test",
					description: "test",
					start: '2023-09-11',
					end: "2023-09-11",
					color: "#fff227",
					className: "eventBtn",
					url: '/intranet/content1_view?w=u&wm_id=112'

				},
				{
					title: "삼성SDI연구소",
					description: "삼성SDI연구소",
					start: '2023-09-06',
					end: "2023-09-06",
					color: "#fff227",
					className: "eventBtn",
					url: '/intranet/content1_view?w=u&wm_id=108'

				},
						{
					title: "연세대학교",
					description: "연세대학교",
					start: '2023-09-06',
					end: "2023-09-06",
					color: "#fff227",
					className: "eventBtn",
					url: '/intranet/content1_view?w=u&wm_id=105'

				},

						{
					title: "피플앤드테크놀러지 ",
					description: "피플앤드테크놀러지 ",
					start: '2023-08-31',
					end: "2023-08-31",
					color: "#fff227",
					className: "eventBtn",
					url: '/intranet/content1_view?w=u&wm_id=100'

				},
						{
					title: "목동고등학교",
					description: "목동고등학교",
					start: '2023-08-09',
					end: "2023-08-09",
					color: "#fff227",
					className: "eventBtn",
					url: '/intranet/content1_view?w=u&wm_id=71'

				},
						{
					title: "인천항만공사",
					description: "인천항만공사",
					start: '2023-08-08',
					end: "2023-08-08",
					color: "#fff227",
					className: "eventBtn",
					url: '/intranet/content1_view?w=u&wm_id=70'

				},
	
						{
					title: "한국언론진흥재단",
					description: "한국언론진흥재단",
					start: '2023-08-07',
					end: "2023-08-07",
					color: "#fff227",
					className: "eventBtn",
					url: '/intranet/content1_view?w=u&wm_id=65'

				},
						{
					title: "캐나다쉬핑",
					description: "캐나다쉬핑",
					start: '2023-08-07',
					end: "2023-08-07",
					color: "#fff227",
					className: "eventBtn",
					url: '/intranet/content1_view?w=u&wm_id=64'

				},
						{
					title: "한미약품",
					description: "한미약품",
					start: '2023-08-07',
					end: "2023-08-07",
					color: "#fff227",
					className: "eventBtn",
					url: '/intranet/content1_view?w=u&wm_id=63'

				},
						{
					title: "낙농진흥회",
					description: "낙농진흥회",
					start: '2023-08-07',
					end: "2023-08-07",
					color: "#fff227",
					className: "eventBtn",
					url: '/intranet/content1_view?w=u&wm_id=62'

				},
						{
					title: "로지스올",
					description: "로지스올",
					start: '2023-08-07',
					end: "2023-08-07",
					color: "#fff227",
					className: "eventBtn",
					url: '/intranet/content1_view?w=u&wm_id=61'

				},
						{
					title: "국립공원연구원",
					description: "국립공원연구원",
					start: '2023-08-07',
					end: "2023-08-07",
					color: "#fff227",
					className: "eventBtn",
					url: '/intranet/content1_view?w=u&wm_id=58'

				},
						{
					title: "성신여대",
					description: "성신여대",
					start: '2023-08-07',
					end: "2023-08-07",
					color: "#fff227",
					className: "eventBtn",
					url: '/intranet/content1_view?w=u&wm_id=55'

				},
						{
					title: "보임코퍼레이션",
					description: "보임코퍼레이션",
					start: '2023-08-07',
					end: "2023-08-07",
					color: "#fff227",
					className: "eventBtn",
					url: '/intranet/content1_view?w=u&wm_id=54'

				},
						{
					title: "서울시청",
					description: "서울시청",
					start: '2023-08-07',
					end: "2023-08-07",
					color: "#fff227",
					className: "eventBtn",
					url: '/intranet/content1_view?w=u&wm_id=52'

				},
						{
					title: "국무조정실",
					description: "국무조정실",
					start: '2023-08-07',
					end: "2023-08-07",
					color: "#fff227",
					className: "eventBtn",
					url: '/intranet/content1_view?w=u&wm_id=51'

				},
						{
					title: "한국산업기술기획평가…",
					description: "한국산업기술기획평가…",
					start: '2023-08-07',
					end: "2023-08-07",
					color: "#fff227",
					className: "eventBtn",
					url: '/intranet/content1_view?w=u&wm_id=49'

				},
						{
					title: "한미약품",
					description: "한미약품",
					start: '2023-08-07',
					end: "2023-08-07",
					color: "#fff227",
					className: "eventBtn",
					url: '/intranet/content1_view?w=u&wm_id=48'

				},
						{
					title: "경기도경제과학진흥원",
					description: "경기도경제과학진흥원",
					start: '2023-08-07',
					end: "2023-08-07",
					color: "#fff227",
					className: "eventBtn",
					url: '/intranet/content1_view?w=u&wm_id=47'

				},
						{
					//title: "새만금개발공사",
					description: "새만금개발공사",
					start: '2023-09-12',
					end: "2023-09-12",
					color: "#2aa738",
					className: "eventBtn",
					url: '/intranet/content1_view?w=u&wm_id=113'

				},
						{
					//title: "test",
					description: "test",
					start: '2023-09-11',
					end: "2023-09-11",
					color: "#2aa738",
					className: "eventBtn",
					url: '/intranet/content1_view?w=u&wm_id=112'

				},
						{
					//title: "삼성SDI연구소",
					description: "삼성SDI연구소",
					start: '2023-09-07',
					end: "2023-09-07",
					color: "#2aa738",
					className: "eventBtn",
					url: '/intranet/content1_view?w=u&wm_id=108'

				},
						{
					//title: "피플앤드테크놀러지 ",
					description: "피플앤드테크놀러지 ",
					start: '2023-09-01',
					end: "2023-09-01",
					color: "#2aa738",
					className: "eventBtn",
					url: '/intranet/content1_view?w=u&wm_id=100'

				},
						{
					//title: "성동벤처밸리",
					description: "성동벤처밸리",
					start: '2023-09-06',
					end: "2023-09-06",
					color: "#2aa738",
					className: "eventBtn",
					url: '/intranet/content1_view?w=u&wm_id=97'

				},
						{
					//title: "피플앤드테크놀러지 ",
					description: "피플앤드테크놀러지 ",
					start: '2023-09-04',
					end: "2023-09-04",
					color: "#2aa738",
					className: "eventBtn",
					url: '/intranet/content1_view?w=u&wm_id=91'

				},
						{
					//title: "비상교육",
					description: "비상교육",
					start: '2023-08-21',
					end: "2023-08-21",
					color: "#2aa738",
					className: "eventBtn",
					url: '/intranet/content1_view?w=u&wm_id=77'

				},
						{
					//title: "로지스올",
					description: "로지스올",
					start: '2023-07-07',
					end: "2023-07-07",
					color: "#2aa738",
					className: "eventBtn",
					url: '/intranet/content1_view?w=u&wm_id=61'

				},
						{
					//title: "경기도경제과학진흥원",
					description: "경기도경제과학진흥원",
					start: '2023-08-30',
					end: "2023-08-30",
					color: "#2aa738",
					className: "eventBtn",
					url: '/intranet/content1_view?w=u&wm_id=47'

				},
						{
					//title: "새만금개발공사",
					description: "새만금개발공사",
					start: '2023-09-13',
					end: "2023-09-13",
					color: "#00a0e9",
					className: "eventBtn",
					url: '/intranet/content1_view?w=u&wm_id=113'

				},
						{
					//title: "test",
					description: "test",
					start: '2023-09-12',
					end: "2023-09-12",
					color: "#00a0e9",
					className: "eventBtn",
					url: '/intranet/content1_view?w=u&wm_id=112'

				},
						{
					//title: "삼성SDI연구소",
					description: "삼성SDI연구소",
					start: '2023-09-07',
					end: "2023-09-07",
					color: "#00a0e9",
					className: "eventBtn",
					url: '/intranet/content1_view?w=u&wm_id=108'

				},
						{
					//title: "피플앤드테크놀러지 ",
					description: "피플앤드테크놀러지 ",
					start: '2023-09-01',
					end: "2023-09-01",
					color: "#00a0e9",
					className: "eventBtn",
					url: '/intranet/content1_view?w=u&wm_id=100'

				},
						{
					//title: "피플앤드테크놀러지 ",
					description: "피플앤드테크놀러지 ",
					start: '2023-09-05',
					end: "2023-09-05",
					color: "#00a0e9",
					className: "eventBtn",
					url: '/intranet/content1_view?w=u&wm_id=91'

				},
						{
					//title: "비상교육",
					description: "비상교육",
					start: '2023-08-21',
					end: "2023-08-21",
					color: "#00a0e9",
					className: "eventBtn",
					url: '/intranet/content1_view?w=u&wm_id=77'

				},
						{
					//title: "한미약품",
					description: "한미약품",
					start: '2023-08-22',
					end: "2023-08-22",
					color: "#00a0e9",
					className: "eventBtn",
					url: '/intranet/content1_view?w=u&wm_id=75'

				},
						{
					//title: "한미약품",
					description: "한미약품",
					start: '2023-08-18',
					end: "2023-08-18",
					color: "#00a0e9",
					className: "eventBtn",
					url: '/intranet/content1_view?w=u&wm_id=73'

				},
						{
					//title: "새만금개발공사",
					description: "새만금개발공사",
					start: '2023-09-14',
					end: "2023-09-14",
					color: "#9fa0a0",
					className: "eventBtn ",
					url: '/intranet/content1_view?w=u&wm_id=113'

				},
						{
					//title: "test",
					description: "test",
					start: '2023-09-13',
					end: "2023-09-13",
					color: "#9fa0a0",
					className: "eventBtn ",
					url: '/intranet/content1_view?w=u&wm_id=112'

				},
						{
					//title: "삼성SDI연구소",
					description: "삼성SDI연구소",
					start: '2023-09-07',
					end: "2023-09-07",
					color: "#9fa0a0",
					className: "eventBtn ",
					url: '/intranet/content1_view?w=u&wm_id=108'

				},
						{
					//title: "한국규제과학센터",
					description: "한국규제과학센터",
					start: '2023-09-08',
					end: "2023-09-08",
					color: "#9fa0a0",
					className: "eventBtn ",
					url: '/intranet/content1_view?w=u&wm_id=107'

				},
						{
					//title: "한국규제과학센터",
					description: "한국규제과학센터",
					start: '2023-09-08',
					end: "2023-09-08",
					color: "#9fa0a0",
					className: "eventBtn ",
					url: '/intranet/content1_view?w=u&wm_id=106'

				},
						{
					//title: "피플앤드테크놀러지 ",
					description: "피플앤드테크놀러지 ",
					start: '2023-09-01',
					end: "2023-09-01",
					color: "#9fa0a0",
					className: "eventBtn ",
					url: '/intranet/content1_view?w=u&wm_id=100'

				},
						{
					//title: "가비아씨엔에스",
					description: "가비아씨엔에스",
					start: '2023-09-30',
					end: "2023-09-30",
					color: "#9fa0a0",
					className: "eventBtn ",
					url: '/intranet/content1_view?w=u&wm_id=99'

				},
						{
					//title: "에스티임",
					description: "에스티임",
					start: '2023-09-25',
					end: "2023-09-25",
					color: "#9fa0a0",
					className: "eventBtn ",
					url: '/intranet/content1_view?w=u&wm_id=98'

				},
						{
					//title: "이화여대 교육혁신센…",
					description: "이화여대 교육혁신센…",
					start: '2023-08-30',
					end: "2023-08-30",
					color: "#9fa0a0",
					className: "eventBtn ",
					url: '/intranet/content1_view?w=u&wm_id=92'

				},
						{
					//title: "피플앤드테크놀러지 ",
					description: "피플앤드테크놀러지 ",
					start: '2023-09-11',
					end: "2023-09-11",
					color: "#9fa0a0",
					className: "eventBtn ",
					url: '/intranet/content1_view?w=u&wm_id=91'

				},
						{
					//title: "삼성SDI연구소",
					description: "삼성SDI연구소",
					start: '2023-08-29',
					end: "2023-08-29",
					color: "#9fa0a0",
					className: "eventBtn ",
					url: '/intranet/content1_view?w=u&wm_id=90'

				},
						{
					//title: "수소에너지네트워크",
					description: "수소에너지네트워크",
					start: '2023-05-18',
					end: "2023-05-18",
					color: "#9fa0a0",
					className: "eventBtn ",
					url: '/intranet/content1_view?w=u&wm_id=89'

				},
						{
					//title: "기획사 나이스",
					description: "기획사 나이스",
					start: '2023-09-07',
					end: "2023-09-07",
					color: "#9fa0a0",
					className: "eventBtn ",
					url: '/intranet/content1_view?w=u&wm_id=88'

				},
						{
					//title: "가비아씨엔에스",
					description: "가비아씨엔에스",
					start: '2023-08-31',
					end: "2023-08-31",
					color: "#9fa0a0",
					className: "eventBtn ",
					url: '/intranet/content1_view?w=u&wm_id=83'

				},
						{
					//title: "에스티임",
					description: "에스티임",
					start: '2023-08-25',
					end: "2023-08-25",
					color: "#9fa0a0",
					className: "eventBtn ",
					url: '/intranet/content1_view?w=u&wm_id=82'

				},
						{
					//title: "서울신용보증재단",
					description: "서울신용보증재단",
					start: '2023-08-29',
					end: "2023-08-29",
					color: "#9fa0a0",
					className: "eventBtn ",
					url: '/intranet/content1_view?w=u&wm_id=80'

				},
						{
					//title: "낙농진흥회",
					description: "낙농진흥회",
					start: '2023-08-28',
					end: "2023-08-28",
					color: "#9fa0a0",
					className: "eventBtn ",
					url: '/intranet/content1_view?w=u&wm_id=79'

				},
						{
					//title: "쏠라에스티",
					description: "쏠라에스티",
					start: '2023-08-22',
					end: "2023-08-22",
					color: "#9fa0a0",
					className: "eventBtn ",
					url: '/intranet/content1_view?w=u&wm_id=78'

				},
						{
					//title: "비상교육",
					description: "비상교육",
					start: '2023-08-21',
					end: "2023-08-21",
					color: "#9fa0a0",
					className: "eventBtn ",
					url: '/intranet/content1_view?w=u&wm_id=77'

				},
						{
					//title: "한미약품",
					description: "한미약품",
					start: '2023-09-05',
					end: "2023-09-05",
					color: "#9fa0a0",
					className: "eventBtn ",
					url: '/intranet/content1_view?w=u&wm_id=75'

				},
						{
					//title: "대한LPG협회",
					description: "대한LPG협회",
					start: '2023-08-23',
					end: "2023-08-23",
					color: "#9fa0a0",
					className: "eventBtn ",
					url: '/intranet/content1_view?w=u&wm_id=74'

				},
						{
					//title: "한미약품",
					description: "한미약품",
					start: '2023-09-05',
					end: "2023-09-05",
					color: "#9fa0a0",
					className: "eventBtn ",
					url: '/intranet/content1_view?w=u&wm_id=73'

				},
						{
					//title: "산은캐피탈",
					description: "산은캐피탈",
					start: '2023-08-01',
					end: "2023-08-01",
					color: "#9fa0a0",
					className: "eventBtn ",
					url: '/intranet/content1_view?w=u&wm_id=72'

				},
						{
					//title: "목동고등학교",
					description: "목동고등학교",
					start: '2023-07-31',
					end: "2023-07-31",
					color: "#9fa0a0",
					className: "eventBtn ",
					url: '/intranet/content1_view?w=u&wm_id=71'

				},
						{
					//title: "인천항만공사",
					description: "인천항만공사",
					start: '2023-07-31',
					end: "2023-07-31",
					color: "#9fa0a0",
					className: "eventBtn ",
					url: '/intranet/content1_view?w=u&wm_id=70'

				},
						{
					//title: "한국문화예술교육진흥…",
					description: "한국문화예술교육진흥…",
					start: '2023-09-08',
					end: "2023-09-08",
					color: "#9fa0a0",
					className: "eventBtn ",
					url: '/intranet/content1_view?w=u&wm_id=69'

				},
						{
					//title: "조선대학교",
					description: "조선대학교",
					start: '2023-08-07',
					end: "2023-08-07",
					color: "#9fa0a0",
					className: "eventBtn ",
					url: '/intranet/content1_view?w=u&wm_id=67'

				},
						{
					//title: "경기도서민금융복지지…",
					description: "경기도서민금융복지지…",
					start: '2023-08-07',
					end: "2023-08-07",
					color: "#9fa0a0",
					className: "eventBtn ",
					url: '/intranet/content1_view?w=u&wm_id=66'

				},
						{
					//title: "한국언론진흥재단",
					description: "한국언론진흥재단",
					start: '2023-08-07',
					end: "2023-08-07",
					color: "#9fa0a0",
					className: "eventBtn ",
					url: '/intranet/content1_view?w=u&wm_id=65'

				},
						{
					//title: "캐나다쉬핑",
					description: "캐나다쉬핑",
					start: '2023-08-07',
					end: "2023-08-07",
					color: "#9fa0a0",
					className: "eventBtn ",
					url: '/intranet/content1_view?w=u&wm_id=64'

				},
						{
					//title: "한국산업기술기획평가…",
					description: "한국산업기술기획평가…",
					start: '2023-08-21',
					end: "2023-08-21",
					color: "#9fa0a0",
					className: "eventBtn ",
					url: '/intranet/content1_view?w=u&wm_id=60'

				},
						{
					//title: "한국산업기술기획평가…",
					description: "한국산업기술기획평가…",
					start: '2023-08-21',
					end: "2023-08-21",
					color: "#9fa0a0",
					className: "eventBtn ",
					url: '/intranet/content1_view?w=u&wm_id=59'

				},
						{
					//title: "삼성SDI연구소",
					description: "삼성SDI연구소",
					start: '2023-08-08',
					end: "2023-08-08",
					color: "#9fa0a0",
					className: "eventBtn ",
					url: '/intranet/content1_view?w=u&wm_id=57'

				},
						{
					//title: "지에프에스",
					description: "지에프에스",
					start: '2023-08-21',
					end: "2023-08-21",
					color: "#9fa0a0",
					className: "eventBtn ",
					url: '/intranet/content1_view?w=u&wm_id=56'

				},
						{
					//title: "성신여대",
					description: "성신여대",
					start: '2023-08-08',
					end: "2023-08-08",
					color: "#9fa0a0",
					className: "eventBtn ",
					url: '/intranet/content1_view?w=u&wm_id=55'

				},
						{
					//title: "보임코퍼레이션",
					description: "보임코퍼레이션",
					start: '2023-08-29',
					end: "2023-08-29",
					color: "#9fa0a0",
					className: "eventBtn ",
					url: '/intranet/content1_view?w=u&wm_id=54'

				},
						{
					//title: "서울시청",
					description: "서울시청",
					start: '2023-09-06',
					end: "2023-09-06",
					color: "#9fa0a0",
					className: "eventBtn ",
					url: '/intranet/content1_view?w=u&wm_id=52'

				},

						{
					title: "윤나라 과장 월차 휴무",
//					description: "월차 휴무",
					start: '2023-08-25',
					end: "2023-08-26",
					color: "#fffff",
					className: "eventBtn1",
					url: '/intranet/content7_view?wm_id=37'

				},
						{
					title: "김은광 대리 월차 휴무",
//					description: "월차 휴무",
					start: '2023-09-26',
					end: "2023-09-27",
					color: "#fffff",
					className: "eventBtn1",
					url: '/intranet/content7_view?wm_id=36'

				},
						{
					title: "  월차 휴무",
//					description: "월차 휴무",
					start: '2023-07-25',
					end: "2023-07-29",
					color: "#fffff",
					className: "eventBtn1",
					url: '/intranet/content7_view?wm_id=27'

				},
						{
					title: "  오전 반차",
//					description: "오전 반차",
					start: '2023-07-26',
					end: "2023-07-27",
					color: "#fffff",
					className: "eventBtn1",
					url: '/intranet/content7_view?wm_id=23'

				},
						{
					title: "  오전 반차",
//					description: "오전 반차",
					start: '2023-07-26',
					end: "2023-07-27",
					color: "#fffff",
					className: "eventBtn1",
					url: '/intranet/content7_view?wm_id=22'

				},
						{
					title: "  월차 휴무",
//					description: "월차 휴무",
					start: '2023-07-10',
					end: "2023-07-11",
					color: "#fffff",
					className: "eventBtn1",
					url: '/intranet/content7_view?wm_id=21'

				},
						{
					title: "  월차 휴무",
//					description: "월차 휴무",
					start: '2023-06-08',
					end: "2023-06-08",
					color: "#fffff",
					className: "eventBtn1",
					url: '/intranet/content7_view?wm_id=10'

				},
						{
					title: "  월차 휴무",
//					description: "월차 휴무",
					start: '2023-06-23',
					end: "2023-06-24",
					color: "#fffff",
					className: "eventBtn1",
					url: '/intranet/content7_view?wm_id=7'

				},
						{
					title: "  오전 반차",
					start: '2023-06-14',
					end: "2023-06-15",
					color: "#fffff",
					className: "eventBtn1",
					url: '/intranet/content7_view?wm_id=5'

				},
						{
					title: "  월차 휴무",
					start: '2023-05-03',
					end: "2023-05-04",
					color: "#fffff",
					className: "eventBtn1",
					url: '/intranet/content7_view?wm_id=1'

				},
				]
	});


});
</script>

<?php
	include_once PATH."/inc/tail.sub.php";
?>