<?php 
include "Oprestion.php";

$obj=new Oprestion();
$boject=$obj->getAlldata();

// echo "<pre>";
// print_r($obj);


echo json_encode($boject);
die;



?>