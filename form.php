<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
</head>
<body>
	<form method="get" ,action="form.php">
		<br><input type="text" name="firstname"required/placeholder="firstname"></br>
		<br><input type="text" name="lastname"required/placeholder="lastname"></br>
		<br><input type="text" name="password"required/placeholder="password"></br>
		<br><input type="text" name="emailid"required/placeholder="emailid"></br>
		<br><input type="Submit"></br>
	</form>
	<?php
	if(isset($_GET['firstname'])){
		echo $_GET['firstname'];
		echo $_GET['lastname'];
		echo $_GET['password'];
		echo $_GET['emailid'];
	}
	?>
</body>
</html>