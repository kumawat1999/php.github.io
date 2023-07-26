<?php 
include "Comman.php";
$object=new Comman();
$obj=$object->getAllData();

// echo "<pre>";
// print_r($obj);

echo json_encode($obj);






?>