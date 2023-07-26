<?php 

include "Oprestion.php";

$obj=new Oprestion();

$name= $_POST['name'];
$email= $_POST['email'];
$password= $_POST['password'];
$checkvalidationarray=[];
if(empty($name)){
    $checkvalidationarray['name']='required';

}
if(empty($email)){
    $checkvalidationarray['email']='required';

}
if(empty($password)){
    $checkvalidationarray['password']='required';
 
}
$newarray=['errors'=>$checkvalidationarray];
if(!empty($checkvalidationarray)){
    echo json_encode($newarray);
    exit;
}
$querys="INSERT INTO `json_table2`(`name`, `email`, `password`) VALUES ('$name','$email','$password')";

$resultArrar =$obj->add_datas($querys);

if($resultArrar){
    $returnArray=['stetus'=>true,'msg'=>'successfully added data..!'];
}
else{
    $returnArray=['stetus'=>false,'msg'=>'not added data..!'];

}

echo json_encode($returnArray);

?>