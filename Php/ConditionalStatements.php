<?php
// If statement
$x=5;
$y=6;
if($x<$y){

    echo "Hi ,This is right";
    echo "<br>";
}
 //or
 $t = date("H");
  if($t<20){
    echo "have a nice day";
    echo "<br>";
  }

  //If....else statement
  $t = date("H");
  if ($t<20){
    echo "have a nice day";
     echo "<br>";
    
  }
  else{
    echo "Have a Sweet Dream";
    echo "<br>";
  }

  //if....elseif....else statement

  $t = date("H");
  if($t<10){
    echo "Good Moring";
    echo "<br>";
  }
  elseif($t<20){
    echo "Good evening";
    echo "<br>";

  }
  else {
    echo "Good Night";
    echo "<br>";
  }
?>