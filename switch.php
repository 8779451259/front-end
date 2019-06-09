<?php
$a=20;
$b=15;
$ch=4;
switch($ch)
{
case 1:$c= $a + $b;
      echo("Addition is:$c");
      break;
case 2:$c= $a - $b;
      echo("Subtraction is:$c");
      break;
case 3:$c= $a * $b;
      echo("Multiplication is:$c");
      break;
case 4:$c= $a / $b;
      echo("Division is:$c");
      break;
default:echo "invalid ch";
        break;
}      
?>