<html>
<body>
<center>
<form metord="post" action="">
<table>
<tr>
<td>
name:</td><td><input type="text" name="name"></br>
</td>
</tr>
<tr>
<td>
roll.no:</td><td><input type="number" nmae="roll.no">
</td>
</tr>
</table>
<input type="submit" name="sub" value="ge">
</form>
</center>
</body>
</html>
<?php

if(isset($_POST["sub"]))
{
	$n1=$_POST['name'];
	$q1=$_POST["roll.no"];
}
echo $n1;
?>
