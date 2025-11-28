<?php
	$_dep = array(2,1);
	$_tit = array('WORKS','테스트');
	//$_txt = array('작업소스 정리');
	include_once "../../inc/common.php";
	include_once PATH."/inc/top.sub.php";
?>

<div class="worksTitle">
	<h4><?=$_tit[1]?></h4>
</div>
<style>
.list{display: flex;}
.list li{display: inline-flex;background: #600000;width: 100%;    align-items: center;margin-left: 10px;    justify-content: center;min-height:200px;}
.list li:nth-child(3n+1){margin-left: 0;}


nav {
  ul {
    margin: 0;
    padding: 0;
    list-style: none;
  }

  li { display: inline-block;padding: 30px;margin: 10px; background: #ddd;font-size: 16px;
    &:first-child{
        background:red;
        margin-right: 30px;
    }
    }

  a {
    display: block;
    padding: 6px 12px;
    text-decoration: none;
  }
}


.buttonTest/* Button */
{
/* Auto layout */
display: flex;
flex-direction: row;
justify-content: center;
align-items: center;
padding: 14px 24px;
gap: 8px;

width: 598px;
height: 52px;

background: #000000;
/* Button Shadow */
box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.05);
border-radius: 8px;

/* Inside auto layout */
flex: none;
order: 4;
align-self: stretch;
flex-grow: 0;

}




.btn2{
/* Button */

/* Auto layout */
display: flex;
flex-direction: row;
justify-content: center;
align-items: center;
padding: 14px 24px;
gap: 8px;

width: 99px;
height: 52px;

background: #000000;
/* Button Shadow */
box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.05);
border-radius: 8px;

/* Inside auto layout */
flex: none;
order: 3;
flex-grow: 0;


/* Button */

width: 51px;
height: 24px;

/* Small text

Small text
*/
font-family: 'Inter';
font-style: normal;
font-weight: 500;
font-size: 16px;
line-height: 150%;
/* identical to box height, or 24px */
display: flex;
align-items: center;

color: #FFFFFF;


/* Inside auto layout */
flex: none;
order: 0;
flex-grow: 0;


}
</style>

<div class="testdiv">
    <ul class="list">
        <li>test<br /><br/>test<br /><br/>test<br /><br/>test<br /><br/> test<br /><br/>test<br /><br/>test<br /><br/>test<br /><br/>test<br /><br/>test<br /><br/>test<br /><br/>test<br /><br/></li>
        <li>한글</li>
        <li>3</li>
    </ul>
</div>


<nav>
    <ul>
        <li><a href="#">1235</a></li>
        <li><a href="#">1235</a></li>
        <li><a href="#">1235</a></li>
    </ul>
</nav>

<button class="buttonTest">테스트</button>
<button class="btn2">테스트2</button>

<?php
	include_once PATH."/inc/tail.sub.php";
?>
