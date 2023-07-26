<?php

class Databas{
    private $host="localhost";
    private $root="root";
    private $password="";
    private $db_name="oops";


    protected $conn;

  public function __construct(){
    $this->conn=new mysqli($this->host,$this->root,$this->password,$this->db_name);

    if($this->conn){
        // echo "connection canected...!";
    }
  }
}

// $objectData=new Databas();
// echo "<pre>";
// print_r($objectData);



?>