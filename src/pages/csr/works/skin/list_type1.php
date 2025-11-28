  <?php
	$_dep = array(2,2,1);
	$_tit = array('WORKS','스킨 목록','LIST','LIST TYPE1');
	$_txt = array('자주 사용하는 디자인 스킨 정리');
	include_once "../../../inc/common.php";
	include_once PATH."/inc/top.sub.php";
?>

<div class="worksTitle">
	<h4><?=$_tit[3]?></h4>
</div>

<style>
.listType1{margin: -13px;}
.listType1 li{display: inline-block;vertical-align: top;width: 25%;padding: 13px;box-sizing:border-box;}
.listType1 li .link{text-decoration: none;}
.listType1 li .imgBox{position: relative;background-size: contain !important;}
.listType1 li .imgBox:after{display: block;content: '';width: 100%;height: 100%;position: absolute;top:0;left:0;box-sizing:border-box;border:0px solid transparent;transition: all 0.1s;}
.listType1 li .imgBox img{width: 100%;height: auto;}
.listType1 li .imgBox .sale{position: absolute;top:15px;left:15px;width: 42px;height: 42px;border-radius:50%;text-align: center;line-height: 42px;background: #7D38FF;color: #fff;}
.listType1 li .textBox{margin-top: 25px;}
.listType1 li .textBox .iconBox{display:flex;gap:4px}
.listType1 li .textBox .icon{display: inline-flex;align-items: center;justify-content:center;width: 40px;height: 18px;border-radius:3px;background: #333;color: #fff;font-size: 11px;text-align: center;}
.listType1 li .textBox .icon:first-child{margin-left: 0;}
.listType1 li .textBox .icon.type1{background: #7D38FF;}
.listType1 li .textBox .icon.type2{background: #F65077;}
.listType1 li .textBox .subj{margin: 10px 0;font-size: 17px;color: #333;overflow: hidden;display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;letter-spacing: -0.03em;}
.listType1 li .textBox .price >*{display: inline-block;vertical-align: middle;}
.listType1 li .textBox .price .half{font-size: 14px;text-decoration: line-through;color: #88;}
.listType1 li .textBox .price strong{font-size: 18px;color: #a91939;margin-left: 8px;}
.listType1 li .textBox .rating{font-size: 0;margin-top: 10px;}
.listType1 li .textBox .rating >*{display: inline-block;vertical-align: middle;}
.listType1 li .textBox .rating .rtext{font-size: 13px;color: #666;margin-left: 7px;}
.listType1 li .textBox .rating .rtext strong{font-size: 14px;line-height: 22px;color: #333;font-weight: 500;}
.listType1 li .link:hover .imgBox:after{border: 4px solid #7D38FF;}
.listType1 li .link:hover .textBox .subj{color: #a91939;}
</style>


<ul class="listType1">
	<li>
		<a href="#" class="link">
			<div class="imgBox" style="background: url(<?=DIR?>/images/skin/thumb400x400.png) no-repeat 50% 50%;">
				<div class="sale">20%</div>
				<img src="<?=DIR?>/images/thumb400x400.png" style="visibility: hidden;" />
			</div>
			<div class="textBox">
				<div class="iconBox">
					<span class="icon type1">NEW</span>
					<span class="icon type2">BEST</span>
				</div>
				<div class="subj">상품명 노출 영역입니다 상품명 노출 영역입니다 상품명 노출 영역입니다 상품명 노출 영역입니다</div>
				<div class="price">
					<span class="half">79,000 원</span>
					<strong>63,200 원</strong>
				</div>
				<div class="rating">
					<div class="starBox">
						<img src="<?=DIR?>/images/skin/rating-star-on.gif" alt="★">
						<img src="<?=DIR?>/images/skin/rating-star-on.gif" alt="★">
						<img src="<?=DIR?>/images/skin/rating-star-on.gif" alt="★">
						<img src="<?=DIR?>/images/skin/rating-star-on.gif" alt="★">
						<img src="<?=DIR?>/images/skin/rating-star-off.gif" alt="☆">
					</div>
					<div class="rtext">
						<strong>4.8</strong> (128)
					</div>
				</div>
			</div>
		</a>
	</li>

	<li>
		<a href="#" class="link">
			<div class="imgBox" style="background: url(<?=DIR?>/images/skin/thumb400x400.png) no-repeat 50% 50%;">
				<div class="sale">20%</div>
				<img src="<?=DIR?>/images/thumb400x400.png" style="visibility: hidden;" />
			</div>
			<div class="textBox">
				<div class="iconBox">
					<span class="icon type1">NEW</span>
					<span class="icon type2">BEST</span>
				</div>
				<div class="subj">상품명 노출 영역입니다 상품명 노출 영역입니다 상품명 노출 영역입니다 상품명 노출 영역입니다</div>
				<div class="price">
					<span class="half">79,000 원</span>
					<strong>63,200 원</strong>
				</div>
				<div class="rating">
					<div class="starBox">
						<img src="<?=DIR?>/images/skin/rating-star-on.gif" alt="★">
						<img src="<?=DIR?>/images/skin/rating-star-on.gif" alt="★">
						<img src="<?=DIR?>/images/skin/rating-star-on.gif" alt="★">
						<img src="<?=DIR?>/images/skin/rating-star-on.gif" alt="★">
						<img src="<?=DIR?>/images/skin/rating-star-off.gif" alt="☆">
					</div>
					<div class="rtext">
						<strong>4.8</strong> (128)
					</div>
				</div>
			</div>
		</a>
	</li>

  <li>
		<a href="#" class="link">
			<div class="imgBox" style="background: url(<?=DIR?>/images/skin/thumb400x400.png) no-repeat 50% 50%;">
				<div class="sale">20%</div>
				<img src="<?=DIR?>/images/thumb400x400.png" style="visibility: hidden;" />
			</div>
			<div class="textBox">
				<div class="iconBox">
					<span class="icon type1">NEW</span>
					<span class="icon type2">BEST</span>
				</div>
				<div class="subj">상품명 노출 영역입니다 상품명 노출 영역입니다 상품명 노출 영역입니다 상품명 노출 영역입니다</div>
				<div class="price">
					<span class="half">79,000 원</span>
					<strong>63,200 원</strong>
				</div>
				<div class="rating">
					<div class="starBox">
						<img src="<?=DIR?>/images/skin/rating-star-on.gif" alt="★">
						<img src="<?=DIR?>/images/skin/rating-star-on.gif" alt="★">
						<img src="<?=DIR?>/images/skin/rating-star-on.gif" alt="★">
						<img src="<?=DIR?>/images/skin/rating-star-on.gif" alt="★">
						<img src="<?=DIR?>/images/skin/rating-star-off.gif" alt="☆">
					</div>
					<div class="rtext">
						<strong>4.8</strong> (128)
					</div>
				</div>
			</div>
		</a>
	</li>

  <li>
		<a href="#" class="link">
			<div class="imgBox" style="background: url(<?=DIR?>/images/skin/thumb400x400.png) no-repeat 50% 50%;">
				<div class="sale">20%</div>
				<img src="<?=DIR?>/images/thumb400x400.png" style="visibility: hidden;" />
			</div>
			<div class="textBox">
				<div class="iconBox">
					<span class="icon type1">NEW</span>
					<span class="icon type2">BEST</span>
				</div>
				<div class="subj">상품명 노출 영역입니다 상품명 노출 영역입니다 상품명 노출 영역입니다 상품명 노출 영역입니다</div>
				<div class="price">
					<span class="half">79,000 원</span>
					<strong>63,200 원</strong>
				</div>
				<div class="rating">
					<div class="starBox">
						<img src="<?=DIR?>/images/skin/rating-star-on.gif" alt="★">
						<img src="<?=DIR?>/images/skin/rating-star-on.gif" alt="★">
						<img src="<?=DIR?>/images/skin/rating-star-on.gif" alt="★">
						<img src="<?=DIR?>/images/skin/rating-star-on.gif" alt="★">
						<img src="<?=DIR?>/images/skin/rating-star-off.gif" alt="☆">
					</div>
					<div class="rtext">
						<strong>4.8</strong> (128)
					</div>
				</div>
			</div>
		</a>
	</li>

</ul>


<?php
	include_once PATH."/inc/tail.sub.php";
?>
