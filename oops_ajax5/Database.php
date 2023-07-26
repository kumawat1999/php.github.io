<?php
class Database{
 private $_host="localhost";
 private $_username="root";
 private $_password="";
 private $_dbname="oops";
 protected $connection="";
 public function __construct(){//php magic function

    $this->connection=new mysqli($this->_host,$this->_username,$this->_password,$this->_dbname);

    if($this->connection){
        // echo "connection established";
    }
    else{
        // echo "error in connection established";
    }
 }
}
// $objConn=new Database();
// echo "<pre>";
// print_r($objConn);

?>