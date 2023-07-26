<?php
 



$name = isset($_POST['name'])? $_POST['name'] :"";
$email = isset($_POST['email'])? $_POST['email'] :"";
$Mobile = isset($_POST['Mobile'])? $_POST['Mobile'] :"";
$password = isset($_POST['password'])? $_POST['password'] :"";
$Gender = isset($_POST['Gender'])? $_POST['Gender'] :"";
$Checkbox = isset($_POST['Checkbox'])? $_POST['Checkbox'] :"";

if($name ==''){
    echo json_encode(['status'=> false, 'massage'=>'name is required','type'=>'name']);
    
exit();
}
if($email ==''){
    echo json_encode(['status'=> false, 'massage'=>'email is required','type'=>'email']);
    
exit();
}
if($Mobile ==''){
    echo json_encode(['status'=> false, 'massage'=>'Mobile is required','type'=>'Mobile']);
    
exit();
}
if($password ==''){
    echo json_encode(['status'=> false, 'massage'=>'password is required','type'=>'password']);
    
exit();
}
if($Gender ==''){
    echo json_encode(['status'=>false, 'massage'=>'Gender is required','type'=>'Gender']);
    
exit();
}
if($Checkbox ==''){
    echo json_encode(['status'=>false, 'massage'=>'Checkbox is required','type'=>'Checkbox']);
exit();
}
else {
    echo json_encode(['status'=>false, 'massage'=>'','type'=>'Checkbox']);
exit();
}


echo "<pre>";
print_r($_REQUEST);
die;
?>