<?php  
 
abstract class  OneDatabase {

    private $host="localhost";  
    private $root="root";
    private $password="";
    private $dataName="oops";

    protected $conn;
    public function __construct(){
        
        $this->conn= new mysqli($this->host,$this->root,$this->password,$this->dataName);
        if($this->conn){
            // echo "databases connection cenected...!";
        }
    }
    
}

// $object=new OneDatabase();
// echo "<pre>";
// print_r($object);












?>