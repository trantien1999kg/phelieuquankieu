<section class="lienhetuvan"
    style="background-image: url(<?= _upload_hinhanh_l . $bg_lienhetuvan['photo'] ?>) !important; background-size:cover;">
    <div class="row">
        <div class="col-12 khung">
            <div class="lienhe col-6 col-12mobile">
                <div class="title-lienhe">
                    <h3>LIÊN HỆ ĐỂ ĐƯỢC PHỤC VỤ TỐT HƠN</h3>
                </div>
                <div class="pt90 pb48 bgwhitetrans">
                    <?php foreach($lhtv as $key => $value){ ?>
                    <div class="thongtinlienhe">
                        <img src="<?= _upload_baiviet_l.$value['photo']?>" alt="" class="iconlienhe">
                        <div class="ten-mota">
                            <p class="tenlienhe"><?= $value['ten']?></p>
                            <p class="motalienhe"><?= htmlspecialchars_decode($value['mota'])?></p>
                        </div>
                    </div>
                    <?php }?>
                </div>
            </div>
            <div class="tuvan col-6 col-12mobile">
                <div class="title-tuvan">
                    <h3>NHẬN TƯ VẤN VÀ BÁO GIÁ</h3>
                </div>
                <div class="pt40 pb40 bgwhite">
                    <p class="titleTuvan1">Vui lòng điền các thông tin sau</p>
                    <p class="titleTuvan2">DBUS sẽ liên hệ hỗ trợ bạn ngay</p>
                    <form action="" id="call-form" name="call-form" method="post" accept-charset="utf-8"
                        enctype="multipart/form-data">
                        <div class="input-g">
                            <input type="text" name="data[ten_vi]" id="name" value="" autocomplete="off"
                                placeholder="Họ Và Tên..." data-validate data-message="Tên không được để trống" />
                        </div>
                        <div class="input-g">
                            <input type="text" name="data[dienthoai]" id="dienthoai" value="" autocomplete="off"
                                placeholder="Số điện thoại" data-validate
                                data-message="Số điện thoại không được để trống" data-validate-phone />
                        </div>
                        <div class="input-g">
                            <input type="text" name="data[email]" id="email" value="" autocomplete="off"
                                placeholder="Email..." data-validate data-message="Email không được để trống"
                                data-validate-email />
                        </div>
                        <div class="input-g">
                            <input type="text" name="data[noidung]" id="name" value="" autocomplete="off"
                                placeholder="Nhu cầu của bạn..." data-validate
                                data-message="Nội dung không được để trống" />
                        </div>
                        <div class="buttonLienhe">
                        <a href="javascript:void(0)" class="submit_form"
                            onclick="_FRAMEWORK.submitForm('#call-form');">LIÊN HỆ NGAY</a>
                    </div>
                    <input type="hidden" name="data[type]" value="ho-tro">
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</section>