<div class="box-modal-menu" id="menuSide">

    <div class="p-relative">

        <ul>
            <li>
            <a href="" title="Trang chủ" class="logo" element-area="header">
                    <img src="<?=_upload_hinhanh_l.$logo['photo_'.$lang]?>"/>
                </a>
            </li>
            <li class="<?php if($com=='gioi-thieu') echo ' active';?>">
                    
                            <a href="gioi-thieu">GIỚI THIỆU</a>
                        
                    </li>
            <li>
                <div class="d-flex align-items-center">

                            <a href="danh-muc" title="THU MUA PHẾ LIỆU ">THU MUA PHẾ LIỆU</a>
                            
                    <?php if($danhmuc){ ?>
                        <!-- <span class="drop event-menu p-relative"></span> -->
                    <?php } ?>
                </div>
                <?php if($danhmuc){ ?>
                <ul>
                    <?php foreach($danhmuc as $key => $value){ ?>
                    <li class="dropdown">
                        <div class="d-flex align-items-center">
                            <a class="pl30" title="<?=$value["ten"]?>" href="<?=$value["type"]?>/<?=$value['tenkhongdau']?>">
                                <span><?=$value["ten"]?></span>
                            </a>
                            
                        </div> 
                    </li>
                    <?php } ?>
                </ul>
                <?php } ?>
            </li>
            <li>
                <div class="d-flex align-items-center">
                <a href="dich-vu" title="KHU VỰC THU MUA">KHU VỰC THU MUA</a>
                    <?php if($khuvuc){ ?>
                        <!-- <span class="drop event-menu p-relative"></span> -->
                    <?php } ?>
                </div>
            </li>
            <li>
                <div class="d-flex align-items-center">
                <a href="tin-tuc" title="Sản phẩm">TIN TỨC</a>

                </div>
                
            </li>
            <li>
                <div class="d-flex align-items-center">
                <a href="lien-he" title="Hoạt động">Liên Hệ</a>
                </div>
            </li>
        </ul>
    </div>

</div>