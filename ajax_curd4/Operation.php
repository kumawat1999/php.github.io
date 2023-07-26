<?php 

include "Database.php";

class Operation extends Database{

    private $objArray=[];

    private $data;

   public function getAllData(){
        $this->data=$this->conn->query("select * from json_table4");

        while($firquery=$this->data->fetch_assoc()){
           $this->objArray[]=$firquery;
        }
            return $this->objArray;    
    }

}
// $object=new Operation();
// $obj=$object->getAllData();

// echo "<pre>";
// print_r($obj);





?>