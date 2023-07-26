<?php 
 include "Common.php";
 $objectData = new Common();

 $name= $_POST['name'];
 $email= $_POST['email'];
 $password= $_POST['password'];
 $mobile= $_POST['mobile'];

 $qurys ="INSERT INTO `oops_table`(`name`, `email`, `password`, `mobile`) VALUES ('$name','$email','$password','$mobile');";
 $inser_datas = $objectData->insert_action($qurys);
 if($inser_datas){
     header('location:index.php');

 }


?>