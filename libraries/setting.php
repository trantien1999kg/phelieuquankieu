<?php 

	#=================check per===============

	$GLOBAL_LANG=false;

	$GLOBAL_PERMISSION=false;

	#=================check user===============

	$GLOBAL_USER=true;

	$GLOBAL_USER_ADMIN=true;

	$GLOBAL_USER_CLIENT=true;

	#================check member================

	$MEMBER=false;

	$CONTACT=true;

	$NEWSLETTER=true;

	$FLASHSALE = true;

	$BOOKING=true;

	$ORDER=true;

	// =======================seo page======================
	$setting['seopage']['page']=array(
		'gioi-thieu'=>"Giới thiệu",
		'tin-tuc'=>'Tin tức',
		'lien-he'=>'Liên hệ',
		'khu-vuc'=>'Khu Vực',
		'danh-muc'=>'Danh Mục',
		
	);
	$setting['seopage']['mota'] = true;
	$setting['seopage']['mota-ckeditor'] = true;
	$setting['seopage']['noidung'] = true;
	$setting['seopage']['noidung-ckeditor'] = true;
	$setting['seopage']['img-width'] = 300;
	$setting['seopage']['img-height'] = 200;
	$setting['seopage']['img-ratio'] = 1;
	$setting['seopage']['img-b'] = 200;
	$setting['seopage']['thumb'] = '300x200x1';
	$setting['seopage']['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF';
	$viewArray=array('htgh','pttt');

	// #========================Sản phẩm==================== 

// #========================Sản phẩm==================== 

$nametype='san-pham';

$GLOBAL['baiviet'][$nametype]['title_main'] = 'Sản phẩm';

$GLOBAL['baiviet'][$nametype]['title'] = 'danh sách';

$GLOBAL['baiviet'][$nametype]['full'] = FALSE;

$GLOBAL['baiviet'][$nametype]['check']=array(

	"mucluc"=>"Mục lục",

	// "spmoi"=>"Sản phẩm mới",

	"hienthi"=>"Hiển thị",

	"noibat"=>"Nổi Bật"

);

$GLOBAL['baiviet'][$nametype]['status'] = array();

$GLOBAL['baiviet'][$nametype]['tragop'] = false;

$GLOBAL['baiviet'][$nametype]['quatang'] = false;

$GLOBAL['baiviet'][$nametype]['img'] = true;

$GLOBAL['baiviet'][$nametype]['imgphu'] = true;

$GLOBAL['baiviet'][$nametype]['img-width'] = 255;

$GLOBAL['baiviet'][$nametype]['img-height'] = 255;

$GLOBAL['baiviet'][$nametype]['img-ratio'] = 2;

$GLOBAL['baiviet'][$nametype]['img-b'] = false;

$GLOBAL['baiviet'][$nametype]['tags'] = false;

$GLOBAL['baiviet'][$nametype]['khuyenmai'] = false;

$GLOBAL['baiviet'][$nametype]['img-gallery'] = true;

$GLOBAL['baiviet'][$nametype]['rating'] = false;

$GLOBAL['baiviet'][$nametype]['multi-gallery-arr']=array

(

	$nametype=>array

		(

			"title_main_photo" => "Hình ảnh kèm theo",

			"title_sub_photo" => "Hình ảnh",

			"width_photo" => 500,

			"height_photo" => 500,

			"thumb_width_photo" => 500,

			"thumb_height_photo" => 500,

			"thumb_ratio_photo" => 1,

			"img_type_photo" => '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp'

		 )

);

$GLOBAL['baiviet'][$nametype]['mota'] = true;

$GLOBAL['baiviet'][$nametype]['mota-ckeditor'] = true;

$GLOBAL['baiviet'][$nametype]['noidung'] = true;

$GLOBAL['baiviet'][$nametype]['noidung-ckeditor'] = true;

$GLOBAL['baiviet'][$nametype]['alias'] = true;

$GLOBAL['baiviet'][$nametype]['tinhtrang'] = true;

$GLOBAL['baiviet'][$nametype]['text-search'] = true;

$GLOBAL['baiviet'][$nametype]['masp'] = false;

$GLOBAL['baiviet'][$nametype]['dungtich'] = false;

$GLOBAL['baiviet'][$nametype]['trangthai'] = false;

$GLOBAL['baiviet'][$nametype]['color'] = false;

$GLOBAL['baiviet'][$nametype]['size'] = false;

$GLOBAL['baiviet'][$nametype]['gia'] = true;

$GLOBAL['baiviet'][$nametype]['giacu'] = false;

$GLOBAL['baiviet'][$nametype]['size-product'] = false;

$GLOBAL['baiviet'][$nametype]['brand'] = false;

$GLOBAL['baiviet'][$nametype]['xuatxu'] = false;

$GLOBAL['baiviet'][$nametype]['baohanh'] = false;

$GLOBAL['baiviet'][$nametype]['title-seo']=true;

$GLOBAL['baiviet'][$nametype]['keywords-seo']=true;

$GLOBAL['baiviet'][$nametype]['description-seo']=true;

$GLOBAL['baiviet'][$nametype]['seo'] = true;

$GLOBAL['baiviet'][$nametype]['schema'] = true;

$GLOBAL['baiviet'][$nametype]['cano'] = true;

$GLOBAL['baiviet'][$nametype]['daytin'] = false;

$GLOBAL['baiviet'][$nametype]['mucluc'] = true;

$GLOBAL['baiviet'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

$GLOBAL['baiviet'][$nametype]['file_type']='doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS';

// DM1
$GLOBAL['baiviet'][$nametype]['list'] = true;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['title'] = 'danh mục cấp 1';

	$GLOBAL_LEVEL1['baiviet'][$nametype]['full'] = true;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['check_list']=array(

		"mucluc"=> "Mục lục",

		"noibat"=>"Nổi bật",

		"hienthi"=>"Hiển thị",

	);

	$GLOBAL_LEVEL1['baiviet'][$nametype]['img'] = true;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-width'] = 200;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-height'] = 200;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['icon'] = false;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-width1'] = 30;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-height1'] = 30;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['banner'] = false;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-width1'] = 300;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-height1'] = 685;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['advance'] = false;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['adv-w'] = 1200;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['adv-h'] = 310;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-ratio'] = 1;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['links'] = true;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['mota'] = true;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['mota-ckeditor'] = true;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['noidung'] = true;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['noidung-ckeditor'] = true;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['seo'] = true;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['noibat'] = false;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-qc'] = false;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-qc-width'] = 1270;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-qc-height'] = 300;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-qc-ratio'] = 1;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-gallery'] = true;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['multi-gallery-arr']=array

(

	$nametype=>array

		(

			"title_main_photo" => "Hình ảnh kèm theo",

			"title_sub_photo" => "Hình ảnh",

			"width_photo" => 500,

			"height_photo" => 500,

			"thumb_width_photo" => 500,

			"thumb_height_photo" => 500,

			"thumb_ratio_photo" => 1,

			"img_type_photo" => '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp'

		 )

);

// DANH MUC 2

$GLOBAL['baiviet'][$nametype]['cat'] = true;

	$GLOBAL_LEVEL2['baiviet'][$nametype]['title'] = 'Danh mục cấp 2';

	$GLOBAL_LEVEL2['baiviet'][$nametype]['full'] = true;

	$GLOBAL_LEVEL2['baiviet'][$nametype]['check_cat']=array(

		"mucluc"=> "Mục lục",

		"noibat"=> "Nổi bật",

		"hienthi"=>"Hiển thị"
		
	);

	$GLOBAL_LEVEL2['baiviet'][$nametype]['img'] = true;

	$GLOBAL_LEVEL2['baiviet'][$nametype]['img-width'] = 102;

	$GLOBAL_LEVEL2['baiviet'][$nametype]['img-height'] = 102;

	$GLOBAL_LEVEL2['baiviet'][$nametype]['brand'] = true;

	$GLOBAL_LEVEL2['baiviet'][$nametype]['list'] = true;

	$GLOBAL_LEVEL2['baiviet'][$nametype]['icon'] = false;

	$GLOBAL_LEVEL2['baiviet'][$nametype]['img-width1'] = 30;

	$GLOBAL_LEVEL2['baiviet'][$nametype]['img-height1'] = 30;

	$GLOBAL_LEVEL2['baiviet'][$nametype]['img-ratio'] = 1;

	$GLOBAL_LEVEL2['baiviet'][$nametype]['mota'] = true;

	$GLOBAL_LEVEL2['baiviet'][$nametype]['mota-ckeditor'] = true;

	$GLOBAL_LEVEL2['baiviet'][$nametype]['noidung'] = true;

	$GLOBAL_LEVEL2['baiviet'][$nametype]['noidung-ckeditor'] = true;

	$GLOBAL_LEVEL2['baiviet'][$nametype]['seo'] = true;

	$GLOBAL_LEVEL2['baiviet'][$nametype]['img-qc'] = false;

	$GLOBAL_LEVEL2['baiviet'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';
	

	// #========================SỬA CHỮA==================== 

	$nametype='sua-chua';

	$GLOBAL['baiviet'][$nametype]['title_main'] = 'Sữa chữa';

	$GLOBAL['baiviet'][$nametype]['title'] = 'danh sách';

	$GLOBAL['baiviet'][$nametype]['full'] = false;

	$GLOBAL['baiviet'][$nametype]['check']=array(

		"mucluc"=>"Mục lục",

		"noibat"=>"Nổi bật",

		"hienthi"=>"Hiển thị"

	);

	$GLOBAL['baiviet'][$nametype]['img'] = true;

	$GLOBAL['baiviet'][$nametype]['img-width'] = 385;

	$GLOBAL['baiviet'][$nametype]['img-height'] = 290;

	$GLOBAL['baiviet'][$nametype]['img-ratio'] = 1;

	$GLOBAL['baiviet'][$nametype]['mota'] = true;

	$GLOBAL['baiviet'][$nametype]['noidung'] = true;

	$GLOBAL['baiviet'][$nametype]['noidung-ckeditor'] = true;

	$GLOBAL['baiviet'][$nametype]['alias'] = true;

	$GLOBAL['baiviet'][$nametype]['cano'] = true;

	$GLOBAL['baiviet'][$nametype]['schema'] = true;

	$GLOBAL['baiviet'][$nametype]['seo'] = true;

	$GLOBAL['baiviet'][$nametype]['tag'] = false;

	$GLOBAL['baiviet'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	$GLOBAL['baiviet'][$nametype]['file_type']='doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS';



	// DM1
	$GLOBAL['baiviet'][$nametype]['list'] = true;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['title'] = 'danh mục cấp 1';

		$GLOBAL_LEVEL1['baiviet'][$nametype]['full'] = true;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['check_list']=array(

			"mucluc"=> "Mục lục",

			"noibat"=>"Nổi bật",

			"hienthi"=>"Hiển thị",

		);

		$GLOBAL_LEVEL1['baiviet'][$nametype]['img'] = true;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['img-width'] = 200;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['img-height'] = 200;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['icon'] = false;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['img-width1'] = 30;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['img-height1'] = 30;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['banner'] = false;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['img-width1'] = 300;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['img-height1'] = 685;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['advance'] = false;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['adv-w'] = 1200;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['adv-h'] = 310;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['img-ratio'] = 1;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['links'] = true;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['mota'] = true;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['mota-ckeditor'] = true;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['noidung'] = true;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['noidung-ckeditor'] = true;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['seo'] = true;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['noibat'] = false;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['img-qc'] = false;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['img-qc-width'] = 1270;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['img-qc-height'] = 300;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['img-qc-ratio'] = 1;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

		$GLOBAL_LEVEL1['baiviet'][$nametype]['img-gallery'] = true;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['multi-gallery-arr']=array

	(

		$nametype=>array

			(

            	"title_main_photo" => "Hình ảnh kèm theo",

            	"title_sub_photo" => "Hình ảnh",

            	"width_photo" => 500,

            	"height_photo" => 500,

            	"thumb_width_photo" => 500,

            	"thumb_height_photo" => 500,

            	"thumb_ratio_photo" => 1,

            	"img_type_photo" => '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp'

         	)

	);

	// #========================XÂY DỰNG==================== 

	$nametype='xay-dung';

	$GLOBAL['baiviet'][$nametype]['title_main'] = 'XÂY DỰNG';

	$GLOBAL['baiviet'][$nametype]['title'] = 'danh sách';

	$GLOBAL['baiviet'][$nametype]['full'] = false;

	$GLOBAL['baiviet'][$nametype]['check']=array(

		"mucluc"=>"Mục lục",

		"noibat"=>"Nổi bật",

		"hienthi"=>"Hiển thị"

	);

	$GLOBAL['baiviet'][$nametype]['img'] = true;

	$GLOBAL['baiviet'][$nametype]['img-width'] = 385;

	$GLOBAL['baiviet'][$nametype]['img-height'] = 290;

	$GLOBAL['baiviet'][$nametype]['img-ratio'] = 1;

	$GLOBAL['baiviet'][$nametype]['mota'] = true;

	$GLOBAL['baiviet'][$nametype]['noidung'] = true;

	$GLOBAL['baiviet'][$nametype]['noidung-ckeditor'] = true;

	$GLOBAL['baiviet'][$nametype]['alias'] = true;

	$GLOBAL['baiviet'][$nametype]['cano'] = true;

	$GLOBAL['baiviet'][$nametype]['schema'] = true;

	$GLOBAL['baiviet'][$nametype]['seo'] = true;

	$GLOBAL['baiviet'][$nametype]['tag'] = false;

	$GLOBAL['baiviet'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	$GLOBAL['baiviet'][$nametype]['file_type']='doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS';



	// DM1
	$GLOBAL['baiviet'][$nametype]['list'] = true;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['title'] = 'danh mục cấp 1';

		$GLOBAL_LEVEL1['baiviet'][$nametype]['full'] = true;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['check_list']=array(

			"mucluc"=> "Mục lục",

			"noibat"=>"Nổi bật",

			"hienthi"=>"Hiển thị",

		);

		$GLOBAL_LEVEL1['baiviet'][$nametype]['img'] = true;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['img-width'] = 200;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['img-height'] = 200;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['icon'] = false;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['img-width1'] = 30;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['img-height1'] = 30;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['banner'] = false;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['img-width1'] = 300;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['img-height1'] = 685;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['advance'] = false;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['adv-w'] = 1200;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['adv-h'] = 310;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['img-ratio'] = 1;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['links'] = true;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['mota'] = true;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['mota-ckeditor'] = true;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['noidung'] = true;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['noidung-ckeditor'] = true;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['seo'] = true;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['noibat'] = false;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['img-qc'] = false;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['img-qc-width'] = 1270;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['img-qc-height'] = 300;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['img-qc-ratio'] = 1;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

		$GLOBAL_LEVEL1['baiviet'][$nametype]['img-gallery'] = true;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['multi-gallery-arr']=array

	(

		$nametype=>array

			(

            	"title_main_photo" => "Hình ảnh kèm theo",

            	"title_sub_photo" => "Hình ảnh",

            	"width_photo" => 500,

            	"height_photo" => 500,

            	"thumb_width_photo" => 500,

            	"thumb_height_photo" => 500,

            	"thumb_ratio_photo" => 1,

            	"img_type_photo" => '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp'

         	)

	);
// #========================NỘI THẤT==================== 

$nametype='noi-that';

$GLOBAL['baiviet'][$nametype]['title_main'] = 'NỘI THẤT';

$GLOBAL['baiviet'][$nametype]['title'] = 'danh sách';

$GLOBAL['baiviet'][$nametype]['full'] = false;

$GLOBAL['baiviet'][$nametype]['check']=array(

	"mucluc"=>"Mục lục",

	"noibat"=>"Nổi bật",

	"hienthi"=>"Hiển thị"

);

$GLOBAL['baiviet'][$nametype]['img'] = true;

$GLOBAL['baiviet'][$nametype]['img-width'] = 385;

$GLOBAL['baiviet'][$nametype]['img-height'] = 290;

$GLOBAL['baiviet'][$nametype]['img-ratio'] = 1;

$GLOBAL['baiviet'][$nametype]['mota'] = true;

$GLOBAL['baiviet'][$nametype]['noidung'] = true;

$GLOBAL['baiviet'][$nametype]['noidung-ckeditor'] = true;

$GLOBAL['baiviet'][$nametype]['alias'] = true;

$GLOBAL['baiviet'][$nametype]['cano'] = true;

$GLOBAL['baiviet'][$nametype]['schema'] = true;

$GLOBAL['baiviet'][$nametype]['seo'] = true;

$GLOBAL['baiviet'][$nametype]['tag'] = false;

$GLOBAL['baiviet'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

$GLOBAL['baiviet'][$nametype]['file_type']='doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS';



// DM1
$GLOBAL['baiviet'][$nametype]['list'] = true;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['title'] = 'danh mục cấp 1';

	$GLOBAL_LEVEL1['baiviet'][$nametype]['full'] = true;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['check_list']=array(

		"mucluc"=> "Mục lục",

		"noibat"=>"Nổi bật",

		"hienthi"=>"Hiển thị",

	);

	$GLOBAL_LEVEL1['baiviet'][$nametype]['img'] = true;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-width'] = 200;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-height'] = 200;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['icon'] = false;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-width1'] = 30;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-height1'] = 30;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['banner'] = false;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-width1'] = 300;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-height1'] = 685;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['advance'] = false;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['adv-w'] = 1200;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['adv-h'] = 310;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-ratio'] = 1;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['links'] = true;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['mota'] = true;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['mota-ckeditor'] = true;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['noidung'] = true;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['noidung-ckeditor'] = true;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['seo'] = true;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['noibat'] = false;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-qc'] = false;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-qc-width'] = 1270;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-qc-height'] = 300;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-qc-ratio'] = 1;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-gallery'] = true;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['multi-gallery-arr']=array

