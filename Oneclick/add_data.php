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



$query="insert into oneclick_ajax(name, email, mobile, city, vilege, address) VALUES ('$name','$email','$mobile','$city','$vilege','$address')";
 $resultarrays= $object->add_datas($query);

   //  print_r($resultarrays);
 if($resultarrays){
    $queryArray=['status'=>true,'msg'=>'successfully added data....!'];
 }
 else{
    $queryArray=['status'=>false,'msg'=>'not added data....!'];
    
 }
 echo json_encode($queryArray);










?>