<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>

<?php
//PHP $_POST is a PHP super global variable which is used to collect form data after submitting an HTML form with method="post".
// $_POST is also widely used to pass variables.
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $name = $_POST['fname'];
  if (empty($name)) {
    echo "Name is empty";
  } else {
    echo $name;
  }
}


?>

<a href="Get.php?subject=PHP&web=W3schools.com">Test $GET</a>


