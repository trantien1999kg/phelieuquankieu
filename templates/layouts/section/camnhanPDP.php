<section class="camnhan">
    <div class="title area-index">
        <a href="linh-vuc">
            <h2><span>CẢM NHẬN KHÁCH HÀNG</span></h2>
        </a>

    </div>
    <div class="linhvuc">
        <p>Lĩnh vực hoạt động thiết kế , thi công , sửa chữa cải tạo lại nhà</p>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-6 mt50 mb50 mt0mobile item mobicol-12 box-new " style="">
                <div class="grid_camnhan gap30 gap10-sm">

                    <?php foreach($camnhan as $k=>$v){
                        $seoDB = $seo->getSeoDB($v['id'],'baiviet','man',$v["type"]);
                        
                        ?>


                    <div class="article">

                        <div class="thumb_camnhan">
                            <a href="<?= $v['type']?>/<?= $v['tenkhongdau']?>" title="">
                                <img src="<?= _upload_baiviet_l.$v['photo']?>" alt="<?=$v['ten']?>" class="coverimg"
                                    style="aspect-ratio: 400 / 280; border-radius:20px;">

                            </a>

                        </div>

                        <div class="content">
                            <a>
                                <h2 class="tencamnhan line-2"><?=$v['ten']?></h2>
                            </a>
                            <p class="in4"><i class="fas fa-clock"></i>
                                <?=date('d/m/Y  g:i:s',$v['ngaytao'])?>
                            <p class="desc line-2"><?= htmlspecialchars_decode($v['mota'])?></p>
                        </div>

                    </div>


                    <?php }?>

                </div>
            </div>
            <div class="col-6 mt50 mb50 mt0mobile item mobicol-12 box-new flex-column align-items-center">
                <div class="col-11 item mobicol-12 box-new flex-column  ">

                    <a href="<?= $videos[0]['links']?>" id="linkchange" data-fancybox="videos">
                        <img width="506" height="349" src="<?= _upload_hinhanh_l.$videos[0]['photo']?>" id="imgchange"></a>
                    <select name="chonvideo" class="tenvideo"  id="myimage">

                        <?php foreach($videos as $k=>$v){?>
                        <option value="<?= $v['stt']?>" 
                            data-link="<?= $v['links']?> " data-scr-type="<?=_upload_hinhanh_l. $v['photo']?> "><?= $v['ten']?></option>
                        <?php }?>
                    </select>

                </div>
            </div>
        </div>
    </div>
</section>