<?php 
abstract class DbConfig{

    private $_host="localhost";
    private $_username="root";
    private $_password="";
    private $_db_name="oops";

    protected $connection="";
    public function __construct(){

        $this->connection=new mysqli($this->_host,$this->_username,$this->_password,$this->_db_name);

        if(!$this->connection){

            echo "error in connection";
        }
       
       
    }

}


?>