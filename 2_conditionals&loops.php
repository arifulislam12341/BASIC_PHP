<?php
/*Conditional statements */

//if......else
$age=15;

if($age >=18){
echo "You are 18+";
}
else{
    echo "you are under 18";
}

//Switch

$color="red";

switch($color){
    case "blue": 
        echo "this is blue";
        break;
    case "yellow": 
        echo "this is yellow";
        break;
    case "red": 
        echo "this is red";
        break;
    default:
        echo "not matched";
}
/* PHP LOOPS */

//While LOOPS
$t_counter=0;

// while($t_counter<=100){
//     print "this is ticket counter $t_counter <br>";
//     $t_counter++;
// }
//Do while
//    do {
//     print "this is ticket counter $t_counter <br>";
//     $t_counter++;
//    }while($t_counter<=100);

//For loop


// for($t_counter=0;$t_counter<=100;$t_counter++){
//     print "this is ticket counter $t_counter <br>";
// }

//foreach ---->array(key:value)....associative array

$basket=['apple','banana','clothes','book','pen'];


foreach($basket as $value){
    print "$value <br>";
}

$person=['marfy'=>23,'alif'=>22,'rokan'=>22];

foreach($person as $key =>$value){
    print "Name: $key Age: $value <br>";
}

?>