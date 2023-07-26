<?php  
include "OneDatabase.php";


class Comman  extends OneDatabase{

    private $dataarray=[];

   public function getAlldata(){

        $firequery=$this->conn->query("select * from oneclick_ajax");
       
        while($result=$firequery->fetch_object()){
            $this->dataarray[]=$result;
        }
        return  $this->dataarray;

   }

   public function add_datas($querys){
    $insertdata= $this->conn->query($querys);

    return $insertdata;
}
   public function updat_data($querys){
    $updat_data= $this->conn->query($querys);

    return $updat_data;
}
   public function delete_data($id){
    $delete= $this->conn->query("DELETE FROM `oneclick_ajax` WHERE id=$id");

    return $delete;
}
}



// $object=new Comman();
// $obj=$object->getAlldata();
// echo "<pre>";
// print_r($obj);



?>