
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" action="forms.php">
                firstname <input type = "text" name="firstname" placeholder="firstname" ><br>
				<br>Lastname <input type = "text" name="lastname"placeholder="lastname"><br>
				<br>email <input type ="text" name="email"placeholder="email" ><br>
				<br>DOB <input type ="date" name="Date of Birth"><br>
				<br>Password <input type ="Password" name="Password"placeholder="Password"><br>
				<br><input type="SUBMIT" name="SUBMIT"><br>
			</form>
			<?php
			if(filter_has_var(INPUT_POST,'SUBMIT'))
			{
		    $email=filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
			echo $email;
			 if(filter_var($email,FILTER_VALIDATE_EMAIL))
			{
				echo 'valid';
			}
			else
				{
					echo 'invalid';
				}
			
		    }
		 
			?>

</body>
</html>