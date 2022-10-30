<?php
class Car{
    public $name;
    public $color;

    function __construct($name,$color)
    {
        $this->name=$name;
        $this->color=$color;
    }
    function get_name(){
        return $this->name;
    }
    function get_color(){
        return $this->color;
    }
}

$firstCar=new Car('Toyota','Black');

echo $firstCar->get_name();
echo $firstCar->get_color();

?>