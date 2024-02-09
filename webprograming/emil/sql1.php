<html>
<head>
<title></title>
</head>
<body>
<form method ="post" action="">
<input type="textfeild" id="n1" name="q1">
<input type="submit" value="submit" name="sub">
</form>
</body>
</html>
<?php

if(isset($_POST["sub"]))
{
 $n1=$_POST["q1"];
}
	// Creating a connection
	$cc = new mysqli("localhost", "root", "");
	// Check connection
	if ($cc->connect_error) {
		die("Connection failed: " . $cc->connect_error);
	}
	// Creating a database named newDB
	$s = "CREATE DATABASE $n1";
	if ($cc->query($s) === TRUE) {
		echo "Database created successfully with the name $n1";
	} else {
		echo "Error creating database: " . $cc->error;
	}
	// closing connection
	$cc->close();
?>

