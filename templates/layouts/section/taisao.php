<section class="taisaonenhoptacvoichungtoi pb75 pb20i pt20i pt40"
    style="background-image: url(<?=_upload_hinhanh_l.$bg_taisao['photo']?>);  background-size: cover;">
    
    <div class="container">
        <a class="tieudeBG ">
            <div class="pb60 pb20i center">
                <span class="gachchan">
                    <img src="<?=_upload_hinhanh_l.$icon_taisao['photo']?>" alt="" class="pr10 mt5">
                </span>
                <div class="tenTS">
                    TẠI SAO NÊN HỢP TÁC VỚI CHÚNG TÔI
                </div>
            </div>
        </a>
        <div class="row ">
            <div class="col-12 item">
                <div class="grid-taisao gap20 gap10mobile gap10-sm">
                    <?php foreach($taisao as $k=>$v){ ?>
                    <div class="span3 span12-sm d-flex taisao">
                        <div class="iconTAISAO">
                            <img src="<?= _thumbs?>/66x66x2/<?= _upload_baiviet_l.$v['photo']?>" alt="<?=$v['ten']?>"
                                class="coverimg">
                        </div>
                        <div class="tenTAISAO line-1">
                            <?= $v['ten']?>
                        </div>
                        <span class="taisao_line"></span>
                        <div class="motaTAISAO line-5 mt10">
                            <?= htmlspecialchars_decode($v['mota'])?>
                        </div>
                    </div>
                    <?php }?>
                </div>
            </div>

        </div>
    </div>
</section>