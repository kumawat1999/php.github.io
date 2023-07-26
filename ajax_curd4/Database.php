<?php 

class Database {

    private $host="localhost";
    private $username="root";
    private $password="";
    private $Db="oops";

    protected $conn;

    public function __construct(){

        $this->conn=new mysqli($this->host,$this->username,$this->password,$this->Db);
        if(!$this->conn){
            // echo "database Connected successfully..!";
        }
    }

}
// $object=new Database();
// echo "<pre>";
// print_r($object);









?>