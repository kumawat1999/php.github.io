<?php 



include "Comman.php";
$object=new Comman();

$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$city=$_POST['city'];
$address=$_POST['address'];
$insertArrar=[];

if(empty($name)){
    $insertArrar['name']='Please Enter Name...';
}
if(empty($email)){
    $insertArrar['email']='Please Enter email...';
}
if(empty($password)){
    $insertArrar['password']='Please Enter password...';
}
if(empty($city)){
    $insertArrar['city']='Please Enter city...';
}
if(empty($address)){
    $insertArrar['address']='Please Enter address...';
}

$newarray=['errors'=>$insertArrar];
if(!empty($insertArrar)){
    echo json_encode($newarray);
    exit;
}


$query="INSERT INTO json_table3 (`name`, `email`, `password`, `city`, `address`) VALUES ('$name','$email','$password','$city','$address')";

$obj=$object->add_data($query);

if($obj){

    $resultaree=['status'=>true, 'msg'=>'Your data add successfully....!'];
}
else{
    $resultaree=['status'=>false, 'msg'=>'Your data not add....!'];

}
echo json_encode($resultaree);
die;





?>