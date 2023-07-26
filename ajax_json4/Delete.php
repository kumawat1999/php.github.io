<?php 



include "Comman.php";
$object=new Comman();


$id=$_POST['id'];

$obj=$object->delete_data($id);



if($obj){

    $resultaree=['status'=>true, 'msg'=>'Your data deleted successfully....!'];
}
else{
    $resultaree=['status'=>false, 'msg'=>'Your data not deleted....!'];

}
echo json_encode($resultaree);






?>