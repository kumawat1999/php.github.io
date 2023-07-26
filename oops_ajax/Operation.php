<?php 

include "Database.php";



class Operation extends Database{
private $result_array=[];
    public function getallData(){

        $resultsFireQuery =$this->conenction->query("select * from oops_table");

        while($resulss=$resultsFireQuery->fetch_object()){

            $this->result_array[]=$resulss;
        }
        return $this->result_array;
    }




}
// $objopration =new Operation();
// $myData =$objopration->getallData();
// echo "<pre>";
// print_r($myData);





?>