(

	$nametype=>array

		(

			"title_main_photo" => "Hình ảnh kèm theo",

			"title_sub_photo" => "Hình ảnh",

			"width_photo" => 500,

			"height_photo" => 500,

			"thumb_width_photo" => 500,

			"thumb_height_photo" => 500,

			"thumb_ratio_photo" => 1,

			"img_type_photo" => '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp'

		 )

);

// #========================CAM KẾT==================== 

$nametype='cam-ket';

$GLOBAL['baiviet'][$nametype]['title_main'] = 'CAM KẾT';

$GLOBAL['baiviet'][$nametype]['title'] = 'danh sách';

$GLOBAL['baiviet'][$nametype]['full'] = false;

$GLOBAL['baiviet'][$nametype]['check']=array(

	"hienthi"=>"Hiển thị"

);

$GLOBAL['baiviet'][$nametype]['img'] = true;

$GLOBAL['baiviet'][$nametype]['img-width'] = 385;

$GLOBAL['baiviet'][$nametype]['img-height'] = 290;

$GLOBAL['baiviet'][$nametype]['img-ratio'] = 1;

$GLOBAL['baiviet'][$nametype]['mota'] = true;

$GLOBAL['baiviet'][$nametype]['noidung'] = FALSE;

$GLOBAL['baiviet'][$nametype]['noidung-ckeditor'] = true;

$GLOBAL['baiviet'][$nametype]['alias'] = false;

$GLOBAL['baiviet'][$nametype]['cano'] = false;

$GLOBAL['baiviet'][$nametype]['schema'] = true;

$GLOBAL['baiviet'][$nametype]['seo'] = true;

$GLOBAL['baiviet'][$nametype]['tag'] = false;

$GLOBAL['baiviet'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

$GLOBAL['baiviet'][$nametype]['file_type']='doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS';



// #========================KINH NGHIỆM XÂY DỰNG==================== 

$nametype='kinh-nghiem-xay-dung';

$GLOBAL['baiviet'][$nametype]['title_main'] = 'KINH NGHIỆM XÂY DỰNG';

$GLOBAL['baiviet'][$nametype]['title'] = 'danh sách';

$GLOBAL['baiviet'][$nametype]['full'] = false;

$GLOBAL['baiviet'][$nametype]['check']=array(

	"mucluc"=>"Mục lục",

	"noibat"=>"Nổi bật",

	"hienthi"=>"Hiển thị"

);

$GLOBAL['baiviet'][$nametype]['img'] = true;

$GLOBAL['baiviet'][$nametype]['img-width'] = 385;

$GLOBAL['baiviet'][$nametype]['img-height'] = 290;

$GLOBAL['baiviet'][$nametype]['img-ratio'] = 1;

$GLOBAL['baiviet'][$nametype]['mota'] = true;

$GLOBAL['baiviet'][$nametype]['noidung'] = true;

$GLOBAL['baiviet'][$nametype]['noidung-ckeditor'] = true;

$GLOBAL['baiviet'][$nametype]['alias'] = true;

$GLOBAL['baiviet'][$nametype]['cano'] = true;

$GLOBAL['baiviet'][$nametype]['schema'] = true;

$GLOBAL['baiviet'][$nametype]['seo'] = true;

$GLOBAL['baiviet'][$nametype]['tag'] = false;

$GLOBAL['baiviet'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

$GLOBAL['baiviet'][$nametype]['file_type']='doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS';



// DM1
$GLOBAL['baiviet'][$nametype]['list'] = true;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['title'] = 'danh mục cấp 1';

	$GLOBAL_LEVEL1['baiviet'][$nametype]['full'] = true;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['check_list']=array(

		"mucluc"=> "Mục lục",

		"noibat"=>"Nổi bật",

		"hienthi"=>"Hiển thị",

	);

	$GLOBAL_LEVEL1['baiviet'][$nametype]['img'] = true;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-width'] = 200;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-height'] = 200;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['icon'] = false;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-width1'] = 30;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-height1'] = 30;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['banner'] = false;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-width1'] = 300;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-height1'] = 685;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['advance'] = false;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['adv-w'] = 1200;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['adv-h'] = 310;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-ratio'] = 1;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['links'] = true;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['mota'] = true;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['mota-ckeditor'] = true;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['noidung'] = true;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['noidung-ckeditor'] = true;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['seo'] = true;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['noibat'] = false;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-qc'] = false;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-qc-width'] = 1270;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-qc-height'] = 300;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-qc-ratio'] = 1;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-gallery'] = true;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['multi-gallery-arr']=array

(

	$nametype=>array

		(

			"title_main_photo" => "Hình ảnh kèm theo",

			"title_sub_photo" => "Hình ảnh",

			"width_photo" => 500,

			"height_photo" => 500,

			"thumb_width_photo" => 500,

			"thumb_height_photo" => 500,

			"thumb_ratio_photo" => 1,

			"img_type_photo" => '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp'

		 )

);

// #========================LUẬT XÂY DỰNG==================== 

$nametype='luat-xay-dung';

$GLOBAL['baiviet'][$nametype]['title_main'] = 'LUẬT XÂY DỰNG';

$GLOBAL['baiviet'][$nametype]['title'] = 'danh sách';

$GLOBAL['baiviet'][$nametype]['full'] = false;

$GLOBAL['baiviet'][$nametype]['check']=array(

	"mucluc"=>"Mục lục",

	"noibat"=>"Nổi bật",

	"hienthi"=>"Hiển thị"

);

$GLOBAL['baiviet'][$nametype]['img'] = true;

$GLOBAL['baiviet'][$nametype]['img-width'] = 385;

$GLOBAL['baiviet'][$nametype]['img-height'] = 290;

$GLOBAL['baiviet'][$nametype]['img-ratio'] = 1;

$GLOBAL['baiviet'][$nametype]['mota'] = true;

$GLOBAL['baiviet'][$nametype]['noidung'] = true;

$GLOBAL['baiviet'][$nametype]['noidung-ckeditor'] = true;

$GLOBAL['baiviet'][$nametype]['alias'] = true;

$GLOBAL['baiviet'][$nametype]['cano'] = true;

$GLOBAL['baiviet'][$nametype]['schema'] = true;

$GLOBAL['baiviet'][$nametype]['seo'] = true;

$GLOBAL['baiviet'][$nametype]['tag'] = false;

$GLOBAL['baiviet'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

$GLOBAL['baiviet'][$nametype]['file_type']='doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS';



// DM1
$GLOBAL['baiviet'][$nametype]['list'] = true;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['title'] = 'danh mục cấp 1';

	$GLOBAL_LEVEL1['baiviet'][$nametype]['full'] = true;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['check_list']=array(

		"mucluc"=> "Mục lục",

		"noibat"=>"Nổi bật",

		"hienthi"=>"Hiển thị",

	);

	$GLOBAL_LEVEL1['baiviet'][$nametype]['img'] = true;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-width'] = 200;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-height'] = 200;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['icon'] = false;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-width1'] = 30;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-height1'] = 30;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['banner'] = false;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-width1'] = 300;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-height1'] = 685;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['advance'] = false;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['adv-w'] = 1200;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['adv-h'] = 310;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-ratio'] = 1;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['links'] = true;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['mota'] = true;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['mota-ckeditor'] = true;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['noidung'] = true;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['noidung-ckeditor'] = true;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['seo'] = true;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['noibat'] = false;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-qc'] = false;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-qc-width'] = 1270;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-qc-height'] = 300;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-qc-ratio'] = 1;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-gallery'] = true;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['multi-gallery-arr']=array

