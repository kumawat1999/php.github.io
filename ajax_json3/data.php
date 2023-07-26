<?php  

include "Operation.php";

$object=new Oprestion();

$obj=$object->getAllData();


echo json_encode($obj);
die;










?>