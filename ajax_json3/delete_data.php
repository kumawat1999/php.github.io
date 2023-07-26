<?php  
include "Operation.php";
$object=new Oprestion();
$id=$_POST['id'];

$obj =$object->delete_data($id);


if($obj){

    $deletedataarray=['status'=>true, 'msg'=>'successfully deleted data...!'];
}
else{
    $deletedataarray=['status'=>false, 'msg'=>'not deleted data...!'];

}

echo json_encode($deletedataarray);

// echo "<pre>";
// print_r($deletedataarray);
die;


?>