<?php
session_start();
$_SESSION['name']='hiec;viaq';
echo($_SESSION['name']);	
session_destroy();
?>