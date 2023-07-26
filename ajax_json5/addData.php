<?php 
include "comman.php";
$object=new comman();




$name=$_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];




$query ="INSERT INTO `ajax_json5`(`name`, `email`, `mobile`) VALUES ('$name', '$email', '$mobile')";
$result=$object->add_data($query);

if($result){
    $error=['status'=>true, 'msg'=>'your data successfully added'];
}
else{
    $error=['status'=>false, 'msg'=>'your data  not added'];
}
echo json_encode($error);
?>