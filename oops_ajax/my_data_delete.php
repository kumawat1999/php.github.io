<?php
include "Operations.php";
$objOperations=new Operations();

$id= $_POST['id'];

$myData=$objOperations->delete_data($id);



if($myData){
    $returnArray=['Status'=>true,'Msg'=>"successfully delete....!"];
}
else{
    $returnArray=['Status'=>false,'Msg'=>"data not delete...!"];
}

echo json_encode($returnArray);


die;
?>