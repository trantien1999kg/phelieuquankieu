<?php



	$page_index=$deviceType=='phone' ? 20 : 20;


	$viewed = [];

	if(isset($_SESSION['view'])){
		$viewed = $_SESSION['view'];
	}else{
		$_SESSION['view'] = array();
	}
	
	$row_setting= $db->rawQueryOne("select * from #_setting limit 0,1");

	$logo= $db->rawQueryOne("select photo_$lang from #_bannerqc where hienthi=1 and type=? limit 0,1",array('logo'));

	$logofooter= $db->rawQueryOne("select photo_$lang from #_bannerqc where hienthi=1 and type=? limit 0,1",array('logo-footer'));

	$seoPage =$db->rawQueryOne("select photo_$lang,options from #_bannerqc where hienthi=1 and type=? limit 0,1",array('hinhdaidien'));

	$bg_footer =$db->rawQueryOne("select photo_$lang as photo from #_bannerqc where hienthi=1 and type=? limit 0,1",array('bg_footer'));

	$bg_banggia =$db->rawQueryOne("select photo_$lang as photo from #_bannerqc where hienthi=1 and type=? limit 0,1",array('bg_banggia'));

	$bg_header =$db->rawQueryOne("select photo_$lang as photo from #_bannerqc where hienthi=1 and type=? limit 0,1",array('bg_header'));

	$bg_gioithieu =$db->rawQueryOne("select photo_$lang as photo from #_bannerqc where hienthi=1 and type=? limit 0,1",array('bg_gioithieu'));

	$bg_hoatdong =$db->rawQueryOne("select photo_$lang as photo from #_bannerqc where hienthi=1 and type=? limit 0,1",array('bg_hoatdong'));

	$bg_danhmucthumua =$db->rawQueryOne("select photo_$lang as photo from #_bannerqc where hienthi=1 and type=? limit 0,1",array('bg_danhmucthumua'));

	$bg_khuvuc =$db->rawQueryOne("select photo_$lang as photo from #_bannerqc where hienthi=1 and type=? limit 0,1",array('bg_khuvuc'));

	$bg_dangky =$db->rawQueryOne("select photo_$lang as photo from #_bannerqc where hienthi=1 and type=? limit 0,1",array('bg_dangky'));

	$bg_taisao =$db->rawQueryOne("select photo_$lang as photo from #_bannerqc where hienthi=1 and type=? limit 0,1",array('bg_taisao'));

	$icon_tintuc =$db->rawQueryOne("select photo_$lang as photo from #_bannerqc where hienthi=1 and type=? limit 0,1",array('icon_tintuc'));

	$icon_banggia =$db->rawQueryOne("select photo_$lang as photo from #_bannerqc where hienthi=1 and type=? limit 0,1",array('icon_banggia'));

	$icon_gt =$db->rawQueryOne("select photo_$lang as photo from #_bannerqc where hienthi=1 and type=? limit 0,1",array('icon_gt'));
	
	$icon_danhmuc =$db->rawQueryOne("select photo_$lang as photo from #_bannerqc where hienthi=1 and type=? limit 0,1",array('icon_danhmuc'));

	$icon_khuvuc =$db->rawQueryOne("select photo_$lang as photo from #_bannerqc where hienthi=1 and type=? limit 0,1",array('icon_khuvuc'));

	$icon_taisao =$db->rawQueryOne("select photo_$lang as photo from #_bannerqc where hienthi=1 and type=? limit 0,1",array('icon_taisao'));

	$icon_dangky =$db->rawQueryOne("select photo_$lang as photo from #_bannerqc where hienthi=1 and type=? limit 0,1",array('icon_dangky'));

	$desc_footer=$db->rawQueryOne("select mota_$lang as mota from #_company where type=? limit 1",array('desc-footer'));

	// index
	$thongtinchung = $db->rawQuery("select id, ten_$lang as ten, mota_$lang as mota,noidung_$lang as noidung,tenkhongdau_$lang as tenkhongdau,type,photo from #_baiviet where hienthi=1 and type=? order by stt asc,id desc",array('thong-tin-chung'));

	$muahangonline = $db->rawQuery("select id, ten_$lang as ten, mota_$lang as mota,tenkhongdau_$lang as tenkhongdau,type,photo from #_baiviet where hienthi=1 and type=? order by stt asc,id desc",array('mua-hang-online'));

	$policys = $db->rawQuery("select id, ten_$lang as ten, mota_$lang as mota,tenkhongdau_$lang as tenkhongdau,type,photo from #_baiviet where hienthi=1 and type=? order by stt asc,id desc",array('chinh-sach'));

	$payments = $db->rawQuery("select id, ten_$lang as ten, mota_$lang as mota,photo from #_baiviet where hienthi=1 and type=? order by stt asc,id desc limit 0,3",array('thanh-toan'));

	$footer=$db->rawQueryOne("select mota_$lang from #_company where type=? limit 1",array('footer'));

	$lienhecompany=$db->rawQueryOne("select mota_$lang from #_company where type=? limit 1",array('lien-he'));

	//PDP


	$tintuc = $db->rawQuery("select ten_$lang as ten , tenkhongdau_$lang as tenkhongdau ,mota_$lang as mota,luotxem, noidung_$lang as noidung , type , ngaytao, luotxem, photo from #_baiviet where hienthi=1 and type=? order by stt asc,id desc",array('tin-tuc'));

	
	$dichvu = $db->rawQuery("select ten_$lang as ten , tenkhongdau_$lang as tenkhongdau ,mota_$lang as mota,noidung_$lang as noidung , type , ngaytao, luotxem, photo from #_baiviet where hienthi=1 and noibat=1 and type=? order by stt asc,id desc",array('dich-vu'));

	$dichvu1 = $db->rawQuery("select id ,ten_$lang as ten , type ,tenkhongdau_$lang as tenkhongdau , photo from #_baiviet_list where hienthi=1  and type=? order by stt asc,id desc",array('dich-vu'));

	$baochi = $db->rawQuery("select ten_$lang as ten , tenkhongdau_$lang as tenkhongdau ,mota_$lang as mota,noidung_$lang as noidung, type , ngaytao, luotxem, photo from #_baiviet where hienthi=1  and type=? order by stt asc,id desc",array('bao-chi'));

	$banggia = $db->rawQuery("select ten_$lang as ten, mota_$lang as mota,photo ,type from #_baiviet where hienthi=1 and type=? order by stt asc,id desc limit 0,2 ",array('bang-gia'));

	$camket = $db->rawQuery("select ten_$lang as ten, tenkhongdau_$lang as tenkhongdau ,mota_$lang as mota , photo , stt ,type from #_baiviet where hienthi=1 and type=? order by stt asc,id desc limit 0,6 ",array('cam-ket'));

	$baogia1 = $db->rawQuery("select id , tenkhongdau_$lang as tenkhongdau , type , ten_$lang as ten , photo from #_baiviet_list where hienthi=1 and type=?  order by stt asc,id desc",array('bao-gia'));

	$kinhnghiem = $db->rawQuery("select ten_$lang as ten,luotxem, giaban ,ngaytao, photo , photo1 ,type from #_baiviet where hienthi=1 and type=? order by stt asc,id desc",array('kinh-nghiem-xay-dung'));

	$kinhnghiem1 = $db->rawQuery("select id , tenkhongdau_$lang as tenkhongdau , type , ten_$lang as ten , photo from #_baiviet_list where hienthi=1 and type=?  order by stt asc,id desc",array('kinh-nghiem-xay-dung'));

	$luat = $db->rawQuery("select ten_$lang as ten, giaban ,luotxem, photo ,ngaytao, photo1 ,type from #_baiviet where hienthi=1 and type=? order by stt asc,id desc",array('luat-xay-dung'));

	$luat1 = $db->rawQuery("select id , tenkhongdau_$lang as tenkhongdau , type , ten_$lang as ten , photo from #_baiviet_list where hienthi=1 and type=?  order by stt asc,id desc",array('luat-xay-dung'));

	$linhvuc = $db->rawQuery("select ten_$lang as ten, tenkhongdau_$lang as tenkhongdau,luotxem,ngaytao, photo , type from #_baiviet where hienthi=1 and type=? order by stt asc,id desc",array('linh-vuc'));

	$taisao = $db->rawQuery("select ten_$lang as ten, mota_$lang as mota,luotxem,ngaytao, photo , type from #_baiviet where hienthi=1 and type=? order by stt asc,id desc limit 0,5",array('tai-sao'));

	$nangluc = $db->rawQuery("select ten_$lang as ten , mota_$lang as mota,  type ,  photo from #_baiviet where hienthi=1 and type=? order by stt asc,id desc limit 0,4",array('nang-luc'));

	$hahd = $db->rawQuery("select ten_$lang as ten , mota_$lang as mota, noidung_$lang as noidung,  type ,  photo from #_baiviet where hienthi=1 and type=? order by stt asc,id desc limit 0,5",array('hinh-anh-hoat-dong'));

	$sukhacbiet = $db->rawQuery("select ten_$lang as ten , mota_$lang as mota,  type , stt,  photo from #_baiviet where hienthi=1 and type=? order by stt asc,id desc ",array('su-khac-biet'));

	$duan = $db->rawQuery("select ten_$lang as ten , tenkhongdau_$lang as tenkhongdau ,mota_$lang as mota,noidung_$lang as noidung , type , ngaytao, luotxem, photo from #_baiviet where hienthi=1 and noibat=1 and type=? order by stt asc,id desc",array('du-an'));

	$duan1 = $db->rawQuery("select id ,ten_$lang as ten , type ,tenkhongdau_$lang as tenkhongdau , photo from #_baiviet_list where hienthi=1  and type=? order by stt asc,id desc",array('du-an'));


	$hoatdong = $db->rawQuery("select ten_$lang as ten , tenkhongdau_$lang as tenkhongdau ,mota_$lang as mota,luotxem, noidung_$lang as noidung , type , ngaytao, luotxem, photo from #_baiviet where hienthi=1 and type=? order by stt asc,id desc",array('hoat-dong'));

	$danhmuc = $db->rawQuery("select ten_$lang as ten , tenkhongdau_$lang as tenkhongdau ,mota_$lang as mota,luotxem, noidung_$lang as noidung , type , ngaytao, luotxem, photo from #_baiviet where hienthi=1 and type=? order by stt asc,id desc",array('danh-muc'));

	$danhmucnoibat = $db->rawQuery("select id, ten_$lang as ten , tenkhongdau_$lang as tenkhongdau ,mota_$lang as mota,luotxem, noidung_$lang as noidung , type , ngaytao, luotxem, photo from #_baiviet where hienthi=1 and noibat=1 and type=? order by stt asc,id desc limit 0,8",array('danh-muc'));

	$khuvuc = $db->rawQuery("select ten_$lang as ten , tenkhongdau_$lang as tenkhongdau ,mota_$lang as mota,luotxem, noidung_$lang as noidung , type , ngaytao, luotxem, photo from #_baiviet where hienthi=1 and type=? order by stt asc,id desc",array('khu-vuc'));

	$khuvucnoibat = $db->rawQuery("select ten_$lang as ten , tenkhongdau_$lang as tenkhongdau ,mota_$lang as mota,luotxem, noidung_$lang as noidung , type , ngaytao, luotxem, photo from #_baiviet where hienthi=1 and noibat=1 and type=? order by stt asc,id desc limit 0,8",array('khu-vuc'));

	$hinhanhgioithieu = $db->rawQuery(" select photo from #_baiviet where hienthi=1 and type=? order by stt asc,id desc ",array('gioi-thieu'));



	//PDP


	// photo
	$slider=$db->rawQuery("select ten_$lang,photo_$lang photo,link from #_photo where hienthi=1 and type=? order by stt asc,id desc",array('slider'));

	$doitacs=$db->rawQuery("select ten_$lang as ten,photo_$lang photo,link from #_photo where hienthi=1 and type=? order by stt asc,id desc",array('doi-tac'));

	$mangxahoi=$db->rawQuery("select ten_$lang,photo_$lang photo,link from #_photo where hienthi=1 and type=? order by stt asc,id desc",array('mangxahoi'));

	$videos=$db->rawQuery("select id, ten_$lang as ten, links, stt ,photo from #_video where hienthi=1 and type=? order by stt asc,id desc",array('video'));

	$videos1=$db->rawQueryOne("select id, ten_$lang as ten, links,photo from #_video where hienthi=1 and type=? order by stt asc,id desc",array('video'));

	$albums=$db->rawQuery("select id, ten_$lang as ten,photo from #_album where hienthi=1 and type=? order by stt asc,id desc",array('album'));

	$gioithieuDBUS =$db->rawQueryOne("select photo , ten_$lang as ten , mota_$lang as mota , noidung_$lang as noidung from #_info where hienthi=1 and type=? ",array('gioithieu'));

	$baogia =$db->rawQueryOne("select photo , ten_$lang as ten , mota_$lang as mota  from #_info where hienthi=1 and type=? ",array('bao-gia'));

	$tag=$db->rawQuery("select ten_$lang as ten ,link from #_photo where hienthi=1 and type=? order by stt asc,id desc",array('tag'));

	$sanpham = $db->rawQuery("select ten_$lang as ten, tenkhongdau_$lang as tenkhongdau, giaban ,luotxem, photo ,ngaytao, photo1 ,type from #_baiviet where hienthi=1 and type=? order by stt asc,id desc",array('san-pham'));

	$sanpham1 = $db->rawQuery("select id , ten_$lang as ten, tenkhongdau_$lang as tenkhongdau,type from #_baiviet_list where hienthi=1 and type=? order by stt asc,id desc",array('san-pham'));

	$sanpham2 = $db->rawQuery("select id , ten_$lang as ten, tenkhongdau_$lang as tenkhongdau,type from #_baiviet_cat where hienthi=1 and type=? order by stt asc,id desc",array('san-pham'));

	$sanphamnoibat = $db->rawQuery("select ten_$lang as ten, tenkhongdau_$lang as tenkhongdau , giaban ,luotxem, photo ,ngaytao, photo1 ,type from #_baiviet where hienthi=1 and noibat=1 and type=? order by stt asc,id desc limit 0,6",array('san-pham'));

	$sanpham1noibat = $db->rawQuery("select ten_$lang as ten, tenkhongdau_$lang as tenkhongdau , giaban ,luotxem, photo ,ngaytao, photo1 ,type from #_baiviet_list where hienthi=1 and noibat=1 and type=? order by stt asc,id desc ",array('san-pham'));

	$quytrinh = $db->rawQuery("select ten_$lang as ten ,  type , stt , photo from #_baiviet where hienthi=1 and type=? order by stt asc,id desc",array('quy-trinh'));


?>