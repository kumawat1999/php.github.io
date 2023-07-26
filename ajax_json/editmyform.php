<?php 

include "Oper.php";
$obj=new Oper();

$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$mobile=$_POST['mobile'];
$salary=$_POST['salary'];



$array=[];

if(empty($name)){
    $array['name']='The Name is requierd';
}
if(empty($email)){
    $array['email']='The eamil is requierd';
}
if(empty($password)){
    $array['password']='The password is requierd';
}
if(empty($mobile)){
    $array['mobile']='The mobile is requierd';
}
if(empty($salary)){
    $array['salary']='The salary is requierd';
}
$newarray=['errors'=>$array];
if(!empty($array)){
    echo json_encode($newarray);
    exit;
}

$hideen_id=$_POST['hideen_id'];
$query="update json_table set name='$name', email='$email', password='$password', mobile='$mobile', salary='$salary' where id='$hideen_id'";
$result = $obj->edit_data($query);

if($result){
    $errorarry=['status'=>true, 'msg'=>'edit successfully data'];
}
else{
    $errorarry=['status'=>false, 'msg'=>'edit not data'];

}
echo json_encode($errorarry);




?>