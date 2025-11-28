<?
	$_dep = array(2,1);
	$_tit = array('WORKS','Masonry');
	//$_txt = array('작업소스 정리');
	include_once "../../../inc/common.php";
	include_once PATH."/inc/top.sub.php";
?>
<script type="text/javascript" src="<?=DIR?>/js/masonry.js?<?php echo date('Ymd'); ?>"></script>

<style>
.masonryList{overflow: hidden;margin: -5px;}
.masonryList li{float: left;width: 20%;padding: 5px;-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;}
.masonryList li img{width: 100%;}

@media all and (max-width: 1300px){
	.masonryList li{width: 25%;}
}

@media all and (max-width: 750px){
	.masonryList li{width: 50%;}
}
</style>

<ul class="masonryList">
	<li>
		<a href="#">
			<img src="<?=DIR?>/images/thumb500x500.gif" alt="">
		</a>
	</li>
	<li>
		<a href="#">
			<img src="<?=DIR?>/images/thumb500x300.gif" alt="">
		</a>
	</li>
	<li>
		<a href="#">
			<img src="<?=DIR?>/images/thumb500x500.gif" alt="">
		</a>
	</li>
	<li>
		<a href="#">
			<img src="<?=DIR?>/images/thumb500x500.gif" alt="">
		</a>
	</li>
	<li>
		<a href="#">
			<img src="<?=DIR?>/images/thumb500x300.gif" alt="">
		</a>
	</li>
	<li>
		<a href="#">
			<img src="<?=DIR?>/images/thumb500x500.gif" alt="">
		</a>
	</li>
	<li>
		<a href="#">
			<img src="<?=DIR?>/images/thumb500x500.gif" alt="">
		</a>
	</li>
	<li>
		<a href="#">
			<img src="<?=DIR?>/images/thumb500x300.gif" alt="">
		</a>
	</li>
	<li>
		<a href="#">
			<img src="<?=DIR?>/images/thumb500x500.gif" alt="">
		</a>
	</li>
	<li>
		<a href="#">
			<img src="<?=DIR?>/images/thumb500x300.gif" alt="">
		</a>
	</li>
	<li>
		<a href="#">
			<img src="<?=DIR?>/images/thumb500x300.gif" alt="">
		</a>
	</li>
	<li>
		<a href="#">
			<img src="<?=DIR?>/images/thumb500x500.gif" alt="">
		</a>
	</li>
	<li>
		<a href="#">
			<img src="<?=DIR?>/images/thumb500x300.gif" alt="">
		</a>
	</li>
	<li>
		<a href="#">
			<img src="<?=DIR?>/images/thumb500x300.gif" alt="">
		</a>
	</li>
	<li>
		<a href="#">
			<img src="<?=DIR?>/images/thumb500x500.gif" alt="">
		</a>
	</li>
	<li>
		<a href="#">
			<img src="<?=DIR?>/images/thumb500x300.gif" alt="">
		</a>
	</li>
</ul>

<script>
var masonryList = {
	init : function(){
		this.action();
	},
	action : function(){

		$grid = $('.masonryList').masonry({
			itemSelector: '.masonryList li',
			columnWidth: '.masonryList li',
			percentPosition: true
		});

		$('.masonryList').imagesLoaded(function(){
			$grid.masonry('layout');
		});
	}
};


masonryList.init();


</script>
<?php
	include_once PATH."/inc/tail.sub.php";
?>
