<?php  
// print_r($_REQUEST);

include "Operation.php";

$objopration =new Operation();
$myData =$objopration->getallData();
// echo "<pre>";
// print_r($myData);

$myappenddata='';
$srno=1;

foreach($myData as $datass){
  
    $myappenddata.='<tr>';
    $myappenddata.='<td> '.$srno.'</td>';
    $myappenddata.='<td> '.$datass->name.'</td>';
    $myappenddata.='<td> '.$datass->email.'</td>';
    $myappenddata.='<td> '.$datass->password.'</td>';
    $myappenddata.='<td> '.$datass->mobile.'</td>';
    $myappenddata.='<td> '.$datass->salary.'</td>';
    $myappenddata.='<td></td>';

    $myappenddata.='</tr>';
    $srno++;


}

echo  $myappenddata;
?>