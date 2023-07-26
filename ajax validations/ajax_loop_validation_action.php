<?php
 



$name = isset($_POST['name'])? $_POST['name'] :"";
$email = isset($_POST['email'])? $_POST['email'] :"";
$Mobile = isset($_POST['Mobile'])? $_POST['Mobile'] :"";
$password = isset($_POST['password'])? $_POST['password'] :"";
$Gender = isset($_POST['Gender'])? $_POST['Gender'] :"";
$Checkbox = isset($_POST['Checkbox'])? $_POST['Checkbox'] :"";
$city = isset($_POST['city'])? $_POST['city'] :"";

$data=[];
if($name ==''){
    $data['name'] ='Please Enter name....!';
}
if($email ==''){
    $data['email'] ='Please Enter email....!';
}
if($Mobile ==''){
    $data['Mobile'] ='Please Enter Mobile....!';
}
if($password ==''){
    $data['password'] ='Please Enter password....!';
}
if($Gender ==''){
    $data['Gender'] ='Please Select Gender....!';
}
if($Checkbox ==''){
    $data['Checkbox'] ='Please Select Checkbox....!';
}
if($city ==''){
    $data['city'] ='Please Select city....!';
}





$datas['error']=$data;
echo json_encode($datas);



die;


?>