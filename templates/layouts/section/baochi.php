<section class="baochi">
    <div class="titleDV">
        <span class="gachchan">BÁO CHÍ NÓI GÌ VỀ CHÚNG TÔI</span>
    </div>
    <div class="tintuc-tin container">
        <div class="row">
            <div class="owl-carousel owl-theme item" id="owl-baochi">
                <?php foreach($baochi as $key => $value){ ?>
                <div class="tintuc-tin-sp">
                    <a href="<?= $value['type']?>/<?= $value['tenkhongdau']?>">
                        <div class="hoversofa">
                            <img src="<?= _thumbs?>/285x285x1/<?= _upload_baiviet_l.$value['photo']?>" alt="">


                        </div>

                        <div class="wrapper-album__box-overflow">

                            <div class="wrapper-album__box-overflow-title line-2">

                                <span><?=$value['ten']?></span>

                            </div>

                        </div>
                    </a>
                </div>
                <?php }?>
            </div>
        </div>
    </div>
    <div class="buttonxemthem pb40">
        <a href="bao-chi" class="btbaochi focus-button-bg">Xem thêm</a>
    </div>



</section>