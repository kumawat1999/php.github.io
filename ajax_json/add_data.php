<?php   
include "Oper.php";
$obj=new Oper();

$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$mobile=$_POST['mobile'];
$salary=$_POST['salary'];
$validationerror=[];

if(empty($name)){
    $validationerror['name']='name is requird';
}
if(empty($email)){
    $validationerror['email']='email is requird';
}
if(empty($password)){
    $validationerror['password']='password is requird';
}if(empty($mobile)){
    $validationerror['mobile']='mobile is requird';
}
if(empty($salary)){
    $validationerror['salary']='salary is requird';
}
$newarry=['errors'=>$validationerror];
    if(!empty($validationerror)){
        echo json_encode($newarry);
        exit;
    }


$queryy="INSERT INTO json_table (`name`, `email`, `password`, `mobile`, `salary`) VALUES ('$name','$email', '$password', '$mobile', '$salary')";

    $result=$obj->add_data($queryy);
    if($result){
        $array=['status'=>true,'msg'=>'data successfully added..'];
    }
    else{
        $array=['status'=>false,'msg'=>'data not added..'];
    }
    echo json_encode($array);
?>