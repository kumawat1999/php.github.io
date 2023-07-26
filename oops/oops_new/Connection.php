
<?php  
 abstract class Connection {
// class variable
    private $host="localhost";
     private $username="root";
     private $password="";
     private $db_name="oops";

    protected $conn;

    public function __construct(){  // magic function 

        $this->conn=new mysqli($this->host,$this->username,$this->password,$this->db_name,);

        if(!$this->conn)echo "error in connection";
        // echo "working";
    }

}
//  $object=new Connection();



?>