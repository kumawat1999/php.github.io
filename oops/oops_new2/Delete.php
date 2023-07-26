<?php  
include "Comm.php";
$object = new Commons();
$id= $_GET['ids'];

$query ="DELETE FROM `oops_table4` WHERE id=$id";
$delete_datas =$object->delete_datas($query);
if($delete_datas){
    header('location:index.php');
}

?>