<?php

interface Car{
    public function intro();
}

class ChildCar implements Car{
    public $secret_engine;

    public function __construct($secret_engine)
    {
        $this->secret_engine=$secret_engine;
    }

    public function intro()
    {
        echo "this is $this->secret_engine";
    }
}

$car1=new ChildCar('BHWh21');

$car1->intro();


?>