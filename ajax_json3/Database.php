<?php 

class Database {
    private $host="localhost";

    private $root="root";

    private $password="";
    private $db_name="oops";


    protected $connection;

    public function __construct(){
        $this->connection=new mysqli($this->host,$this->root,$this->password,$this->db_name);

        if($this->connection){
            // echo "connection conected successfully...!";
        }
        else{
            // echo "not conected databases...!";
        }
    }
}

// $object= new Database();

// echo "<pre>";
// print_r($object);



?>