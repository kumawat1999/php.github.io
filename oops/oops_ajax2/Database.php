<?php    

class Database {

        private $host="localhost";
        private $ussername="root";
        private $password="";
        private $d_b="oops";

        protected $conn="";

        public function __construct(){

            $this->conn=new mysqli($this->host,$this->ussername,$this->password,$this->d_b);

            if($this->conn){
              //  echo "data canacted successfully..!";
            }

        }


}
// $object=new Database();
// echo "<pre>";
// print_r($object);


?>