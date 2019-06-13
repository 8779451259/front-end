<?php
session_start();
if(isset($_POST['Submit']))
{
$_SESSION['name']=$_POST['name'];
echo $_SESSION('name');
$_SESSION['email']=$_POST['email'];
echo $_SESSION('email');
haeder('Location:Session-0.php');
}
?>
<DOCTYPE! html>
<html>
<head>
	<title>
		form
	</title>
</head>
<body>
	
<form method="post" ,action="form.php">
		
		<br><input type="text" name="name"required/placeholder="name"></br>
		<br><input type="text" name="email"required/placeholder="email"></br>
		<br><input type="Submit" name="Submit"></br>
	</form>
	
	<body>
	</head>
	</html>