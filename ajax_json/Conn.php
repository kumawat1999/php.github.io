<?php 
class Conn{
    private $host="localhost";
    private $username="root";
    private $password="";
    private $db_name="oops";

    protected $connections;

    public function  __construct(){
        $this->connections=new mysqli($this->host,$this->username,$this->password,$this->db_name);

        if(!$this->connections){
            // echo "connections is error";
        }
    }


}


?>