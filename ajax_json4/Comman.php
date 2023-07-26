<?php 

include "Databases.php";

class Comman extends Databases{


    private $object_arrar=[];

    public function getAllData(){
        $fiarquery=$this->conn->query('select * from json_table3');

        while($result=$fiarquery->fetch_assoc()){
            $this->object_arrar[]=$result;
        }
        return  $this->object_arrar;

    }

    public function delete_data($id){
        $delete=$this->conn->query("DELETE FROM `json_table3` WHERE id=$id");
        return $delete;
    }
    public function add_data($query){
        $add=$this->conn->query($query);
        return $add;
    }
    public function edit_data($query){
        $edit=$this->conn->query($query);
        return $edit;
    }
}
// $object=new Comman();
// $obj=$object->getAllData();

// echo "<pre>";
// print_r($obj);








?>