<?php
define ("Message","Hi how are you?");
echo Message;
echo "<br>";
//case sensitive is removed in php 8.0

//Constant Arrays
define ("Person",["Sravanthi","Sahithi","Daddy","Mummy"]);
echo Person[2];
echo "<br>";

//Constant are globals you can across the entire script
function MyMessage(){
    echo Message;
}
MyMessage();

?>