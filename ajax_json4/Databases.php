<?php 

class Databases {

    private $host="localhost";
    private $username="root";
    private $password="";

    private $databases="oops";

    protected $conn;

    public function __construct(){
        $this->conn=new mysqli($this->host,$this->username,$this->password,$this->databases);
        if(!$this->conn){
            // echo "connect your databases successfully.";
        }   
    }


}
// $object=new Databases ();

// print_r($object);








?>