<?php

include "Database.php";
class Operations extends Database{

    private $result_array=[];
    public function getAllData(){
        $resultsFireQuery=$this->connection->query("select * from opps_cruds");

        while($results=$resultsFireQuery->fetch_object()){
            $this->result_array[]=$results;
        }   
        return $this->result_array;
    }

    public function add_data($qrys){
        $addatas=$this->connection->query($qrys);
        return $addatas;
    }
    public function delete_data($id){
        $resultdatadelete=$this->connection->query("delete from opps_cruds where id=$id");
        return $resultdatadelete;
    }
    public function edit_data($id){
        $editdata =$this->connection->query($id);
        return $editdata;
    }

}

// $objOperations = new Operations();
// $myData=$objOperations->getAllData();

// echo "<pre>";
// print_r($myData);
?>