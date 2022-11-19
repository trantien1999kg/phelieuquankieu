<section class="section__slider">
        <div class="box__slider owl-carousel owl-theme" id="owl__slider">
            <?php for($i=0;$i<count($slider);$i++){ ?>
            <div class="item__slider thumb-box" >
                <a href="<?=$slider[$i]['link']?>" title="<?=$slider[$i]['ten']?>">
                    <img src="<?=_upload_hinhanh_l.$slider[$i]['photo']?>" alt="<?=$slider[$i]['ten']?>" class="js-loadcover"/>
                </a>
            </div>
            <?php } ?>
        </div>
</section>