<?php
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l");
echo "<br>";
//To get Time
echo "The time is " . date("h:i:sa");
echo "<br>";
//to get our time
date_default_timezone_set("Asia/Kolkata");
echo "The time is " . date("h:i:sa");
echo "<br>";
//strtotime() function is used to convert a human readable date string into a Unix timestamp
$d=strtotime("10:30pm April 15 2014");
echo "Created date is " . date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("tomorrow");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("next Saturday");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("+3 Months");
echo date("Y-m-d h:i:sa", $d) . "<br>";
//mktime() function returns the Unix timestamp for a date
$d=mktime(2, 22, 2, 9, 22, 1993);
echo "Created date is " . date("Y-m-d h:i:sa", $d);
echo "<br>";
?>


<?php
//the dates for the next six Saturdays
$startdate=strtotime("Saturday");
$enddate=strtotime("+6 weeks", $startdate);

while ($startdate < $enddate) {
  echo date("M d", $startdate) . "<br>";
  $startdate = strtotime("+1 week", $startdate);
}
?>

<?php
//the number of days until 4th of July
$d1=strtotime("July 04");
$d2=ceil(($d1-time())/60/60/24);
echo "There are " . $d2 ." days until 4th of July."."<br>";
?>

© 2010-<?php echo date("Y");?>