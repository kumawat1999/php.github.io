<?php 

include "comman.php";
$object=new comman();
$obj=$object->getAllData();

echo json_encode($obj);




?>