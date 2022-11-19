<section class="hoatdong"
   >
    <div class="title area-index">
        <a href="hoat-dong"><h2><span>TIN TỨC NỔI BẬT</span></h2></a>
        
    </div>
    <div class="linhvuc">
        <p>Tổng hợp kinh nghiệm trong lĩnh vực xây dựng của Phúc Điền Phát</p>
    </div>
   
    <div class="tintuc-tin container">
        <div class="owl-carousel owl-theme row item" id="owl-tintuc">
            <?php foreach($tintuc as $key => $value){ ?>
            <div class="tintuc-tin-sp">
                <div class="hoversofa">
                    <img src="<?= _upload_baiviet_l.$value['photo']?>" alt="">
                    
                </div>
                <h4 class="colorbg"><?= $value['ten']?></h4>
                <div class="gioihantintuc colorbg">
                    <p class="colorbg"><?= htmlspecialchars_decode($value['mota'])?></p>
                </div>
            </div>
            <?php }?>
        </div>
    </div>

   

</section>