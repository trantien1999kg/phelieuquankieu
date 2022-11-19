<?php
    $slider=$db->rawQuery("select ten_$lang as ten,photo_$lang photo,link from #_photo where hienthi=1 and type=? order by stt asc,id desc",array('slider'));

    $slider_mark = $db->rawQueryOne("select photo_$lang as photo from #_bannerqc where type=?",array('slider-mark'));
?>

<link rel="stylesheet" href="assets/css/vegas.css">
<script src="assets/js/vegas.js"></script>
<?php if($slider){?>
<script type="text/javascript">
$(function() {
    $('#slodo').vegas({
        overlay: false,
        // transition: 'fade',
        transitionDuration: 4000,
        delay: 10000,
        color: 'red',
        animation: 'random',
        animationDuration: 20000,
        // overlay: 'assets/vegas-master/dist/overlays/06.png',
        slides: [
            <?php for($i=0,$count_result_slider=count($slider);$i<$count_result_slider;$i++) { ?> {
                src: "<?= _upload_hinhanh_l.$slider[$i]['photo'] ?>",
                <?php /* overlaytext: "<a href='<?= $slider[$i]['link']?>' title='<?= $slider[$i]['ten']?>'><div class='niceText wow bounceInUp' data-wow-delay='1s' data-wow-duration='1s'><div class='title'><span class='mb-10'><?= $slider[$i]['ten']?></span></div></div></a>" */ ?>
            },
            <?php } ?>
        ],
        walk: function(slide, setting){
            $("#slodo-content").empty();
            $("#slodo-content").append(setting.overlaytext);
        },
    });
    $("a.next-vegas").click(function(e) {
        $('#slodo').vegas("next");
        e.preventDefault();
    })
    $("a.prev-vegas").click(function(e) {
        $('#slodo').vegas("previous");
        e.preventDefault();
    })
});
</script>

<?php }?>

<section class="p-relative slider-vegas">

    <div id="slodo">
   
    </div>
            
    <div id="slodo-content">

    </div>
</section>