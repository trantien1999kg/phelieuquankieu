<section class="quytrinhlamviec"
    style="background-image: url(<?= _upload_hinhanh_l.$bg_quytrinh['photo']?>) !important; background-size:cover;">
    <div class="container">
        <div class="row">
            <div class="titleQT col-12">
                <img src="<?= _upload_hinhanh_l.$icon_qt['photo']?>" alt="" class="pr10">
                <span class="gachchan">QUY TRÌNH LÀM VIỆC</span>
            </div>
            <div class="item col-12 css display-flex display-block-mobile pb100 pt50">
                <span class="thanhngang">

                </span>
                <?php foreach($quytrinh as $key => $value){ ?>
                <?php if ($key % 2 == 1) { ?>
                <div class="col-2dot4 col-12mobile above quytrinh center ">
                    <div class="wibu line-3">
                        <h3><?= $value['ten'] ?></h3>
                    </div>
                    <div class="vongtron-up">
                        <p><?= $value['stt'] ?></p>
                        <div class="thumb">
                            <img src="<?= _upload_baiviet_l.$value['photo']?>" alt="" class="iconquytrinh"> 
                        </div>
                    </div>
                    <p class="d-none d-block-mobile">&#8601;</p>

                </div>
                <?php  } else { ?>
                <div class="col-2dot4 col-12mobile below quytrinh  center ">
                    <div class="vongtron-down">
                        <p><?= $value['stt'] ?></p>
                        <div class="thumb">
                            <img src="<?= _upload_baiviet_l.$value['photo']?>" alt="" class="iconquytrinh">
                        </div>
                        
                    </div>
                    <p class="d-none d-block-mobile">&#8600;</p>
                    <div class="fanmu line-3">
                        <h3><?= $value['ten'] ?></h3>
                    </div>
                </div>
                <?php  }  ?>
                <?php }?>
            </div>
        </div>
    </div>
</section>