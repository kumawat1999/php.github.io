<?php
 $id=$_REQUEST['id'];
 include "Crud.php";
 $objs=new Crud();
 $qrys="select * from curd_table2 where id= $id ";
 $single_update_data=$objs->getDataSingle($qrys);
  echo "<pre>";
 print_r($single_update_data);

 echo $single_update_data['name'];
  // $name= $single_update_data->name;
  // echo $name;



?>