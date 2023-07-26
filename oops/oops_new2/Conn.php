<?php 

abstract class Connection{

    private $host="localhost";
    private $root="root";
    private $password="";
    private $dataBaseName="oops";

    protected $conn;

    public function __construct(){
        $this->conn=new mysqli($this->host,$this->root,$this->password,$this->dataBaseName);
        if(!$this->conn) {
            // echo "error";
        }
        else{
            // echo "ok canect db..";
        }

    }

}
// $object =new Connection();
?>