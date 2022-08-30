<?php

//Variable
$number = 10;
$name = "Sourav";
$fullName = "Sourav Dhali";

echo $number;
echo "\n";
echo "My name is : ".$name.". I read in NUBTK.\n";
echo "My name : $name";
echo "\nMy full name is {$fullName}. \n";


//Constant
define("PI",3.1416);

echo PI;
echo constant("PI");

?>