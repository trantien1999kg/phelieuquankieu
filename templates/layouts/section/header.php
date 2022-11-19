<section class="section__header">
    <div class="container">
        <div class="row align-items-center">
            <div class="item header__left">
                <div class="menu-bar-res d-none d-block-m">
                    <a id="hamburger" href="#mmenu" title="Menu"><span></span></a>
                </div>
                <div class="box__logo-mobile p-relative">
                    <div class="logo__header">
                        <a href="" title="home" class="p-relative">
                            <img width="102" height="69" src="<?=_upload_hinhanh_l.$logo["photo_$lang"]?>"
                                alt="<?=$row_setting['ten_'.$lang]?>" <?=$func->errorImg()?> />
                        </a>
                    </div>
                </div>
            </div>
            <div class="item header__right d-none-m">
                <div class="box__header-top">
                    <div class="header__catalogy cs-pointer p-relative">
                    <div class="box__catalogy">
                            <span class="bar"></span>
                            <span>Danh mục sản phẩm</span>
                        </div>
                        <?php if(count($list_c1)){?>
                        <ul>
                            <?php foreach($list_c1 as $k1 => $v1){
                                $list_c2 = $db->rawQuery("select id, ten_$lang as ten,tenkhongdau_$lang as tenkhongdau,type from #_baiviet_cat where hienthi=1 and id_list=? and type=? order by stt desc,id desc",array($v1['id'],'san-pham'));	
                            ?>
                            <li class="p-relative">
                                <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                                <h2 class="mg0">
                                    <?php }?>
                                    <a href="<?=$v1["type"]?>/<?=$v1["tenkhongdau"]?>" title="<?=$v1["ten"]?>">
                                        <?=$v1["ten"]?>
                                    </a>
                                    <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                                </h2>
                                <?php }?>
                                <?php if(count($list_c2)){?>
                                <ul>
                                    <?php foreach($list_c2 as $k2 => $v2){?>
                                    <li>
                                        <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                                        <h3 class="mg0">
                                            <?php }?>
                                            <a href="<?=$v2["type"]?>/<?=$v2["tenkhongdau"]?>" title="<?=$v2["ten"]?>">
                                                <?=$v2["ten"]?>
                                            </a>
                                            <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                                        </h3>
                                        <?php }?>
                                    </li>
                                    <?php }?>
                                </ul>
                                <?php }?>
                            </li>
                            <?php }?>
                        </ul>
                        <?php }?>
                       
                    </div>
                    <div class="box__search p-relative">
                        <div class="box__search-input">
                            <div class="d-flex p-relative">
                               
                                <input type="text" name="keywords" id="keywords"
                                    placeholder="Nhập thông tin cần tìm..." />
                                <button class="btn-primary btn-search">
                                    <svg height="19" viewBox="0 0 19 19" width="19" class="svg-icon " style="fill: white;
                                    margin-bottom: 1px;">
                                        <g fill-rule="evenodd" stroke="none" stroke-width="1" >
                                            <g transform="translate(-1016 -32)">
                                                <g>
                                                    <g transform="translate(405 21)">
                                                        <g transform="translate(611 11)">
                                                            <path
                                                                d="m8 16c4.418278 0 8-3.581722 8-8s-3.581722-8-8-8-8 3.581722-8 8 3.581722 8 8 8zm0-2c-3.3137085 0-6-2.6862915-6-6s2.6862915-6 6-6 6 2.6862915 6 6-2.6862915 6-6 6z">
                                                            </path>
                                                            <path
                                                                d="m12.2972351 13.7114222 4.9799555 4.919354c.3929077.3881263 1.0260608.3842503 1.4141871-.0086574.3881263-.3929076.3842503-1.0260607-.0086574-1.414187l-4.9799554-4.919354c-.3929077-.3881263-1.0260608-.3842503-1.4141871.0086573-.3881263.3929077-.3842503 1.0260608.0086573 1.4141871z">
                                                            </path>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="nav__menu">

                    <?php include _sections."nav.php"; ?>

                </div>
            </div>
        </div>
    </div>
</section>