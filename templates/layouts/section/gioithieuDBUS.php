<section class="gioithieu-homedecor" style="background-image: url(<?=_upload_hinhanh_l.$bg_gioithieu['photo']?>);">
    <div class="container">
        <div class="gioithieu-homedecor-top">
            <div class="row">
                <div class="gioithieu-homedecor-top-left pt50 col-6 item col-12mobile">
                    <div class="col-10 col-12mobile pt30mobile">
                        <a href="gioi-thieu" class="tieudeGT">
                            <p class="gtDBUS"><?=$gioithieuDBUS['ten']?></p>
                            <div class="namePDP pb20 chaychu">
                                <div class="chaychu1"><?= $row_setting['scrolltext1_vi']?></div>
                                <div class="chaychu2"><?= $row_setting['scrolltext2_vi']?></div>
                            </div>
                        </a>
                        <div class="gtDBUS">
                            <?= htmlspecialchars_decode($gioithieuDBUS['mota'])?>
                        </div>
                        <div class="display-flex justify-content-between pt30 pb30">
                            <?php foreach($icongioithieu as $key => $value){ ?>
                            <div class="iconGT align-items-center text-align-center">
                                <img src="<?= _upload_hinhanh_l.$value['photo']?>" class="wh63px mb10" alt="">
                                <p class="colorbg"><?= $value['ten']?></p>
                                <span class="bb"></span>
                            </div>
                            <?php }?>
                        </div>
                        <a href="gioi-thieu" class="buttonmobile"><button class="mb30 buttonGT"><span>XEM
                                    THÊM</span></button></a>
                    </div>
                </div>

                <div class="gioithieu-homedecor-top-right pt50 flex45 item d-nonemobile">
                    <img width="553" height="469" class="mobile-none"
                        src="<?=_upload_hinhanh_l.$gioithieuDBUS['photo']?>" alt="">
                </div>
            </div>
        </div>
    </div>
</section>