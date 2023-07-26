<?php  
include "Comm.php";
$id =$_REQUEST['id'];
    $object = new Commons();
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];
$mobile = $_REQUEST['mobile'];
$city = $_REQUEST['city'];
// $gender = $_REQUEST['gender'];
$vilege = $_REQUEST['vilege'];


    $query ="update  oops_table4  set  name ='$name', email ='$email', password ='$password' mobile ='$mobile', city ='$city', vilege ='$vilege' where id=$id ";
    $update_data =$object->update_datas($query);

if($update_data){
    echo "<script>confirm('are you sure...!') </script>";
    echo "<script>alert('successfully updated data...!') </script>";
    header('location:index.php');
}





?>