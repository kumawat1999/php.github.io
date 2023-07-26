<?php 
include "Oper.php";
$objes=new Oper();

$user=$_POST['id'];
$bojeee=$objes->delete_data($user);

if($bojeee){
    $resulteee=['status'=>true,'message'=>'seccessfully deleted'];
}
else{

    $resulteee=['status'=>false,'message'=>'unseccessfully deleted'];
    
}


echo json_encode($resulteee);
?>