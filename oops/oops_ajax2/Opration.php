<?php  


include "Database.php";

    class Operation extends Database{

            private $array_data=[];

            public function getAllData(){

                $fiarQuery=$this->conn->query("select * from json_table");

                while($result=$fiarQuery->fetch_object()){

                    $this->array_data[]=$result;
                }
                return $this->array_data;
            }
            public function delete_data($id){
                $fiarQuery=$this->conn->query("DELETE FROM `json_table` WHERE id=$id");
                return $fiarQuery;
            }

    }
    // $objopration =new Operation();
    // $myData =$objopration->getAllData();
    // echo "<pre>";
    // print_r($myData);













?>