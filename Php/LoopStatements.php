<?php
//while loop
$x =1;
while($x<=5){
    echo "The Number is: $x <br> " ;
    $x++;
}

//do while 
$x=6;
do{
    echo "The Number is : $x <br>";
    $x++;
}while($x<=10);

//In a do...while loop the condition is tested AFTER executing the statements within the loop
//This means that the do...while loop will execute its statements at least once, even if the condition is false. See example below
$x = 6;

do {
  echo "The number is: $x <br>";
  $x++;
} while ($x <= 5);

//for loop - Loops through a block of code a specified number of times
 for($x=0;$x<=4;$x++){
    echo "Number : $x <br>";
 }
  //foreach loop - Loops through a block of code for each element in an array
 $Person = array("Person1","Person2","Person3");
 foreach($Person as $value){
    echo "$value <br>";
 }

 //foreach loop will output both the keys and the values of the given array 

 $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x => $val) {
  echo "$x = $val<br>";
}

//Break
for ($x=0;$x<5;$x++){
    if($x==3){
        break;
    }
    echo "Number :$x <br>";
}

//continue

for ($x=0;$x<5;$x++){
    if($x==3){
        continue;
    }
    echo "Number :$x <br>";
}


?>