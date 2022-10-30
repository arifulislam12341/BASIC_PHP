<?php

  abstract class  Car{
   public $name;

   public function __construct($name)
   {
    $this->name=$name;
    
   }
abstract function intro () : string;
  }

  class ChildCar extends Car{
public $made_in;

public function intro() : string{
    return "this is $this->name and this is $this->made_in";
}
public function my_method(){
    echo "Accessed";
}
  }

$car1=new ChildCar('Audi');
$car1->made_in="German";
echo $car1->my_method()."<br>". $car1->intro();

?>