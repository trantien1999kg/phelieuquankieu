<section class="nav sticky">
    <div class="container">
        <ul class="nav-menu-header nav__menu d-flex justify-content-center d-none-m">
            <li class="p-relative <?php if($com==0) echo 'active'; ?>">
                <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                <h2 class="mg0">
                    <?php }?>
                    <a  href="" title="TRANG CHỦ">
                        TRANG CHỦ
                    </a>
                    <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                </h2>
                <?php }?>
            </li>
            <li class="p-relative <?php if($com=='gioi-thieu') echo 'active'; ?> ">
                <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                <h2 class="mg0">
                    <?php }?>
                    <a href="gioi-thieu"
                        title="Giới thiệu">
                        Giới Thiệu
                    </a>
                    <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                </h2>
                <?php }?>
            </li>
            
            <li class="p-relative <?php if($com=='danh-muc') echo 'active'; ?>">
                <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                <h2 class="mg0">
                    <?php }?>
                    <a  href="danh-muc" title="THU MUA PHẾ LIỆU">
                        THU MUA PHẾ LIỆU
                    </a>
                    <?php if($danhmuc){?>
                    <div class="sub-menu">
                        <ul>
                        <?php foreach($danhmuc as $key => $value){ ?>
                            <li><a href="<?= $value['type']?>/<?= $value['tenkhongdau']?>"><?= $value['ten']?></a>
                            </li>
                            <?php }?>
                        </ul>
                    </div>
                    <?php } ?>
                    <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                </h2>
                <?php }?>
            </li>
            <li class="p-relative<?php if($com=='khu-vuc') echo ' active'; ?>">
                <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                <h2 class="mg0">
                    <?php }?>
                    <a  href="khu-vuc" title="KHU VỰC THU MUA">
                        KHU VỰC THU MUA
                    </a>
                    <?php if($khuvuc){?>
                    <div class="sub-menu">
                        <ul>
                        <?php foreach($khuvuc as $key => $value){ ?>
                            <li><a href="<?= $value['type']?>/<?= $value['tenkhongdau']?>"><?= $value['ten']?></a>
                            </li>
                            <?php }?>
                        </ul>
                    </div>
                    <?php } ?>
                    <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                </h2>
                <?php }?>
            </li>
            
            <li class="p-relative<?php if($com=='tin-tuc') echo ' active'; ?>">
                <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                <h2 class="mg0">
                    <?php }?>
                    <a href="tin-tuc" title="TIN TỨC">
                        TIN TỨC
                    </a>
                    
                    <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                </h2>
                <?php }?>
            </li>
            <li class="p-relative<?php if($com=='lien-he') echo 'active'; ?>">
                <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                <h2 class="mg0">
                    <?php }?>
                    <a href="lien-he" title="Liên Hệ">
                        Liên Hệ
                    </a>
                    <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                </h2>
                <?php }?>
            </li>
            <li class="search">
                        <a href="javascript:void(0)" onclick="_FRAMEWORK.toggle('#modal-search')">
                        <img src="assets/images/pdp/search1.png" alt="">
                        </a>
                    </li>
        </ul>
    </div>
</section>