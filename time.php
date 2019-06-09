<?php
date_default_timezone_set('Asia/Kolkata');
echo date('h:i:s');
 echo date('a');
 echo'<br>';
 echo date('l');
 echo $var=strtotime('tomorrow');
 echo'<br>';
 /*echo strtotime('-10Year');
 echo strtotime('+2month');
echo'<br>';
 echo strtotime('+2day');
 echo'<br>';*/
 echo date('d/m/Y h:i:s',$var);
?>