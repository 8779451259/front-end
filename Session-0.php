<?php
session_start();
$_SESSION['name']='madhura';
$_SESSION['roll no']='26';
$_SESSION['div']='A';
echo($_SESSION['name']);
echo($_SESSION['roll no']);
unset($_SESSION['roll no']);
unset($_SESSION['name']);
echo($_SESSION['div']);
unset($_SESSION['div']);
?>
	 