<section class="hinhanhhoatdong pt50">
    <div class="container">
        <div class="row">
            <div class="titleHAHD item">
                <a href="hinh-anh-hoat-dong" class="titleHA">
                    <img src="<?=_upload_hinhanh_l.$icon_hahd['photo']?>" alt="">
                    <h2 class="gachchan">HÌNH ẢNH THỰC TẾ</h2>
                </a>
            </div>
            <div class="col-12 khung item">

                <div class="lienhe col-12 col-12mobile">
                    <div class=" pb48 bgwhitetrans">
                        <?php foreach($hahd as $key => $value){ ?>
                        <?php if ($key == 0 ) { ?>
                        <div class="thongtinlienhe bigimg col-6">
                            <a href="<?= _upload_baiviet_l.$value['photo']?>" data-fancybox="image" class="hover-left">
                                <img src="<?= _thumbs?>/589x504x1/<?= _upload_baiviet_l.$value['photo']?>" alt=""
                                    class="iconlienhe">
                            </a>
                            
                        </div>
                        <?php }if ($key == 1 || $key == 2) { ?>
                        <div class="thongtinlienhe smallimgtrai col-3">
                            <a href="<?= _upload_baiviet_l.$value['photo']?>" data-fancybox="image" class="hover-left">
                                <img src="<?= _thumbs?>/288x243x1/<?= _upload_baiviet_l.$value['photo']?>" alt=""
                                    class="iconlienhe">
                            </a>
                            
                        </div>
                        <?php  } if ($key == 3 || $key == 4)  { ?>
                        <div class="thongtinlienhe smallimgphai col-3">
                            <a href="<?= _upload_baiviet_l.$value['photo']?>" data-fancybox="image" class="hover-left">
                                <img src="<?= _thumbs?>/288x243x1/<?= _upload_baiviet_l.$value['photo']?>" alt=""
                                    class="iconlienhe">
                            </a>
                            
                        </div>
                        <?php  }  ?>
                        <?php }?>
                    </div>
                </div>

            </div>

        </div>
        <div class="buttonHAHD">
            <a href="hinh-anh-hoat-dong" class="cssxemtatca focus-button-bg">Xem tất cả</a>
        </div>
    </div>
</section>