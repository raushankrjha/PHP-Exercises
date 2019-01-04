<?php

echo "Hello World ";

echo "<br> Break Line";

echo "<b><br> Bold Word</b>";

echo "<br>Thanks for your mail <br> Here Is Your Course:";

// (this is single line comment) you can't use /n in php code for new line

#(this is single line comment) for new line you can use <br> tag or nl2br() fuction

echo  nl2br ("<br>LCO \n Bootcamp");

/*This is a comment with multiline 
 
 Multiline Comments Demo 
*/
//echo and print both are used for print line
//echo can pass multiple string separated as ( , )

$name="Raushan ";
$course="PHP";

echo "<br>".$name,$course;
/*
print "<br>". $name,$course;
show error
*/
print  $name;




?>