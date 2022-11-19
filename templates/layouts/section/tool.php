<?php 
    $hotlines=$db->rawQuery("select ten_$lang as ten,phone from #_photo where hienthi=1 and type=? order by stt asc,id desc",array('hotline'));
?>
<div class="tool-pc">
    <ul class="box__tool d-none-m">
        <li class="to-top-pc">
            <a href="tel:<?=str_replace('.','',str_replace(' ','',$row_setting['hotline']))?>" rel="nofollow">
                <i class="icons-tool tool-phone" aria-hidden="true" title="Gọi ngay"></i>
            </a>
        </li>
        <li>
            <a href="http://zalo.me/<?=str_replace('.','',str_replace(' ','',$row_setting['sozalo']))?>" rel="nofollow"
                target="_blank">
                <i class="icons-tool tool-zalo"></i>
            </a>
        </li>
        <li>
            <a href="<?=$row_setting['linkmessage']?>" rel="nofollow" target="_blank">
                <i class="icons-tool tool-messenger"></i>
            </a>
        </li>
        <li>
            <a href="mailto:<?=$row_setting['email']?>" rel="nofollow">
                <i class="icons-tool tool-email"></i>
            </a>
        </li>
        <li>
            <a href="<?=$row_setting['iframe_map1']?>" rel="nofollow" target="_blank">
                <i class="icons-tool tool-address js-map"></i>
            </a>
        </li>


    </ul>
</div>

<div class="menu-bottom d-none">
    <ul class="clearfix">
        <li>
            <a href="" title="HomePage">
                <i class="fas fa-home"></i>
                <span class="sub">Trang chủ</span>
            </a>
        </li>
        <li>
            <a href="tel:<?= $row_setting['hotline']?>" title="clickToCall">
            <i class="fas fa-phone-square-alt"></i>
                <span class="sub">Hotline</span>
            </a>
        </li>
        <li>
            <a href="" title="Trang chủ">
                <img class="scaleimg" width="70" height="70" src="<?=_upload_hinhanh_l.$logo['photo_'.$lang]?>"
                    alt="Trang chủ" onerror="this.src='images/no-image.jpg'" />
            </a>
        </li>
        <li>
            <a href="javascript:void(0)" data-target="#options" id="tool-1" title="Tiện ích" class="js-mobi-tool"> 
                <i class="fas fa-ellipsis-h mobi-tool-act"></i>
                <span class="sub">Tiện ích</span>
            </a>
        </li>
        <li>
            <a href="javascript:void(0)" data-target="#menuSide" id="tool-2" class="js-mobi-tool">
                <span class="bars-menu mobi-tool-act"></span>
                <span class="sub">Menu</span>
            </a>
        </li>
    </ul>
</div>


<!-- <div class="hotline-tool hidden-xs show cs-pointer d-none-m" onclick="_FRAMEWORK.toggle('#support-content')">
    <i class="fab fa-whatsapp fab-hothotline font-social fa-2x"></i>
    <p>Hotline</p>
    <div class="support-content" id="support-content">
        <ul class="hotline-group">
            <?php foreach($hotlines as $key => $value){?>
            <li>
                <p><?= $value['ten']?></p>
                <p class="line"><a href="tel:<?= $value['phone']?>"><i class="fa fa-volume-control-phone"
                            aria-hidden="true"></i>&nbsp;<?= $value['phone']?></a></p>
            </li>
            <?php }?>
        </ul>
    </div>
</div> -->

<div class="call-now call-now1 d-sm-none"> <a class="btn-call-now" href="tel:<?= $row_setting['hotline']?>"> <i class="fa fa-phone blinker" aria-hidden="true"></i><p>Ms. Kiều <strong><?= $row_setting['hotline']?></strong></p> </a></div>
<div class="call-now d-sm-none"> <a class="btn-call-now" href="tel:<?= $row_setting['dienthoai']?>"> <i class="fa fa-phone blinker" aria-hidden="true"></i><p>Mr. Quân <strong><?= $row_setting['dienthoai']?></strong></p> </a></div>
<style>
.bottom-contact {
    position: fixed;
    bottom: 0;
    background: white;
    width: 100%;
    z-index: 99;
    box-shadow: 2px 1px 9px #dedede;
    border-top: 1px solid #eaeaea;
}

.bottom-contact ul li {
    width: 25%;
    float: left;
    list-style: none;
    text-align: center;
    font-size: 13.5px;
    margin-left: 0px;
    margin-bottom: 0.6rem
}

.bottom-contact ul li img {
    width: 35px;
    margin-top: 0.6rem;
    margin-bottom: 0px;
}

.bottom-contact ul li span {
    color: black;
}
</style>
