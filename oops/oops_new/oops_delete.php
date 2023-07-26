<?php
   $id = $_REQUEST['id'];
   include "Common.php";
   $objectData = new Common();
    $qurys = "DELETE FROM `oops_table` WHERE id=$id";
    $deletedata = $objectData->delete_datas($qurys);
    // $name = $editdatas->$id;
    // echo ($name);
    if($deletedata){
        header('location:index.php');
    }
   
    ?>