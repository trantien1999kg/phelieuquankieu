<section class="khacbiet pt50 pb50"
    style="background-image: url(<?= _upload_hinhanh_l . $bg_khacbiet['photo'] ?>) !important; background-size:cover;">
    <div class="container">
        <div class="row">
            <div class="col-12 item">
                <div class="owl-carousel owl-theme row item  " id="owl-item">
                    <?php foreach($sukhacbiet as $key => $value){ ?>
                    <div class="danhgia">
                        <div class="khachhang col-6 col-12mobile">
                            <img src="<?= _upload_baiviet_l.$value['photo']?>" class="bigimg" alt="">
                        </div>
                        <div class="col-6 pl50 pl0mobile flex-column col-12mobile pt30mobile">
                            <p class="titleKhacbiet">SỰ KHÁC BIỆT CỦA</p>
                            <div class=" flex-column pb20">
                                <div class="display-flex nameDBUS">
                                    <div class="chaychu1"><?= $row_setting['scrolltext1_vi']?></div>
                                    <div class="chaychu2"><?= $row_setting['scrolltext2_vi']?></div>
                                </div>
                                <p class="motaKhacbiet pt35"><?= htmlspecialchars_decode($value['mota'])?></p>
                            </div>

                        </div>
                        
                    </div>
                    <?php }?>
                </div>
                
                <div class="col-12 display-flex">
                <div class="col-6"></div>
                    <div class="dotsNumber">
                        
                    <ul class="ul-list-none ul-article mb20 display-flex dots-center pt30mobile ">
                    <?php foreach($sukhacbiet as $key => $value){?>
                        <li>
                            <div class="side-article ">
                                <a href="javascript:void(0)" title="" class=" js-triggerslide d-flex"
                                    data-target="#owl-item" data-index="<?= $key?>">

                                        <div class="dot"><span><?= $value['stt']?></span>
                                    <span class="duongline"></span>
                                    </div>
                                        

                                </a>
                            </div>
                        </li>
                        <?php }?>
                    </ul>
                    
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>