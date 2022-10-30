<?php
class Cars{
  public $carName;
  public $carColor;
  private $carEngine;


  function set_name($name){
    $this->carName=$name;
}

function get_name(){
    return $this->carName;
}
function set_color($color){
$this->carColor=$color;
}
function get_color(){
    return $this->carColor;
}
}
$first_Car_object=new Cars();

$first_Car_object->set_name('Toyota');
$first_Car_object->set_color('Black');
$Name=$first_Car_object->get_name();
$Color=$first_Car_object->get_color();
echo $Name,"<br>",$Color;


?>