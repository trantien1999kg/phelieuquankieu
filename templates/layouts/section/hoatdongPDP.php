<section class="hoatdong"
    style="background-image: url(<?= _upload_hinhanh_l.$bg_hoatdong['photo']?>) !important; background-size:cover;">
    <div class="title area-index">
        <a href="hoat-dong"><h2><span>DANH MỤC THU MUA</span></h2></a>
        
    </div>
    <div class="linhvuc">
        <p>Hoạt động thiết kế , thi công , sửa chữa nhà Phúc Điền Phát</p>
    </div>
   
    <div class="tintuc-tin container">
            <?php foreach($hoatdong as $key => $value){ ?>
            <div class="tintuc-tin-sp col-3">
            <a href="<?= $value['type']?>/<?= $value['tenkhongdau']?>">
                        
                <div class="hoversofa hover-left">
                    <img src="<?= _upload_baiviet_l.$value['photo']?>" alt="">
                    
                    
                </div>
                
                <h4 class="colorbg"><?= $value['ten']?></h4>
                </a>
                <div class="gioihantintuc colorbg line-3">
                    <p class="colorbg"><?= htmlspecialchars_decode($value['mota'])?></p>
                </div>
            </div>
            <?php }?>
    </div>

   

</section>