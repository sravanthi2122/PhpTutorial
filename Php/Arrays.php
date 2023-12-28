<?php
$Family=array("Father","Mother","Sister","Brother");
echo count($Family)."<br>";

//indexed array and loop
$Cars = array("BMW","Benz","Ford");
echo "I Like ".$Cars[0]."<br>";
$arrlength = count($Cars);
for($x=0;$x<$arrlength;$x++){
    echo $Cars[$x]."<br>";
}

//Associative Array
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

echo "Peter is " . $age['Peter'] . " years old.";
foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}

//MultidimensionalArrays
$Numbers = array(
   array("one","30","Sravanthi"),
   array("Two","29","Prudhvi")
);
echo $Numbers[0][0].", ".$Numbers[0][1].",  ".$Numbers[0][2].".<br>";
echo $Numbers[1][0].", ".$Numbers[1][1].",  ".$Numbers[1][2].".<br>";

for ($row = 0; $row < 2; $row++) {
  echo "<p><b>Row number $row</b></p>";
  echo "<ul>";
  for ($col = 0; $col < 3; $col++) {
    echo "<li>".$Numbers[$row][$col]."</li>";
  }
  echo "</ul>";
}

//Sorting Arrays
//sorts the elements of the $Numbers array in ascending alphabetical order

$Numbers = array("One","Two","Three");
sort($Numbers);

$arrlength = count($Numbers);
for($x=0;$x<$arrlength;$x++){
  echo $Numbers[$x];
  echo"<br>";

}

//sorts the elements of the $Numbers array in descending alphabetical order
$Numbers = array("One","Two","Three");
rsort($Numbers);

$arrlength = count($Numbers);
for($x=0;$x<$arrlength;$x++){
  echo $Numbers[$x];
  echo"<br>";
}

//sorts an associative array in ascending order, according to the value
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
asort($age);

foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}


//sorts an associative array in ascending order, according to the key
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
ksort($age);

foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}

//sorts an associative array in descending order, according to the value

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
arsort($age);

foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}

// sorts an associative array in descending order, according to the key
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
krsort($age);

foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}

?>