<section class="hoatdong"
    style="background-image: url(<?= _upload_hinhanh_l.$bg_dichvu['photo']?>) !important; background-size:cover;">
    <div class="titleDV">
        <img src="<?= _upload_hinhanh_l.$icon_dv['photo']?>" alt="" class="pr10">
        <span class="gachchan">DỊCH VỤ CỦA CHÚNG TÔI</span>
    </div>
    <div class="tintuc-tin container">
        <div class="owl-carousel owl-theme row item" id="owl-hoatdong">
            <?php foreach($dichvu as $key => $value){ ?>
            <div class="pt30 pb30">

                <div class="wrappers-quotes__box">

                    <div class="wrappers-quotes__box-img p-relative">

                        <a href="<?= $value['type']?>/<?= $value['tenkhongdau']?>" rel="dofollow" class="hover-left">

                            <img loading="lazy" src="<?= _upload_baiviet_l.$value['photo']?>" <?=$func->errorImg()?>>
                            <!--loading="lazy" là giảm tải cho web , khi kéo xuống tới nơi mới hiện ảnh

$func->errorImg() là khi ảnh k có sẽ hiện hình iweb dofollow là web k đi link ra trang web khác còn nofollow thì đi web khác , nofollow kèm theo target blank -->
                        </a>
                    </div>
                    <div class="wrappers-quotes__box-detail">
                        <h3 class="wrappers-quotes__box-detail-title line-1 line-2-m mg0">
                            <a href="<?= $value['type']?>/<?= $value['tenkhongdau']?>" rel="dofollow"
                                title="BÁO GIÁ XÂY DỰNG BIỆT THỰ"><?= $value['ten']?></a>
                        </h3>
                    </div>
                </div>
            </div>
            <?php }?>
        </div>
    </div>



</section>