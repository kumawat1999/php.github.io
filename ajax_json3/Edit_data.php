<?php 
include "Operation.php";
 $object=new Oprestion();



$name= $_POST['name'];
$email= $_POST['email'];
$password= $_POST['password'];
$city= $_POST['city'];
$address= $_POST['address'];
$resultarrays=[];

if(empty(($name))){
    $resultarrays['name']='name errors';
}
if(empty(($email))){
    $resultarrays['email']='email errors';
}
if(empty(($password))){
    $resultarrays['password']='password errors';
}
if(empty(($city))){
    $resultarrays['city']='city errors';
}
if(empty(($address))){
    $resultarrays['address']='address errors';
}
    $newarray=['errors'=>$resultarrays];
    if(!empty($resultarrays)){
    echo json_encode( $newarray);
    exit;
}
$ids = $_POST['hidden_id'];
$query="update json_table3 set name='$name', email='$email', password='$password', city='$city', address='$address' where id=$ids";

$resultarrays=$object->edit_data($query);

if($resultarrays ){

    $connecttable=['status'=> true, 'msg'=>'successfully edded data...!'];
}
else{
    $connecttable=['status'=> false, 'msg'=>'not edded data...!'];

}
echo json_encode($connecttable);
die;













?>