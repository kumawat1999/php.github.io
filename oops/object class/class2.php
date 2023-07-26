<?php  

// interface class

interface abc{
    public function getNmae($name);

}

interface xyz{
    public function getCity();

}
class Demo implements abc,xyz{
    public function getNmae($name){
        return $name;
    }
    public function getCity(){
        return "jaiur";
    }

   
}


$obj=new Demo;
echo $obj->getNmae("rakesh kumawat");


        
    
     
 













?>