<html>
<body>

Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?><br>

<!--
$_GET is an array of variables passed to the current script via the URL parameters.

$_POST is an array of variables passed to the current script via the HTTP POST method.

Information sent from a form with the GET method is visible to everyone (all variable names and values are displayed in the URL).GET also has limits on the amount of information to send. The limitation is about 2000 characters.
Information sent from a form with the POST method is invisible to others (all names/values are embedded within the body of the HTTP request) and has no limits on the amount of information to send.
-->

</body>
</html>