<?php


    require_once 'ajaxConfig.php';

    $p = $_POST['p'];

    $id = (int)$p['id'];

    $field_show = htmlspecialchars($p['fs']);

    $fieldwhere = htmlspecialchars($p['fw']);

    $title = htmlspecialchars($p['tt']);

    $table = str_replace('/','_',$p['t']);

    

    $dm = $apiPlace->getFieldWhere($table,$id,$field_show,$fieldwhere,'id desc');

    $str = '<option value="0">'.$title.'</option>';

    for($i=0;$i<count($dm);$i++){

        if($table=='place_citys'){

            $name = trim($dm[$i]['name']);

        }else{

            $name = trim($dm[$i]['code'].' '.$dm[$i]['name']);

        }
        
        $str .= '<option value="'.$dm[$i]['id'].'">'.$name.'</option>';
    }

    echo $str;

    

?>