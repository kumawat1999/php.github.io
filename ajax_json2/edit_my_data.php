
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


$hidan_id =$_POST['hidan_id'];
// $querys="update json_table2 set name='$name',email='$email',password='$password' where id=$hidan_id')";
$wwww="update json_table2 set name='$name',email='$email',password='$password' where id=$hidan_id";
$resultArrar=$obj->edit_my_data($wwww);

if($resultArrar){
    $returnArray=['status'=>true,'msg'=>'successfully edit data..!'];
}
else{
    $returnArray=['status'=>false,'msg'=>'not edit data..!'];

}

echo json_encode($returnArray);

?>