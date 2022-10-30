

<?php
//Use in multiple inheritance and it can use in any access modifier



trait madeInchina{
    public function showInfo(){
        echo "This car comes from china";
    }
}

trait madeInUsa{

    public function showmessage(){
        echo "This car came from usa";
    }
}
trait madeIngerman{
    public function showfunction(){
        echo "this car came from german";
    }
}
class Car{
    use madeInUsa,madeInchina,madeIngerman;
    public $name;

    public function __construct($name)
    {
        $this->name=$name;
    echo $this->name ."<br>";

    }

}
$car1=new Car('toyota');

$car1->showInfo();
echo "<br>";
$car1->showmessage();
echo "<br>";
$car1->showfunction();
?>