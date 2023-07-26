<?php
include "DbConfig.php";
class Crud extends DbConfig{

    private $data="";
    public function getDataMultiple($query){

        $this->data=$this->connection->query($query);
        
        $data_array=[];
        while($dataFetch=$this->data->fetch_assoc()){

            $data_array[]=$dataFetch;

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