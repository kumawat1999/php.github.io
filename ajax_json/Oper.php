<?php 
include "Conn.php";

class  Oper extends Conn{
    private $array_result=[];
    private $data;

    public function getDataAll(){
        $this->data=$this->connections->query("select * from json_table");

        while($fireresult=$this->data->fetch_assoc()){
            $this->array_result[]=$fireresult;
        }
        return $this->array_result;
    }
    public function delete_data($id){
           $deletedata=$this->connections->query("delete from json_table where id=$id");
           return $deletedata;
    }
    public function add_data($query){
           $adddta=$this->connections->query($query);
           return $adddta;
    }
    public function edit_data($query){
           $edit=$this->connections->query($query);
           return $edit;
    }
}
// $obj=new Oper();
// $boject=$obj->getDataAll();
// echo "<pre>";
// print_r($boject);

?>