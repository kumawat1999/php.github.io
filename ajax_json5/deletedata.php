<?php   

include "comman.php";
$obj=new Comman();
$deletedata=$_POST['id'];
$delete=$obj->delete_data($deletedata);

if($delete){
    $result=['status'=>true, 'msg'=>'data deleted successfully'];
}
else{
    $result=['status'=>false, 'msg'=>'data not deleted'];
}

echo json_encode($result);




?>