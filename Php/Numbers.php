<?php
//to know whether it is a integer or not
$x = 9652;
var_dump(is_int($x));
echo "<br>";

//to know whether it is a float or not 
$x=86.96;
var_dump(is_float($x));
echo "<br>";
 
 //check whether the number is infinity
 $x=1.9e411;
 var_dump($x);
 echo "<br>";

 //check whether the number is NaN(Not A Number)
 $x=acos(8);
 var_dump($x); // Invalid calculation will return a NaN value
 echo "<br>";

 //check whether it is a numeric or not
 $x=56.98;
 $y=7890;
 $z="90" + 568;
 $p="hi";
 var_dump(is_numeric($x));
 echo "<br>";
var_dump(is_numeric($y));
echo "<br>";
var_dump(is_numeric($z));
echo "<br>";
var_dump(is_numeric($p));
echo "<br>";

//cast float and string to integer
$x=86.74;
$int_cast = (int)$x;
echo $int_cast;
echo "<br>";
$y="6895.75";
$int_cast = (int)$y;
echo $int_cast;
echo "<br>";

?>