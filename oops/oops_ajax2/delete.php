<?php 
include "Opration.php";

$objopration =new Operation();


$userr=$_POST['id'];
$myDatass =$objopration->delete_data($userr);



if($myDatass){

    $returnarr= ['status'=>true, 'mgs'=>'successully deleted data..!'];
}
else {
    $returnarr= ['status'=>false, 'mgs'=>'not deleted data..!'];

}


echo json_encode($returnarr);
echo "<pre>";
print_r($returnarr);


die;

?>