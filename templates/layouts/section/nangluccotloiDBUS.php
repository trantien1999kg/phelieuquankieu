<section class="nangluc" style="background-image: url(<?= _upload_hinhanh_l . $bg_cotloi['photo'] ?>) !important; background-size:cover;">
    <div class="container">
        <div class="row flex-center">
            <div class="logocotloi pt30mobile">
                <h2 class="titleCotloi">NĂNG LỰC CỐT LÕI</h2>
                <img src="<?= _upload_hinhanh_l . $logo['photo_' . $lang] ?>" class="width110" />
            </div>
            <?php foreach ($nangluc as $key => $value) { ?>
                

                    <?php if ($key % 2 === 0) { ?>
                        <div class="col-6 pt100 pb100 pt20mobile pb20mobile  col-12mobile mr-160 mr-160">
                        <div class="flex-start">
                        <div class="tenNangluc">
                            <img src="<?= _upload_baiviet_l . $value['photo'] ?>" alt="" class="icon">
                            <div class="khungten">
                                <h3><?= $value['ten'] ?></h3>
                            </div>
                        </div>
                        <div class="motaNangluc ">
                            <p class="khungmota"><?= htmlspecialchars_decode($value['mota']) ?></p>
                        </div>
                        </div>
                        </div>
                        
                    <?php  } else { ?>
                        <div class="col-6 pt100 pb100 pt20mobile pb20mobile  col-12mobile ">
                        <div class="flex-end">
                        <div class="tenNangluc">
                            <div class="khungten-right khungten">
                                <h3><?= $value['ten'] ?></h3>
                            </div>
                            <img src="<?= _upload_baiviet_l . $value['photo'] ?>" alt="" class="icon">
                        </div>
                        <div class="motaNangluc mota-right">
                            <p class="khungmota"><?= htmlspecialchars_decode($value['mota']) ?></p>
                        </div>
                        </div>
                        </div>
                    <?php  }  ?>


                    <span class="bigline"></span>
                
            <?php } ?>

        </div>
    </div>
</section>