<?php
include "Connection.php";
class Common extends Connection
{ //class name wil bi used in extends 

    private $data;
    private $result_array = [];
    public function getAllData()
    { // data multipal data from tables

        // file query
        $this->data = $this->conn->query("select * from oops_table");

        while ($results = $this->data->fetch_assoc()) {  // isme fetch_object bhi use kar sakte hai 

            $this->result_array[] = $results;
        }
        return $this->result_array;
    }

    // edit data 
    public function edit_data($qurys)
    {

        $this->data = $this->conn->query($qurys);
        $data = $this->data->fetch_object();
        return $data;
    }
    public function update_data($qurys)
    {

       $result= $this->data = $this->conn->query($qurys);

        return $result;
    }
    public function delete_datas($qurys)
    {

       $delete_data= $this->data = $this->conn->query($qurys);

        return $delete_data;
    }
    public function insert_action($qurys)
    {
        $inserts= $this->data = $this->conn->query($qurys);
        return $inserts;
    }
   
}
// $object = new Common();
// $data = $object->getAllData();

// foreach ($data as $datas) {
//     print_r($datas);
//     echo "<br>";
// }
?>
