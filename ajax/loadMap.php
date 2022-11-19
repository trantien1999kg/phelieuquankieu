<?php 
	require_once 'ajaxConfig.php';
	$id = (isset($_POST['id'])) ? $_POST['id'] : 0;
	if($id > 0){
		$sql="select iframe_map from #_map where id=?";
		$content = $db->rawQueryOne($sql,array($id));
	}else{
		$sql="select iframe_map from #_setting";
		$content = $db->rawQueryOne($sql);
	}
	
?>
<div id="modal-map" class="modal-frame">
    <div class="frame">
        <div class="close" onclick="_FRAMEWORK.remove('#modal-map');"><span class="times"></span></div>
        <?= htmlspecialchars_decode($content['iframe_map'])?>
    </div>
</div>