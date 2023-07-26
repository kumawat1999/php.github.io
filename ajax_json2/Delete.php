<?php 
include "Oprestion.php";
$obj=new Oprestion();
$id=$_POST['id'];
$boject=$obj->delete_data($id);


if($boject){

    $aredelete=['status'=>true, 'msg'=>'deleted successfully data...!'];

}
else{
    $aredelete=['status'=>false, 'msg'=>'deleted successfully data...!'];

}
echo json_encode($aredelete);
die;

?>