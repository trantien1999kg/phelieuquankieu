<!DOCTYPE html>
<html lang="<?=$lang?>" itemscope itemtype="http://schema.org/WebSite">

<head>
    <?php include _source.'meta.php' ?>
    <?php include _layouts."css.php"; ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="assets/js/all.js"></script>

</head>

<body itemscope itemtype="https://schema.org/WebPage">
    
    <?php include _layouts."seo.php"; ?>
    <?php include _layouts."menu_mobile.php"; ?>
    <?php include _layouts."tienich.php"; ?>
    <?php include _sections."modalSearch.php"; ?>
    
<div id="full">
    <?php include _sections."top.php"; ?>
    <?php include _sections."headerPDP.php"; ?>    
    <?php include _sections."nav.php"; ?>     
        <div class="sticky-full">

            <?php include _layouts."top_mobile.php"; ?>
            
            <?php include _sections."mmenu.php"; ?>
        </div>
        <div class="hidden-m">
            <?php if($source!='index'){?>
            <?php include _sections."breadcumb.php"; ?>
            <?php }?>
            <?php include _template.$template."_tpl.php";?>
            <?php include _sections."footer.php"; ?>
            <?php include _sections."copyRight.php"; ?>
        </div>
    </div>
    <?php include _sections."tool.php"; ?>
    <?php include _sections."goto.php"; ?>
    <?php include _sections."modalSearch.php"; ?>
    <?php include _layouts."js.php"; ?>
</body>

</html>