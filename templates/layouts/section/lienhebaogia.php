<section class="lienhebaogia"
    style="background-image: url(<?=_upload_hinhanh_l.$bg_baogia['photo']?>); background-size: cover; background-repeat: no-repeat;    padding-bottom: 100px;">
    <div class="container">
        <div class="row hinhbaogia">

                <img src="<?=_upload_hinhanh_l.$baogia['photo']?>" class="pt40 hinhnguoi">

            <div class="col-12 tenmotabaogia item pt240">
                <span class="tenbaogia">
                    <?=$baogia['ten']?>
                </span>
                <div class="motabaogia pt40 pb35">
                    <?= htmlspecialchars_decode($baogia['mota'])?>
                </div>
                <div class="dangkybaogia">
                    <a href="lien-he" class="dangkyngay focus-button">ĐĂNG KÝ NGAY</a>
                </div>
            </div>
        </div>
    </div>
</section>