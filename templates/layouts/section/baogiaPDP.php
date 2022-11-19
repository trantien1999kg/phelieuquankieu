<section class="baogia" style="background-image: url(<?= _upload_hinhanh_l.$bg_gioithieu['photo']?>) !important; background-size:cover;">
    <div class="box-line">
        <?php include _sections."slogan.php"; ?>
        <div class="box-line_trai"></div>
        <div class="box-line_phai"></div>
    </div>
    <div class="container">
        <div class="row pt50 pb50">
        <?php foreach($baogiahienthi as $key => $value){ ?>
            <a href="<?= $value['type']?>/<?= $value['tenkhongdau']?>">
            <div class="box-sobaogia">
                <div class="item-bg">
                    <p class="so"><?=($value['stt'])?></p>
                    <div class="b-tt"><a href="<?= $value['type']?>/<?= $value['tenkhongdau']?>" class="ten"><?= $value['ten']?></a>
                        <div class="mota">
                            <p><?= htmlspecialchars_decode($value['mota'])?></p>
                        </div>
                    </div>
                </div>
            </div>
            </a>
            
            <?php }?>
        </div>
    </div>
</section>