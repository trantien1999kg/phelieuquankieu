<section class="feedback area-feedback">
    <div class="container">
        <div class="titleDBUS">
            <h2 class="title-doitac pt40">ĐỐI TÁC</h2>
        </div>
        <div class="feedback-slider">
            <div class="owl-carousel owl-theme" id="owl-doitac" >
                <?php foreach($doitac as $key => $value){ ?>
                    <div class="feedback-slider-fb">
                        <a href="<?=$value['link']?>" >
                            <img src="<?= _upload_baiviet_l.$value['photo']?>" alt="">
                                
                        </a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>