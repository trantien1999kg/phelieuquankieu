<section class="hoatdong"
    style="background-image: url(<?= _upload_hinhanh_l.$bg_danhmucthumua['photo']?>) !important; background-size:cover;">
    <a href="danh-muc" class="tieudBG ">
        <div class="titleDV mb0i">
            <img src="<?= _upload_hinhanh_l.$icon_khuvuc['photo']?>" alt="" class="pr10 pl10">
            <span class="gachchan">DANH MỤC THU MUA</span>
        </div>
    </a>
    <div class="container">
        <div class="row">
            <div class="col-12 item">
                <div class="grid-danhmuc gap20 gap10mobile gap10-sm">
                    <?php foreach($danhmucnoibat as $key => $value){
                    $seoDB = $seo->getSeoDB($value['id'],'baiviet','man',$value["type"]); ?>
                    <div class="tintuc-tin-sp span3 span12-sm d-flex flex-column">
                        <a href="<?= $value['type']?>/<?= $value['tenkhongdau']?>">

                            <div class="hoversofa hover-left">
                                <img src="<?= _upload_baiviet_l.$value['photo']?>" alt="">
                            </div>                
                            <div class="tintuc-tin-sp_content">
                                <h4 class="colordanhmuc line-2"><?= $value['ten']?></h4>
                            </div>
                            
                        </a>
                        <div class="tintuc-tin-sp_content_x">
                            <span class="tintuc-tin-sp_line"></span>
                        </div>
                        <div class="tintuc-tin-sp_content">
                            <p class="gioihantintuc line-4">
                                <?=$seoDB["description_$lang"]?>
                            </p>
                        </div>
                    </div>
                    <?php }?>
                </div>
            </div>

        </div>
        <div class="buttonDM mt40">
            <a href="danh-muc" class="xemtatcaDM focus-button-bg">
                Xem tất cả
            </a>
        </div>
    </div>
</section>