(

	$nametype=>array

		(

			"title_main_photo" => "Hình ảnh kèm theo",

			"title_sub_photo" => "Hình ảnh",

			"width_photo" => 500,

			"height_photo" => 500,

			"thumb_width_photo" => 500,

			"thumb_height_photo" => 500,

			"thumb_ratio_photo" => 1,

			"img_type_photo" => '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp'

		 )

);
	#========================Tin tức==================== 

	$nametype='tin-tuc';

	$GLOBAL['baiviet'][$nametype]['title_main'] = 'Tin tức';

	$GLOBAL['baiviet'][$nametype]['title'] = 'danh sách';

	$GLOBAL['baiviet'][$nametype]['full'] = false;

	$GLOBAL['baiviet'][$nametype]['check']=array(


		"hienthi"=>"Hiển thị"

	);

	$GLOBAL['baiviet'][$nametype]['img'] = true;

	$GLOBAL['baiviet'][$nametype]['img-width'] = 385;

	$GLOBAL['baiviet'][$nametype]['img-height'] = 290;

	$GLOBAL['baiviet'][$nametype]['img-ratio'] = 1;

	$GLOBAL['baiviet'][$nametype]['mota'] = true;

	$GLOBAL['baiviet'][$nametype]['mota-ckeditor'] = true;

	$GLOBAL['baiviet'][$nametype]['noidung'] = true;

	$GLOBAL['baiviet'][$nametype]['noidung-ckeditor'] = true;

	$GLOBAL['baiviet'][$nametype]['alias'] = true;

	$GLOBAL['baiviet'][$nametype]['cano'] = false;

	$GLOBAL['baiviet'][$nametype]['schema'] = false;

	$GLOBAL['baiviet'][$nametype]['seo'] = true;

	$GLOBAL['baiviet'][$nametype]['tag'] = false;

	$GLOBAL['baiviet'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	$GLOBAL['baiviet'][$nametype]['file_type']='doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS';

	#========================Tin tức==================== 

// 	$nametype='du-an';

// 	$GLOBAL['baiviet'][$nametype]['title_main'] = 'Dự án';

// 	$GLOBAL['baiviet'][$nametype]['title'] = 'danh sách';

// 	$GLOBAL['baiviet'][$nametype]['full'] = false;

// 	$GLOBAL['baiviet'][$nametype]['check']=array(

// 		"mucluc" => "Mục lục",

// 		"hienthi"=>"Hiển thị"

// 	);

// 	$GLOBAL['baiviet'][$nametype]['img'] = true;

// 	$GLOBAL['baiviet'][$nametype]['img-width'] = 385;

// 	$GLOBAL['baiviet'][$nametype]['img-height'] = 290;

// 	$GLOBAL['baiviet'][$nametype]['img-ratio'] = 1;

// 	$GLOBAL['baiviet'][$nametype]['mota'] = true;

// 	$GLOBAL['baiviet'][$nametype]['mota-ckeditor'] = true;

// 	$GLOBAL['baiviet'][$nametype]['noidung'] = true;

// 	$GLOBAL['baiviet'][$nametype]['noidung-ckeditor'] = true;

// 	$GLOBAL['baiviet'][$nametype]['alias'] = true;

// 	$GLOBAL['baiviet'][$nametype]['cano'] = false;

// 	$GLOBAL['baiviet'][$nametype]['schema'] = false;

// 	$GLOBAL['baiviet'][$nametype]['seo'] = true;

// 	$GLOBAL['baiviet'][$nametype]['tag'] = false;

// 	$GLOBAL['baiviet'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

// 	$GLOBAL['baiviet'][$nametype]['file_type']='doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS';


// // DM1
// $GLOBAL['baiviet'][$nametype]['list'] = true;

// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['title'] = 'danh mục cấp 1';

// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['full'] = true;

// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['check_list']=array(

// 		"mucluc"=> "Mục lục",

// 		"noibat"=>"Nổi bật",

// 		"hienthi"=>"Hiển thị",

// 	);

// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['img'] = true;

// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-width'] = 200;

// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-height'] = 200;

// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['icon'] = false;

// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-width1'] = 30;

// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-height1'] = 30;

// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['banner'] = false;

// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-width1'] = 300;

// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-height1'] = 685;

// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['advance'] = false;

// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['adv-w'] = 1200;

// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['adv-h'] = 310;

// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-ratio'] = 1;

// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['links'] = true;

// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['mota'] = true;

// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['mota-ckeditor'] = true;

// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['noidung'] = true;

// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['noidung-ckeditor'] = true;

// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['seo'] = true;

// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['noibat'] = false;

// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-qc'] = false;

// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-qc-width'] = 1270;

// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-qc-height'] = 300;

// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-qc-ratio'] = 1;

// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-gallery'] = true;

// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['multi-gallery-arr']=array

// (

// 	$nametype=>array

// 		(

// 			"title_main_photo" => "Hình ảnh kèm theo",

// 			"title_sub_photo" => "Hình ảnh",

// 			"width_photo" => 500,

// 			"height_photo" => 500,

// 			"thumb_width_photo" => 500,

// 			"thumb_height_photo" => 500,

// 			"thumb_ratio_photo" => 1,

// 			"img_type_photo" => '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp'

// 		 )

// );

	// #========================BÁO CHÍ==================== 

	// $nametype='bao-chi';

	// $GLOBAL['baiviet'][$nametype]['title_main'] = 'BÁO CHÍ';

	// $GLOBAL['baiviet'][$nametype]['title'] = 'danh sách';

	// $GLOBAL['baiviet'][$nametype]['full'] = false;

	// $GLOBAL['baiviet'][$nametype]['check']=array(

	// 	"mucluc"=>"Mục lục",

	// 	"noibat"=>"Nổi bật",

	// 	"hienthi"=>"Hiển thị"

	// );

	// $GLOBAL['baiviet'][$nametype]['img'] = true;

	// $GLOBAL['baiviet'][$nametype]['img-width'] = 385;

	// $GLOBAL['baiviet'][$nametype]['img-height'] = 290;

	// $GLOBAL['baiviet'][$nametype]['img-ratio'] = 1;

	// $GLOBAL['baiviet'][$nametype]['mota'] = true;

	// $GLOBAL['baiviet'][$nametype]['mota-ckeditor'] = true;

	// $GLOBAL['baiviet'][$nametype]['noidung'] = true;

	// $GLOBAL['baiviet'][$nametype]['noidung-ckeditor'] = true;

	// $GLOBAL['baiviet'][$nametype]['alias'] = true;

	// $GLOBAL['baiviet'][$nametype]['cano'] = true;

	// $GLOBAL['baiviet'][$nametype]['schema'] = true;

	// $GLOBAL['baiviet'][$nametype]['seo'] = true;

	// $GLOBAL['baiviet'][$nametype]['tag'] = false;

	// $GLOBAL['baiviet'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	// $GLOBAL['baiviet'][$nametype]['file_type']='doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS';


#========================QUY TRÌNH==================== 

$nametype='quy-trinh';

$GLOBAL['baiviet'][$nametype]['title_main'] = 'QUY TRÌNH';

$GLOBAL['baiviet'][$nametype]['title'] = 'danh sách';

$GLOBAL['baiviet'][$nametype]['full'] = false;

$GLOBAL['baiviet'][$nametype]['check']=array(

	"hienthi"=>"Hiển thị"

);

$GLOBAL['baiviet'][$nametype]['img'] = true;

$GLOBAL['baiviet'][$nametype]['img-width'] = 385;

$GLOBAL['baiviet'][$nametype]['img-height'] = 290;

$GLOBAL['baiviet'][$nametype]['img-ratio'] = 1;

$GLOBAL['baiviet'][$nametype]['mota'] = false;

$GLOBAL['baiviet'][$nametype]['mota-ckeditor'] = false;

$GLOBAL['baiviet'][$nametype]['noidung'] = false;

$GLOBAL['baiviet'][$nametype]['noidung-ckeditor'] = true;

$GLOBAL['baiviet'][$nametype]['alias'] = true;

$GLOBAL['baiviet'][$nametype]['cano'] = false;

$GLOBAL['baiviet'][$nametype]['schema'] = true;

$GLOBAL['baiviet'][$nametype]['seo'] = true;

$GLOBAL['baiviet'][$nametype]['tag'] = false;

$GLOBAL['baiviet'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

$GLOBAL['baiviet'][$nametype]['file_type']='doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS';



	#========================LĨNH VỰC HOẠT ĐỘNG==================== 

	$nametype='linh-vuc';

	$GLOBAL['baiviet'][$nametype]['title_main'] = 'Lĩnh Vực Hoạt Động';

	$GLOBAL['baiviet'][$nametype]['title'] = 'danh sách Lĩnh Vực Hoạt Động';

	$GLOBAL['baiviet'][$nametype]['full'] = false;

	$GLOBAL['baiviet'][$nametype]['check']=array(

		"mucluc"=>"Mục lục",

		"noibat"=>"Nổi bật",

		"hienthi"=>"Hiển thị"

	);

	$GLOBAL['baiviet'][$nametype]['img'] = true;

	$GLOBAL['baiviet'][$nametype]['img-width'] = 385;

	$GLOBAL['baiviet'][$nametype]['img-height'] = 290;

	$GLOBAL['baiviet'][$nametype]['img-ratio'] = 1;

	$GLOBAL['baiviet'][$nametype]['mota'] = true;

	$GLOBAL['baiviet'][$nametype]['noidung'] = true;

	$GLOBAL['baiviet'][$nametype]['noidung-ckeditor'] = true;

	$GLOBAL['baiviet'][$nametype]['alias'] = true;

	$GLOBAL['baiviet'][$nametype]['cano'] = true;

	$GLOBAL['baiviet'][$nametype]['schema'] = true;

	$GLOBAL['baiviet'][$nametype]['seo'] = true;

	$GLOBAL['baiviet'][$nametype]['tag'] = false;

	$GLOBAL['baiviet'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	$GLOBAL['baiviet'][$nametype]['file_type']='doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS';

	#============================================Thương hiệu======================================================================
	
	// $nametype = "thuong-hieu";
	// $GLOBAL['baiviet'][$nametype]['alias'] = true;
	// $GLOBAL['baiviet'][$nametype]['list'] = true;

	// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['title'] = 'danh mục cấp 1';

	// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['full'] = true;

	// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['check_list']=array(

	// 		"mucluc"=>"Mục lục",

	// 		"noibat"=>'Nổi bật',

	// 		"daitiec"=>'Đại tiệc',

	// 		"hienthi"=>"Hiển thị"

	// 	);

	// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['img'] = true;

	// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-width'] = 285;

	// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-height'] = 160;

	// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['dm_index'] = false;

	// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['banner'] = false;

	// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-width1'] = 30;

	// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-height1'] = 30;

	// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['advance'] = false;

	// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['adv-w'] = 1200;

	// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['adv-h'] = 310;

	// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-ratio'] = 1;

	// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['mota'] = true;

	// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['mota-ckeditor'] = true;

	// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['noidung'] = false;

	// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['noidung-ckeditor'] = true;

	// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['seo'] = false;

	// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['alias'] = true;

	// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['noibat'] = false;

	// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-qc'] = false;

	// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-qc-width'] = 1270;

	// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-qc-height'] = 300;

	// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-qc-ratio'] = 1;

	// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-gallery'] = false;

	// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['multi-gallery-arr']=array

	// (

	// 	$nametype=>array

	// 		(

    //         	"title_main_photo" => "Hình ảnh kèm theo",

    //         	"title_sub_photo" => "Hình ảnh",

    //         	"width_photo" => 500,

    //         	"height_photo" => 500,

    //         	"thumb_width_photo" => 500,

    //         	"thumb_height_photo" => 500,

    //         	"thumb_ratio_photo" => 1,

    //         	"img_type_photo" => '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp'

    //      	)

	// );
	
	#=========================================Sứ mệnh=============================================================
	
	$nametype='thong-tin-chung';

	$GLOBAL['baiviet'][$nametype]['title_main'] = 'bài viết thông tin chung';

	$GLOBAL['baiviet'][$nametype]['title'] = 'danh sách';

	$GLOBAL['baiviet'][$nametype]['full'] = false;

	$GLOBAL['baiviet'][$nametype]['check']=array(

		"hienthi"=>"Hiển thị",

	);


	$GLOBAL['baiviet'][$nametype]['noidung'] = true;

	$GLOBAL['baiviet'][$nametype]['noidung-ckeditor'] = true;

	$GLOBAL['baiviet'][$nametype]['numb'] = false;

	$GLOBAL['baiviet'][$nametype]['cano'] = true;

	$GLOBAL['baiviet'][$nametype]['alias'] = true;

	$GLOBAL['baiviet'][$nametype]['seo'] = true;

	$GLOBAL['baiviet'][$nametype]['tag'] = false;

	$GLOBAL['baiviet'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	$GLOBAL['baiviet'][$nametype]['file_type']='doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS';

#=========================================HOẠT ĐỘNG=============================================================
	
$nametype='hoat-dong';

$GLOBAL['baiviet'][$nametype]['title_main'] = 'HOẠT ĐỘNG';

$GLOBAL['baiviet'][$nametype]['title'] = 'danh sách';

$GLOBAL['baiviet'][$nametype]['full'] = false;

$GLOBAL['baiviet'][$nametype]['check']=array(

	"hienthi"=>"Hiển thị",

);

$GLOBAL['baiviet'][$nametype]['img'] = true;

$GLOBAL['baiviet'][$nametype]['img-width'] = 278;

$GLOBAL['baiviet'][$nametype]['img-height'] = 278;

$GLOBAL['baiviet'][$nametype]['img-ratio'] = 1;

$GLOBAL['baiviet'][$nametype]['mota'] = true;

$GLOBAL['baiviet'][$nametype]['mota-ckeditor'] = false;

$GLOBAL['baiviet'][$nametype]['noidung'] = true;

$GLOBAL['baiviet'][$nametype]['noidung-ckeditor'] = true;

$GLOBAL['baiviet'][$nametype]['numb'] = false;

$GLOBAL['baiviet'][$nametype]['cano'] = true;

$GLOBAL['baiviet'][$nametype]['alias'] = true;

$GLOBAL['baiviet'][$nametype]['seo'] = true;

$GLOBAL['baiviet'][$nametype]['tag'] = false;

$GLOBAL['baiviet'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

$GLOBAL['baiviet'][$nametype]['file_type']='doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS';


#=========================================DANH MỤC THU MUA=============================================================
	
$nametype='danh-muc';

$GLOBAL['baiviet'][$nametype]['title_main'] = 'DANH MỤC THU MUA';

$GLOBAL['baiviet'][$nametype]['title'] = 'danh sách';

$GLOBAL['baiviet'][$nametype]['full'] = false;

$GLOBAL['baiviet'][$nametype]['check']=array(

	"hienthi"=>"Hiển thị",

	"noibat"=>"Nổi Bật",

);

$GLOBAL['baiviet'][$nametype]['img'] = true;

$GLOBAL['baiviet'][$nametype]['img-width'] = 278;

$GLOBAL['baiviet'][$nametype]['img-height'] = 278;

$GLOBAL['baiviet'][$nametype]['img-ratio'] = 1;

$GLOBAL['baiviet'][$nametype]['mota'] = true;

$GLOBAL['baiviet'][$nametype]['mota-ckeditor'] = true;

$GLOBAL['baiviet'][$nametype]['noidung'] = true;

$GLOBAL['baiviet'][$nametype]['noidung-ckeditor'] = true;

$GLOBAL['baiviet'][$nametype]['numb'] = false;

$GLOBAL['baiviet'][$nametype]['cano'] = FALSE;

$GLOBAL['baiviet'][$nametype]['alias'] = true;

$GLOBAL['baiviet'][$nametype]['seo'] = true;

$GLOBAL['baiviet'][$nametype]['tag'] = false;

$GLOBAL['baiviet'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

$GLOBAL['baiviet'][$nametype]['file_type']='doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS';


#=========================================DANH SÁCH ẢNH GIỚI THIỆU=============================================================
	
$nametype='gioi-thieu';

$GLOBAL['baiviet'][$nametype]['title_main'] = 'DANH SÁCH ẢNH GIỚI THIỆU';

$GLOBAL['baiviet'][$nametype]['title'] = 'danh sách';

$GLOBAL['baiviet'][$nametype]['full'] = false;

$GLOBAL['baiviet'][$nametype]['check']=array(

	"hienthi"=>"Hiển thị",


);

$GLOBAL['baiviet'][$nametype]['img'] = true;

$GLOBAL['baiviet'][$nametype]['img-width'] = 278;

$GLOBAL['baiviet'][$nametype]['img-height'] = 278;

$GLOBAL['baiviet'][$nametype]['img-ratio'] = 1;

$GLOBAL['baiviet'][$nametype]['mota'] = false;

$GLOBAL['baiviet'][$nametype]['mota-ckeditor'] = true;

$GLOBAL['baiviet'][$nametype]['noidung'] = false;

$GLOBAL['baiviet'][$nametype]['noidung-ckeditor'] = true;

$GLOBAL['baiviet'][$nametype]['numb'] = false;

$GLOBAL['baiviet'][$nametype]['cano'] = FALSE;

$GLOBAL['baiviet'][$nametype]['alias'] = false;

$GLOBAL['baiviet'][$nametype]['seo'] = false;

$GLOBAL['baiviet'][$nametype]['tag'] = false;

$GLOBAL['baiviet'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

$GLOBAL['baiviet'][$nametype]['file_type']='doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS';



#=========================================CẢM NHẬN=============================================================
	
$nametype='doi-tac';

$GLOBAL['baiviet'][$nametype]['title_main'] = 'CẢM NHẬN';

$GLOBAL['baiviet'][$nametype]['title'] = 'danh sách';

$GLOBAL['baiviet'][$nametype]['full'] = false;

$GLOBAL['baiviet'][$nametype]['check']=array(

	"hienthi"=>"Hiển thị",

);

$GLOBAL['baiviet'][$nametype]['img'] = true;

$GLOBAL['baiviet'][$nametype]['img-width'] = 278;

$GLOBAL['baiviet'][$nametype]['img-height'] = 278;

$GLOBAL['baiviet'][$nametype]['img-ratio'] = 1;

$GLOBAL['baiviet'][$nametype]['mota'] = false;

$GLOBAL['baiviet'][$nametype]['mota-ckeditor'] = false;

$GLOBAL['baiviet'][$nametype]['noidung'] = false;

$GLOBAL['baiviet'][$nametype]['noidung-ckeditor'] = true;

$GLOBAL['baiviet'][$nametype]['numb'] = false;

$GLOBAL['baiviet'][$nametype]['cano'] = false;

$GLOBAL['baiviet'][$nametype]['alias'] = true;

$GLOBAL['baiviet'][$nametype]['seo'] = false;

$GLOBAL['baiviet'][$nametype]['tag'] = false;

$GLOBAL['baiviet'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

$GLOBAL['baiviet'][$nametype]['file_type']='doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS';



#=========================================Dịch Vụ TIÊU BIỂU=============================================================
	
$nametype='khu-vuc';

$GLOBAL['baiviet'][$nametype]['title_main'] = 'Dịch Vụ';

$GLOBAL['baiviet'][$nametype]['title'] = 'danh sách';

$GLOBAL['baiviet'][$nametype]['full'] = false;

$GLOBAL['baiviet'][$nametype]['check']=array(

	"hienthi"=>"Hiển thị",

	"noibat"=>"Nổi Bật",

);

$GLOBAL['baiviet'][$nametype]['img'] = true;

$GLOBAL['baiviet'][$nametype]['img-width'] = 278;

$GLOBAL['baiviet'][$nametype]['img-height'] = 278;

$GLOBAL['baiviet'][$nametype]['img-ratio'] = 1;

$GLOBAL['baiviet'][$nametype]['mota'] = true;

$GLOBAL['baiviet'][$nametype]['mota-ckeditor'] = true;

$GLOBAL['baiviet'][$nametype]['noidung'] = true;

$GLOBAL['baiviet'][$nametype]['noidung-ckeditor'] = true;


$GLOBAL['baiviet'][$nametype]['numb'] = false;

$GLOBAL['baiviet'][$nametype]['cano'] = false;

$GLOBAL['baiviet'][$nametype]['alias'] = true;

$GLOBAL['baiviet'][$nametype]['seo'] = true;

$GLOBAL['baiviet'][$nametype]['tag'] = false;

$GLOBAL['baiviet'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

$GLOBAL['baiviet'][$nametype]['file_type']='doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS';



#=========================================BẢNG GIÁ THU MUA=============================================================
	
$nametype='bang-gia';

$GLOBAL['baiviet'][$nametype]['title_main'] = 'BẢNG GIÁ THU MUA';

$GLOBAL['baiviet'][$nametype]['title'] = 'danh sách';

$GLOBAL['baiviet'][$nametype]['full'] = false;

$GLOBAL['baiviet'][$nametype]['check']=array(

	"hienthi"=>"Hiển thị",

);

$GLOBAL['baiviet'][$nametype]['img'] = true;

$GLOBAL['baiviet'][$nametype]['img-width'] = 278;

$GLOBAL['baiviet'][$nametype]['img-height'] = 278;

$GLOBAL['baiviet'][$nametype]['img-ratio'] = 1;

$GLOBAL['baiviet'][$nametype]['mota'] = true;

$GLOBAL['baiviet'][$nametype]['mota-ckeditor'] = false;

$GLOBAL['baiviet'][$nametype]['noidung'] = false;

$GLOBAL['baiviet'][$nametype]['noidung-ckeditor'] = false;


$GLOBAL['baiviet'][$nametype]['numb'] = false;

$GLOBAL['baiviet'][$nametype]['cano'] = false;

$GLOBAL['baiviet'][$nametype]['alias'] = false;

$GLOBAL['baiviet'][$nametype]['seo'] = true;

$GLOBAL['baiviet'][$nametype]['tag'] = false;

$GLOBAL['baiviet'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

$GLOBAL['baiviet'][$nametype]['file_type']='doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS';

#=========================================DANH SÁCH TẠI SAO HỢP TÁC=============================================================
	
$nametype='tai-sao';

$GLOBAL['baiviet'][$nametype]['title_main'] = 'DANH SÁCH TẠI SAO HỢP TÁC';

$GLOBAL['baiviet'][$nametype]['title'] = 'danh sách';

$GLOBAL['baiviet'][$nametype]['full'] = false;

$GLOBAL['baiviet'][$nametype]['check']=array(

	"hienthi"=>"Hiển thị",

);

$GLOBAL['baiviet'][$nametype]['img'] = true;

$GLOBAL['baiviet'][$nametype]['img-width'] = 278;

$GLOBAL['baiviet'][$nametype]['img-height'] = 278;

$GLOBAL['baiviet'][$nametype]['img-ratio'] = 1;

$GLOBAL['baiviet'][$nametype]['mota'] = true;

$GLOBAL['baiviet'][$nametype]['mota-ckeditor'] = false;

$GLOBAL['baiviet'][$nametype]['noidung'] = true;

$GLOBAL['baiviet'][$nametype]['noidung-ckeditor'] = true;


$GLOBAL['baiviet'][$nametype]['numb'] = false;

$GLOBAL['baiviet'][$nametype]['cano'] = false;

$GLOBAL['baiviet'][$nametype]['alias'] = true;

$GLOBAL['baiviet'][$nametype]['seo'] = true;

$GLOBAL['baiviet'][$nametype]['tag'] = false;

$GLOBAL['baiviet'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

$GLOBAL['baiviet'][$nametype]['file_type']='doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS';



#=========================================SỰ KHÁC BIỆT=============================================================
	
$nametype='su-khac-biet';

$GLOBAL['baiviet'][$nametype]['title_main'] = 'SỰ KHÁC BIỆT CỦA DBUS';

$GLOBAL['baiviet'][$nametype]['title'] = 'danh sách';

$GLOBAL['baiviet'][$nametype]['full'] = false;

$GLOBAL['baiviet'][$nametype]['check']=array(

	"hienthi"=>"Hiển thị",

);

$GLOBAL['baiviet'][$nametype]['img'] = true;

$GLOBAL['baiviet'][$nametype]['img-width'] = 278;

$GLOBAL['baiviet'][$nametype]['img-height'] = 278;

$GLOBAL['baiviet'][$nametype]['img-ratio'] = 1;

$GLOBAL['baiviet'][$nametype]['mota'] = true;

$GLOBAL['baiviet'][$nametype]['mota-ckeditor'] = false;

$GLOBAL['baiviet'][$nametype]['noidung'] = false;

$GLOBAL['baiviet'][$nametype]['noidung-ckeditor'] = false;


$GLOBAL['baiviet'][$nametype]['numb'] = false;

$GLOBAL['baiviet'][$nametype]['cano'] = false;

$GLOBAL['baiviet'][$nametype]['alias'] = true;

$GLOBAL['baiviet'][$nametype]['seo'] = true;

$GLOBAL['baiviet'][$nametype]['tag'] = false;

$GLOBAL['baiviet'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

$GLOBAL['baiviet'][$nametype]['file_type']='doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS';





	#=========================================Sứ mệnh=============================================================
	
	$nametype='mua-hang-online';

	$GLOBAL['baiviet'][$nametype]['title_main'] = 'bài viết mua hàng online';

	$GLOBAL['baiviet'][$nametype]['title'] = 'danh sách';

	$GLOBAL['baiviet'][$nametype]['full'] = false;

	$GLOBAL['baiviet'][$nametype]['check']=array(

		"hienthi"=>"Hiển thị",

	);

	$GLOBAL['baiviet'][$nametype]['img'] = true;

	$GLOBAL['baiviet'][$nametype]['img-width'] = 278;

	$GLOBAL['baiviet'][$nametype]['img-height'] = 278;

	$GLOBAL['baiviet'][$nametype]['img-ratio'] = 1;

	$GLOBAL['baiviet'][$nametype]['mota'] = false;

	$GLOBAL['baiviet'][$nametype]['mota-ckeditor'] = true;

	$GLOBAL['baiviet'][$nametype]['noidung'] = true;

	$GLOBAL['baiviet'][$nametype]['noidung-ckeditor'] = true;

	$GLOBAL['baiviet'][$nametype]['numb'] = false;

	$GLOBAL['baiviet'][$nametype]['cano'] = true;

	$GLOBAL['baiviet'][$nametype]['alias'] = true;

	$GLOBAL['baiviet'][$nametype]['seo'] = true;

	$GLOBAL['baiviet'][$nametype]['tag'] = false;

	$GLOBAL['baiviet'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	$GLOBAL['baiviet'][$nametype]['file_type']='doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS';

	#=========================================Sứ mệnh=============================================================
	
		$nametype='chinh-sach';

		$GLOBAL['baiviet'][$nametype]['title_main'] = 'bài viết chính sách';
	
		$GLOBAL['baiviet'][$nametype]['title'] = 'danh sách';
	
		$GLOBAL['baiviet'][$nametype]['full'] = false;
	
		$GLOBAL['baiviet'][$nametype]['check']=array(
	
			"mucluc"=>"Mục lục",
	
			// "noibat"=>'Nổi bật',
	
			"hienthi"=>"Hiển thị",
	
		);
	
		$GLOBAL['baiviet'][$nametype]['img'] = false;
	
		$GLOBAL['baiviet'][$nametype]['img-width'] = 110;
	
		$GLOBAL['baiviet'][$nametype]['img-height'] = 110;
	
		$GLOBAL['baiviet'][$nametype]['img-ratio'] = 1;
	
		$GLOBAL['baiviet'][$nametype]['mota'] = false;
	
		$GLOBAL['baiviet'][$nametype]['mota-ckeditor'] = true;
	
		$GLOBAL['baiviet'][$nametype]['noidung'] = true;
	
		$GLOBAL['baiviet'][$nametype]['noidung-ckeditor'] = true;
	
		$GLOBAL['baiviet'][$nametype]['alias'] = true;
	
		$GLOBAL['baiviet'][$nametype]['seo'] = true;
	
		$GLOBAL['baiviet'][$nametype]['tag'] = false;
	
		$GLOBAL['baiviet'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';
	
		$GLOBAL['baiviet'][$nametype]['file_type']='doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS';
	


	#=========================================Sứ mệnh=============================================================
	
	$nametype='thanh-toan';

	$GLOBAL['baiviet'][$nametype]['title_main'] = 'bài viết thanh toán';

	$GLOBAL['baiviet'][$nametype]['title'] = 'danh sách';

	$GLOBAL['baiviet'][$nametype]['full'] = false;

	$GLOBAL['baiviet'][$nametype]['check']=array(

		"hienthi"=>"Hiển thị",

	);

	$GLOBAL['baiviet'][$nametype]['img'] = true;

	$GLOBAL['baiviet'][$nametype]['img-width'] = 72;

	$GLOBAL['baiviet'][$nametype]['img-height'] = 40;

	$GLOBAL['baiviet'][$nametype]['img-ratio'] = 1;

	$GLOBAL['baiviet'][$nametype]['mota'] = true;

	$GLOBAL['baiviet'][$nametype]['mota-ckeditor'] = true;

	$GLOBAL['baiviet'][$nametype]['noidung'] = false;

	$GLOBAL['baiviet'][$nametype]['noidung-ckeditor'] = true;

	$GLOBAL['baiviet'][$nametype]['alias'] = false;

	$GLOBAL['baiviet'][$nametype]['seo'] = false;

	$GLOBAL['baiviet'][$nametype]['tag'] = false;

	$GLOBAL['baiviet'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	$GLOBAL['baiviet'][$nametype]['file_type']='doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS';


	#========================htgh==================== 

	$nametype='htgh';

	$GLOBAL['baiviet'][$nametype]['title_main'] = 'phương thức giao hàng';

	$GLOBAL['baiviet'][$nametype]['title'] = 'danh sách phương thức giao hàng';

	$GLOBAL['baiviet'][$nametype]['full'] = false;

	$GLOBAL['baiviet'][$nametype]['check']=array(

		"hienthi"=>"Hiển thị"

	);

	$GLOBAL['baiviet'][$nametype]['tag']=true;

	$GLOBAL['baiviet'][$nametype]['img'] = true;

	$GLOBAL['baiviet'][$nametype]['img-width'] = 72;

	$GLOBAL['baiviet'][$nametype]['img-height'] = 72;

	$GLOBAL['baiviet'][$nametype]['img-ratio'] = 1;

	$GLOBAL['baiviet'][$nametype]['mota'] = true;

	$GLOBAL['baiviet'][$nametype]['mota-ckeditor'] = true;

	$GLOBAL['baiviet'][$nametype]['noidung'] = false;

	$GLOBAL['baiviet'][$nametype]['noidung-ckeditor'] = true;

	$GLOBAL['baiviet'][$nametype]['thongtin'] = false;

	$GLOBAL['baiviet'][$nametype]['thongtin-ckeditor'] = false;

	$GLOBAL['baiviet'][$nametype]['job'] = false;

	$GLOBAL['baiviet'][$nametype]['seo'] = false;

	$GLOBAL['baiviet'][$nametype]['alias'] = true;

	$GLOBAL['baiviet'][$nametype]['tag'] = false;

	$GLOBAL['baiviet'][$nametype]['top_nb'] = false;

	$GLOBAL['baiviet'][$nametype]['rating'] = false;

	$GLOBAL['baiviet'][$nametype]['daytin'] = false;

	$GLOBAL['baiviet'][$nametype]['mucluc'] = true;

	$GLOBAL['baiviet'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	$GLOBAL['baiviet'][$nametype]['file_type']='doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS';

	#========================pttt==================== 
	$nametype='pttt';

	$GLOBAL['baiviet'][$nametype]['title_main'] = 'phương thức thanh toán';

	$GLOBAL['baiviet'][$nametype]['title'] = 'danh sách phương thức thanh toán';

	$GLOBAL['baiviet'][$nametype]['full'] = false;

	$GLOBAL['baiviet'][$nametype]['check']=array(

		"mucluc"=>"Mục lục",

		"hienthi"=>"Hiển thị"

	);

	$GLOBAL['baiviet'][$nametype]['tag']=true;

	$GLOBAL['baiviet'][$nametype]['img'] = true;

	$GLOBAL['baiviet'][$nametype]['img-width'] = 285;

	$GLOBAL['baiviet'][$nametype]['img-height'] = 215;

	$GLOBAL['baiviet'][$nametype]['img-ratio'] = 1;

	$GLOBAL['baiviet'][$nametype]['mota'] = false;

	$GLOBAL['baiviet'][$nametype]['mota-ckeditor'] = true;

	$GLOBAL['baiviet'][$nametype]['noidung'] = true;

	$GLOBAL['baiviet'][$nametype]['noidung-ckeditor'] = true;

	$GLOBAL['baiviet'][$nametype]['thongtin'] = false;

	$GLOBAL['baiviet'][$nametype]['thongtin-ckeditor'] = false;

	$GLOBAL['baiviet'][$nametype]['job'] = false;

	$GLOBAL['baiviet'][$nametype]['seo'] = false;

	$GLOBAL['baiviet'][$nametype]['alias'] = true;

	$GLOBAL['baiviet'][$nametype]['tag'] = false;

	$GLOBAL['baiviet'][$nametype]['top_nb'] = false;

	$GLOBAL['baiviet'][$nametype]['rating'] = false;

	$GLOBAL['baiviet'][$nametype]['daytin'] = false;

	$GLOBAL['baiviet'][$nametype]['mucluc'] = true;

	$GLOBAL['baiviet'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	$GLOBAL['baiviet'][$nametype]['file_type']='doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS';
	

	//Giới thiệu

	$nametype='gioi-thieu';

	$GLOBAL['info'][$nametype]['title_main'] = 'Về chúng tôi';

	$GLOBAL['info'][$nametype]['title'] = 'Quản lý về chúng tôi';

	$GLOBAL['info'][$nametype]['full'] = false;

	$GLOBAL['info'][$nametype]['img'] = true;

	$GLOBAL['info'][$nametype]['img-width'] = 555;

	$GLOBAL['info'][$nametype]['img-height'] = 400;

	$GLOBAL['info'][$nametype]['img-ratio'] = 1;

	$GLOBAL['info'][$nametype]['imgphu'] = false;

	$GLOBAL['info'][$nametype]['img-b'] = false;

	$GLOBAL['info'][$nametype]['img-gallery'] = false;

	$GLOBAL['info'][$nametype]['mota'] = true;

	$GLOBAL['info'][$nametype]['mota-ckeditor'] = true;

	$GLOBAL['info'][$nametype]['noidung'] = true;

	$GLOBAL['info'][$nametype]['noidung-ckeditor'] = true;

	$GLOBAL['info'][$nametype]['link'] = false;

	$GLOBAL['info'][$nametype]['seo'] = true;

	$GLOBAL['info'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	$GLOBAL['info'][$nametype]['img-gallery'] = false;

	$GLOBAL['info'][$nametype]['multi-gallery-arr']=array

	(

		$nametype=>array

			(

            	"title_main_photo" => "Hình ảnh Sản phẩm",

            	"title_sub_photo" => "Hình ảnh",

            	"width_photo" => 500,

            	"height_photo" => 500,

            	"thumb_width_photo" => 500,

            	"thumb_height_photo" => 500,

            	"thumb_ratio_photo" => 1,

            	"img_type_photo" => '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp'

         	)

	);

	//Giới thiệu

	$nametype='gioithieu';

	$GLOBAL['info'][$nametype]['title_main'] = 'GIỚI THIỆU';

	$GLOBAL['info'][$nametype]['title'] = 'Quản lý GIỚI THIỆU';

	$GLOBAL['info'][$nametype]['full'] = false;

	$GLOBAL['info'][$nametype]['img'] = true;

	$GLOBAL['info'][$nametype]['img-width'] = 555;

	$GLOBAL['info'][$nametype]['img-height'] = 400;

	$GLOBAL['info'][$nametype]['img-ratio'] = 1;
	
	$GLOBAL['info'][$nametype]['imgphu'] = false;

	$GLOBAL['info'][$nametype]['img-b'] = false;

	$GLOBAL['info'][$nametype]['img-gallery'] = false;

	$GLOBAL['info'][$nametype]['mota'] = true;

	$GLOBAL['info'][$nametype]['mota-ckeditor'] = true;

	$GLOBAL['info'][$nametype]['noidung'] = true;

	$GLOBAL['info'][$nametype]['noidung-ckeditor'] = true;

	$GLOBAL['info'][$nametype]['link'] = false;

	$GLOBAL['info'][$nametype]['seo'] = true;

	$GLOBAL['info'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	$GLOBAL['info'][$nametype]['img-gallery'] = false;

	$GLOBAL['info'][$nametype]['multi-gallery-arr']=array

	(

		$nametype=>array

			(

            	"title_main_photo" => "Hình ảnh Sản phẩm",

            	"title_sub_photo" => "Hình ảnh",

            	"width_photo" => 500,

            	"height_photo" => 500,

            	"thumb_width_photo" => 500,

            	"thumb_height_photo" => 500,

            	"thumb_ratio_photo" => 1,

            	"img_type_photo" => '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp'

         	)

	);

//BÁO GIÁ

$nametype='bao-gia';

$GLOBAL['info'][$nametype]['title_main'] = 'BÁO GIÁ';

$GLOBAL['info'][$nametype]['title'] = 'Quản lý BÁO GIÁ';

$GLOBAL['info'][$nametype]['full'] = false;

$GLOBAL['info'][$nametype]['img'] = true;

$GLOBAL['info'][$nametype]['img-width'] = 555;

$GLOBAL['info'][$nametype]['img-height'] = 400;

$GLOBAL['info'][$nametype]['img-ratio'] = 1;

$GLOBAL['info'][$nametype]['img-b'] = false;

$GLOBAL['info'][$nametype]['img-gallery'] = false;

$GLOBAL['info'][$nametype]['mota'] = true;

$GLOBAL['info'][$nametype]['mota-ckeditor'] = false;

$GLOBAL['info'][$nametype]['noidung'] = false;

$GLOBAL['info'][$nametype]['noidung-ckeditor'] = false;

$GLOBAL['info'][$nametype]['link'] = false;

$GLOBAL['info'][$nametype]['seo'] = true;

$GLOBAL['info'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

$GLOBAL['info'][$nametype]['img-gallery'] = false;

$GLOBAL['info'][$nametype]['multi-gallery-arr']=array

(

	$nametype=>array

		(

			"title_main_photo" => "Hình ảnh Sản phẩm",

			"title_sub_photo" => "Hình ảnh",

			"width_photo" => 500,

			"height_photo" => 500,

			"thumb_width_photo" => 500,

			"thumb_height_photo" => 500,

			"thumb_ratio_photo" => 1,

			"img_type_photo" => '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp'

		 )

);

	#===============================Title=======================================================
	
	$nametype='flash-sale';

	$GLOBAL['title'][$nametype]['title_main'] = 'Tiêu đề Flash sales';

	$GLOBAL['title'][$nametype]['title'] = 'Quản lý tiêu đề flash sales';

	$GLOBAL['title'][$nametype]['full'] = false;

	$GLOBAL['title'][$nametype]['img'] = false;

	$GLOBAL['title'][$nametype]['img-width'] = 725;

	$GLOBAL['title'][$nametype]['img-height'] = 425;

	$GLOBAL['title'][$nametype]['img-ratio'] = 1;

	$GLOBAL['title'][$nametype]['img-b'] = false;

	$GLOBAL['title'][$nametype]['img-gallery'] = false;

	$GLOBAL['title'][$nametype]['mota'] = false;

	$GLOBAL['title'][$nametype]['mota-ckeditor'] = false;

	$GLOBAL['title'][$nametype]['noidung'] = false;

	$GLOBAL['title'][$nametype]['noidung-ckeditor'] = false;

	$GLOBAL['title'][$nametype]['link'] = false;

	$GLOBAL['title'][$nametype]['seo'] = false;

	$GLOBAL['title'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	$GLOBAL['title'][$nametype]['img-gallery'] = false;

	$GLOBAL['title'][$nametype]['multi-gallery-arr']=array

	(

		$nametype=>array

			(

            	"title_main_photo" => "Hình ảnh Sản phẩm",

            	"title_sub_photo" => "Hình ảnh",

            	"width_photo" => 500,

            	"height_photo" => 500,

            	"thumb_width_photo" => 500,

            	"thumb_height_photo" => 500,

            	"thumb_ratio_photo" => 1,

            	"img_type_photo" => '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp'

         	)

	);
	#====================album============================

	$GLOBAL['album']['album']['title_main'] = 'Thư viện ảnh';

	$GLOBAL['album']['album']['title'] = 'Quản lý thư viện ảnh';

	$GLOBAL['album']['album']['full'] = false;

	$GLOBAL['album']['album']['img'] = true;

	$GLOBAL['album']['album']['img-width'] = 280;

	$GLOBAL['album']['album']['img-height'] = 210;

	$GLOBAL['album']['album']['img-ratio'] = 1;

	$GLOBAL['album']['album']['img-gallery'] = true;

	$GLOBAL['album']['album']['link'] = true;

	$GLOBAL['album']['album']['mota'] = false;

	$GLOBAL['album']['album']['noidung'] = false;

	$GLOBAL['album']['album']['seo'] = true;

	$GLOBAL['album']['album']['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	$GLOBAL['album']['album']['img-gallery'] = true;

	$GLOBAL['album']['album']['multi-gallery-arr']=array

	(

		"album"=>array

			(

				"title_main_photo" => "Hình ảnh album",

				"title_sub_photo" => "Hình ảnh",

				"width_photo" => 500,

				"height_photo" => 500,

				"thumb_width_photo" => 500,

				"thumb_height_photo" => 500,

				"thumb_ratio_photo" => 1,

				"img_type_photo" => '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp'

			)

	);
	#====================Slider============================
	$nametype='slider';
	
	$GLOBAL['photo'][$nametype]['title_main'] = 'Slider';

	$GLOBAL['photo'][$nametype]['title'] = 'Quản lý slider';

	$GLOBAL['photo'][$nametype]['full'] = false;

	$GLOBAL['photo'][$nametype]['img'] = true;

	$GLOBAL['photo'][$nametype]['img-width'] = 800;

	$GLOBAL['photo'][$nametype]['img-height'] = 400;

	$GLOBAL['photo'][$nametype]['img-ratio'] = 1;

	$GLOBAL['photo'][$nametype]['options'] = false;

	$GLOBAL['photo'][$nametype]['link'] = true;

	$GLOBAL['photo'][$nametype]['mota'] = false;

	$GLOBAL['photo'][$nametype]['mota-ckeditor'] = false;

	$GLOBAL['photo'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';



	#====================TAG============================
	$nametype='tag';
	
	$GLOBAL['photo'][$nametype]['title_main'] = 'ICON GIỚI THIỆU';

	$GLOBAL['photo'][$nametype]['title'] = 'Quản lý tag';

	$GLOBAL['photo'][$nametype]['full'] = false;

	$GLOBAL['photo'][$nametype]['img'] = false;

	$GLOBAL['photo'][$nametype]['img-width'] = 800;

	$GLOBAL['photo'][$nametype]['img-height'] = 400;

	$GLOBAL['photo'][$nametype]['img-ratio'] = 1;

	$GLOBAL['photo'][$nametype]['options'] = false;

	$GLOBAL['photo'][$nametype]['link'] = true;

	$GLOBAL['photo'][$nametype]['mota'] = false;

	$GLOBAL['photo'][$nametype]['mota-ckeditor'] = false;

	// $GLOBAL['photo'][$nametype]['check']=array(



	// 	"hienthi"=>"Hiển thị"

	// );

	$GLOBAL['photo'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	#====================Slider============================
	$nametype='quang-cao';

	$GLOBAL['photo'][$nametype]['title_main'] = 'quảng cáo';

	$GLOBAL['photo'][$nametype]['title'] = 'Quản lý quảng cáo';

	$GLOBAL['photo'][$nametype]['full'] = false;

	$GLOBAL['photo'][$nametype]['img'] = true;

	$GLOBAL['photo'][$nametype]['img-width'] = 385;

	$GLOBAL['photo'][$nametype]['img-height'] = 180;

	$GLOBAL['photo'][$nametype]['img-ratio'] = 1;

	$GLOBAL['photo'][$nametype]['options'] = false;

	$GLOBAL['photo'][$nametype]['link'] = true;

	$GLOBAL['photo'][$nametype]['mota'] = false;

	$GLOBAL['photo'][$nametype]['mota-ckeditor'] = false;

	$GLOBAL['photo'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	#====================Đối tác============================
	$nametype='doi-tac';

	$GLOBAL['photo'][$nametype]['title_main'] = 'đối tác';

	$GLOBAL['photo'][$nametype]['title'] = 'Quản lý đối tác';

	$GLOBAL['photo'][$nametype]['full'] = false;

	$GLOBAL['photo'][$nametype]['img'] = true;

	$GLOBAL['photo'][$nametype]['img-width'] = 180;

	$GLOBAL['photo'][$nametype]['img-height'] = 100;

	$GLOBAL['photo'][$nametype]['img-ratio'] = 1;

	$GLOBAL['photo'][$nametype]['link'] = true;

	$GLOBAL['photo'][$nametype]['mota'] = false;

	$GLOBAL['photo'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	#====================mạng xã hội============================
	$nametype='mangxahoi';

	$GLOBAL['photo'][$nametype]['title_main'] = 'Mạng xã hội';

	$GLOBAL['photo'][$nametype]['title'] = 'Danh sách';

	$GLOBAL['photo'][$nametype]['full'] = false;

	$GLOBAL['photo'][$nametype]['img'] = true;

	$GLOBAL['photo'][$nametype]['img-width'] = 35;

	$GLOBAL['photo'][$nametype]['img-height'] = 35;

	$GLOBAL['photo'][$nametype]['img-ratio'] = 1;

	$GLOBAL['photo'][$nametype]['link'] = true;

	$GLOBAL['photo'][$nametype]['mota'] = false;

	$GLOBAL['photo'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	#====================mạng xã hội============================
	$nametype='hotline';

	$GLOBAL['photo'][$nametype]['title_main'] = 'Hotline';

	$GLOBAL['photo'][$nametype]['title'] = 'Danh sách';

	$GLOBAL['photo'][$nametype]['full'] = false;

	$GLOBAL['photo'][$nametype]['img'] = false;

	$GLOBAL['photo'][$nametype]['img-width'] = 35;

	$GLOBAL['photo'][$nametype]['img-height'] = 35;

	$GLOBAL['photo'][$nametype]['img-ratio'] = 1;

	$GLOBAL['photo'][$nametype]['link'] = false;

	$GLOBAL['photo'][$nametype]['phone'] = true;

	$GLOBAL['photo'][$nametype]['mota'] = false;

	$GLOBAL['photo'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';
	#====================logo============================

	$nametype='logo';

	$GLOBAL['bannerqc'][$nametype]['title_main'] = 'logo';

	$GLOBAL['bannerqc'][$nametype]['title'] = 'Quản lý logo';

	$GLOBAL['bannerqc'][$nametype]['full'] = false;

	$GLOBAL['bannerqc'][$nametype]['img'] = true;

	$GLOBAL['bannerqc'][$nametype]['img-width'] = 235;

	$GLOBAL['bannerqc'][$nametype]['img-height'] = 100;

	$GLOBAL['bannerqc'][$nametype]['img-ratio'] = 1;

	$GLOBAL['bannerqc'][$nametype]['link'] = false;

	$GLOBAL['bannerqc'][$nametype]['img_type']='.swf|.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';
	#====================ICON DỊCH VỤ============================

	$nametype='icon_sp';

	$GLOBAL['bannerqc'][$nametype]['title_main'] = 'ICON DỊCH VỤ';

	$GLOBAL['bannerqc'][$nametype]['title'] = 'Quản lý ICON';

	$GLOBAL['bannerqc'][$nametype]['full'] = false;

	$GLOBAL['bannerqc'][$nametype]['img'] = true;

	$GLOBAL['bannerqc'][$nametype]['img-width'] = 235;

	$GLOBAL['bannerqc'][$nametype]['img-height'] = 100;

	$GLOBAL['bannerqc'][$nametype]['img-ratio'] = 1;

	$GLOBAL['bannerqc'][$nametype]['link'] = false;

	$GLOBAL['bannerqc'][$nametype]['img_type']='.swf|.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';


			#====================ICON GIỚI THIỆU============================
	$nametype='icon_gt';
	
	$GLOBAL['bannerqc'][$nametype]['title_main'] = 'ICON GIỚI THIỆU';

	$GLOBAL['bannerqc'][$nametype]['title'] = 'Quản lý icon';

	$GLOBAL['bannerqc'][$nametype]['full'] = false;

	$GLOBAL['bannerqc'][$nametype]['img'] = true;

	$GLOBAL['bannerqc'][$nametype]['img-width'] = 800;

	$GLOBAL['bannerqc'][$nametype]['img-height'] = 400;

	$GLOBAL['bannerqc'][$nametype]['img-ratio'] = 1;

	$GLOBAL['bannerqc'][$nametype]['options'] = false;

	$GLOBAL['bannerqc'][$nametype]['link'] = false;

	$GLOBAL['bannerqc'][$nametype]['mota'] = false;

	$GLOBAL['bannerqc'][$nametype]['mota-ckeditor'] = false;

	$GLOBAL['bannerqc'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';
	
		
		#====================ICON HÌNH ẢNH HOẠT ĐỘNG============================

		$nametype='icon_banggia';

		$GLOBAL['bannerqc'][$nametype]['title_main'] = 'ICON BẢNG GIÁ THU MUA';
	
		$GLOBAL['bannerqc'][$nametype]['title'] = 'Quản lý ICON';
	
		$GLOBAL['bannerqc'][$nametype]['full'] = false;
	
		$GLOBAL['bannerqc'][$nametype]['img'] = true;
	
		$GLOBAL['bannerqc'][$nametype]['img-width'] = 235;
	
		$GLOBAL['bannerqc'][$nametype]['img-height'] = 100;
	
		$GLOBAL['bannerqc'][$nametype]['img-ratio'] = 1;
	
		$GLOBAL['bannerqc'][$nametype]['link'] = false;
	
		$GLOBAL['bannerqc'][$nametype]['img_type']='.swf|.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';
	
		#====================ICON DANH MỤC THU MUA============================

		$nametype='icon_danhmuc';

		$GLOBAL['bannerqc'][$nametype]['title_main'] = 'ICON DANH MỤC THU MUA';
	
		$GLOBAL['bannerqc'][$nametype]['title'] = 'Quản lý ICON';
	
		$GLOBAL['bannerqc'][$nametype]['full'] = false;
	
		$GLOBAL['bannerqc'][$nametype]['img'] = true;
	
		$GLOBAL['bannerqc'][$nametype]['img-width'] = 235;
	
		$GLOBAL['bannerqc'][$nametype]['img-height'] = 100;
	
		$GLOBAL['bannerqc'][$nametype]['img-ratio'] = 1;
	
		$GLOBAL['bannerqc'][$nametype]['link'] = false;
	
		$GLOBAL['bannerqc'][$nametype]['img_type']='.swf|.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

		#====================ICON KHU VỰC THU MUA============================

		$nametype='icon_khuvuc';

		$GLOBAL['bannerqc'][$nametype]['title_main'] = 'ICON KHU VỰC THU MUA';
	
		$GLOBAL['bannerqc'][$nametype]['title'] = 'Quản lý ICON';
	
		$GLOBAL['bannerqc'][$nametype]['full'] = false;
	
		$GLOBAL['bannerqc'][$nametype]['img'] = true;
	
		$GLOBAL['bannerqc'][$nametype]['img-width'] = 235;
	
		$GLOBAL['bannerqc'][$nametype]['img-height'] = 100;
	
		$GLOBAL['bannerqc'][$nametype]['img-ratio'] = 1;
	
		$GLOBAL['bannerqc'][$nametype]['link'] = false;
	
		$GLOBAL['bannerqc'][$nametype]['img_type']='.swf|.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';


		#====================ICON ĐĂNG KÝ CTV============================

		$nametype='icon_dangky';

		$GLOBAL['bannerqc'][$nametype]['title_main'] = 'ICON ĐĂNG KÝ CTV';
	
		$GLOBAL['bannerqc'][$nametype]['title'] = 'Quản lý ICON';
	
		$GLOBAL['bannerqc'][$nametype]['full'] = false;
	
		$GLOBAL['bannerqc'][$nametype]['img'] = true;
	
		$GLOBAL['bannerqc'][$nametype]['img-width'] = 235;
	
		$GLOBAL['bannerqc'][$nametype]['img-height'] = 100;
	
		$GLOBAL['bannerqc'][$nametype]['img-ratio'] = 1;
	
		$GLOBAL['bannerqc'][$nametype]['link'] = false;
	
		$GLOBAL['bannerqc'][$nametype]['img_type']='.swf|.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';
	
		#====================ICON TIN TỨC============================

		$nametype='icon_tintuc';

		$GLOBAL['bannerqc'][$nametype]['title_main'] = 'ICON TIN TỨC';
	
		$GLOBAL['bannerqc'][$nametype]['title'] = 'Quản lý ICON';
	
		$GLOBAL['bannerqc'][$nametype]['full'] = false;
	
		$GLOBAL['bannerqc'][$nametype]['img'] = true;
	
		$GLOBAL['bannerqc'][$nametype]['img-width'] = 235;
	
		$GLOBAL['bannerqc'][$nametype]['img-height'] = 100;
	
		$GLOBAL['bannerqc'][$nametype]['img-ratio'] = 1;
	
		$GLOBAL['bannerqc'][$nametype]['link'] = false;
	
		$GLOBAL['bannerqc'][$nametype]['img_type']='.swf|.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

		#====================ICON TẠI SAO============================

		$nametype='icon_taisao';

		$GLOBAL['bannerqc'][$nametype]['title_main'] = 'ICON TẠI SAO';
	
		$GLOBAL['bannerqc'][$nametype]['title'] = 'Quản lý ICON';
	
		$GLOBAL['bannerqc'][$nametype]['full'] = false;
	
		$GLOBAL['bannerqc'][$nametype]['img'] = true;
	
		$GLOBAL['bannerqc'][$nametype]['img-width'] = 235;
	
		$GLOBAL['bannerqc'][$nametype]['img-height'] = 100;
	
		$GLOBAL['bannerqc'][$nametype]['img-ratio'] = 1;
	
		$GLOBAL['bannerqc'][$nametype]['link'] = false;
	
		$GLOBAL['bannerqc'][$nametype]['img_type']='.swf|.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';
	
	

	#====================bg footer============================

	$nametype='bg_footer';

	$GLOBAL['bannerqc'][$nametype]['title_main'] = 'background footer';

	$GLOBAL['bannerqc'][$nametype]['title'] = 'Quản lý background footer';

	$GLOBAL['bannerqc'][$nametype]['full'] = false;

	$GLOBAL['bannerqc'][$nametype]['img'] = true;

	$GLOBAL['bannerqc'][$nametype]['img-width'] = 1440;

	$GLOBAL['bannerqc'][$nametype]['img-height'] = 556;

	$GLOBAL['bannerqc'][$nametype]['img-ratio'] = 1;

	$GLOBAL['bannerqc'][$nametype]['link'] = false;

	$GLOBAL['bannerqc'][$nametype]['img_type']='.swf|.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';


	#====================bg BẢNG GIÁ============================

	$nametype='bg_banggia';

	$GLOBAL['bannerqc'][$nametype]['title_main'] = 'background BẢNG GIÁ';

	$GLOBAL['bannerqc'][$nametype]['title'] = 'Quản lý background BẢNG GIÁ';

	$GLOBAL['bannerqc'][$nametype]['full'] = false;

	$GLOBAL['bannerqc'][$nametype]['img'] = true;

	$GLOBAL['bannerqc'][$nametype]['img-width'] = 1440;

	$GLOBAL['bannerqc'][$nametype]['img-height'] = 556;

	$GLOBAL['bannerqc'][$nametype]['img-ratio'] = 1;

	$GLOBAL['bannerqc'][$nametype]['link'] = false;

	$GLOBAL['bannerqc'][$nametype]['img_type']='.swf|.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

#====================BG KHU VỰC============================

$nametype='bg_khuvuc';

$GLOBAL['bannerqc'][$nametype]['title_main'] = 'background KHU VỰC ';

$GLOBAL['bannerqc'][$nametype]['title'] = 'Quản lý background KHU VỰC ';

$GLOBAL['bannerqc'][$nametype]['full'] = false;

$GLOBAL['bannerqc'][$nametype]['img'] = true;

$GLOBAL['bannerqc'][$nametype]['img-width'] = 1440;

$GLOBAL['bannerqc'][$nametype]['img-height'] = 556;

$GLOBAL['bannerqc'][$nametype]['img-ratio'] = 1;

$GLOBAL['bannerqc'][$nametype]['link'] = false;

$GLOBAL['bannerqc'][$nametype]['img_type']='.swf|.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

#====================BG ĐĂNG KÝ CTV============================

$nametype='bg_dangky';

$GLOBAL['bannerqc'][$nametype]['title_main'] = 'background ĐĂNG KÝ CTV ';

$GLOBAL['bannerqc'][$nametype]['title'] = 'Quản lý background ĐĂNG KÝ CTV ';

$GLOBAL['bannerqc'][$nametype]['full'] = false;

$GLOBAL['bannerqc'][$nametype]['img'] = true;

$GLOBAL['bannerqc'][$nametype]['img-width'] = 1440;

$GLOBAL['bannerqc'][$nametype]['img-height'] = 556;

$GLOBAL['bannerqc'][$nametype]['img-ratio'] = 1;

$GLOBAL['bannerqc'][$nametype]['link'] = false;

$GLOBAL['bannerqc'][$nametype]['img_type']='.swf|.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	#===========================background giới thiệu=================================================

	$nametype='bg_gioithieu';

	$GLOBAL['bannerqc'][$nametype]['title_main'] = 'Background GIỚI THIỆU';

	$GLOBAL['bannerqc'][$nametype]['title'] = 'Quản lý background GIỚI THIỆU';

	$GLOBAL['bannerqc'][$nametype]['full'] = false;

	$GLOBAL['bannerqc'][$nametype]['img'] = true;

	$GLOBAL['bannerqc'][$nametype]['img-width'] = 1440;

	$GLOBAL['bannerqc'][$nametype]['img-height'] = 180;

	$GLOBAL['bannerqc'][$nametype]['img-ratio'] = 1;

	$GLOBAL['bannerqc'][$nametype]['link'] = false;

	$GLOBAL['bannerqc'][$nametype]['img_type']='.swf|.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	#====================bg danh mục thu mua============================

	$nametype='bg_danhmucthumua';

	$GLOBAL['bannerqc'][$nametype]['title_main'] = 'background danh mục thu mua';

	$GLOBAL['bannerqc'][$nametype]['title'] = 'Quản lý background ';

	$GLOBAL['bannerqc'][$nametype]['full'] = false;

	$GLOBAL['bannerqc'][$nametype]['img'] = true;

	$GLOBAL['bannerqc'][$nametype]['img-width'] = 1440;

	$GLOBAL['bannerqc'][$nametype]['img-height'] = 556;

	$GLOBAL['bannerqc'][$nametype]['img-ratio'] = 1;

	$GLOBAL['bannerqc'][$nametype]['link'] = false;

	$GLOBAL['bannerqc'][$nametype]['img_type']='.swf|.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	
	#====================bg TẠI SAO NÊN HỢP TÁC============================

	$nametype='bg_taisao';

	$GLOBAL['bannerqc'][$nametype]['title_main'] = 'background TẠI SAO NÊN HỢP TÁC';

	$GLOBAL['bannerqc'][$nametype]['title'] = 'Quản lý background ';

	$GLOBAL['bannerqc'][$nametype]['full'] = false;

	$GLOBAL['bannerqc'][$nametype]['img'] = true;

	$GLOBAL['bannerqc'][$nametype]['img-width'] = 1440;

	$GLOBAL['bannerqc'][$nametype]['img-height'] = 556;

	$GLOBAL['bannerqc'][$nametype]['img-ratio'] = 1;

	$GLOBAL['bannerqc'][$nametype]['link'] = false;

	$GLOBAL['bannerqc'][$nametype]['img_type']='.swf|.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	

	#====================quảng cáo 1============================

	// $nametype='quangcao1';

	// $GLOBAL['bannerqc'][$nametype]['title_main'] = 'background quảng cáo 1';

	// $GLOBAL['bannerqc'][$nametype]['title'] = 'Quản lý background quảng cáo 1';

	// $GLOBAL['bannerqc'][$nametype]['full'] = false;

	// $GLOBAL['bannerqc'][$nametype]['img'] = true;

	// $GLOBAL['bannerqc'][$nametype]['img-width'] = 390;

	// $GLOBAL['bannerqc'][$nametype]['img-height'] = 195;

	// $GLOBAL['bannerqc'][$nametype]['img-ratio'] = 1;

	// $GLOBAL['bannerqc'][$nametype]['link'] = true;

	// $GLOBAL['bannerqc'][$nametype]['img_type']='.swf|.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	#====================quảng cáo 2============================

	// $nametype='quangcao2';

	// $GLOBAL['bannerqc'][$nametype]['title_main'] = 'background quảng cáo 2';

	// $GLOBAL['bannerqc'][$nametype]['title'] = 'Quản lý background quảng cáo 2';

	// $GLOBAL['bannerqc'][$nametype]['full'] = false;

	// $GLOBAL['bannerqc'][$nametype]['img'] = true;

	// $GLOBAL['bannerqc'][$nametype]['img-width'] = 390;

	// $GLOBAL['bannerqc'][$nametype]['img-height'] = 195;

	// $GLOBAL['bannerqc'][$nametype]['img-ratio'] = 1;

	// $GLOBAL['bannerqc'][$nametype]['link'] = true;

	// $GLOBAL['bannerqc'][$nametype]['img_type']='.swf|.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	#====================banner combo============================

	// $nametype='combo';

	// $GLOBAL['bannerqc'][$nametype]['title_main'] = 'background combo';

	// $GLOBAL['bannerqc'][$nametype]['title'] = 'Quản lý background combo';

	// $GLOBAL['bannerqc'][$nametype]['full'] = false;

	// $GLOBAL['bannerqc'][$nametype]['img'] = true;

	// $GLOBAL['bannerqc'][$nametype]['img-width'] = 300;

	// $GLOBAL['bannerqc'][$nametype]['img-height'] = 685;

	// $GLOBAL['bannerqc'][$nametype]['img-ratio'] = 1;

	// $GLOBAL['bannerqc'][$nametype]['link'] = false;

	// $GLOBAL['bannerqc'][$nametype]['img_type']='.swf|.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';
	#====================Bộ công thương============================
	// $nametype='bocongthuong';

	// $GLOBAL['bannerqc'][$nametype]['title_main'] = 'background bộ công thương';

	// $GLOBAL['bannerqc'][$nametype]['title'] = 'Quản lý background bộ công thương';

	// $GLOBAL['bannerqc'][$nametype]['full'] = false;

	// $GLOBAL['bannerqc'][$nametype]['img'] = true;

	// $GLOBAL['bannerqc'][$nametype]['img-width'] = 195;

	// $GLOBAL['bannerqc'][$nametype]['img-height'] = 60;

	// $GLOBAL['bannerqc'][$nametype]['img-ratio'] = 1;

	// $GLOBAL['bannerqc'][$nametype]['link'] = true;

	// $GLOBAL['bannerqc'][$nametype]['img_type']='.swf|.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';
	#====================dmca============================
	// $nametype='dmca';

	// $GLOBAL['bannerqc'][$nametype]['title_main'] = 'background dmca';

	// $GLOBAL['bannerqc'][$nametype]['title'] = 'Quản lý background dmca';

	// $GLOBAL['bannerqc'][$nametype]['full'] = false;

	// $GLOBAL['bannerqc'][$nametype]['img'] = true;

	// $GLOBAL['bannerqc'][$nametype]['img-width'] = 130;

	// $GLOBAL['bannerqc'][$nametype]['img-height'] = 45;

	// $GLOBAL['bannerqc'][$nametype]['img-ratio'] = 1;

	// $GLOBAL['bannerqc'][$nametype]['link'] = true;

	// $GLOBAL['bannerqc'][$nametype]['img_type']='.swf|.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';
	#====================hình đại diện============================

	$nametype='hinhdaidien';

	$GLOBAL['bannerqc'][$nametype]['title_main'] = 'Hình ảnh share link';

	$GLOBAL['bannerqc'][$nametype]['title'] = 'Quản lý Hình ảnh share link';

	$GLOBAL['bannerqc'][$nametype]['full'] = false;

	$GLOBAL['bannerqc'][$nametype]['img'] = true;

	$GLOBAL['bannerqc'][$nametype]['img-width'] = 200;

	$GLOBAL['bannerqc'][$nametype]['img-height'] = 200;

	$GLOBAL['bannerqc'][$nametype]['img-ratio'] = 1;

	$GLOBAL['bannerqc'][$nametype]['link'] = false;

	$GLOBAL['bannerqc'][$nametype]['img_type']='.swf|.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	#====================booking============================
	$nametype='dat-lich';

	$GLOBAL['booking'][$nametype]['title_main'] = 'đăng ký báo giá';

	$GLOBAL['booking'][$nametype]['title'] = 'Quản lý đăng ký báo giá';

	$GLOBAL['booking'][$nametype]['full'] = false;

	$GLOBAL['booking'][$nametype]['img'] = true;

	$GLOBAL['booking'][$nametype]['img-width'] = 380;

	$GLOBAL['booking'][$nametype]['img-height'] = 260;

	$GLOBAL['booking'][$nametype]['img-ratio'] = 1;

	$GLOBAL['booking'][$nametype]['phone'] = true;

	$GLOBAL['booking'][$nametype]['email'] = true;

	$GLOBAL['booking'][$nametype]['dichvu'] = false;

	$GLOBAL['booking'][$nametype]['diachi'] = false;

	$GLOBAL['booking'][$nametype]['noidung'] = true;

	$GLOBAL['booking'][$nametype]['seo'] = false;

	$GLOBAL['booking'][$nametype]['img_type']='.doc|.docx|.pdf|.rar|.zip|.ppt|.pptx|.DOC|.DOCX|.PDF|.RAR|.ZIP|.PPT|.PPTX|.xls|.jpg|.png|.gif|.JPG|.PNG|.GIF';
	#====================================================ĐĂNG KÝ NHẬN TIN====================================
	// $nametype='client';

	// $GLOBAL['booking'][$nametype]['title_main'] = 'Đăng ký nhận tin';

	// $GLOBAL['booking'][$nametype]['title'] = 'Quản lý đăng ký nhận tin';

	// $GLOBAL['booking'][$nametype]['full'] = false;

	// $GLOBAL['booking'][$nametype]['img'] = true;

	// $GLOBAL['booking'][$nametype]['img-width'] = 380;

	// $GLOBAL['booking'][$nametype]['img-height'] = 260;

	// $GLOBAL['booking'][$nametype]['img-ratio'] = 1;

	// $GLOBAL['booking'][$nametype]['phone'] = true;

	// $GLOBAL['booking'][$nametype]['email'] = true;

	// $GLOBAL['booking'][$nametype]['dichvu'] = false;

	// $GLOBAL['booking'][$nametype]['diachi'] = false;

	// $GLOBAL['booking'][$nametype]['noidung'] = true;

	// $GLOBAL['booking'][$nametype]['seo'] = false;

	// $GLOBAL['booking'][$nametype]['img_type']='.doc|.docx|.pdf|.rar|.zip|.ppt|.pptx|.DOC|.DOCX|.PDF|.RAR|.ZIP|.PPT|.PPTX|.xls|.jpg|.png|.gif|.JPG|.PNG|.GIF';

	#================================================Đánh giá sản phẩm=======================================
	$nametype='dat-lich';

	$GLOBAL['booking'][$nametype]['title_main'] = 'Đăng ký nhận tin';

	$GLOBAL['booking'][$nametype]['title'] = 'Đăng ký nhận tin';

	$GLOBAL['booking'][$nametype]['full'] = false;

	$GLOBAL['booking'][$nametype]['img'] = true;

	$GLOBAL['booking'][$nametype]['img-width'] = 380;

	$GLOBAL['booking'][$nametype]['img-height'] = 260;

	$GLOBAL['booking'][$nametype]['img-ratio'] = 1;

	$GLOBAL['booking'][$nametype]['phone'] = true;

	$GLOBAL['booking'][$nametype]['id_product'] = false;

	$GLOBAL['booking'][$nametype]['email'] = true;

	$GLOBAL['booking'][$nametype]['dichvu'] = false;

	$GLOBAL['booking'][$nametype]['diachi'] = true;

	$GLOBAL['booking'][$nametype]['noidung'] = true;

	$GLOBAL['booking'][$nametype]['seo'] = false;

	$GLOBAL['booking'][$nametype]['img_type']='.doc|.docx|.pdf|.rar|.zip|.ppt|.pptx|.DOC|.DOCX|.PDF|.RAR|.ZIP|.PPT|.PPTX|.xls|.jpg|.png|.gif|.JPG|.PNG|.GIF';
	#====================Video============================
	$nametype='video';

	$GLOBAL['video'][$nametype]['title_main'] = 'video';

	$GLOBAL['video'][$nametype]['title'] = 'Quản lý video';

	$GLOBAL['video'][$nametype]['full'] = false;

	$GLOBAL['video'][$nametype]['upload'] = false;

	$GLOBAL['video'][$nametype]['img'] = true;

	$GLOBAL['video'][$nametype]['img-width'] = 190;

	$GLOBAL['video'][$nametype]['img-height'] = 110;

	$GLOBAL['video'][$nametype]['img-ratio'] = 1;

	$GLOBAL['video'][$nametype]['link'] = true;

	$GLOBAL['video'][$nametype]['mota'] = false;

	$GLOBAL['video'][$nametype]['mota-ckeditor'] = true;

	$GLOBAL['video'][$nametype]['seo'] = false;

	$GLOBAL['video'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';
	#====================footer============================
	// $nametype='footer';

	// $GLOBAL['company'][$nametype]['title_main'] = 'Footer';

	// $GLOBAL['company'][$nametype]['title'] = 'Thông tin footer';

	// $GLOBAL['company'][$nametype]['full'] = false;

	// $GLOBAL['company'][$nametype]['upload'] = false;

	// $GLOBAL['company'][$nametype]['img'] = false;

	// $GLOBAL['company'][$nametype]['img-width'] = 380;

	// $GLOBAL['company'][$nametype]['img-height'] = 260;

	// $GLOBAL['company'][$nametype]['img-ratio'] = 1;

	// $GLOBAL['company'][$nametype]['link'] = true;

	// $GLOBAL['company'][$nametype]['mota'] = false;

	// $GLOBAL['company'][$nametype]['mota-ckeditor'] = true;	

	// $GLOBAL['company'][$nametype]['noidung'] = true;

	// $GLOBAL['company'][$nametype]['noidung-ckeditor'] = true;

	// $GLOBAL['company'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	#====================company============================
	$nametype='lien-he';

	$GLOBAL['company'][$nametype]['title_main'] = 'liên hệ';

	$GLOBAL['company'][$nametype]['title'] = 'Quản lý liên hệ';

	$GLOBAL['company'][$nametype]['full'] = false;

	$GLOBAL['company'][$nametype]['upload'] = false;

	$GLOBAL['company'][$nametype]['img'] = true;

	$GLOBAL['company'][$nametype]['img-width'] = 380;

	$GLOBAL['company'][$nametype]['img-height'] = 260;

	$GLOBAL['company'][$nametype]['img-ratio'] = 1;

	$GLOBAL['company'][$nametype]['link'] = true;

	$GLOBAL['company'][$nametype]['mota'] = true;

	$GLOBAL['company'][$nametype]['mota-ckeditor'] = true;	

	$GLOBAL['company'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	#====================company============================
	$nametype='desc-footer';

	$GLOBAL['company'][$nametype]['title_main'] = 'Mô tả footer';

	$GLOBAL['company'][$nametype]['title'] = 'Quản lý Mô tả footer';

	$GLOBAL['company'][$nametype]['full'] = false;

	$GLOBAL['company'][$nametype]['upload'] = false;

	$GLOBAL['company'][$nametype]['img'] = false;

	$GLOBAL['company'][$nametype]['img-width'] = 380;

	$GLOBAL['company'][$nametype]['img-height'] = 260;

	$GLOBAL['company'][$nametype]['img-ratio'] = 1;

	$GLOBAL['company'][$nametype]['link'] = false;

	$GLOBAL['company'][$nametype]['mota'] = true;

	$GLOBAL['company'][$nametype]['mota-ckeditor'] = true;	

	$GLOBAL['company'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	#====================setting============================

	$GLOBAL['setting']['tieude']=true;

	$GLOBAL['setting']['diachi']=true;

	$GLOBAL['setting']['chaychu1']=true;

	$GLOBAL['setting']['chaychu2']=true;

	$GLOBAL['setting']['slogan']=false;

	$GLOBAL['setting']['mota']=false;

	$GLOBAL['setting']['timework']=false;

	$GLOBAL['setting']['time']=false;

	$GLOBAL['setting']['email']=true;

	$GLOBAL['setting']['hotline']=true;

	$GLOBAL['setting']['hotline-advance']=true;

	$GLOBAL['setting']['dienthoai']=true;

	$GLOBAL['setting']['page_in']=true;

	$GLOBAL['setting']['page_ne']=true;

	$GLOBAL['setting']['page_sp']=true;

	$GLOBAL['setting']['postalcode']=true;

	$GLOBAL['setting']['tax_code']=false;

	$GLOBAL['setting']['blank']=false;

	$GLOBAL['setting']['denominator']=false;

	$GLOBAL['setting']['symbol']=false;

	$GLOBAL['setting']['code']=false;

	$GLOBAL['setting']['city']=true;

	$GLOBAL['setting']['district']=true;

	$GLOBAL['setting']['message']=true;

	$GLOBAL['setting']['counter']=false;

	$GLOBAL['setting']['zalo']=true;

	$GLOBAL['setting']['website']=true;

	$GLOBAL['setting']['laisuat']=false;

	$GLOBAL['setting']['phivanchuyen']=false;

	$GLOBAL['setting']['toado']=true;

	$GLOBAL['setting']['seo']=true;

	$GLOBAL['setting']['iframe']=true;

	$GLOBAL['setting']['iframe1']=true;

	$GLOBAL['setting']['fanpage']=true;

	$GLOBAL['setting']['copyright']=false;

	$GLOBAL['setting']['faceid']=true;

	$GLOBAL['setting']['toc']=true;

	$GLOBAL['setting']['block']=false;

	$GLOBAL['setting']['slider']=false;

	$GLOBAL['setting']['linksyoutube']=true;

	$GLOBAL['setting']['links']=true;

	$GLOBAL['setting']['slide']=false;

	$GLOBAL['setting']['nonecopy']=false;

	$GLOBAL['setting']['background']=true;

	$GLOBAL['setting']['watermark']=false;

	$GLOBAL['setting']['tag']=false;

	$GLOBAL['setting']['changedola']=false;

	$GLOBAL['setting']['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

?>