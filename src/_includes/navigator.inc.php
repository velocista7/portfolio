

          <div id="navigator">
              <ul>
                <li>
                  <a href="<?=DIR?>/">
                    <i class="axi axi-home"></i>
                  </a>
                </li>
                <li class="d1">
                  <a href="#"><?=$_tit[0]?></a>
                </li>
                <?php if(isset($_dep[1]) && $_dep[1]>0){ ?>
                <li class="d2">
                  <a href="#"><?=$_tit[1]?></a>
                </li>
                <?php } ?>
              </ul>
          </div>
