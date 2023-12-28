<html>
<body>
<h4>Use require when the file is required by the application.</h4>
<h4>Use include when the file is not required and application should continue when file is not found.</h4>
<h1>Welcome to my home page1 !</h1>
<?php include 'noFileExists.php';
echo "I have a $color $car.";
?>
<h1>Welcome to my home page2 !</h1>
<?php require 'noFileExists.php';
echo "I have a $color $car.";
?>



</body>
</html>