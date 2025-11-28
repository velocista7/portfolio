<body>

	<div id="wrap">
		<!-- s:header -->
		<?php include_once PATH."/inc/head.php"; ?>
		<!-- e:header -->

		<section id="sub">

			<div class="sub-vis" style="background-image: url('<?=DIR?>/images/layout/sub-visual.jpg');">
				<h2>
					<?=$_tit[0]?>
					<em><?=$_txt[0]?></em>
				</h2>
			</div>

			<div id="content">

				<!-- lnb -->
                <div class="lnbWrap left">
                    <h2><?=$_tit[0]?></h2>
    				<ul id="lnb"></ul>
    			</div>

				<div id="subCont">

					<div class="sub-tit">
						<h3><?=$_tit[1]?></h3>
						<?php include PATH."/inc/status.inc.php"; ?>
					</div>
