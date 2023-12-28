<?php 
//function
function Message(){
    echo "Hello World";
    echo "<br>";
}
Message();

//Function Arguments
 function MyName($name){
    echo "My Name is $name";
     echo "<br>";
 }
 MyName("Sravanthi");

 // function with 2 arguments
 function MyFullName($Fname,$Lname){
    echo "My FullName is $Fname $Lname";
    echo "<br>";

 }
 MyFullName("Achanta","Sravanthi");

 // function with default argumrnt
 function DefaultValue(int$minHeight=50){
    echo "minHeight:$minHeight";
    echo "<br>";


 }
 DefaultValue();
 DefaultValue(123);
 
 // function with returing value

 function ReturnType(int$a,int$b){
    $c=$a+$b;
    return $c;
 }
 echo ReturnType(9,0)."<br>";

 //ReturnType Declaration
 function addNumbers(float $a, float $b) : float {
    return $a + $b;
  }
  echo addNumbers(1.2, 5.2)."<br>";
          //or
//You can specify a different return type, than the argument types, but make sure the return is the correct type
  function Sum(float $a, float $b) : int {
    return (int) $a + $b;
  }        
echo Sum(1.2,3.2)."<br>";

//passing argument by reference
function add_five(&$value) {
    $value += 5;
  }
  
  $num = 5;
  add_five($num);
  echo $num;


?>