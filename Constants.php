<?php

//constant are never change in program 
define ("LCO","Learn Code Online");
echo LCO;
define("php","Coding Language");
echo "<br>PHP is ".php;

//Currency Convertor

define("onedollar",70);

$tendollar=10;

$conversion=$tendollar*onedollar;
echo "<br> 10 dollar is equal to:<b>".$conversion;

?>