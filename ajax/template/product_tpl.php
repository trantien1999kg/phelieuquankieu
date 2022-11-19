<?php 
include_once "class_paging_ajax.php";
$list = isset($_REQUEST['list']) ? $_REQUEST['list'] : 0;
$cat = isset($_REQUEST['cat']) ? $_REQUEST['cat'] : 0;
$type = isset($_REQUEST['type']) ? $_REQUEST['type'] : 'san-pham';
$page = isset($_REQUEST['page']) ? $_REQUEST['page'] : 1;
$perpage = isset($_REQUEST['perpage']) ? $_REQUEST['perpage'] : 8;
$cond = [];
$tab = $_POST['tab'];
$idcat = "";
$idlist = "";
if($_REQUEST["list"]>0){
  $idlist = " and id_list= ?";
  array_push($cond,$_REQUEST["list"]);
}
if($_REQUEST["cat"]>0){
  $idcat = " and id_cat = ? ";
  array_push($cond,$_REQUEST["cat"]);
}
array_push($cond,$type);

$str_van = "select *,tenkhongdau_$lang as tenkhongdau from #_baiviet where hienthi=1 ".$idlist." ".$idcat." and type= ? order by stt asc,id desc";

$paging = new paging_ajax();

$paging->class_pagination = "pagination";

$paging->class_active = "active";

$paging->class_inactive = "inactive";

$paging->class_go_button = "go_button";

$paging->class_text_total = "total";

$paging->class_txt_goto = "txt_go_button";

$paging->cond = $cond;

$paging->per_page = $perpage;   

$sotrang=$perpage;

$paging->page = $page;

$paging->text_sql = $str_van;

$result_pag_data = $paging->GetResult();


?>
<?php if($result_pag_data){?>
<div class="row">
    <?php foreach ($result_pag_data as $key => $value) {?>
    <div class="item d-flex col-3 l-3 m-3 c-6 mb30">
        <div class="item__products border-gradient">
            <div class="thumb__products tf-hover o-hidden">
                <a href="<?=$value["type"]?>/<?=$value["tenkhongdau"]?>" title="<?=$value["ten_$lang"]?>">
                    <img width="255" height="245" src="<?=_upload_baiviet_l.$value["photo"]?>"
                        alt="<?=$value["ten_$lang"]?>" <?=$func->errorImg()?> />
                </a>
            </div>
            <div class="desc__products pt15 pb15 t-center">
                <h3 class="line-2">
                    <a href="<?=$value["type"]?>/<?=$value["tenkhongdau"]?>" title="<?=$value["ten_$lang"]?>">
                        <?=$value["ten_$lang"]?>
                    </a>
                </h3>
                <div class="price-product">
                    <span><?=($value['giaban']!=0) ?  $func->changeMoney($value['giaban'],$lang) : 'Liên hệ'?></span>
                </div>
            </div>
        </div>
    </div>
    <?php }?>
</div>
<div class="paging mb20 d-flex justify-content-center">
    <?= $paging->Load()?>
</div>
<?php }else{?>
<div class="mb20 d-flex justify-content-center">
    <p>Sản phẩm đang cập nhật</p>
</div>
<?php }?>
<script>
$(function() {
    $('<?= $tab?> .pagination li.active').click(function() {
        var pager = $(this).attr('p');
        _FRAMEWORK.loadTab("ajax/loadTab.php", {
            com: 'product',
            list: <?= $list?>,
            cat: <?=$cat?>,
            type: '<?=$type?>',
            page: pager,
            perpage: <?= $perpage?>,
            tab: '<?= $tab ?>'
        }, '<?=$tab ?>');
        $('body,html').animate({ scrollTop: $('<?= $tab?>').offset().top - 250 }, 500);
    })
})
</script>