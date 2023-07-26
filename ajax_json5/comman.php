<?php 

include "Database.php";

class Comman extends Database{


    protected $objarray=[];

    public function getAlldata(){

        $query = $this->conn->query("select * from ajax_json5");
        while($result=$query->fetch_assoc()){
            $this->objarray[]=$result;
        }
        return $this->objarray;
    }
    public function add_data($add){
        $edd_data = $this->conn->query($add);
            return $edd_data;
        }
    public function delete_data($add){
        $delete_data = $this->conn->query("delete from ajax_json5 where id=$add");
            return $delete_data;
        }
    }

// $obj=new Comman();
// $object=$obj->getAlldata();
// echo "<pre>";
// print_r($object);


?>