<?php 
include "Opration.php";
$objopration =new Operation();
$myData =$objopration->getAllData();
// echo "<pre>";
// print_r($myData);

echo json_encode($myData);
die;

// $mytabaleprint="";

// $num=1;
 
// foreach($myData as $myDatass){
//     $mytabaleprint.="<tr>";
//     $mytabaleprint.="<td>".$num."</td>";
//     $mytabaleprint.="<td>".$myDatass->name."</td>";
//     $mytabaleprint.="<td>".$myDatass->email."</td>";
//     $mytabaleprint.="<td>".$myDatass->password."</td>";
//     $mytabaleprint.="<td>".$myDatass->mobile."</td>";
//     $mytabaleprint.="<td></td>";

//     $mytabaleprint.="</tr>";
//     $num++;

// }

// echo $mytabaleprint;






?>