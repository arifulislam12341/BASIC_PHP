<?php

use Car as GlobalCar;

class Car{
    public $name;
    public $color;
    private $secret_engine;

public function __construct($name,$color)
{
    $this->name=$name;
    $this->color=$color;
 
}

public function set_name($name){
    $this->name=$name;
}
public function get_name(){
    return $this->name;
}
public function set_color($color){
    $this->name=$color;
}
public function get_color(){
    return $this->color;
}
 

// private function set_secret_engine($secret_engine){
//     $this->secret_engine=$secret_engine;
// }

}

class ChildCar extends Car{
public $secret_engine;

public function set_secret_engine($secret_engine){
    $this->secret_engine=$secret_engine;
}

public function get_secret_engine(){
    return $this->secret_engine;
}


}

$car1=new ChildCar('Toyota','Black');
$car1->set_secret_engine('HWQWYYE123');

echo $car1->get_name()."<br>".$car1->get_color()."<br>".$car1->get_secret_engine();



?>