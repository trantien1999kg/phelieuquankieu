<section class="banggiathumua pt40 pb60 pt20i pb20i"
    style="background-image: url(<?=_upload_hinhanh_l.$bg_banggia['photo']?>); margin-top: 16px; background-size: cover;">
    <a class="tieudBG ">
        <div class="pb60 pb20i center">
            <span class="gachchan">
                <img src="<?=_upload_hinhanh_l.$icon_banggia['photo']?>" alt="" class="pr10 mt5">
            </span>
            <div class="tenBG">
                BẢNG GIÁ THU MUA
            </div>
        </div>
    </a>
    <div class="container">
        <div class="row">
            <div class="col-12 item display-flex flex-column-mobile">
                <div class="col-6 col-12mobile flex-end pr25 pr0mobile centermobile">
                    <?php foreach($banggia as $key => $value){  
                            if($key == 0 ){?>
                    <div class="lienhethumuatren">
                        <div class="iconthumuaT">
                            <img src="<?=_upload_baiviet_l.$value['photo']?>" alt="">
                        </div>
                        <div class="ten-sdtT">
                            <p class="nameTHUMUAT"><?=$value['ten']?></p>
                            <div class="sdtTHUMUAT">
                                <?= htmlspecialchars_decode($value['mota'])?>
                            </div>
                        </div>
                    </div>
                    <?php } if($key == 1 ){?>
                    <div class="lienhethumuaduoi">
                        <div class="ten-sdtD">
                            <p class="nameTHUMUAD"><?=$value['ten']?></p>
                            <div class="sdtTHUMUAD">
                                <?= htmlspecialchars_decode($value['mota'])?>
                            </div>
                        </div>
                        <div class="iconthumuaD">
                            <img src="<?=_upload_baiviet_l.$value['photo']?>" alt="">
                        </div>

                    </div>
                    <?php }?>
                    <?php }?>

                </div>
                <div class="col-6 col-12mobile mt20 pl25 pl0mobile">
                    <div class="motalienhe line-5">
                        <?= htmlspecialchars_decode($lienhecompany["mota_$lang"])?>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>