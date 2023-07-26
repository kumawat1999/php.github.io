<?php   
// class callback function object 

class Demo{           
    function ram(){
        return 123;
    }
}
$obj=new Demo;
echo $obj->ram();


// construct function

class Rahul{

    function  __construct(){ //magic function
        echo "construct function use in class first";

        echo  "<br>";
    }
    function raja(){
        return "construct is the best";
    }

    function __destruct(){
        echo "destruct function use in class and";
    }
}

$raj=new Rahul;

echo $raj->raja();




class amit{        // 
    function kumawat($name){
        return $name;
    }
}


$tt=new amit;

echo $tt->kumawat("kumawat boy");
echo $tt->kumawat("<br>");








class parentclaass {//etends function multipal classs ko jod ne ka kaaam karta h
    function paarent(){
        return "dada ji"."<br>";
    }
}
class childclass extends parentclaass{
    function child(){
        return "child brother"."<br>";
    }
}

$grand=new childclass;

echo  $grand->child();
echo  $grand->paarent();









?>