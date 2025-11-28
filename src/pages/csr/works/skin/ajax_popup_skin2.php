  <?php
	$_dep = array(2,2,1);
	$_tit = array('WORKS','스킨 목록','INPUT & FORM','AJAX 팝업 스킨 Type2');
	$_txt = array('자주 사용하는 디자인 스킨 정리');
	include_once "../../../inc/common.php";
	include_once PATH."/inc/top.sub.php";
?>

<div class="worksTitle">
	<h4><?=$_tit[3]?></h4>
</div>

<style>
.ajaxPop2{position: fixed;top: 50%;left: 50%;width: 600px;height: 500px;margin-top: -250px;margin-left: -300px;padding-top: 46px;z-index: 301;background: #fff;border-radius: 5px;overflow: hidden;box-sizing: border-box;opacity: 0;transition: all 0.3s;box-shadow: 0 0 10px rgba(0,0,0,0.1);}
.ajaxPop2 .pop-tit{position: absolute;top: 0;left: 0;width: 100%;height: 45px;background: #f7f7f7;padding: 0 15px;border-bottom: 1px solid #ddd;box-sizing: border-box;}
.ajaxPop2 .pop-tit h3{font-size: 15px;color: #000;font-weight: 500;line-height: 45px;}
.ajaxPop2 .pop-tit .close{display: block;position: absolute;top: 0;right: 0;width: 44px;height: 44px;line-height: 44px;text-align: center;font-size: 16px;color: #666;background: #eee;border-left: 1px solid #ddd;}
.ajaxPop2 .pop-wrap{height: 100%;overflow-y: auto;padding: 15px;box-sizing: border-box;}
.ajaxPop2.on{opacity: 1;}
.ajaxPop2BG{position: fixed;top: 0;left: 0;width: 100%;height: 100%;z-index: 300;background: rgba(0,0,0,0.5);opacity: 0;transition: all 0.3s;}
.ajaxPop2BG.on{opacity: 1;}

@media screen and (max-width: 1400px){
    .ajaxPop2{top: 5%;left: 5%;width: 90%;height: 90%;margin-top: 0;margin-left: 0;padding-top: 41px;}
    .ajaxPop2 .pop-tit{height: 40px;padding: 0 10px;}
    .ajaxPop2 .pop-tit h3{font-size: 13px;line-height: 40px;}
    .ajaxPop2 .pop-tit .close{width: 39px;height: 39px;line-height: 39px;font-size: 13px;}
    .ajaxPop2 .pop-wrap{height: 100%;overflow-y: auto;padding: 15px;box-sizing: border-box;}
    .ajaxPop2.on{opacity: 1;}
    .ajaxPop2BG{position: fixed;top: 0;left: 0;width: 100%;height: 100%;z-index: 300;background: rgba(0,0,0,0.5);opacity: 0;transition: all 0.3s;}
    .ajaxPop2BG.on{opacity: 1;}
}
</style>

<div class="tab1">
	<a href="#" data-ajaxpop="./ajax_popup2.php">팝업 버튼</a>
</div>

<script>
//AJAX POPUP
ajaxpop2 = {
	'init' : function(){
		this.action();
	},
	'action' : function(){
		var $ele = {
			'btn' : $('*[data-ajaxpop]'),
			'pop' : $('<div class="ajaxPop2"></div>'),
			'bg' : $('<div class="ajaxPop2BG"></div>')
		}
        //open
		$ele.btn.on({
			'click' : function(e){
				e.preventDefault();
                var src = $(this).data('ajaxpop');
				$('body')
                .append($ele.bg)
                .append($ele.pop);
                $('.ajaxPop2').load(src,function(){
                    $('.ajaxPop2').addClass('on');
                    $('.ajaxPop2BG').addClass('on');
                });
			}
		});
        //close
        $(document).on('click','.ajaxPop2 .close, #popupBG',function(e){
            e.preventDefault();
            $('.ajaxPop2').removeClass('on').remove();
            $('.ajaxPop2BG').removeClass('on').remove();
        })

	}
}
$(function(){
    ajaxpop2.init();
})
</script>


<?php
	include_once PATH."/inc/tail.sub.php";
?>
