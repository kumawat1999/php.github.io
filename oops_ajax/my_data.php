<?php  
include "Operations.php";

$objOperations = new Operations();
$myData=$objOperations->getAllData();

// echo "<pre>";
// print_r($myData);

echo json_encode($myData);

die;


?>