<?php
//The first parameter of fopen() contains the name of the file to be opened and the second parameter specifies in which mode the file should be opened.
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
//The first parameter of fread() contains the name of the file to read from and the second parameter specifies the maximum number of bytes to read.
echo fread($myfile,filesize("webdictionary.txt"));
//The fclose() requires the name of the file (or a variable that holds the filename) we want to close.
fclose($myfile);
echo "<br>";

?>
<?php
//The fgets() function is used to read a single line from a file.
$myfile = fopen("webdictionary.txt","r") or die("unable to open file");
echo fgets($myfile);

?>