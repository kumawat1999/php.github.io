<?php  

include "Operation.php";

$object=new Operation();
$obj=$object->getAllData();
// print_r($obj);
echo json_encode($obj);








?>