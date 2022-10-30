<?php 
$cookie_name="user";
$cookie_value="Marfy";

setcookie($cookie_name,$cookie_value,time() + 86400 * 30,"/")

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
if(!isset($_COOKIE[$cookie_name])){
echo "Cookie Name:". $cookie_name ."Is not set <br>";
}
else{
    echo "Cookie Name :" . $cookie_name . "<br>";
    echo "Cookie value :" . $cookie_value . "<br>";
}
//set the expiration date to one hour ago
setcookie("user","",time()-3600);
    ?>
</body>
</html>