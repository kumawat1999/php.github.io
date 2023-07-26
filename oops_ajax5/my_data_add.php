<?php
include "Operations.php";

$objOperations = new Operations();


$name=$_POST['name'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$password=$_POST['password'];

$checkValidationArray=[];
if(empty($name)){
    $checkValidationArray['name']='required';
}

if(empty($mobile)){
    $checkValidationArray['mobile']='required';
}

if(empty($email)){
    $checkValidationArray['email']='required';
}
if(empty($password)){
    $checkValidationArray['password']='required';
}


$newarray=['errors'=>$checkValidationArray];

if(!empty($checkValidationArray)){
    echo json_encode($newarray);
exit;
}

$qrys="insert into opps_cruds (name, mobile, email, password) values ('".$name."','".$mobile."','".$email."', '".$password."')";

$resutlInsert =$objOperations->add_data($qrys);

if($resutlInsert){
    $returnArray=['Status'=>true,'Msg'=>"successfully added...!"];
}
else{
    $returnArray=['Status'=>false,'Msg'=>"not data added...!"];

}

echo json_encode($returnArray);
// echo "<pre>";
// print_r($returnArray);                       







// $myData=$objOperations->getAllData();
// echo json_encode($myData);
// die;

// $myappenddata='';
// $srno=1;
// foreach($myData as $myDatas){

//     $myappenddata.='<tr>';
//     $myappenddata.='<td>'.$srno.'</td>';
//     $myappenddata.='<td>'.$myDatas->name.'</td>';
//     $myappenddata.='<td>'.$myDatas->mobile.'</td>';
//     $myappenddata.='<td>'.$myDatas->email.'</td>';
//     $myappenddata.='<td>'.$myDatas->password.'</td>';
//     $myappenddata.='<td>'.$myDatas->created.'</td>';
//     $myappenddata.='</tr>';
//     $srno++;
// }

// echo $myappenddata;




?>