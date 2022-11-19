<section class="linhvuchoatdong">
<div class="title area-index">
        <a href="linh-vuc">
            <h2><span>LĨNH VỰC HOẠT ĐỘNG</span></h2>
        </a>

    </div>
    <div class="linhvuc">
        <p>Lĩnh vực hoạt động thiết kế , thi công , sửa chữa cải tạo lại nhà</p>
    </div>
    <div class="container">
        <div class="row d-flex flex-wrap mt20 pb50 ">
            <div class="item col-12 w-100-m w-100-t">
                <div class="row d-flex flex-wrap justify-content-center">
                    <?php if(count($linhvuc)>0){?>
                    <?php foreach($linhvuc as $k=>$v){
                        $seoDB = $seo->getSeoDB($v['id'],'baiviet','man',$v["type"]);
                        ?>
                    <div class="item col-4 l-4 m-4 c-12">
                        <div class="i-news-box mb30">
                            <div class="i-box-white">
                                <div class="i-pic-news">
                                    <a href="<?=$v["type"]?>/<?=$v["tenkhongdau"]?>">
                                        <img width="383" height="287" src="<?=_upload_baiviet_l.$v["photo"]?>"
                                            alt="<?=$v["ten_$lang"]?>">
                                    </a>
                                </div>
                                <div class="i-info-news d-flex align-items-center t-center ">
                                    <h4 class="i-name-news line-2">
                                        <a href="<?=$v["type"]?>/<?=$v["tenkhongdau"]?>"><?=$v["ten"]?></a>
                                    </h4>
                                </div>
                            </div>
                        </div>

                    </div>
                    <?php }?>
                    <?php }else{?>
                    <div class="item col-12 t-center">
                        Nội dung đang cập nhật....
                    </div>
                    <?php }?>

                    <a href="linh-vuc"><button class="xemtatca">Xem tất cả <i class="fas fa-chevron-circle-right"></i> </button></a>
                </div>
            </div>
        </div>
        
    </div>
</section>