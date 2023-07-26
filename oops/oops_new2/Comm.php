<?php  

include "Conn.php";
class Commons extends Connection{
    private $data;

    protected $data_arry=[];
    public function getAllData(){
        $this->data=$this->conn->query("select * from oops_table4");
        while($result= $this->data->fetch_assoc()){
            $data_arry[] = $result;
        }
        return $data_arry;

    }
    public function edit_data($query){
        $this->data = $this->conn->query($query);
        $edit_data = $this->data->fetch_object();
        return $edit_data;
    }
    public function update_datas($qus)
    {
        $update= $this->data = $this->conn->query($qus);
        return $update;
    }
    public function delete_datas($qurys)
    {
        $delete= $this->data = $this->conn->query($qurys);
        return $delete;
    }
    public function add_datas($qurys)
    {
        $add= $this->data = $this->conn->query($qurys);
        return $add;
    }


}
// $object = new Commons();
// $subject = $object->getAllData();

// print_r($subject);
// foreach($subject as $s ){
//         echo "<pre>";
//         print_r($s);
// }








?>