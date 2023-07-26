<?php 
include "Oper.php";

$obj=new Oper();
$boject=$obj->getDataAll();

echo json_encode($boject);
// print_r($boject);


?>