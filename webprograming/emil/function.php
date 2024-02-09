<?php
 function R()
 {
 $n="this";
 return $n;
 }
 function ref(&$num)
 {
 echo $num,"refrence","<br>";
 $num="now";
 }
 function val($n)
 {
 echo $n,"value","<br>";
 }
$n=R();
val($n);
ref($n);
val($n);
?>
