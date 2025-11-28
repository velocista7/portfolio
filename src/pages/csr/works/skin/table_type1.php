  <?php
	$_dep = array(2,3,1);
	$_tit = array('WORKS','스킨 목록','INPUT & FORM','테이블 스킨 Type1');
	//$_txt = array('작업소스 정리');
	include_once "../../../inc/common.php";
	include_once PATH."/inc/top.sub.php";
?>

<div class="worksTitle">
	<h4><?=$_tit[3]?></h4>
</div>


<style>
@media all and (min-width: 1280px) {
    .boardType1 tr:hover {
        background: rgba(204, 216, 239, 0.2);
    }
}

.boardType1 {
    table-layout: fixed;
    width: 100%;
    border-top: 2px solid #6C6C6C;
}
.boardType1.btm{border-top:1px solid #c7c7c7;}

.boardType1 tr {
    border-bottom: 1px solid #C7C7C7;
    transition: all 0.3s;
}

.boardType1 tr td {
    color: #1A1A1A;
    font-size: 20px;
    font-style: normal;
    font-weight: 400;
    line-height: 100%;
    /* 20px */
    letter-spacing: -0.8px;
    text-align: center;
    padding: 40px 0;

}

.boardType1 tr td.num {
    width: 100px;
}
.boardType1 tr td.num.long{width: 130px;}
.boardType1 tr td.num .noti{
    color: var(--GL-Blue, #003CB1);
    text-align: center;
    font-size: 20px;
    font-style: normal;
    font-weight: 700;
    line-height: 100%;
    /* 20px */
    letter-spacing: -0.8px;
}

.boardType1 tr td.state {
    width: 100px;
}

.boardType1 tr td.date {
    width: 350px;
}
.boardType1 tr td.date.min{
    width: 220px;
}

.boardType1 tr td.subj {
    position: relative;
    text-align: left;
    padding-left: 40px;
}
.boardType1 tr td.subj.plm{padding-left: 20px;}

.boardType1 tr td.subj .new {
    display: inline-block;
    vertical-align: middle;
    background: #E66100;
    padding: 4px;
    color: #FFF;
    text-align: center;
    font-size: 16px;
    font-style: normal;
    font-weight: 700;
    line-height: 100%;
    margin-left: 7px;
    /* 16px */
}

.boardType1 tr td.subj .link {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}

.boardType1 tr td.subj .title{font-size: inherit;color:inherit;}

.boardType1 tr td.subj .txt {
    display: inline-block;
    vertical-align: middle;
    max-width: calc(100% - 60px);
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    color: inherit;
    font-size: inherit;
    font-weight: 700;
}

.boardType1 .badge {
    display: flex;
    margin: 0 auto;
    justify-content: center;
    align-items: center;
    width: 62px;
    height: 32px;
    flex-shrink: 0;
    border: 1px solid #144EC8;
    color: #003CB1;
    text-align: center;
    font-size: 16px;
    font-style: normal;
    font-weight: 400;
    line-height: 100%;
    /* 16px */
}

.boardType1 .badge.end {
    color: #3C3C3C;
    border-color: #9D9D9D;
}

@media all and (max-width: 1280px) {
    .boardType1 tr td.num.long{width: 100px;}
    .boardType1 tr td{padding: 30px 0;font-size: 16px;}
    .boardType1 tr td.num{width: 70px;}
    .boardType1 tr td.state{width: 90px;}
    .boardType1 tr td.date{width: 280px;}
    .boardType1 tr td.subj{padding-left: 30px;}    
    .boardType1 tr td.subj .new{height: min-content;font-size: 14px;}
    .boardType1 .badge{width: 55px;padding: 0;font-size: 14px;}
}




@media all and (max-width: 800px) {

    .boardType1,
    .boardType1 tbody,
    .boardType1 tr,
    .boardType1 tr th,
    .boardType1 tr td {
        display: block;
        padding: 0;
    }

    .boardType1 tr {
        position: relative;
        padding: 20px 20px 65px 20px;
    }

    .boardType1 tr td{font-size: 14px;}
    .boardType1 tr td.num .noti{font-size: 14px;}
    .boardType1 tr td.subj {
        position: static;
        padding-left: 0;
        margin-bottom: 10px;
    }

    .boardType1 tr td.date {
        width: auto !important;
        text-align: left;
    }

    .boardType1 tr td.num {
        position: absolute;
        bottom: 20px;
        left: 20px;
        width: auto !important;
    }

    .boardType1 tr td.state {
        position: absolute;
        bottom: 20px;
        right: 20px;
        width: auto;
    }

    .boardType1 tr td.subj.plm{padding-left: 0;}
    .boardType1 tr td.subj .title{display: flex;}
    .boardType1 tr td.subj .txt{
        display:-webkit-box;
        -webkit-line-clamp:2;
        white-space: normal;
        -webkit-box-orient:vertical;
        overflow:hidden;
        text-overflow:ellipsis;
        line-height: 150%;
        max-width: 100%;        
    }    
}
</style>


<table class="boardType1">
    <tbody>
        <tr>
            <td class="num">4</td>
            <td class="state">
                <div class="badge ing">접수중</div>
            </td>
            <td class="subj">
                <a href="#" class="link"></a>
                <div class="title">
                    <p class="txt">[공채]  2024년 하반기 GL E&C 경력직 채용공고 글자 길이 테스트 글자 길이 테스트 글자 길이 테스트 글자 길이 테스트 글자 길이 테스트 글자 길이 테스트 글자 길이 테스트</p>
                    <span class="titst new">NEW</span>
                </div>
            </td>
            <td class="date">2024-04-26 ~ 2024-05-25</td>
        </tr>
        <tr>
            <td class="num">3</td>
            <td class="state">
                <div class="badge ing">접수중</div>
            </td>
            <td class="subj">
                <a href="#" class="link"></a>
                <div class="title">
                    <p class="txt">[공채]  2024년 하반기 GL E&C 경력직 채용공고 글자 길이 테스트 글자 길이 테스트 글자 길이 테스트 글자 길이 테스트 글자 길이 테스트 글자 길이 테스트 글자 길이 테스트</p>
                    <span class="titst new">NEW</span>
                </div>
            </td>
            <td class="date">2024-04-26 ~ 2024-05-25</td>
        </tr>
        <tr>
            <td class="num">2</td>
            <td class="state">
                <div class="badge ing">접수중</div>
            </td>
            <td class="subj">
                <a href="#" class="link"></a>
                <div class="title">
                    <p class="txt">[공채]  2024년 하반기 GL E&C 경력직 채용공고 글자 길이 테스트 글자 길이 테스트 글자 길이 테스트 글자 길이 테스트 글자 길이 테스트 글자 길이 테스트 글자 길이 테스트</p>
                </div>
            </td>
            <td class="date">2024-04-26 ~ 2024-05-25</td>
        </tr>
        <tr>
            <td class="num">1</td>
            <td class="state">
                <div class="badge end">마감</div>
            </td>
            <td class="subj">
                <a href="#" class="link"></a>
                <div class="title">
                    <p class="txt">[공채]  2024년 하반기 GL E&C 경력직 채용공고 글자 길이 테스트 글자 길이 테스트 글자 길이 테스트 글자 길이 테스트 글자 길이 테스트 글자 길이 테스트 글자 길이 테스트</p>
                </div>
            </td>
            <td class="date">2024-04-26 ~ 2024-05-25</td>
        </tr>
    </tbody>
</table>




<?php
	include_once PATH."/inc/tail.sub.php";
?>
