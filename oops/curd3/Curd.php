<?php    
include_once "DbConfing.php";

class Curd extends DbConfig {

    private $data="";
    public function getDataMultiple($query){

    $this->data=$this->connection->query($query);
        
    $data_array=[];
    while($fetchdata=$this->data->fetch_assoc()){

        $data_array[]=$fetchdata;
    }

    return $data_array;
}
public function getDataSingle($query){

    $this->data=$this->connection->query($query);

    $dataFetch=$this->data->fetch_object();
    return $dataFetch;
}
public function deleteUpdateInsertData($query){

    $result=$this->data=$this->connection->query($query);
    return $result;
}

}

?>