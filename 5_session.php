<?php 
session_start();


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

$_SESSION['favcolour']="red";
$_SESSION['favanimal']="cat";

echo "session variable are set <br>";

echo "Favourite colour :". $_SESSION['favcolour'] . "<br>";
echo "Favourite animal :" . $_SESSION['favanimal'] . "<br>";
print_r($_SESSION);
session_unset();
echo "<br>";
print_r($_SESSION);
session_destroy();
?>






</body>
</html>