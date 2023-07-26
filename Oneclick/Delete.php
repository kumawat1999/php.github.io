<?php   
include "Comman.php";
$object=new Comman();

$id=$_POST['id'];

$objectss = $object->delete_data($id);



if($objectss){
    $deletedataarray=['status'=> true,'msg'=> 'Delete Data Successfully '];
}

else{
    $deletedataarray=['status'=>false,'msg'=> 'Not Delete Data'];

}

echo json_encode($deletedataarray);




?>