<section class="headerPDP"
    style="background-image: url(<?= _upload_hinhanh_l.$bg_header['photo']?>) !important; background-size:cover;">
    <div class="container">
        <div class="row t-center align-items-center d-flex">
            <div class="col-3 logoPDP item d-flex">
                <a href="" title="home" class="p-relative">
                    <img src="<?=_upload_hinhanh_l.$logo["photo_$lang"]?>" alt="<?=$row_setting['ten_'.$lang]?>"
                        <?=$func->errorImg()?> />
                    <div class="star-box">
                        <img src="./assets/images/saolaplanh.png" class="saolaplanh star-animate" alt="Sao lấp lánh">
                    </div>
                </a>
            </div>
            <div class="col-6 namePDP pt25 pb25 item chaychu">
                <div class="chaychu1"><?= $row_setting['scrolltext1_vi']?></div>
                <div class="chaychu2"><?= $row_setting['scrolltext2_vi']?></div>
            </div>

            <div class="col-3 hotlinePDP item d-none-m">
                <div class="dttren">
                    <img src="./assets/images/pdp/dtrung.png" alt="" class="dienthoairung ">
                    <img src="./assets/images/pdp/khungdt.png" alt="" class="khungdt ">
                    <div class="sdthotro">
                        
                        <div class="sdt">
                            <p class="nhapkhung"><?= $row_setting['hotline']?></p>
                        </div>

                    </div>
                </div>
                <div class="dtduoi">
                    <img src="./assets/images/pdp/dtrung.png" alt="" class="dienthoairung ">
                    <img src="./assets/images/pdp/khungdt.png" alt="" class="khungdt ">
                    <div class="sdthotro">
                        
                        <div class="sdt">
                            <p class="nhapkhung"><?= $row_setting['dienthoai']?></p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>