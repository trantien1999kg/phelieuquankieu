<!-------------------------------CHỈ DÙNG KHI CÓ TRANG TRONG VÀ TRANG CHI TIẾT--------------------------------->
<?php
	include_once _source."defaults.php";
	// check url

	$func->checkURL();

	$func->checkUrlRedirect();

	// counter

	$online = $statistic->statusOnline();

	$counter = $statistic->getCounter();

	 /* Watermark */

    $wtmNews =$db->rawQueryOne("select hienthi, photo_$lang as photo,options from #_bannerqc where type=? limit 0,1",array('watermark'));

	/* Router */
	
    $router->setBasePath($config['website']['url']);

    $router->map('GET',array('i-web/','i-web'), function(){
		global $func, $config;
		$func->redirect($config['website']['url']."i-web/index.html");
		exit;
	});
	$router->map('GET',array('i-web','i-web'), function(){
		global $func, $config;
		$func->redirect($config['website']['url']."i-web/index.html");
		exit;
	});
    $router->map('GET|POST', '', 'index', 'home');
    $router->map('GET|POST', 'index.php', 'index', 'index');
    $router->map('GET|POST', 'sitemap.xml', 'sitemap', 'sitemap');
    $router->map('GET|POST', 'carts.js', 'carts', 'carts');
    $router->map('GET|POST', 'users.js', 'users', 'users');
    $router->map('GET|POST', '[a:com]', '', '');
    // $router->map('GET|POST', '[a:com]/[a:lang]/', '', 'lang');
    $router->map('GET|POST', '[a:com]/[a:act]', '', '');
    $router->map('GET|POST', '[a:com]/[a:catalogy]/[a:act]', '', '');

    $router->map('GET', _thumbs.'/[i:w]x[i:h]x[i:z]/[**:src]', function($w,$h,$z,$src){
        global $func;
        $func->createThumb($w,$h,$z,$src,null,_thumbs);
    },'thumb');

    $router->map('GET', _watermark.'/news/[i:w]x[i:h]x[i:z]/[**:src]', function($w,$h,$z,$src){
        global $func, $wtmNews;
        $func->createThumb($w,$h,$z,$src,$wtmNews,"news");
    },'watermark');
	
    $match = $router->match();

	if(is_array($match))
	{
		if(is_callable($match['target']))
		{
			call_user_func_array($match['target'], $match['params']); 
		}
		else
		{
			$com = (isset($match['params']['com'])) ? htmlspecialchars($match['params']['com']) : htmlspecialchars($match['target']);		
			$act = (isset($match['params']['act'])) ? htmlspecialchars($match['params']['act']) : htmlspecialchars($match['target']);
			$page = isset($_GET['page']) ? htmlspecialchars($_GET['page']) : 1;
			
		}
	}
	else
	{
		header('HTTP/1.0 404 Not Found', true, 404);
		$template = "error/404";
	}

	// rows page

	

	$itemPage=$deviceType!='phone' ? 8 : 12;

	/* SEO Lang */
    $seolang = "vi";
	
    
	$attr_com=array(

		array("tbl"=>"info","field"=>"id","source"=>"info","com"=>"gioithieu","type"=>"gioithieu"),

		array("tbl"=>"baiviet","field"=>"id","source"=>"news","com"=>"bao-chi","type"=>"bao-chi"),

		array("tbl"=>"baiviet","field"=>"id","source"=>"news","com"=>"dich-vu","type"=>"dich-vu"),

		array("tbl"=>"baiviet_list","field"=>"idl","source"=>"news","com"=>"dich-vu","type"=>"dich-vu"),

		array("tbl"=>"baiviet","field"=>"id","source"=>"news","com"=>"du-an","type"=>"du-an"),

		array("tbl"=>"baiviet_list","field"=>"idl","source"=>"news","com"=>"du-an","type"=>"du-an"),

		array("tbl"=>"baiviet","field"=>"id","source"=>"news","com"=>"du-an","type"=>"du-an"),

		array("tbl"=>"baiviet","field"=>"id","source"=>"news","com"=>"linh-vuc","type"=>"linh-vuc"),
		
		array("tbl"=>"baiviet","field"=>"id","source"=>"news","com"=>"hinh-anh-hoat-dong","type"=>"hinh-anh-hoat-dong"),

		array("tbl"=>"baiviet","field"=>"id","source"=>"news","com"=>"danh-muc","type"=>"danh-muc"),

		array("tbl"=>"baiviet","field"=>"id","source"=>"news","com"=>"khu-vuc","type"=>"khu-vuc"),

		// array("tbl"=>"baiviet","field"=>"id","source"=>"combo","com"=>"combo-sieu-chat","type"=>"combo-sieu-chat"),
		
		array("tbl"=>"baiviet","field"=>"id","source"=>"news","com"=>"tin-tuc","type"=>"tin-tuc"),

		array("tbl"=>"baiviet","field"=>"id","source"=>"news","com"=>"tuyen-dung","type"=>"tuyen-dung"),


		// array("tbl"=>"baiviet","field"=>"id","source"=>"news","com"=>"khuyen-mai","type"=>"khuyen-mai"),

		// array("tbl"=>"baiviet","field"=>"id","source"=>"news","com"=>"thong-tin-chung","type"=>"thong-tin-chung"),

		// array("tbl"=>"baiviet","field"=>"id","source"=>"news","com"=>"mua-hang-online","type"=>"mua-hang-online"),

		array("tbl"=>"baiviet","field"=>"id","source"=>"news","com"=>"chinh-sach","type"=>"chinh-sach"),

		array("tbl"=>"contact","field"=>"id","source"=>"contact","com"=>"lien-he","type"=>"lien-he")

	);
	
	
	if($com){

		foreach($attr_com as $key => $val){

			if(isset($com) && $val['tbl']!='info' && $val['tbl']!='contact' && $com==$val["com"]){

				$row = $db->rawQueryOne("select id from #_".$val['tbl']." where hienthi=1 and tenkhongdau_$lang='".$act."' and type='".$val['type']."'");

				if(!empty($row)){

					$_GET[$val['field']]=$row['id'];

					$com=$val['com'];

				}

			}

		}

	}

	switch($com){

		case 'lien-he':

			$title_seo = _contact;

			$type="lien-he";

			$seo->setSeo('type','object');

			$source = "contact";

			$template = "contacts/contact";

			break;
		// case 'san-pham':

		// 	$title_seo = 'Sản phẩm';
	
		// 	$type="san-pham";

		// 	$seo->setSeo('type',isset($_GET['id']) ? "article" : "object");
	
		// 	$source = "news";
	
		// 	$template =isset($_GET['id']) ? "products/product_detail" : "products/product";
	
		// 	break;

		case 'gioi-thieu':

			$title_seo = _gioithieu;

			$type = 'gioi-thieu';

			$seo->setSeo('type','article');

			$source = "baiviet";

			$template ="pages/baiviet";

			break;

		case 'dich-vu':

			$title_seo = 'Dịch vụ';
	
			$type="dich-vu";
		
			$seo->setSeo('type',isset($_GET['id']) ? "article" : "object");
		
			$source = "news";
		
			$template =isset($_GET['id']) ? "news/news_detail" : "news/news";
		
			break;			
		case 'bao-chi':

			$title_seo = 'Báo chí';
		
			$type="bao-chi";
			
			$seo->setSeo('type',isset($_GET['id']) ? "article" : "object");
		
			$source = "news";
			
			$template =isset($_GET['id']) ? "news/news_detail" : "news/news";
			
				break;			
		case 'du-an':

			$title_seo = 'Dự án';
		
			$type="du-an";
			
			$seo->setSeo('type',isset($_GET['id']) ? "article" : "object");
			
			$source = "news";
			
			$template =isset($_GET['id']) ? "news/news_detail" : "news/news";
			
			break;		
		case 'hinh-anh-hoat-dong':

			$title_seo = 'Hình ảnh hoạt động';
			
			$type="hinh-anh-hoat-dong";
				
			$seo->setSeo('type',isset($_GET['id']) ? "article" : "object");
				
			$source = "news";
				
			$template =isset($_GET['id']) ? "news/news_detail" : "news/news";
				
			break;	
		case 'tin-tuc':

			$title_seo = 'Tin tức';

			$type="tin-tuc";

			$seo->setSeo('type',isset($_GET['id']) ? "article" : "object");

			$source = "news";

			$template =isset($_GET['id']) ? "news/news_detail" : "news/news";

			break;
		case 'tuyen-dung':

			$title_seo = 'Tuyển Dụng';
	
			$type="tuyen-dung";
	
			$seo->setSeo('type',isset($_GET['id']) ? "article" : "object");
	
			$source = "news";
	
			$template =isset($_GET['id']) ? "news/news_detail" : "news/news";
	
			break;
		case 'danh-muc':

			$title_seo = 'Danh Mục Thu Mua';
	
			$type="danh-muc";

			$seo->setSeo('type',isset($_GET['id']) ? "article" : "object");
	
			$source = "news";
	
			$template =isset($_GET['id']) ? "news/news_detail" : "news/news";
	
			break;
		case 'khu-vuc':

			$title_seo = 'Khu Vực Thu Mua';
		
			$type="khu-vuc";
	
			$seo->setSeo('type',isset($_GET['id']) ? "article" : "object");
		
			$source = "news";
		
			$template =isset($_GET['id']) ? "news/news_detail" : "news/news";
		
			break;
		// case 'thong-tin-chung':

		// 	$title_seo = 'Thông tin chung';

		// 	$type="thong-tin-chung";

		// 	$seo->setSeo('type',isset($_GET['id']) ? "article" : "object");

		// 	$source = "news";

		// 	$template =isset($_GET['id']) ? "news/news_detail" : "news/news";

		// 	break;
		case 'chinh-sach':

			$title_seo = 'Chính sách';

			$type="chinh-sach";

			$seo->setSeo('type',isset($_GET['id']) ? "article" : "object");

			$source = "news";

			$template =isset($_GET['id']) ? "news/news_detail" : "news/news";

			break;
		case 'mua-hang-online':

			$title_seo = 'Mua hàng online';

			$type="mua-hang-online";

			$seo->setSeo('type',isset($_GET['id']) ? "article" : "object");

			$source = "news";

			$template =isset($_GET['id']) ? "news/news_detail" : "news/news";

			break;
		case 'he-thong-cua-hang':

			$title_seo = 'Hệ thống cửa hàng';

			$type="he-thong-cua-hang";

			$seo->setSeo('type',isset($_GET['id']) ? "article" : "object");

			$source = "map";

			$template =isset($_GET['id']) ? "hethong/item_detail" : "hethong/items";

			break;
		case 'video':

			$title_seo = 'Video clip';

			$type="video";

			$seo->setSeo('type',isset($_GET['id']) ? "article" : "object");

			$source = "video";

			$template = "videos/video_detail";

			break;
		case 'thu-vien-anh':

			$title_seo = 'Thư viện ảnh';

			$type="album";

			$seo->setSeo('type',isset($_GET['id']) ? "article" : "object");

			$source = "album";

			$template = "albums/thuvienanh";

			break;
		case 'carts':

			$title_seo = 'Giỏ hàng';

			$type='san-pham';

			$source="carts";

			$seo->setSeo('type',"object");

			if(!$func->isAjax()){

				$src=isset($_REQUEST['src']) ? $_REQUEST['src'] : '';

				switch($src){

					case 'gio-hang':

						if(count($_SESSION['cart'])==0){
							
							$func->transfer('Không có sản phẩm nào trong giỏ hàng!',$https_config);

						}

						$title_seo='Giỏ hàng';

						$template='carts/giohang';

						break;

					case 'thanh-toan':

						$title_seo='Thanh toán';
						
						$template='carts/checkout';

						break;

					case 'thanh-cong':

						$title_seo='ĐẶT HÀNG THÀNH CÔNG';
						
						$template='carts/complete';

						break;

					default:

						header($_SERVER['SERVER_PROTOCOL']." 404 Not Found",true,404);

						break;
				}

				$str_breadcrumbs = $breadcrumbs->getUrl('Trang chủ', array(array('alias'=>'carts?src='.$src,'name'=>$title_seo)));

			}else{

				include _source .'carts.php';

				die;

			}

			break;

		case 'tim-kiem':

			$type=" 'san-pham' ";

			$seo->setSeo('type','object');

			$source = "search";

			$template = "products/product";

			break;

		case 'sitemap':

			include_once "sitemap.php";

			exit();

			break;
		
		case 'lang':
			
			
			if(isset($_GET['locale']))

			{
				
				switch($_GET['locale']){

					case 'vi':

						$_SESSION['lang'] = 'vi';

						break;

					case 'en':

						$_SESSION['lang'] = 'en';

						break;

					case 'jp':

						$_SESSION['lang'] = 'jp';

						break;

					case 'cn':

						$_SESSION['lang'] = 'cn';

						break;

					default:

						$_SESSION['lang'] = 'vi';

						break;

				}

			}else{

				$_SESSION['lang'] = 'vi';

			}

			$func->redirect($_SERVER['HTTP_REFERER']);

			

			break;

		case '': 

		case 'index': 

			$source = 'index';

			$template = 'index';

			$seo->setSeo('type','website');

			break;

		default:

			header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found", true, 404);

			$template = "error/404";

			break;

	}

	include_once _lib."style.php";

	if($source!="") include _source.$source.".php";



?>