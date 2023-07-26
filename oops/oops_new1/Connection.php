<?php  
 
abstract class  Connection {
    private $host="localhost";
    private $rootname="root";
    private $password="";
    private $dataBName="oops";

    protected $connss;

    public function __construct(){
        $this->connss=new mysqli($this->host,$this->rootname,$this->password,$this->dataBName);
        if(!$this->connss)
        {echo "error";}
        // else{
        //     echo "ok";
        // }
    }
}

// $object=new Connection(); 







?>