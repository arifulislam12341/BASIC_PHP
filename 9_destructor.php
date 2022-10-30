<?php

use Car as GlobalCar;

class  Car{
    public $name;
    public $color;

    function __construct($name,$color){
        $this->name=$name;
        $this->color=$color;
    }
    
    function __destruct()
    {
        echo "$this->name<br>$this->color";
    }
}
$firstcar=new Car('Toyota','Black');
?>