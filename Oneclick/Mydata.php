<?php   

include "Comman.php";
$object=new Comman();
$obj=$object->getAlldata();
// echo "<pre>";
// print_r($obj);

echo json_encode($obj);








?>