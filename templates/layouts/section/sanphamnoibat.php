<section class="sanphamnoibat">
    <div class="title area-index">
        <a href="san-pham" class="titleSP">
            <img src="<?=_upload_hinhanh_l.$icon_sp['photo']?>" alt="">
            <h2>SẢN PHẨM NỔI BẬT</h2>
        </a>
    </div>
    <div class="danhmuc1noibat">
        <a href="" class="<?php if($source==0) echo 'mauxanh'; ?> danhmuccap1">TẤT CẢ</a>
        <?php foreach($sanpham1 as $key => $value){ ?>
            <a href="#<?=$value["tenkhongdau"]?>" class="danhmuccap1"><?= $value['ten']?></a>
        <?php } ?>
    </div>
    <div class="container">
        <div class=" mt20 pb50 ">
            <?php if(count($sanpham1)>0){?>
            <?php foreach($sanpham1 as $k1 => $v1){
                $products_all = $db->rawQuery("select id, ten_$lang as ten,tenkhongdau_$lang as tenkhongdau,mota_$lang as mota,giaban,giacu,photo,type from #_baiviet where hienthi=1 and id_list=? and type=? order by stt asc,id desc ",array($v1['id'],'san-pham'));
            ?>
            <?php if(count($products_all)>0){?>
            <div class="box__catalogue" id="<?=$v1["tenkhongdau"]?>">
                <div class="title__catalogue d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center titlec1">
                        <?=$v1["ten"]?>
                    </div>
                    <a href="<?=$v1["type"]?>/<?=$v1["tenkhongdau"]?>" class="title__case" title="<?=$v1["ten"]?>">
                        Xem tất cả&nbsp;
                        <i class="fa fa-angle-double-right" aria-hidden="true">
                        </i>
                    </a>
                </div>
                <div class="owl-carousel owl-theme  owl-sanpham pt50" >
                    <?php foreach($products_all as $k => $v) {?>
                        <div class="sanphamcon">
                            <a href="<?=$v["type"]?>/<?=$v["tenkhongdau"]?>" title="<?=$v["ten"]?>">
                                <div class="box__product border__product mb20">
                                    <div class="thumb__product tf-hover o-hidden">
                                        <img class="col-12" 
                                            src="<?=_upload_baiviet_l.$v['photo']?>" alt="<?=$v["ten"]?>"
                                            />
                                    </div>
                                    <div class="desc__product pd10">
                                        <h3 class="tensanpham line-2"><?=$v["ten"]?></h3>
                                        <div class="motasanpham line-3">
                                            <?= htmlspecialchars_decode($v['mota'])?>
                                        </div>
                                    </div>
                                    <div class="buttonlienhe">
                                        <p class="lienhengay">Liên hệ ngay</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php }?>
                </div>
            </div>
            <?php }?>
            <?php }?>
            <?php }?>
        </div>
    </div>
    <div class="col-12 center">

        <a href="san-pham"><button class="xemtatca">XEM THÊM</button></a>

    </div>

</section>