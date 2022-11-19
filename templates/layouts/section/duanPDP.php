<section class="linhvuchoatdong">
<div class="title area-index">
        
            <h2><span>DỰ ÁN TIÊU BIỂU - PHÚC ĐIỀN PHÁT</span></h2>


    </div>
    <div class="linhvuc">
        <p>Dự án thiết kế , thi công , sửa chữa nhà Phúc Điền Phát</p>
    </div>
    <div class="container">
        <div class="row d-flex flex-wrap mt20 pb50 ">
            <div class="item col-12 w-100-m w-100-t">
                <div class="row d-flex flex-wrap justify-content-center">
                    <?php if(count($duan)>0){?>
                    <?php foreach($duan as $k=>$v){
                        $seoDB = $seo->getSeoDB($v['id'],'baiviet','man',$v["type"]);
                        ?>
                    <div class="item col-3 l-3 m-4 c-12">
                        <div class="i-news-box mb30">
                            <div class="i-box-white">
                                <div class="i-pic-news">
                                    <a >
                                        <img width="383" height="287" src="<?=_upload_baiviet_l.$v["photo"]?>"
                                            alt="<?=$v["ten_$lang"]?>">
                                    </a>
                                </div>
                                <div class="i-info-news d-flex align-items-center t-center ">
                                    <h4 class="i-name-news line-2 fs14">
                                        <a ><?=$v["ten"]?></a>
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

                    
                </div>
                <a class="d-flex flex-wrap justify-content-center"><button class="xemtatca ">Xem tất cả <i class="fas fa-chevron-circle-right"></i> </button></a>
            </div>
        </div>
        
    </div>
</section>