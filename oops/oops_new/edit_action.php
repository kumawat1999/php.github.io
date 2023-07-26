<?php 
 include "Common.php";
 $objectData = new Common();
 
 $id = $_REQUEST['id'];
 $name= $_POST['name'];
 $email= $_POST['email'];
 $password= $_POST['password'];
 $mobile= $_POST['mobile'];
 $query ="update oops_table set name='".$name."',email='".$email."',password='".$password."',mobile='".$mobile."' where id=$id";
 $update_datas=$objectData->update_data($query);
 
 if($update_datas){
     

    echo "<script>confirm('are you sure...!') </script>";
    echo "<script>alert('successfully updated data...!') </script>";
    header('location:index.php');

}
else{

}
// print_r($update_data);



?>