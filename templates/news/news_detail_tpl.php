<section class="products-page">
    <div class="grid wide">
        <div class="flex-row">
            <?php if($row_toc==1 && $deviceType=='computer'){?>
            <div class="item col__left z-100m">
                <div class="sidebar__sticky">
                    <div class="wrapper-toc mt20">

                        <div class="content ul-list-detail"></div>

                    </div>
                </div>
            </div>
            <?php }?>
            <?php 

                $col_right = ($row_toc==1 && $deviceType=='computer') ? 'col__right z-100m' : 'col-12';
    
            ?>
            <div class="item <?=$col_right?>">
                <div class="row">

                    <div class="col l-12 m-12 c-12" style="margin-bottom:0 !important;">

                        <div class="title__default title__in title__default-black">
                            <h1 class="mg0">
                                <span>
                                    <?php if($seo->getSeo('h1') != ""){?>
                                    <?=$seo->getSeo('h1')?>
                                    <?php }else{ echo $title_seo;}?>
                                </span>
                            </h1>
                        </div>

                    </div>

                </div>

                <div class="row mt20">

                    <div class="item col-9 col-12mobile">

                        <div class="box-description ">

                            <span><?=$func->clear_decode($row_detail["mota_$lang"])?></span>

                        </div>

                        <div class="">
                            <?php if($deviceType=='computer'){?>
                            <div class="content ul-list-detail">

                                <?=htmlspecialchars_decode($row_detail['noidung_'.$lang])?>

                            </div>
                            <?php }else{?>
                            <div class="wrapper-toc mt20">

                                <div class="content ul-list-detail">
                                    <?=htmlspecialchars_decode($row_detail['noidung_'.$lang])?>
                                </div>

                            </div>
                            <?php }?>
                            <div class="detail mt20">

                                <div class="i-shareLinks">
                                    <b>Chia sẻ</b>
                                    <?php include_once _source.'shareLinks.php'?>

                                </div>

                            </div>

                        </div>



                    </div>
                    <div class="item col-3 l-3 m-3 c-12">
                        <div class="sidebar-detail">
                            <div class="header-sidebar">
                                <span>Hỗ trợ khách hàng</span>
                            </div>

                            <div class="body-sidebar pd10 p-relative">
                                <div class="desc">
                                    <?= $func->clear_decode($deschotro['mota'])?>
                                </div>
                                <div class="box-under">
                                    <div style="font-weight:600;" class="text-center text-uppercase mb-2">Yêu cầu gọi
                                        lại</div>
                                    <form action="" id="call-form" name="call-form" method="post" accept-charset="utf-8"
                                        enctype="multipart/form-data">
                                        <div class="call-form mt10">
                                            <input type="text" name="data[dienthoai]" id="dienthoai" value=""
                                                autocomplete="off" placeholder="Số điện thoại" data-validate
                                                data-message="Số điện thoại không được để trống" data-validate-phone />
                                        </div>
                                        <div class="call-form mt10">
                                            <a href="javascript:void(0)" class="submit_form"
                                                onclick="_FRAMEWORK.submitForm('#call-form');">Gửi</a>
                                        </div>
                                        <input type="hidden" name="data[type]" value="ho-tro">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row mt20">
                    <div class="col-12 item">
                        <?php if(count($tintuc)>0){?>


                        <div class="i-shareLinks i-other-news mb20">

                            <b>Bài Viết Liên Quan</b>

                            <div class="owl-carousel owl-theme carousel-product-news col-m-10" id="slider__other">
                                <?php foreach($tintuc as $other){?>
                                <div class="article">
                                    <div class="thumb hover-left">
                                        <a href="<?= $other['type']?>/<?= $other['tenkhongdau']?>" title="">
                                            <img src="<?= _upload_baiviet_l.$other['photo']?>" alt="<?=$other["ten_$lang"]?>"
                                                width="400" height="280" class="coverimg"
                                                style="aspect-ratio: 400 / 280;">
                                            <span class="mark"><i class="fas fa-file-alt"></i></span>
                                        </a>

                                    </div>

                                    <div class="widget__content">
                                        <div class="content__name pt10 pb10">
                                            <h3 class="label mg0 line-2">
                                                <a href="<?= $other['type']?>/<?= $other['tenkhongdau']?>"
                                                    title="Thiết kế website tại I-WEB">
                                                    <?=$other["ten_$lang"]?>
                                                </a>
                                            </h3>
                                        </div>
                                        <div class="border-top desc j-text pt10 line-5">
                                            <?=$seoDB["description_$lang"]?>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>

                        </div>

                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>