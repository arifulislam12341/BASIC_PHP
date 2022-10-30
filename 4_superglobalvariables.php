<?php
$x=5;
$y=6;

function add(){
    $GLOBALS['z']=$GLOBALS['x'] + $GLOBALS['y'];
}
add();
echo $z;


?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
Name <input type="text" name="fname">
<input type="submit">


</form>

<?php 

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name=$_REQUEST["fname"];
    if(empty($name)){
        echo "Name is empty";

    }
    else{

        echo $name;
    }
}


?>