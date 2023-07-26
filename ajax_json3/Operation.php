<?php  

include "Database.php";
class Oprestion extends Database {

    private $object_array=[];

    private $data;

    public function getAllData(){


        $this->data=$this->connection->query("select * from json_table3");

        while($fireresult=$this->data->fetch_assoc()){
            $this->object_array[]=$fireresult;
            
        }
        return $this->object_array;  

    }
    public function add_data($querys){
       $addMydata=$this->connection->query($querys);

        return $addMydata;
    }
    public function delete_data($id){
       $deletedata=$this->connection->query("delete from json_table3 where id=$id");

        return $deletedata;
    }
    public function edit_data($user){
       $adit_data=$this->connection->query($user);

        return $adit_data;
    }
    }

// $object=new Oprestion();

// $obj=$object->getAllData();

// echo "<pre>";
// print_r($obj);





?>