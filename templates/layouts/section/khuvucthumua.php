<section class="hoatdong"
    style="background-image: url(<?= _upload_hinhanh_l.$bg_khuvuc['photo']?>) !important; background-size:cover;">
    <a href="khu-vuc">
        <div class="titleDV pb60">
            <img src="<?= _upload_hinhanh_l.$icon_khuvuc['photo']?>" alt="" class="pr10 pl10">
            <span class="gachchan">KHU VỰC THU MUA</span>
        </div>
    </a>
    <div class="container">
        <div class="row">
            <div class="col-12 item">
                <div class="grid-danhmuc gap20 gap10mobile gap10-sm">
                    <?php foreach($khuvucnoibat as $key => $value){ ?>
                    <div class="pt30 pb60 span3 span12-sm d-flex flex-column">
                        <div class="wrappers-quotes__box">
                            <div class="wrappers-quotes__box-img p-relative">
                                <a href="<?= $value['type']?>/<?= $value['tenkhongdau']?>" rel="dofollow"
                                    class="hover-left">
                                    <img loading="lazy" src="<?= _upload_baiviet_l.$value['photo']?>"
                                        <?=$func->errorImg()?>>
                                    <!--loading="lazy" là giảm tải cho web , khi kéo xuống tới nơi mới hiện ảnh
$func->errorImg() là khi ảnh k có sẽ hiện hình iweb dofollow là web k đi link ra trang web khác còn nofollow thì đi web khác , nofollow kèm theo target blank -->
                                </a>
                            </div>
                            <div class="wrappers-quotes__box-detail">
                                <h3 class="wrappers-quotes__box-detail-title mg0">
                                    <a href="<?= $value['type']?>/<?= $value['tenkhongdau']?>" class="line-2 " rel="dofollow"
                                        title="BÁO GIÁ XÂY DỰNG BIỆT THỰ"><?= $value['ten']?></a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <?php }?>
                </div>
            </div>

        </div>
        <div class="buttonDM">
            <a href="khu-vuc" class="xemtatcaDM focus-button-bg">
                Xem tất cả
            </a>
        </div>
    </div>
</section>