<html>
<body>
<?php
$con=new mysqli("localhost","root","","S3MCA");
/*$table_qry="CREATE TABLE product(id INT PRIMARY KEY AUTO_INCREMENT,
	productname VARCHAR(30),
	producttype VARCHAR(30),
	dimension VARCHAR(30))
	price int()";
if($con->query($table_qry))
	echo "table created succssfuly";
else
	echo"error";*/
?> 
<center>
<h2> FURNITURE MANAGEMNET SYSTEM</h2>
	<form action="" method="POST">
	<table>
		<tr>
			<td>Product Name</td>
			<td><input type="text" name="n1"></td>
		</tr>
		<tr>
			<td>Product type</td>
			<td><input type="text" name="n2"></td>
		</tr>
		<tr>
			<td>Dimension</td>
			<td><input type="text" name="n3"></td>
		</tr>
		<tr>
			<td>Price</td>
			<td><input type="number" name="n4"></td>
		<input type="SUBMIT" value="SUBMIT" name="sub">
		</tr>
	</table>
</form>
<?php
	if(isset($_POST['sub'])){
	$n1=$_POST['n1'];
	$n2=$_POST['n2'];
	$n3=$_POST['n3'];
	
	$insert_qry="INSERT INTO product(productname,producttype,dimension,price) VALUES ('$n1','$n2','$n3','$n4')";
	if($con->query($insert_qry))
		echo"inserted succesfully";
	else
		echo"Error";
	}
?>

<table border=1px width="50%"style=""
<tr>
	<th>ID</th>
	<th>PoductName</th>
	<th>ProductType</th>
	<th>Dimension</th>
	<th>Price</th>
</tr>

<?php
	$display_qry="SELECT * FROM product1";
	$result=$con->query($display_qry);
	while($row=$result->fetch_assoc())
	{
?>
<tr>
	<td><?php echo $row['id'];?></td>
	<td><?php echo $row['n1'];?></td>
	<td><?php echo $row['n2'];?></td>
	<td><?php echo $row['n3'];?></td>
	<td><?php echo $row['n4'];?></td>
</tr>
<?php}
?>
</table>
</center>
</body>
</html>
			





