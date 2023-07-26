<?php  

include "Comman.php";
$object=new Comman();

$name= $_POST['name'];
$email= $_POST['email'];
$mobile= $_POST['mobile'];
$city= $_POST['city'];
$vilege= $_POST['vilege'];
$address= $_POST['address'];
$resultarrays=[];


if(empty(($name))){
    $resultarrays['name']='name errors';
}
if(empty(($email))){
    $resultarrays['email']='email errors';
}

if(empty(($mobile))){
    $resultarrays['mobile']='mobile errors';
}

if(empty(($city))){
    $resultarrays['city']='city errors';
}

if(empty(($vilege))){
    $resultarrays['vilege']='vilege errors';
}

if(empty(($address))){
    $resultarrays['address']='address errors';
}
    $newarray=['errors'=>$resultarrays];
    if(!empty($resultarrays)){
    echo json_encode( $newarray);
    exit;
}


$hidan_id=$_POST['hidan_id'];



$query="update oneclick_ajax set name='$name',email='$email',mobile='$mobile',city='$city',vilege='$vilege',address='$address' where id=$hidan_id";
$resultArrar=$object->updat_data($query);

   //  print_r($resultarrays);
 if($resultArrar){
    $queryArray=['status'=>true,'msg'=>'successfully Updated data....!'];
 }
 else{
    $queryArray=['status'=>false,'msg'=>'not Updated data....!'];
    
 }
 echo json_encode($queryArray);










?>