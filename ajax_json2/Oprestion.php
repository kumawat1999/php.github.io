<?php 
include "Databas.php";
class Oprestion extends Databas{

    private $object_array=[];

    private $data;

    public function getAlldata(){
        $this->data=$this->conn->query("select * from json_table2");

        while($fireresult=$this->data->fetch_assoc()){

            $this->object_array[]=$fireresult;
        }
        return $this->object_array;
    }
    public function delete_data($id){
        $deletedata= $this->conn->query("delete from json_table2 where id= $id");

        return $deletedata;
    }
    public function add_datas($querys){
        $insertdata= $this->conn->query($querys);

        return $insertdata;
    }
    public function edit_my_data($query){
        $editmydata= $this->conn->query($query);

        return $editmydata;
    }


}

// $obj=new Oprestion();
// $boject=$obj->getAlldata();
// echo "<pre>";
// print_r($boject);



?>