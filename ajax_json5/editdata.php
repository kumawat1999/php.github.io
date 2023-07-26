<?php 
include "comman.php";
$object=new comman();




$name=$_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$hideen_id=$_POST['hideen_id'];



$query ="update ajax_json5 set name='$name',  email='$email', mobile='$mobile' where id=$hideen_id";
$result=$object->add_data($query);

if($result){
    $error=['status'=>true, 'msg'=>'your data successfully Edit '];
}
else{
    $error=['status'=>false, 'msg'=>'your data  not Edit'];
}
echo json_encode($error);
?>