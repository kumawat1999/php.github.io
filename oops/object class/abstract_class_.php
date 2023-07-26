
<?php 
// oops object oriented programin system
// class
// object
// inhertince
// encapsulation


// public protected private 
// default scope public
// abstract class and methods 
// polymorphism ( single name multiple tasks )





// abstract class and methods 

abstract class BaseEmployee{

  public abstract function getselary($salry);

}
class FulltineEmloyee extends BaseEmployee{

  public function getselary($salry)
  {
    return "salry for full time employee is".($salry*10);

  }

}
class ContactEmployee extends BaseEmployee{

  public function getselary($salry){
    
    return "selary for Contact employee is".($salry*50);
  }
  
}

$jobFulltime=new FulltineEmloyee();
$salryofultime=$jobFulltime->getselary(100);

$jobContract=new ContactEmployee();
$salryfContrct=$jobContract->getselary(120);

echo $salryfContrct;



// polymorphism ( single name multiple tasks )

abstract class ResingIncome{

  public abstract function getselary($salry);

}
class FulltineEmloye extends ResingIncome{

  public function getselary($salry)
  {
    return "salry for full time employee is".($salry*10);

  }

}
class FulltineEmloyer extends ResingIncome{

  public function getselary($salry){
    
    return "selary for Contact employee is".($salry*50);
  }
  
}

$jobFulltime=new FulltineEmloyee();
$salryofultime=$jobFulltime->getselary(100);

$jobContract=new ContactEmployee();
$salryfContrct=$jobContract->getselary(120);

echo $salryfContrct;

?>