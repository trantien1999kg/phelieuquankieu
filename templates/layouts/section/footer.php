<footer class="section__footer pt40" style="background-color: var(--html-bg-website)">
    <div class="">
        <div class="container">
            <div class="row pb45">
<!---------------------------------------------THÔNG TIN LIÊN HỆ------------------------------------------------------->
                <div class="item col-3 l-3 m-3 c-12">

                    <div class="title__footer mt-m-20">
                        <span>THÔNG TIN LIÊN HỆ</span>
                    </div>
                    <div class="desc-footer mt30">
                        <?=htmlspecialchars_decode($desc_footer["mota"])?>
                    </div>
                    <a href="javascript:void(0)" class="js-map btn-map mt20">
                        <i class="fas fa-map-marked-alt" style="margin-right:5px"></i>Xem đường đi
                    </a>
                </div>
<!---------------------------------------------KHU VỰC THU MUA------------------------------------------------------->
                <div class="item col-3 l-3 m-3 c-12 ">

                    <div class="title__footer mt-m-20">
                        <span>KHU VỰC THU MUA</span>
                    </div>
                    <div class="desc__footer mt20">
                        <ul class="policys">
                            <?php foreach($khuvucnoibat as $v){?>
                            <li>
                                <a href="<?=$v["type"]?>/<?=$v["tenkhongdau"]?>" title="<?=$v["tenkhongdau"]?>">
                                    <img src="./assets/images/pdp/arrow.png">&nbsp;<?=$v["ten"]?>
                                </a>
                            </li>
                            <?php }?>
                        </ul>
                        
                    </div>
                </div>

<!---------------------------------------------HỖ TRỢ KHÁCH HÀNG------------------------------------------------------->
                <div class="item col-3 l-3 m-3 c-12 ">

                    <div class="title__footer mt-m-20">
                        <span>HÔ TRỢ KHÁCH HÀNG</span>
                    </div>
                    <div class="desc__footer mt20">
                        <ul class="policys">
                            <?php foreach($policys as $v){?>
                            <li>
                                <a href="<?=$v["type"]?>/<?=$v["tenkhongdau"]?>" title="<?=$v["tenkhongdau"]?>">
                                    <img src="./assets/images/pdp/arrow.png">&nbsp;<?=$v["ten"]?>
                                </a>
                            </li>
                            <?php }?>
                        </ul>
                        
                    </div>
                </div>

                <!---------------------------------------------KẾT NỐI CHÚNG TÔI------------------------------------------------------>
                <div class="item col-3 l-3 m-3 c-12 ">

                    <div class="title__footer mt-m-20">
                        <span>Kết nối với chúng tôi</span>
                    </div>
                    <div class="desc__footer mt20">
                        <div class="box__fanpage">
                            <div class="fb-page" data-href="<?=$row_setting['facebook']?>" data-width="500"
                                data-height="180" data-small-header="false" data-adapt-container-width="true"
                                data-hide-cover="false" data-show-facepile="true" data-show-posts="true">
                                <div class="fb-xfbml-parse-ignore">
                                    <blockquote cite="<?=$row_setting['facebook']?>"><a
                                            href="<?=$row_setting['facebook']?>"><?=$row_setting['name_'.$lang]?></a>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                        <div class="mt10">
                            <?=$func->getsocial($mangxahoi)?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</footer>