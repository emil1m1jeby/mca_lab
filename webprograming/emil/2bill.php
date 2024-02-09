
<html>
<body>
<style>
   c{
   margin-top:20;
   width:30;
   }
   input[type="button"]{
   width:50px;
   height:20px;
   }
   d{
   margin-left:500;
   width:30;
   }
    w{
    margin-top:50
   margin-left:500;
   width:30;
   }
  </style>
<center>
<form  method="POST" action="">
<div class=w>
<table border=1  hight="100%">
<tr>
<td>s.no</td><td>name</td><td>quantity</td>
</tr>
<tr>
  <td>1</td>
  <td><input type="text" name="name1"  ></td>
  <td><input type="number" name="q1" placeholder="0" ></td>
</tr>
<tr>
  <td>2</td> 
  <td><input type="text" name="name2"></td>
  <td><input type="number"name="q2" placeholder="0" ></td>

</tr>
<tr>
  <td>3</td>
  <td><input type="text" name="name3"></td>
  <td><input type="number" name="q3" placeholder="0"></td>

</tr>
</table>
</div>
<input type="submit" value="submit">
<input type="RESET" value="CLEAR" >
</form>
</center>
</boby>
</html>
<?php
$n1 = $_POST['name1'];
$n2 = $_POST['name2'];
$n3 = $_POST['name3'];
$s1 = $_POST['q1'];
$s2 = $_POST['q2'];
$s3 = $_POST['q3'];


   

echo "<center>
     <table border=1  cellspacing=2 cellpadding=20> 
    <tr> 
       <td>1</td> 
       <td>$n1</td> 
       <td>$s1</td> 
    </tr> 
    <tr>  
       <td>2</td>
        <td>$n1</td> 
        <td>$s1</td> 
    </tr> 
</table>
 </center>"; 
?>
