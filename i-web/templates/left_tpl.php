<nav class="sidebar-nav">

    <div class="sidebar-header">

        <div class="box" style="padding: 15px 0px 0px 0px;">

            <div class="logo-admin" style="text-align: center">

                <a href="index.php" title="logo"> <img src="images/logo.png" alt="" width="170"
                        <?=($config['logo']==true) ? 'class="none"':''?> /> </a>

            </div>

            <div class="line-admin">

                <span><i class="fas fa-globe"></i></span>

            </div>

        </div>

    </div>

    <ul class="metismenu" id="menu1">

        <li>

            <a class="home" href="index.php" title="Trang chủ">

                <i class="nav-icon text-sm fal fa-home"></i>Trang Chủ</a>

        </li>



        <li class="<?=($com=='baiviet' && $_GET['type']=='tin-tuc') ? "active" :""?>">

            <a class="has-arrow" href="#"
                aria-expanded="<?=($com=='baiviet' && $_GET['type']=='tin-tuc') ? "true" :"false"?>">

                <span>

                    <i class="nav-icon text-sm fal fa-boxes"></i>Quản lý tin tức

                </span>

            </a>

            <ul aria-expanded="<?=($com=='baiviet' && 'tin-tuc'==$_GET['type']) ? "true" :"false"?>"
                class="collapse <?=($com=='baiviet' && 'tin-tuc'==$_GET['type']) ? "in" :""?>"
                <?=($com=='baiviet' && 'tin-tuc'==$_GET['type']) ? "" :"style='height: 0px;'"?>>

                <li class="<?=($com=='baiviet' && $act=='man' && 'tin-tuc'==$_GET['type']) ? "this" :""?>">

                    <a href="index.php?com=baiviet&act=man&type=<?='tin-tuc'?>&page=1">Danh sách tin tức</a>

                </li>

            </ul>

        </li>

        <!---------------------------------------KHU VỰC THU MUA--------------------------------->

        <li class="<?=($com=='baiviet' && $_GET['type']=='khu-vuc') ? "active" :""?>">

            <a class="has-arrow" href="#"
                aria-expanded="<?=($com=='baiviet' && $_GET['type']=='khu-vuc') ? "true" :"false"?>">

                <span>

                    <i class="nav-icon text-sm fal fa-boxes"></i>Quản lý khu vực

                </span>

            </a>

            <ul aria-expanded="<?=($com=='baiviet' && 'khu-vuc'==$_GET['type']) ? "true" :"false"?>"
                class="collapse <?=($com=='baiviet' && 'khu-vuc'==$_GET['type']) ? "in" :""?>"
                <?=($com=='baiviet' && 'khu-vuc'==$_GET['type']) ? "" :"style='height: 0px;'"?>>


                <li class="<?=($com=='baiviet' && $act=='man' && 'khu-vuc'==$_GET['type']) ? "this" :""?>">

                    <a href="index.php?com=baiviet&act=man&type=<?='khu-vuc'?>&page=1">Danh sách</a>

                </li>

            </ul>

        </li>



        <!-----------------------------====================NĂNG LỰC CỐT LÕI===================----------------------------->
        <li class="<?=($com=='baiviet' && $_GET['type']=='bang-gia') ? "active" :""?>">

            <a class="has-arrow" href="#"
                aria-expanded="<?=($com=='baiviet' && $_GET['type']=='bang-gia') ? "true" :"false"?>">

                <span>

                    <i class="nav-icon text-sm fal fa-boxes"></i>Quản lý bảng giá

                </span>

            </a>

            <ul aria-expanded="<?=($com=='baiviet' && 'bang-gia'==$_GET['type']) ? "true" :"false"?>"
                class="collapse <?=($com=='baiviet' && 'bang-gia'==$_GET['type']) ? "in" :""?>"
                <?=($com=='baiviet' && 'bang-gia'==$_GET['type']) ? "" :"style='height: 0px;'"?>>

                <li class="<?=($com=='baiviet' && $act=='man' && 'bang-gia'==$_GET['type']) ? "this" :""?>">

                    <a href="index.php?com=baiviet&act=man&type=<?='bang-gia'?>&page=1">Danh sách liên hệ</a>

                </li>

            </ul>

        </li>


        <!-----------------------------====================LIÊN HỆ TƯ VẤN===================----------------------------->
        <li class="<?=($com=='baiviet' && $_GET['type']=='tai-sao') ? "active" :""?>">

            <a class="has-arrow" href="#"
                aria-expanded="<?=($com=='baiviet' && $_GET['type']=='tai-sao') ? "true" :"false"?>">

                <span>

                    <i class="nav-icon text-sm fal fa-boxes"></i>Quản lý tại sao

                </span>

            </a>

            <ul aria-expanded="<?=($com=='baiviet' && 'tai-sao'==$_GET['type']) ? "true" :"false"?>"
                class="collapse <?=($com=='baiviet' && 'tai-sao'==$_GET['type']) ? "in" :""?>"
                <?=($com=='baiviet' && 'tai-sao'==$_GET['type']) ? "" :"style='height: 0px;'"?>>

                <li class="<?=($com=='baiviet' && $act=='man' && 'tai-sao'==$_GET['type']) ? "this" :""?>">

                    <a href="index.php?com=baiviet&act=man&type=<?='tai-sao'?>&page=1">Danh sách</a>

                </li>

            </ul>

        </li>


        <!-----------------------------====================DANH MỤC THU MUA===================----------------------------->
        <li class="<?=($com=='baiviet' && $_GET['type']=='danh-muc') ? "active" :""?>">

            <a class="has-arrow" href="#"
                aria-expanded="<?=($com=='baiviet' && $_GET['type']=='danh-muc') ? "true" :"false"?>">

                <span>

                    <i class="nav-icon text-sm fal fa-boxes"></i>Quản lý DANH MỤC THU MUA

                </span>

            </a>

            <ul aria-expanded="<?=($com=='baiviet' && 'danh-muc'==$_GET['type']) ? "true" :"false"?>"
                class="collapse <?=($com=='baiviet' && 'danh-muc'==$_GET['type']) ? "in" :""?>"
                <?=($com=='baiviet' && 'danh-muc'==$_GET['type']) ? "" :"style='height: 0px;'"?>>

                <li class="<?=($com=='baiviet' && $act=='man' && 'danh-muc'==$_GET['type']) ? "this" :""?>">

                    <a href="index.php?com=baiviet&act=man&type=<?='danh-muc'?>&page=1">Danh sách DANH MỤC THU MUA</a>

                </li>

            </ul>

        </li>

        <!-----------------------------====================BÀI VIẾT CHUNG===================----------------------------->
        <li
            class="<?=($com=='baiviet' && ('chinh-sach'==$_GET['type'] || 'cau-hoi-thuong-gap'==$_GET['type']  || 'thanh-toan'==$_GET['type']  || 'he-thong-cua-hang'==$_GET['type']  || 'y-kien'==$_GET['type'] || 'chinh-sach'==$_GET['type'] || 'thong-tin-cong-ty'==$_GET['type'] || 'mua-hang-online'==$_GET['type'] || 'chinh-sach'==$_GET['type'])) ? "active" :""?>">

            <a class="has-arrow" href="#"
                aria-expanded="<?=($com=='baiviet' && ('chinh-sach'==$_GET['type'] || 'mua-hang-online'==$_GET['type']  || 'cau-hoi-thuong-gap'==$_GET['type'] || 'thanh-toan'==$_GET['type'] || 'he-thong-cua-hang'==$_GET['type']  || 'ptgh'==$_GET['type'] || 'chinh-sach'==$_GET['type'] || 'thong-tin-cong-ty'==$_GET['type'] || 'mua-hang-online'==$_GET['type'])) ? "true" :"false"?>">

                <span>

                    <i class="nav-icon text-sm fal fa-boxes"></i>Quản lý bài viết chung

                </span>

            </a>

            <ul aria-expanded="<?=($com=='baiviet' && ('chinh-sach'==$_GET['type'] || 'thanh-toan'==$_GET['type'] )) ? "true" :"false"?>"
                class="collapse <?=($com=='baiviet' && ('chinh-sach'==$_GET['type'] || 'thanh-toan'==$_GET['type'] )) ? "in" :""?>"
                <?=($com=='baiviet' && ('chinh-sach'==$_GET['type'] || 'thanh-toan'==$_GET['type'] )) ? "" :"style='height: 0px;'"?>>


                <li class="<?=($com=='baiviet' && $act=='man' && 'chinh-sach'==$_GET['type']) ? "this" :""?>">

                    <a href="index.php?com=baiviet&act=man&type=chinh-sach&page=1">Danh sách hỗ trợ khách hàng</a>

                </li>

                <!-- <li class="<?=($com=='baiviet' && $act=='man' && 'thanh-toan'==$_GET['type']) ? "this" :""?>">

                    <a href="index.php?com=baiviet&act=man&type=thanh-toan&page=1">Danh sách thanh toán</a>

                </li> -->

            </ul>

        </li>

        <li <?=($com=='info' && ($_GET['type']=='gioithieu' ) ) ? ' class="active"' : '' ?>>

            <a class="has-arrow" href="#"
                aria-expanded="<?=($com=='info' && ($_GET['type']=='gioithieu' ) ) ? 'true' : 'false' ?>">

                <i class="nav-icon text-sm fal fa-pager"></i>Quản lý giới thiệu

            </a>

            <ul aria-expanded="<?=($com=='info' && ($_GET['type']=='gioithieu' ) ) ? 'true' : 'false' ?>"
                class="collapse <?=($com=='info' && ($_GET['type']=='gioithieu' ) ) ? 'in' : '' ?>"
                <?=($com=='info' && ($_GET['type']=='gioithieu' ) ) ? '' : 'style="height: 0px;"' ?>>

                <li <?=($com=='info' && $_GET['type']=='gioithieu') ? ' class="this"' : '' ?>><a
                        href="index.php?com=info&act=capnhat&type=gioithieu" title="">Giới thiệu</a></li>



            </ul>

        </li>

        <li class="<?=($com=='baiviet' && $_GET['type']=='gioi-thieu') ? "active" :""?>">

            <a class="has-arrow" href="#"
                aria-expanded="<?=($com=='baiviet' && $_GET['type']=='gioi-thieu') ? "true" :"false"?>">

                <span>

                    <i class="nav-icon text-sm fal fa-boxes"></i>Quản lý hình ảnh giới thiệu

                </span>

            </a>

            <ul aria-expanded="<?=($com=='baiviet' && 'gioi-thieu'==$_GET['type']) ? "true" :"false"?>"
                class="collapse <?=($com=='baiviet' && 'gioi-thieu'==$_GET['type']) ? "in" :""?>"
                <?=($com=='baiviet' && 'gioi-thieu'==$_GET['type']) ? "" :"style='height: 0px;'"?>>

                <li class="<?=($com=='baiviet' && $act=='man' && 'gioi-thieu'==$_GET['type']) ? "this" :""?>">

                    <a href="index.php?com=baiviet&act=man&type=<?='gioi-thieu'?>&page=1">Danh sách hình ảnh</a>

                </li>

            </ul>

        </li>



        <li <?=($com=='photo' || $com=='video') ? ' class="active"' : '' ?>>

            <a class="has-arrow" href="#" aria-expanded="<?=($com=='photo' || $com=='video') ? 'true' : 'false' ?>">

                <i class="nav-icon text-sm fal fa-images"></i>Video-Slider - Mạng xã hội

            </a>

            <ul aria-expanded="<?=($com=='photo' || $com=='video') ? 'true' : 'false' ?>"
                class="collapse <?=($com=='photo' || $com=='video') ? 'in' : '' ?>"
                <?=($com=='photo' || $com=='video') ? '' : 'style="height: 0px;"' ?>>

                <li <?=($com=='photo' && $_GET['type']=='slider') ? ' class="this"' : '' ?>><a
                        href="index.php?com=photo&act=man&type=slider&page=1" title="">Danh sách Slider</a>

                </li>


                <li <?=($com=='photo' && $_GET['type']=='mangxahoi') ? ' class="this"' : '' ?>><a
                        href="index.php?com=photo&act=man&type=mangxahoi&page=1" title="">Danh sách mạng xã hội</a>

                </li>

                <li <?=($com=='video' && $_GET['type']=='video') ? ' class="this"' : '' ?>><a
                        href="index.php?com=video&act=man&type=video&page=1" title="">Danh sách video</a>

                </li>

            </ul>

        </li>

        <?php if(count($GLOBAL['bannerqc'])>0){?>

        <li <?=($com=='bannerqc') ? ' class="active"' : '' ?>>

            <a class="has-arrow" href="#" aria-expanded="<?=($com=='bannerqc') ? 'true' : 'false' ?>">

                <i class="nav-icon text-sm fal fa-pager"></i>Hình ảnh

            </a>

            <ul aria-expanded="<?=($com=='bannerqc') ? 'true' : 'false' ?>"
                class="collapse <?=($com=='bannerqc') ? 'in' : '' ?>"
                <?=($com=='bannerqc') ? '' : 'style="height: 0px;"' ?>>

                <?php foreach ($GLOBAL['bannerqc'] as $key =>$value){?>

                <li <?php if(isset($kiemtra)){if($func->checkPermissions('bannerqc','capnhat',$key)) echo 'class="none"'; }?>
                    <?php if($_GET['type']==$key) echo ' class="this"' ?>><a
                        href="index.php?com=bannerqc&act=capnhat&type=<?=$key?>" title=""><?=$value['title_main']?></a>

                </li>

                <?php }?>

            </ul>

        </li>

        <?php }?>



        <li class="<?=(($com=='contact' || $com=='booking' || $com=='newsletter') && $act=='man') ? "active" :""?>">

            <a class="has-arrow" href="#"
                aria-expanded="<?=(($com=='contact' || $com=='booking' || $com=='newsletter') && $act=='man') ? "true" :"false"?>">

                <i class="nav-icon text-sm fal fa-id-card"></i>Liên hệ
            </a>

            <ul aria-expanded="<?=(($com=='contact' || $com=='booking' || $com=='newsletter') && $act=='man') ? "true" :"false"?>"
                class="collapse <?=(($com=='contact' || $com=='booking' || $com=='newsletter') && $act=='man') ? "in" :""?>">

                <li <?php if($com=='contact' && $act=='man') echo ' class="this"' ?>><a
                        href="index.php?com=contact&act=man&type=contact" title="">Danh sách liên hệ</a></li>

                <!-- <li <?php if($com=='booking' && $act=='man') echo ' class="this"' ?>><a
                        href="index.html?com=booking&act=man&type=dat-lich" title="">Danh sách đăng ký</a></li> -->
                <li <?php if($com=='newsletter' && $act=='man') echo ' class="this"' ?>><a
                        href="index.html?com=newsletter&act=man&type=ho-tro" title="">Danh sách đk hỗ trợ</a></li>
            </ul>

        </li>

        <li class="<?=($com=='redirect' || ($com=='seopage'&& $act=='capnhat')) ? "active" :""?>">

            <a class="has-arrow" href="#"
                aria-expanded="<?=($com=='redirect' || ($com=='seopage'&& $act=='capnhat')) ? "true" :"false"?>">

                <i class="nav-icon text-sm fal fa-share-alt"></i>Quản lý seo

            </a>

            <ul aria-expanded="<?=($com=='redirect' || ($com=='seopage'&& $act=='capnhat')) ? "true" :"false"?>"
                class="collapse <?=($com=='redirect' || ($com=='seopage'&& $act=='capnhat')) ? "in" :""?>">



                <?php foreach($setting['seopage']['page'] as $k => $v){?>



                <li <?php if( ($com=='seopage' && $act=='capnhat') && $type==$k) echo ' class="this"' ?>><a
                        href="index.html?com=seopage&act=capnhat&type=<?=$k?>" title=""><?=$v?></a></li>

                <?php }?>

                <li <?=($com=='redirect') ? ' class="this"' : '' ?>><a href="index.html?com=redirect&act=man" title="">

                        Redirect url

                    </a>

                </li>

            </ul>

        </li>



        <li <?=($com=='setting' || $com=='company') ? 'class="active"' : '' ?>>

            <a class="has-arrow" href="#" aria-expanded="<?=($com=='setting' || $com=='company') ? 'true' : 'false' ?>">

                <i class="nav-icon text-sm fal fa-cogs"></i>Cài đặt cấu hình

            </a>

            <ul aria-expanded="<?=($com=='setting' || $com=='company') ? 'true' : 'false' ?>"
                class="collapse <?=($com=='setting' || $com=='company') ? 'in' : '' ?>"
                <?=($com=='setting' || $com=='company') ? '' : 'style="height: 0px;"' ?>>

                <?php foreach ($GLOBAL['company'] as $key =>$value){?>

                <li <?php if(isset($kiemtra)){if($func->checkPermissions('company','capnhat',$key)) echo 'class="none"'; }?>
                    <?=($com=='company' && $_GET['type']==$key) ? ' class="this"' : '' ?>><a
                        href="index.php?com=company&act=capnhat&type=<?=$key?>" title=""><?=$value['title_main']?></a>

                </li>

                <?php }?>
                <?php foreach($GLOBAL['map'] as $key => $value){?>
                <li <?=($com=='map' && $key == $_GET['type']) ? ' class="this"' : '' ?>>
                    <a href="index.html?com=map&act=man&type=<?=$key?>" title="">

                        <?= $value['title']?>

                    </a>

                </li>
                <?php }?>

                <li <?=($com=='setting') ? ' class="this"' : '' ?>><a href="index.php?com=setting&act=capnhat" title="">

                        <?=_cauhinhchung?>

                    </a>

                </li>

            </ul>

        </li>

        <?php if($GLOBAL_USER==true){?>

        <?php if($func->checkUserAdmin()){?>

        <li <?=($com=='user') ? 'class="active"' : '' ?>>

            <a class="has-arrow" href="#" aria-expanded="fa<?=($com=='user') ? 'true' : 'false' ?>">

                <i class="nav-icon text-sm fal fa-users-cog"></i>Tài khoản admin

            </a>

            <ul aria-expanded="<?=($com=='user') ? 'true' : 'false' ?>"
                class="collapse <?=($com=='user') ? 'in' : '' ?>" <?=($com=='user') ? '' : 'style="height: 0px;"' ?>>

                <?php if($GLOBAL_USER==true){?>

                <li <?php if($_GET['com']=='user' && $_GET['act']=='man') echo ' class="this"' ?>><a
                        href="index.php?com=user&act=man&type=user&page=1"><?=_account?></a></li>

                <?php }?>

            </ul>

        </li>

        <?php }?>

        <?php }?>

        <?php if($GLOBAL_LANG==true){?>

        <li <?=($_GET['com']=='ngonngu') ? 'class="active"' : '' ?>>

            <a class="has-arrow" href="#" aria-expanded="<?=($_GET['com']=='ngonngu') ? 'true' : 'false' ?>">

                <i class="nav-icon text-sm fal fa-language"></i> Hỗ trợ ngôn ngữ

            </a>

            <ul aria-expanded="<?=($_GET['com']=='ngonngu') ? 'true' : 'false' ?>"
                class="collapse <?=($_GET['com']=='ngonngu') ? 'in' : '' ?>"
                <?=($_GET['com']=='ngonngu') ? '' : 'style="height: 0px;"' ?>>

                <li <?php if($_GET['com']=='ngonngu' && $_GET['act']=='man_lang') echo ' class="this"' ?>><a
                        href="index.php?com=ngonngu&act=man_lang"><?=_ngonngu?></a></li>

            </ul>

        </li>

        <?php }?>

    </ul>

</nav>