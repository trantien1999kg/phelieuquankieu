<section class="camket" style="background-image: url(<?= _upload_hinhanh_l.$bg_camket['photo']?>) !important; background-size:cover; background-repeat: no-repeat;
    background-position: center;">
    <div class="container">    
        <?php if($deviceType == 'phone'){?>
        <div class="col-12 item row phone">
                <p class=" col-12 titleCAMKETphone">
                    CAM KẾT
                </p>
            <?php foreach($camket as $key => $value){ ?>
            <div class="col-6 deviceTypephone">
                <img src="<?= _upload_baiviet_l.$value['photo']?>" alt="" class="iconcamketphone">
                <div class="tenmotaphone">
                    <div class="tenckphone gachchan">
                        <?= $value['ten'] ?>
                    </div>
                    <div class="motackphone line-3">
                        <?= htmlspecialchars_decode($value['mota'])?>
                    </div>
                </div>
            </div>
            <?php }?>
        </div>
        <?php }else{?>
        <div class="row">
            <div class="col-12 item ck " >
                <?php foreach($camket as $key => $value){ ?>
                <?php if ($key === 1 || $key === 2) { ?>
                <div class="col-3 ckphai">
                    <img src="<?= _upload_baiviet_l.$value['photo']?>" alt="" class="iconcamketphai">
                    <div class="tenmotaphai">
                        <div class="tenckphai gachchan">
                            <?= $value['ten'] ?>
                        </div>
                        <div class="motackphai">
                            <?= htmlspecialchars_decode($value['mota'])?>
                        </div>
                    </div>
                </div>



                <?php  } if ($key === 4 || $key === 5) { ?>
                <div class="col-3 cktrai">
                    <img src="<?= _upload_baiviet_l.$value['photo']?>" alt="" class="iconcamkettrai">
                    <div class="tenmotatrai">
                        <div class="tencktrai gachchan">
                            <?= $value['ten'] ?>
                        </div>
                        <div class="motacktrai">
                            <?= htmlspecialchars_decode($value['mota'])?>
                        </div>
                    </div>
                </div>



                <?php  } if ($key === 0) { ?>
                <div class="col-3 cktren">
                    <img src="<?= _upload_baiviet_l.$value['photo']?>" alt="" class="iconcamkettren">
                    <div class="tenmotatren">
                        <div class="tencktren gachchan">
                            <?= $value['ten'] ?>
                        </div>
                        <div class="motacktren">
                            <?= htmlspecialchars_decode($value['mota'])?>
                        </div>
                    </div>

                </div>

                <p class="absolute titleCAMKET">
                    CAM KẾT
                </p>


                <?php  } if ($key === 3) {?>

                <div class="col-3 ckduoi">
                    <img src="<?= _upload_baiviet_l.$value['photo']?>" alt="" class="iconcamketduoi ">

                </div>
                <div class="tenmotaduoi">
                    <div class="tenckduoi gachchan">
                        <?= $value['ten'] ?>
                    </div>
                    <div class="motackduoi">
                        <?= htmlspecialchars_decode($value['mota'])?>
                    </div>
                </div>
                <?php  }  ?>
                <?php }?>
            </div>
        </div>
        <?php }?>
    </div>
</section>