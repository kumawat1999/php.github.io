<?php  

 class Database{

    private $host="localhost";
    private $root="root";
    private $password="";
    private $db_can="oops";

    protected $conenction="";

    public function __construct(){  // php magic function 

        $this->conenction=new mysqli($this->host,$this->root,$this->password,$this->db_can);

        if($this->conenction){
        // echo "conection establist";
        }

    }
    
}

// $objConn=new Database();




?>