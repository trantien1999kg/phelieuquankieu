<section class="section-news mt20 mb20 mt-m-10 mb-m-10 mb-m-10 mb-t-10">
    <div class="container">
        <div class="row">
            <div class="item col-12">
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
        <div class="row">
            <div class="item col-12">
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
            </div>
        </div>
        <div class="row">
            <div class="mt30 col-12 item">
                <div class="grid-trangtrong gap30 gap10-sm">
                    <?php if(count($tintuc)>0){
            ?>
                    <?php foreach($tintuc as $k=>$v){
                        $seoDB = $seo->getSeoDB($v['id'],'baiviet','man',$v["type"]);
                        
                        ?>
                    <div class="span4 span12-sm d-flex span6mobile">

                        <div class="article">
                            <div class="badge absolute top post-date badge-outline">
                                <div class="badge-inner">
                                    <span class="post-date-day"><?=date('d  ',$v["ngaytao"])?></span><br>
                                    <span class="post-date-month is-xsmall"><?=date('m  ',$v["ngaytao"])?></span>
                                </div>
                            </div>

                            <div class="thumb hover-left">
                                <a href="<?= $v['type']?>/<?= $v['tenkhongdau']?>" title="">
                                    <img src="<?= _upload_baiviet_l.$v['photo']?>" alt="<?=$v["ten_$lang"]?>"
                                        width="400" height="280" class="coverimg" style="aspect-ratio: 400 / 280;">
                                    <span class="mark"><i class="fas fa-file-alt"></i></span>
                                </a>

                            </div>

                            <div class="widget__content">
                                <div class="content__name pt10 pb10">
                                    <h3 class="label mg0 line-2">
                                        <a href="<?= $v['type']?>/<?= $v['tenkhongdau']?>"
                                            title="Thiết kế website tại I-WEB">
                                            <?=$v["ten_$lang"]?>
                                        </a>
                                    </h3>
                                </div>
                                <div class="border-top desc pt10 line-5">
                                    <?=$seoDB["description_$lang"]?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php }?>
                    <?php }else{?>

                </div>
                <div class="span12 t-center">
                    Nội dung đang cập nhật....
                </div>
                <?php }?>
            </div>
        </div>
        <div class="paging">
            <?=$paging?>
        </div>
    </div>
</section>
