<?php
$i=90;
if($i>75 ){
echo("Distinction");
}
elseif($i>60 && $i<75){
	echo("First Class");
}
elseif($i>45 && $i<60){
	echo("Second Class");
}
else{
	echo("Fail");
}