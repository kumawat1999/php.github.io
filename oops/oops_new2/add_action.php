<?php  
include "Comm.php";
    $object = new Commons();
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$mobile = $_REQUEST['mobile'];
$city = $_REQUEST['city'];
// $gender = $_REQUEST['gender'];
$vilege = $_REQUEST['vilege'];


    $query ="INSERT INTO `oops_table4`(`name`, `email`, `mobile`, `city`, `vilege`) VALUES ('$name','$email','$mobile','$city','$vilege')";
    $insert_data =$object->add_datas($query);

if($insert_data){
    header('location:index.php');
}





?>