<section class="section__why pt38 pb35 pt20i pb20i"
    style="background-image: url(<?=_upload_hinhanh_l.$bg_gioithieu['photo']?>); background-size: cover;">
    <div class="container">
        <div class="row">
            <div class="visao item col-6 pb40 col-12mobile item ">
                <img src="<?=_upload_hinhanh_l.$gioithieuDBUS['photo']?>" alt="">
                <div class="col-9 imgGT">
                    <div class=" owl-carousel owl-theme carousel-product-news col-m-10" id="owl-gioithieu">
                        <?php foreach($hinhanhgioithieu as $key => $value){ ?>
                        <img src="<?= _thumbs?>/455x342x1/<?= _upload_baiviet_l.$value['photo']?>" alt="" class="border10">
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class=" col-6 col-12mobile pt30 item ">
                <a href="gioi-thieu" class="tieudeGT mb40 mb20i">
                    <span class="gachchan">
                        <img src="<?=_upload_hinhanh_l.$icon_gt['photo']?>" alt="" class="pr10 mt5">
                    </span>
                    <div class="tenGT">
                        <?=$gioithieuDBUS['ten']?>
                    </div>
                </a>
                <div class="gtDBUS">
                    <?= htmlspecialchars_decode($gioithieuDBUS['mota'])?>
                </div>
                <div class="center pt40 pt20i">
                    <a href="gioi-thieu" class="buttonmobile"><button class="mb30 buttonGT focus-button-bg"><span>Xem
                                thêm</span></button></a>

                </div>
            </div>

        </div>
    </div>
</section>