<section class="video-tintuc">
    <div class="container">
        <div class="titleTTSK col-12mobile mt40 center">
            <a href="tin-tuc" class="titleTT col-12mobile">
                <img src="<?=_upload_hinhanh_l.$icon_tintuc['photo']?>" alt="">
                <h2 class="gachchan">TIN TỨC</h2>
            </a>
        </div>
        <div class="row">
            <div class="col-6 mt40 mb50 mb10mobile item col-12mobile mt10mobile box-new  align-items-center pt5">
                <div class="col-12 col-12mobile box-new flex-column  ">
                    <?php foreach($tintuc as $k=>$v){ ?>
                    <?php if ($k == 0 ) { ?>

                    <div class="bocucdoc">

                        <div class="thumb_camnhan hover-left">
                            <a href="<?= $v['type']?>/<?= $v['tenkhongdau']?>">
                                <img src="<?= _thumbs?>/585x375x1/<?= _upload_baiviet_l.$v['photo']?>"
                                    alt="<?=$v['ten']?>" class="coverimg">
                            </a>
                        </div>

                        <div class="pdkhungtin">
                            <a href="<?= $v['type']?>/<?= $v['tenkhongdau']?>">
                                <div class="tencamnhanBIG line-1"><?=$v['ten']?></div>
                            </a>
                            <p class="thongtin mb10 mt15"><i class="fas fa-clock"></i>
                                <?=date('d/m/Y  ',$v['ngaytao'])?>
                            <p class="motatintucBIG line-3"><?= htmlspecialchars_decode($v['mota'])?></p>
                        </div>

                    </div>
                    <?php }?>
                    <?php }?>
                </div>
            </div>
            <div class="col-6 mt40 mt10mobile mb50 mt0mobile item col-12mobile box-new ">

                <div class="grid_camnhan gap30 gap10-sm col-12mobile">

                    <?php foreach($tintuc as $k=>$v){ ?>
                    <?php if ($k != 0 ) { ?>

                    <div class="bocucngang">

                        <div class="thumb_camnhan hover-left">
                            <a href="<?= $v['type']?>/<?= $v['tenkhongdau']?>">
                                <img src="<?= _thumbs?>/234x168x1/<?= _upload_baiviet_l.$v['photo']?>"
                                    alt="<?=$v['ten']?>" class="coverimg">
                            </a>
                        </div>

                        <div class="noidung mb15">
                            <a href="<?= $v['type']?>/<?= $v['tenkhongdau']?>">
                                <div class="tencamnhan line-2"><?=$v['ten']?></div>
                            </a>
                            <p class="in4 mb15 mt15 mt10mobile mb10mobile"><i class="fas fa-clock"></i>
                                <?=date('d/m/Y  ',$v['ngaytao'])?>
                            <p class="motatintuc line-3"><?= htmlspecialchars_decode($v['mota'])?></p>
                        </div>

                    </div>
                    <?php }?>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
</section>