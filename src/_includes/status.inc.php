

<div id="status">
	<ul class="inner">
		<li><a href="<?=DIR?>/"><i class="fa fa-home"></i> HOME</a></li>
		<li class="d1">
			<span class="spr">&gt;</span>
			<a href="#"><?=$_tit[0]?></a>
		</li>
		<?php if(isset($_dep[1]) && $_dep[1]>0){ ?>
		<li class="d2">
			<span class="spr">&gt;</span>
			<a href="#"><?=$_tit[1]?></a>
		</li>
		<?php } ?>
	</ul>
</div>

<script type="text/javascript">
$(document).ready(function(){
	//depth 1
	var d1_txt = '<?=$_tit[0]?>';
	var $d1 = '';
	$('#status li.d1').append('<ul>'+$('#gnb').html()+'</ul>');
	$('#status li.d1 > ul > li > ul').remove();
	$('#status li.d1 > a').attr('href',$('#gnb > li.active > a').attr('href'));

	//depth 2
	var d2_txt = '<?=$_tit[1]?>';
	var $d2 = '';
	$('#status li.d2').append('<ul>'+$('#gnb > li.active > ul').html()+'</ul>');
	$('#status li.d2 > a').attr('href',$('#gnb > li.active > ul > li.active > a').attr('href'));
})
</script>
