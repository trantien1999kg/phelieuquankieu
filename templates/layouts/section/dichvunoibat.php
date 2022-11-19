<section class="dichvunoibat" style="background-image: url(<?= _upload_hinhanh_l.$bg_dichvu['photo']?>) !important; background-size:cover;">
    <div class="title area-index">
        <a href="dich-vu" class="titleSP">
            <img src="<?=_upload_hinhanh_l.$icon_sp['photo']?>" alt="">
            <h2>DỊCH VỤ NỔI BẬT</h2>
        </a>
    </div>
    <div class="container">
        <div class="row">
            <?php foreach($dichvu as $key => $value){ ?>
            <?php if ($key % 2 == 0) { ?>
            <div class="khungdichvu col-12 pb85 item">
                <div class="dichvu-left col-6 wow slideInLeft">
                    <div class="section-service__box ">
                        <div class="section-service__box-detail "
                            style="background-image: url(<?= _upload_hinhanh_l.$bg_khungmotadichvu['photo']?>) !important; background-size:cover;">
                            <div class="section-service__box-title pb30 p-relative">
                                <h4>
                                    <a href="<?= $value['type']?>/<?= $value['tenkhongdau']?>" class="tendv"
                                        title=" <?= $value['ten'] ?>"> <?= $value['ten'] ?></a>
                                </h4>
                            </div>
                            <div class="section-service__box-content line-5 motadv">
                                <?= htmlspecialchars_decode($value['mota']) ?>
                            </div>
                            <span class="section-service__box-btn">

                                <a class="focus-button" href="<?= $value['type']?>/<?= $value['tenkhongdau']?>"
                                    title="Xem thêm">Xem thêm</a>

                            </span>

                        </div>
                    </div>
                </div>
                <div class="dichvu-right col-6">
                    <div class="section-service__box-image hover-left">
                        <a href="<?= $value['type']?>/<?= $value['tenkhongdau']?>">
                            <img src="<?= _upload_baiviet_l.$value['photo']?>">
                        </a>
                    </div>
                </div>
            </div>
            <?php  } else { ?>
            <div class="khungdichvu col-12 pb85 item">
                <div class="dichvu-right col-6">
                    <div class="section-service__box-image hover-left">
                        <a href="<?= $value['type']?>/<?= $value['tenkhongdau']?>">
                            <img src="<?= _upload_baiviet_l.$value['photo']?>">
                        </a>
                    </div>
                </div>
                <div class="dichvu-left col-6 section-service__box-pl">
                    <div class="section-service__box section-service__box-right ">
                        <div class="section-service__box-detail section-service__box-detail-right"
                            style="background-image: url(<?= _upload_hinhanh_l.$bg_khungmotadichvu['photo']?>) !important; background-size:cover;">
                            <div class="section-service__box-title pb30 p-relative">
                                <h4>
                                    <a href="<?= $value['type']?>/<?= $value['tenkhongdau']?>" class="tendv"
                                        title=" <?= $value['ten'] ?>"> <?= $value['ten'] ?></a>
                                </h4>
                            </div>
                            <div class="section-service__box-content line-4 motadv">
                                <?= htmlspecialchars_decode($value['mota']) ?>
                            </div>
                            <span class="section-service__box-btn">

                                <a class="focus-button" href="<?= $value['type']?>/<?= $value['tenkhongdau']?>"
                                    title="Xem thêm">Xem thêm</a>

                            </span>

                        </div>
                    </div>
                </div>
            </div>
            <?php  }  ?>
            <?php }?>
        </div>
        <div class="buttonHAHD mt-53 pb30">
            <a href="dich-vu" class="cssxemtatca focus-button-bg">Xem tất cả</a>
        </div>
    </div>
</section>