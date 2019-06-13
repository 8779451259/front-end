<?php
session_start();
$_SESSION['name']='hiec;viaq';
print_r($_SESSION['name']);
session_destroy();