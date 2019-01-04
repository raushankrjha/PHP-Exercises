<?php

$x=100;
$y=2.3;
$str="LCO";
$boolean=true;


//check Data type

echo gettype($x);
echo gettype($y);
echo gettype($boolean);
echo gettype($str)."<br>";

//check value ,data type & Size

echo "<br>".var_dump($x);
echo "<br>".var_dump($y);
echo "<br>".var_dump($str);
echo "<br>".var_dump($boolean);

//array Data Type
$name=array("Rj","nj","kk","bfjs","sdbf",88);
		
var_dump($name);

?>