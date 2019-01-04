<?php


$x=20;
$y=10;
$txt1="I Write Code ";
$txt3="at LCO";
$sum =$x+$y;
$sub =$x-$y;
$mult =$x*$y;
$div =$x/$y;
$concat=$txt1.$txt3;
echo "Sum is :$sum";
echo "<br>Subtraction is:$sub";
echo "<br>Multiplication is :$mult";
echo "<br>Divison is:$div";
echo "<br>Concatenation  of two string is $concat ";


//Assignment Operator

$a=200;
$a+=100;
$b=500;
$b-=300;
echo "<br> Sum:<b>".$a."</b>";
echo "<br>subtraction:<b>".$b;


//Comparitive Operator
$x1=20;
$x2=10;
echo $x1>$x2;//returns true
echo $x1<$x2;//returns false
echo $x1==$x2;//returns false
echo $x1!=$x2;////returns true
echo $x1>=$x2;//returns true
echo $x1<=$x2;//returns false


//Logical Operator
$math=90;
$physics=40;
if($math>=50 && $physics>=30)
{
    echo "Pass in Both";
}
else if($math>=50 || $physics>=30)
{
    echo "Pass In Any One Subject" ;
}
else
{
    echo "fail";
}


?>