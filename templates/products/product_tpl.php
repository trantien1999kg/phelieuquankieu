<section class="section__product">
    <div class="container">
        <div class="row">
            <!-- <div class="col-3 listdanhmuc col-12mobile">
            <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                <h2 class="mg0">
                    <?php }?>

                        <a href="san-pham" class="listDM">DANH MỤC SẢN PHẨM</a>
                        
                    <?php if($tintuc1){?>

                        <ul class="polime">
                        <?php foreach($tintuc1 as $key => $value){ ?>
                            <li class="pt10 pb10 pl10 pd0mobile list"><a href="<?= $value['type']?>/<?= $value['tenkhongdau']?>" class="danhmuc1">
                                <i class="fas fa-angle-double-right"></i>&nbsp;<?= $value['ten']?></a>
                            </li>
                        <?php }?>
                        </ul>

                    <?php } ?>
                    <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                </h2>
                <?php }?>

            </div> -->
            <div class="item col-12 w-100-m">
                <div class="title__default title__in title__default-black">
                    <h1 class="mg0">
                        <span>
                            <?php if($seo->getSeo('h1') != ""){?>
                            <?=$seo->getSeo('h1')?>
                            <?php }else{ echo $title_seo;}?>
                        </span>
                    </h1>
                </div>
                <div class="box__seo">
                    <div class="box-description mt20">
                        <span><?=htmlspecialchars_decode($seo->getSeo('subject'))?></span>
                    </div>
                    <?php if(!empty($seo->getSeo('content'))){?>
                    <div class="wrapper-toc mt20">
                        <div class="content ul-list-detail">
                            <?=htmlspecialchars_decode($seo->getSeo('content'))?>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <div class="row">
                    <div class="mt30 col-12 item">
                        <div class="grid-trangtrong gap30 gap10-sm">
                            <?php if(count($tintuc)>0){?>
                            <?php foreach($tintuc as $k=>$v){
                        $seoDB = $seo->getSeoDB($v['id'],'baiviet','man',$v["type"]);
                        ?>
                            <div class="span4 span12-sm span6mobile">

                                <div class="article">
                                    <div class="badge absolute top post-date badge-outline">
                                        <div class="badge-inner">
                                            <span class="post-date-day"><?=date('d  ',$v["ngaytao"])?></span><br>
                                            <span
                                                class="post-date-month is-xsmall"><?=date('m  ',$v["ngaytao"])?></span>
                                        </div>
                                    </div>

                                    <div class="thumb hover-left">
                                        <a href="<?= $v['type']?>/<?= $v['tenkhongdau']?>" title="">
                                            <img src="<?= _upload_baiviet_l.$v['photo']?>" alt="<?=$v["ten_$lang"]?>"
                                                width="400" height="280" class="coverimg"
                                                style="aspect-ratio: 400 / 280;">
                                            <span class="mark"><i class="fas fa-file-alt"></i></span>
                                        </a>

                                    </div>

                                    <div class="content">
                                        <a href="<?= $v['type']?>/<?= $v['tenkhongdau']?>"
                                            title="Thiết kế website tại I-WEB">
                                            <h2 class="label line-2"><?=$v["ten_$lang"]?></h2>
                                        </a>

                                        <div class="border-top desc line-5">
                                            <?= htmlspecialchars_decode($v["mota_$lang"])?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php }?>
                            <?php }else{?>
                            <div class="span12 t-center">
                                Nội dung đang cập nhật....
                            </div>
                            <?php }?>


                        </div>
                    </div>
                    <div class="paging col-12 mt40">
                        <?=$paging?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>